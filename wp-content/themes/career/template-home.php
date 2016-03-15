<?php
/*
Template Name: Home page
*/
?>

<?php get_header(); ?>
			
	<section>
		<div class="categories small-up-1 large-up-3">
			<?php $loop = new WP_Query( array( 'order' => 'asc', 'post_type' => 'category') ); ?>
      <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
      	<a href="<?php echo get_site_url(); ?>/<?php the_field('cat_link') ?>" class="column cat-link">
					<div class="subSec">
						<div class="catWrap text-center">
							<span class="<?php the_field('cat_class');?>"></span>
							<h2><?php the_title(); ?></h2>
							<!-- <div><?php the_field('cat_desc'); ?></div> -->
						</div>
					</div>
				</a>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>
