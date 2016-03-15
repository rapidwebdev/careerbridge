<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<!-- <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'jointswp' ) ?></span> -->
  </label>

    <div class="small-11 columns no-pad">
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
    </div>
    <div class="small-1 columns no-pad">
      <input type="submit" class="search-submit srchBtn" value="" />
    </div>
</form>

