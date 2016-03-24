<?php
/*
Template Name: Web Development
*/
?>

<?php get_header('web-dev'); ?>

		<!-- Side Nav Menu -->
		<div class="sideMenu">
			<a href="#howTo">
				<span class="btnslide">
					How To 
					<span class="cb-howTo2"></span>
				</span>
			</a>
			<a href="#advice">
				<span class="btnslide">
					Advice
					<span class="cb-advice2"></span>
				</span>
			</a>
			<a href="#skills">
				<span class="btnslide">
					Skills
					<span class="cb-skills2"></span>
				</span>
			</a>
		</div>

		<!-- Main Sections -->
		<section id="howTo" class="howTo">
			<div class="secContent">
				<h1 class="text-center"><span class="cb-howTo"></span>How To</h1>
				<div class="secMainContent">
					<?php $loop = new WP_Query( array( 'order' => 'asc', 'category_name' => 'dev-howto', 'posts_per_page' => 3) ); ?>
					        <?php if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<div class="small-12 medium-4 columns article">
								<div class="articleImg" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
								<div class="imgOverlay">
									<h4 class="text-center articleHead"><?php the_title(); ?></h4>
								</div>
								</div>
								<div class="excerpt"><?php echo get_the_excerpt(); ?></div>
							</div>
						</a>
					<?php endwhile; // end of the loop. ?>
					<?php endif; ?>
				</div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/development-how-to" class="viewAllBtn">View all Articles</a>
			</div>
		</section>
		
		<section id="advice" class="advice">
			<div class="secContent">
				<h1 class="text-center"><span class="cb-advice"></span>Advice</h1>
				<div class="secMainContent">
					<?php $loop = new WP_Query( array( 'order' => 'asc', 'category_name' => 'dev-advice', 'posts_per_page' => 3) ); ?>
	        <?php if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
	        	<a href="<?php the_permalink(); ?>">
							<div class="small-12 medium-4 columns article">
								<div class="articleImg" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
								<div class="imgOverlay">
									<h4 class="text-center articleHead"><?php the_title(); ?></h4>
								</div>
								</div>
								<div class="excerpt"><?php echo get_the_excerpt(); ?></div>
							</div>
						</a>
					<?php endwhile; // end of the loop. ?>
					<?php endif; ?>
				</div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/development-advice" class="viewAllBtn">View all Articles</a>	
			</div>
		</section>
		
		<section id="skills" class="skills">
			<div class="secContent">
				<h1 class="text-center"><span class="cb-skills"></span>Skills</h1>
				<div class="secMainContent">
				<?php $loop = new WP_Query( array( 'order' => 'asc', 'category_name' => 'dev-skills', 'posts_per_page' => 3) ); ?>
        <?php if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
        	<a href="<?php the_permalink(); ?>">
						<div class="small-12 medium-4 columns article">
							<div class="articleImg" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
							<div class="imgOverlay">
								<h4 class="text-center articleHead"><?php the_title(); ?></h4>
							</div>
							</div>
							<div class="excerpt"><?php echo get_the_excerpt(); ?></div>
						</div>
					</a>
				<?php endwhile; // end of the loop. ?>
				<?php endif; ?>
				</div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/development-skills" class="viewAllBtn">View all Articles</a>	
			</div>
		</section>

<?php get_footer(); ?>