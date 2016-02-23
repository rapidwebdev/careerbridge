<?php
/*
Template Name: Home page
*/
?>

<?php get_header(); ?>
			
	<section>
		<div class="categories">
			<div class="small-up-1 large-up-3 columns">
				<?php $loop = new WP_Query( array( 'order' => 'asc', 'post_type' => 'category') ); ?>
	      <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="column">
						<div class="catWrap">
							<img src="<?php the_field('cat_img'); ?>">
							<h2><?php the_title(); ?></h2>
							<!-- <div><?php the_field('cat_desc'); ?></div> -->
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
