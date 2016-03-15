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
				<?php $loop = new WP_Query( array( 'order' => 'asc', 'category_name' => 'dev-howto') ); ?>
        <?php if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="small-12 medium-4 columns">
						<h4 class="text-center"><?php the_title(); ?></h4>
						<?php the_post_thumbnail('large'); ?>
						<p><?php the_excerpt(); ?></p>
					</div>
				<?php endwhile; // end of the loop. ?>
				<?php endif; ?>
			</div>
		</section>
		
		<section id="advice" class="advice">
			<div class="secContent">
			<h1 class="text-center"><span class="cb-advice"></span>Advice</h1>
				<?php $loop = new WP_Query( array( 'order' => 'asc', 'category_name' => 'dev-advice') ); ?>
        <?php if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="small-12 medium-4 columns">
						<h4 class="text-center"><?php the_title(); ?></h4>
						<?php the_post_thumbnail('large'); ?>
						<p><?php the_excerpt(); ?></p>
					</div>
				<?php endwhile; // end of the loop. ?>
				<?php endif; ?>
			</div>
		</section>
		
		<section id="skills" class="skills">
			<div class="secContent">
				<h1 class="text-center"><span class="cb-skills"></span>Skills</h1>
				<?php $loop = new WP_Query( array( 'order' => 'asc', 'category_name' => 'dev-skills') ); ?>
        <?php if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="small-12 medium-4 columns">
						<h4 class="text-center"><?php the_title(); ?></h4>
						<?php the_post_thumbnail('large'); ?>
						<p><?php the_excerpt(); ?></p>
					</div>
				<?php endwhile; // end of the loop. ?>
				<?php endif; ?>
			</div>
		</section>

<?php get_footer(); ?>