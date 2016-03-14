<?php
/*
Template Name: About page
*/
?>

<?php get_header(); ?>

<style>

.about{
	padding-top:25px;
}

.about h1{text-align:center;}

.about-img{
	float:left;
	width:auto;
	height:100%;
	padding-right:25px;
}

.about-content{
	float:left;
	width:auto;
}
</style>
			
	<section>
		<div class="about">
		  <h1>About Us</h1>
			<div class="small-up-1 large-up-3 columns">
				<?php $loop = new WP_Query( array( 'order' => 'asc', 'post_type' => 'creator') ); ?>
	      <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="column">
						<div class="about-img"><?php the_post_thumbnail( ); ?></div>
						<div class="about-content">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
