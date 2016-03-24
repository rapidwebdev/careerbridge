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

.about h1{
  text-align:center;
}

.float-left{
   float:left;
   padding-right:25px;
}

.minheight{
   min-height:370px;
}

</style>
			
	<section>
		<div class="about">
		  <h1>About Us</h1>
			<div class="secContent">
				<?php $loop = new WP_Query( array( 'order' => 'asc', 'category_name' => 'creators', 'posts_per_page' => 6) ); ?>
        			<?php if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="small-12 medium-4 columns minheight">
						   <div class="float-left">
							<?php the_post_thumbnail(); ?>
						   </div>
							<h4><?php the_title(); ?></h4>
							<p><?php the_content(); ?></p>
						</div>
				<?php endwhile; // end of the loop. ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>