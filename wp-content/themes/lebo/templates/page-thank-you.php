<?php
/*
Template Name: Thank You
*/

global $post; 
$parent_id = $post->post_parent;
$upload_dir = wp_upload_dir();

?>
<?php get_header('landing'); ?>

			<main class="sub-page">
				<div class="h1-wrap">
					<h1 class="hb-page-title" id="second-title"> <?php the_field ('procedure', $parent_id); ?> by Lébo</h1>
				</div>
				<section>

					<div>
						<div id="content" class="clear row">
							<div id="main" class="col-md-8 clear" role="main">
								<article id="post-<?php the_ID(); ?>" <?php post_class('clear'); ?>>
									<section class="page-content entry-content" itemprop="articleBody">
										<h2>Thank You!</h2>
										<p>Thank you for watching our informational videos on <?php the_field ('procedure', $parent_id); ?>. We hope you learned a lot about the benefits of <?php the_field ('procedure', $parent_id); ?> and the Lébo Experience. Please visit our website for more information on all our products and services!</p>
										<a class="button secondary" href="http://www.leboskincare.com">view the website</a>
									</section>
									
									<div id="awards" class="group">
										<p>Lébo Skin Care patients have the reassurance that they are receiving treatment from medically certified personnel through top of the line equipment and products.</p>
										<img src="<?= get_template_directory_uri(); ?>/assets/images/logo-15-years.png" />
										<img src="<?= $upload_dir['baseurl'];?>/2015/04/2015-ribbon.png" />
										<img src="<?= $upload_dir['baseurl'];?>/2015/04/logo-allergan.png" />
									</div>
									
									<div class="about-riff">
										<h3>Two Convenient Locations</h3>
									</div>
									
									<div id="about" class="group">
										<div>
											<div class="circle"></div>
											<p class="thank-you">We want to personally thank you for choosing Lébo Skin Care Center as your provider for your recent skin care inquiries. You will receive a call from us shortly. When you book your appointment with Tara, please pick the location most convenient for you!</p>
											<div class="lebo-location">
												<i class="fa fa-map-marker"></i>
												<div>
													<p>Powder Mill<br />Professional Center</p>
													<p>1936 Powder Mill Road<br />
														York, Pennsylvania 17402<br />
														717-747-9950 (Phone)<br />
														717-741-6617 (Fax) 
													</p>
													<p><a target="_blank" href="/lebo/directions-to-lebo-york">Get Directions</a></p>
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
													<p><a target="_blank" href="/lebo/directions-to-lebo-hanover">Get Directions</a></p>
												</div>
											</div>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</section>
			</main>
			<footer class="group lev2">
			
				<div id="bottom-form">
					<h3><a href="/lebo/">Visit our website</a></h3>
					<p>To learn more about other services and the products that Lébo Skin Care Center has to offer!</p>
				</div>
	
				<span>
					<img src="<?= get_template_directory_uri(); ?>/assets/images/lebo-logo-med.png" />
				</span>
	
				<div class="copyright">
					<p>&copy;<?= date('Y');?> Lébo Skin Care Center. All Rights Reserved.</p>
				</div>
				
			</footer>

		</section>
	</div>
</body>
</html>