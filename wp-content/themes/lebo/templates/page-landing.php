<?php
/*
Template Name: Landing
*/

$procedure_post = array(
	3155 => 194,
	3146 => 140,
	2803 => 70,
	3133 => 210,
	3140 => 158,
	3152 => null,
	3121 => 227,
	3110 => 225,
	3499 => 3557,
	3136 => 140
);

global $post; 
$parent_id = $post->post_parent;

?>
<?php get_header('landing'); ?>

			<main class="sub-page<?= ($parent_id == 2820 ? '' : ' lev2'); ?>">
				<div class="h1-wrap">
					<h1 class="hb-page-title" id="second-title"> <?php the_title(); ?></h1>
				</div>
				<section>

<?php if($parent_id == 2820): ?>
					<div class="sub-header container clear">
						<div class="background-header">
					<?php	if ( is_page( 3357 )) { ?>
 							 <div id="smart-lipo" class="owl-carousel owl-theme">
								  <div class="item"><img src="<?php the_field('slide_1'); ?>" alt="Lebo Smart Lipo"></div>
								  <div class="item"><img src="<?php the_field('slide_2'); ?>" alt="Lebo Smart Lipo"></div>
								  <div class="item"><img src="<?php the_field('slide_3'); ?>" alt="Lebo Smart Lipo"></div>
								  <div class="item"><img src="<?php the_field('slide_4'); ?>" alt="Lebo Smart Lipo"></div>
							</div>
						<?php	} else { 

							if (has_post_thumbnail()) {
								the_post_thumbnail('full');
							} }
							?>
						</div>
					</div>
					<div>
						<div id="content" class="clear row">
							<div id="main" class="col-md-8 clear" role="main">
								<article id="post-<?php the_ID(); ?>" <?php post_class('clear'); ?>>
									<section class="page-content entry-content clear group" itemprop="articleBody">
										
										<div class="landing-vid">
											<iframe width="640" height="360" src="https://www.youtube.com/embed/<?php the_field ('youtube_code')?>?color=white&theme=light&controls=1&autohide=1&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
										</div>
										<div id="top-form">
											<div class="form-wrap">
												<h2>Get your FREE<br />informational video</h2>
												<p>Learn more about the benefits of <?php the_field ('procedure'); ?> today.</p>
												<script type="text/javascript" src="<?php the_field ('aweber_link_top')?>"></script>
											</div>
										</div>
										
									</section>
									
									<div class="mid-riff">
										<h3>Benefits of <?php the_field ('procedure'); ?></h3>
									</div>
									
									<section class="page-content entry-content clear infront">
										<div class="bullets">
											<?php the_field ('bullets'); ?>
										</div>
										<div id="landing-gallery">
											<?php if(have_rows('before_and_after_gallery' , $procedure_post[$post->ID])): ?>
											<?php while(have_rows('before_and_after_gallery' , $procedure_post[$post->ID])): the_row(); 
												$bimage = get_sub_field('before_image');
												$aimage = get_sub_field('after_image');
											?>
											<div class="item">
												<div class="item-landing">
													<div class="pre-landing"><span>Before</span><img src="<?= $bimage ?>" alt="Before and After Images Lebo, York PA" /></div>
													<div class="post-landing"><span>After</span><img src="<?= $aimage ?>" alt="Before and After Images Lebo, York PA" /></div>
												</div>
											</div>
											<?php endwhile; ?>
											<?php endif; ?>
										</div>
									</section>
									
									<div id="testimonial">
										<h3>What people are saying about <?php the_field ('procedure'); ?></h3>
										<em>&ldquo;<?php the_field ('callout'); ?>&rdquo;</em>
										<p><?php the_field ('quote'); ?></p>
										<h5>&mdash; <?php the_field ('customer'); ?></h5>
									</div>
									
									<div id="call-now" class="group">
										<div>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/lebo-phone.png" />
										</div>
										<div>
											<h3>Call now and book your FREE <?php the_field ('procedure'); ?> consultation.</h3>
											<p><?php the_field ('cta_copy'); ?></p>
											<h4>Call Us Today! <br /><?php the_field ('phone'); ?></h4>
										</div>
									</div>
									
									<div class="about-riff">
										<h3>About Lébo Skin Care</h3>
									</div>
									
									<div id="about" class="group">
										<div>
											<div class="circle"></div>
											<p>In 1999, Hillary Lebouitz-Schaefer & Heather Witmer recognized the demand for a skin care facility that combined medical skin care with non-invasive procedures. Together, they created the answer with Lébo Skin Care Center.  Today, with two locations in Pennsylvania (York and Hanover), Lébo Skin Care patients have the reassurance they are receiving treatment from medically certified personnel through top of the line equipment and products.</p>
											<div class="lebo-location">
												<i class="fa fa-map-marker"></i>
												<div>
													<p>Powder Mill<br />Professional Center</p>
													<p>1936 Powder Mill Road<br />
														York, Pennsylvania 17402<br />
														717-747-9950 (Phone)<br />
														717-741-6617 (Fax) 
													</p>
													<p><a target="_blank" href="http://wecoyorkpa.com/lebo/directions-to-lebo-york">Get Directions</a></p>
												</div>
											</div>
											
											<div class="lebo-location">
												<i class="fa fa-map-marker"></i>
												<div>
													<p>Hillside Medical Center</p>
													<p>250 Fame Avenue<br />
														Suite 205<br />
														Hanover, Pennsylvania 17331<br />
														717-646-9950 (Phone)<br />
														717-637-6228 (Fax) 
													</p>
													<p><a target="_blank" href="http://wecoyorkpa.com/lebo/directions-to-lebo-hanover">Get Directions</a></p>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
