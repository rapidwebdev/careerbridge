<?php
/*
Template Name: Development Advice
*/
?>

<?php get_header('web-dev'); ?>

		<!-- Main Sections -->
		<div id="howTo" class="howTo">				
			<div class="small-12 columns mainWrap">
				<h1 class="text-center"><span class="cb-howTo"></span>Advice</h1>
				<?php $loop = new WP_Query( array( 'category_name' => 'dev_advice') ); ?>
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
				<?php wp_reset_query(); ?>
			</div>
		</div>

<?php get_footer('sub'); ?>