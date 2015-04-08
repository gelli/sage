<div class="entry-meta clearfix">
	<?php
	// Set up and print post meta information.
  printf( '<span class="small entry-date"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span>',
    esc_url( get_permalink() ),
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() ),
    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
	);
	?>
  <span class="small cat-links"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
  <?php if (!post_password_required() && (comments_open() || get_comments_number())) : ?>
    <span class="small comments-link"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
  <?php endif;
  edit_post_link( __( 'Edit', 'twentyfourteen' ), '&nbsp;<span class="edit-link"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> ', '</span>' );
  ?>
</div><!-- .entry-meta -->

<!-- <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
<p class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p> -->













