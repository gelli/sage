<form role="search" method="get" action="<?php  esc_url( home_url( '/' ) ) ?>">
  <div class="input-group">    
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>" required>
    <span class="input-group-btn">
      <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
    </span>
  </div>
</form>