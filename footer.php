			<section class="freeconsultation" id="freeconsultation">
				<h4>Schedule Your Free Consultation</h4>
				<div>

					<h5>Schedule your<br> <span>FREE Consultation</span></h5>
					<p>Whether you know what service you’re looking for, or if you aren’t sure what you need, you can schedule a time with one of our skin care experts to explore your possibilities.</p>
					<form action="">
<p>This text is normal.</p>
						<input type="text" name="" id="" placeholder="Full Name">
						<input type="text" name="" id="" placeholder="Phone Number">
						<input type="text" name="" id="" placeholder="Email Address">
						<input type="text" name="" id="" placeholder="Zip Code">
						<textarea name="" id="" cols="30" rows="10" placeholder="Comments or Questions"></textarea>
						<label for="">The best way to reach me is by:</label>
						<input type="checkbox" name="" id=""><span>Phone</span>
						<input type="checkbox" name="" id=""><span>Email</span>
						<input type="submit" value="submit" class="button"><br>
						<input type="checkbox" name="" id=""><span>Sign me up for updates from Lébo</span>
					</form>
				</div>
			</section>

			<footer>
				<div>

					<div class="row">
						<div class="twelve columns np">
							<div class="social">
								<ul>
									<li><a href="<?php the_field('twitter_link', 'options'); ?>" class="fa-twitter" target="_blank"></a></li>
									<li><a href="<?php the_field('facebook_link', 'options'); ?>" class="fa-facebook" target="_blank"></a></li>
									<li><a href="<?php the_field('pinterest_link', 'options'); ?>" class="fa-pinterest-p" target="_blank"></a></li>
									<li><a href="<?php the_field('youtube_link', 'options'); ?>" class="fa-youtube" target="_blank"></a></li>
								</ul>
							</div>
							<h3>Connect With Us</h3>
						</div>
					</div>
					<div class="row">
						<div class="twelve columns np">
							<div class="five columns">
								<div class="twelve columns">
									<h4>Locations</h4>
								</div>
								<div class="six mobile-two columns npr">
									<p>
										<?php the_field('york_name', 'options'); ?><br>
										<?php the_field('york_address_line_1', 'options'); ?><br>
										<?php the_field('york_address_line_2', 'options'); ?><br>
										<?php the_field('york_phone', 'options'); ?> (Phone)<br>
										<?php the_field('york_fax', 'options'); ?> (Fax) 
									</p>
									<a href="#"><strong>Get Directions</strong></a>
									
								</div>
								<div class="six mobile-two columns npr">
									<p>
										<?php the_field('hanover_name', 'options'); ?><br>
										<?php the_field('hanover_address_line_1', 'options'); ?><br>
										<?php the_field('hanover_address_line_2', 'options'); ?><br>
										<?php the_field('hanover_phone', 'options'); ?> (Phone)<br>
										<?php the_field('hanover_fax', 'options'); ?> (Fax) 
									</p>
									<a href="#"><strong>Get Directions</strong></a>
								</div>
							</div>
							<div class="seven columns npl">
								<div class="six columns">
									<h4>Quick Links</h4>
									<ul class="block-grid two-up">
								<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '', 'items_wrap' => '<li>%3$s</li>' ) ); ?>
									</ul>
								</div>
								<div class="six columns">
									<h4>Become a Lébo Insider</h4>
									<p>For all the latest skin care tips and specials.</p>
									<?php echo do_shortcode( '[contact-form-7 id="69" title="Email Sign Up"]' ); ?>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div>
					<div>
						<span>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> All Rights Reserved.</span>
						<div class="question">
							<a href="#">Have A Question?</a>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat-with-tara-2015.png" alt="">
						</div>
					</div>
				</div>
			</footer>

		</section>
	</div>

<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>




		<?php wp_footer(); ?>

	</body>
	

	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/js/source/jquery.fancybox.css?v=3.0.0" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/source/jquery.fancybox.js?v=3.0.0"></script>

	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/js/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/js/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


	<script>
	$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 450,
		fitToView	: false,
		width		: '70%',
		height		: '90%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
	</script>

</html> <!-- end page. what a ride! -->
