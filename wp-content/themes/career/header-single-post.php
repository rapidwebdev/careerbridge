<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class('singPost'); ?>>
	` <!-- Search Form -->
		<div class="searchForm large-3 medium-6 small-12 columns">
			<?php get_search_form(); ?>
		</div>

		<div class="offCanvasMenu">
		<div class="medium-12 columns offTitle">
			<div class="medium-4 columns cb-logo"></div>
			<div class="medium-8 columns site-title">MENU</div>
		</div>
			<?php joints_top_nav(); ?>
		</div>

		<div class="offCanvas">
			<div class="small-2 columns no-pad">
				<div class='menuBtn'>
			    <span class='bar1'></span>
			    <span class='bar2'></span>
			    <span class='bar3'></span>
			  </div>
			</div>
				<div class="title small-8 columns no-pad text-center">
		 			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		 					<div class="medium-12 site-title"><?php bloginfo('name'); ?></div>
		 			</a>
	 			</div>
			<div class="small-2 columns no-pad search">
				<span class="mag-glass"></span>
			</div>
		</div>

		<div class="mainNav show-for-medium">
			<div class="title">
	 			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	 				<div class="medium-12">
	 					<div class="medium-4 columns cb-logo"></div>
	 					<div class="medium-8 columns site-title"><?php bloginfo('name'); ?></div>
	 				</div>
	 			</a>
 			</div>
 			<div class="mainMenu medium-8 columns text-center">
 				<div class="medium-11 columns"><?php joints_top_nav(); ?></div>
 				<div class="medium-1 columns search"><span class="mag-glass"></span></div>
 			</div>
		</div>

		<header class="singPostHeader dzsparallaxer auto-init use-loading" data-options='{ direction: "reverse", mode_scroll: "fromtop" }'  role="banner">
		<div class="tagline">
		 			<p><?php the_title(); ?></p>
		 		</div>
		 	<div class="singPostHeadImg dzsparallaxer--target" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
		 		<div id="firefly" class="firefly"></div>
		 		<div class="overlay"></div>
		 	</div>
      <div class="headinfo row"></div>
		</header>