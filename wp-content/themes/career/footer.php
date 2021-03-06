					<section class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns footerCont">
								<div class="large-8 medium-6 small-12 columns">
									<div class="small-up-2 large-up-4 columns resources">
									<h1>Resources</h1>
										<?php $loop = new WP_Query( array( 'order' => 'asc', 'post_type' => 'resource') ); ?>
							      <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
											<div class="column">
												<a href="<?php the_field('site_link'); ?>">
													<img src="<?php the_field('image'); ?>">
												</a>
												<h4><?php the_title(); ?></h4>
											</div>
										<?php endwhile; ?>
										<?php endif; ?>
										<?php wp_reset_query(); ?>
									</div>
								</div>
								<div class="large-4 medium-6 small-12 columns">
								<h1>Contact Us</h1>
									<?php echo do_shortcode("[contact-form-7 id='4' title='Contact Us']"); ?>
								</div>
							</div>

							<div class="large-12 columns copyright">
								<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						</div> <!-- end #inner-footer -->
					</section> <!-- end .footer -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->