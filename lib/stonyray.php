<?php
/** Little Blue Bag function theme function definitions */

/**
 * Add support for bootstraps navigation style
 */

// require(get_template_directory().'/inc/woocommerce/functions.php');

/**
 * Setup theme options
 */
add_action( 'after_setup_theme', function () {

    /**
     * local fix since curl isn't working properly
     * on yosemite
     */
    WP_DEBUG && add_filter( 'http_api_transports', function () {
        return array( 'streams' );
    });

    /**
     * i18n text support
     *
     * Translations can be added to the /languages/ directory.
     */
    load_theme_textdomain( 'littlebluebag', get_template_directory() . '/languages' );

    // Add RSS feed links to <head> for posts and comments.
    add_theme_support('automatic-feed-links');

    // Enable support for Post Thumbnails for image wall
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 400, 400 );
    add_image_size("image-wall", 570, 380, true);

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
});

/**
 * Write seo by yoast sitemap to robots.txt
 */
add_action('do_robotstxt', function () {
  echo "Sitemap: ".get_site_url()."/sitemap_index.xml\n";
});

add_action('pre_get_posts', function ($query) {
  if ($query->is_home() && $query->is_main_query()) {
        $query->set('posts_per_page', '5');
    }
});

/**
 * header register menus
 */
add_action( 'init', function () {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('header-right-menu', __('Right Header Menu'));
});

// Replaces the excerpt "more" text by a link
add_filter('excerpt_more', function ($more) {
    global $post;

    return
      ' ... <a class="moretag" href="'. get_permalink($post->ID) . '">'
        .__('weiterlesen', 'twentyfourteen' )
        .'</a>';
});

/**
 * Override post author drop down to also include
 * all guests. Needed for the guest author box
 *
 * @param $output
 * @return mixed|null|string
 */
add_filter('wp_dropdown_users', function ($output) {

    /**
     * Get the global post data to make sure
     * we select the right editor
     */
    global $post;

    // return if this isn't the theme author override dropdown
    if (!preg_match('/post_author_override/', $output)) return $output;

    // return if we've already replaced the list (end recursion)
    if (preg_match ('/post_author_override_replaced/', $output)) return $output;

    // replacement call to wp_dropdown_users
    $output = wp_dropdown_users(array(
        'echo' => 0,
        'name' => 'post_author_override_replaced',
        'selected' => empty($post->ID) ? $user_ID : $post->post_author,
        'include_selected' => true
    ));

    // put the original name back
    $output = preg_replace('/post_author_override_replaced/', 'post_author_override', $output);

    return $output;
});

add_action( 'customize_register', function ( $wp_customize ) {

    // Get all categories
    $categories = get_categories();
    $cats = array();
    $i = 0;


    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cats[$category->term_id] = $category->name;
    }

    $wp_customize->add_section( 'lbb_custom_frontpage_categories' , array(
      'title'      => __( 'Frontpage Custom Categories', 'littlebluebag' ),
      'priority'   => 30 + $i,
    ) );

    for ($i = 1; $i <= 5; $i++) {

        $categoryName = 'lbb_custom_cat_'.$i;
        $selectName = 'cat_'.$i.'_select_box';
        $categoryTitle = 'Custom Category #'.$i;

        $wp_customize->add_setting($categoryName, array(
          'default'        => $default
        ));

        $wp_customize->add_control( $selectName, array(
          'settings' => $categoryName,
          'label'   => $categoryTitle,
          'section'  => 'lbb_custom_frontpage_categories',
          'type'    => 'select',
          'choices' => $cats,
        ));
    }
});

/**
 * i18n enabled category names
 *
 * @param $categoryId
 * @return array|null|object|WP_Error
 */
function lbb_get_category($categoryId) {
    return function_exists ("pll_get_term")
      ? get_category(pll_get_term($categoryId))
      : get_category($categoryId);
}

/**
 * Entry pager function
 */
function grayskull_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /**	Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /**	Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<ul id="pager" class="pagination">' . "\n";

    /**	Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /**	Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /**	Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /**	Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /**	Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul>' . "\n";
}


