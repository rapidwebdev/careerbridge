<?php get_header('single-post'); ?>
			
<div id="content" class="singlePost">

	<div id="inner-content">

		<main id="main" class="row" role="main">
		
		    <div class="small-12 columns">
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    	<div class="prevBtn">
						<?php  previous_post_link( '%link', 'Previous', TRUE); ?>
					</div>
					<div class="nextBtn">
					 	<?php next_post_link( '%link', 'Next', TRUE); ?>
					</div>
		    			
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    	<div class="prevBtn">
						<?php  previous_post_link( '%link', 'Previous', TRUE); ?>
					</div>
					<div class="nextBtn">
					 	<?php next_post_link( '%link', 'Next', TRUE); ?>
					</div>
		    		
		    	<?php endwhile; else : ?>
		    			
		    	<?php get_template_part( 'parts/content', 'missing' ); ?>
		    	
		    	<?php endif; ?>
		    </div>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>