<?php else: ?>
		
					<div>
						<div id="content" class="clear row">
							<div id="main" class="col-md-8 clear" role="main">
								<h2>Thank you for viewing our <?php the_field ('procedure', $parent_id); ?> informational video series</h2>		
								<div class="vid-buttons">
									<a class="button secondary active" href="#">Procedure <span>Video</span></a>
									<a class="button secondary" href="#">Q&A <span>Video Session</span></a>
								</div>
								
								<div class="vid-riff group">
									<div class="landing-vid">
										<iframe width="640" height="360" src="https://www.youtube.com/embed/<?php the_field ('youtube_code_procedure', $parent_id)?>?color=white&theme=light&controls=1&autohide=1&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="landing-vid hidden">
										<iframe width="640" height="360" src="https://www.youtube.com/embed/<?php the_field ('youtube_code_qa', $parent_id)?>?color=white&theme=light&controls=1&autohide=1&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="info">
										<h4><?php the_field ('procedure', $parent_id); ?> Procedure</h4>
										<?php the_field ('procedure_info', $parent_id); ?> 
									</div>
								</div>
								
								<h2 class="schedule">Schedule your FREE consultation today!</h2>
								
								<div id="call-now" class="group">
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/lebo-calendar.png" />
									</div>
									<div>
										<h4>Call us today at <span><?php the_field ('phone', $parent_id); ?></span> or fill out the form below.</h4>
										<script type="text/javascript" src="<?php the_field ('aweber_link_schedule', $parent_id)?>"></script>
									</div>
								</div>
								
								<div id="thoughts" class="group">
									<h5><?php the_field ('patients_name', $parent_id); ?>’s After Procedure Thoughts</h5>
									<?php the_field ('quote_procedure', $parent_id); ?>
									<p class="bold">&mdash; <?php the_field ('patients_name', $parent_id); ?></p>
								</div>

							</div>
						</div>
					</div>
				
<?php endif; ?>
				</section>
			</main>
			<footer class="group<?= ($parent_id == 2820 ? '' : ' lev2foot'); ?>">
			
<?php if($parent_id == 2820): ?>			

				<div id="bottom-form">
					<h2>Sign Up Today!</h2>
					<div class="form-wrap">
						<p>Enter your name and email to receive your <span>FREE</span> informational video:</p>
						<script type="text/javascript" src="<?php the_field ('aweber_link_bottom')?>"></script>
					</div>
				</div>
				
<?php else: ?>

				<div id="bottom-form">
					<h2>Two Convenient Locations</h2>
					<div>
						<p><span>Hanover</span><br />
						<?php the_field ('hanover_name', 'options'); ?><br />
						<?php the_field ('hanover_address_line_1', 'options'); ?><br />
						<?php the_field ('hanover_address_line_2', 'options'); ?><br />
					</div>
					<div>
						<p><span>York</span><br />
						<?php the_field ('york_name', 'options'); ?><br />
						<?php the_field ('york_address_line_1', 'options'); ?><br />
						<?php the_field ('york_address_line_2', 'options'); ?><br />
					</div>
				</div>

<?php endif; ?>
	
				<span>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/lebo-logo-med.png" />
				</span>
	
				<div class="copyright">
					<p>&copy;<?= date('Y');?> Lébo Skin Care Center. All Rights Reserved.</p>
				</div>
			</footer>

		</section>
	</div>
</body>
</html>