<?php
/**
 * Template Name: Job_Page
*/
?>


<?php get_header(2); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns" role="main">

		<?php
			$catIDs = get_cat_ID( $cat_name='Ux/Ui_Design' );
			$catIDs .= ',-' . get_cat_ID( $cat_name='HowTo' );
			$catIDs .= ',-' . get_cat_ID( $cat_name='Advice' );
			$catIDs .= ',-' . get_cat_ID( $cat_name='Skills' );
			query_posts("cat=$catIDs&showposts=6");
		?>

		<?php query_posts(array('category__and'=>array(1,2),'showposts'=>2,'orderby'=>title,'order'=>DESC)); ?>
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>