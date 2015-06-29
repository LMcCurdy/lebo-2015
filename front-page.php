<?php
/**
* TemaplateName:: Homepage
* ( not an actual wp template - just front-page.php )
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<main>

				<?php 
				// build out featured slider
				if( have_rows('featured_slides') ): ?>
				<section class="billboard">
					<div>
						<aside id="featured">
							
						<?php while( have_rows('featured_slides') ): the_row(); 
							// vars
							$image   = get_sub_field('slide_image');
							$link    = get_sub_field('slide_link');
						?>

							<?php if( $link ): ?>
								<div><a href="<?php echo $link; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></a></div>
							<?php else : ?>
								<div><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></div>
							<?php endif; ?>
							
						<?php endwhile; ?>

						</aside>
					</div>
				</section>
				<?php endif; ?>

				<section class="promos"> 
					<div>
						<?php /* this .invisibutton div helps click area for the main slider. See assets/js/scripts.js */ ?>
						<a class="invisibutton" id="invisibutton" href="#"></a>
						<div>
						<h1><?php the_field('section_1_title'); ?></h1>

						<?php

							// query promotions cpt
							$args = array (
								'post_type'      => 'promotions',
								'posts_per_page' => '-1',
								'post_count'     => '3',
								'order'          => 'title',
								'order'          => 'asc'
							);
							$promotions_query = new WP_Query( $args );
							
							if ( $promotions_query->have_posts() ) : ?>
								<ul class="block-grid three-up circ">
								<?php while ( $promotions_query->have_posts() ) : $promotions_query->the_post(); 

									// $imgsrc returns an array if set / if not, goes to fallback image									
									$imgsrc = get_the_post_thumbnail($post_id) != '' ? wp_get_attachment_image_src(  get_post_thumbnail_id($post->ID), $size='sq280')[0] : 'http://lorempixel.com/g/280/280/';

								?>


									<li>
										<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink();?>&p[images][0]=<?php echo $imgsrc; ?> &p[title]=<?php the_title(); ?>| By Lébo Skin Care Center, York PA&p[summary]=<?php the_title(); ?>"  onclick="window.open('http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink();?>&p[images][0]=<?php echo $imgsrc; ?> &p[title]=<?php the_title(); ?>| By Lébo Skin Care Center, York PA&p[summary]=<?php the_title(); ?>', 'newwindow', 'width=600, height=600'); return false;" class="fa-facebook"></a>

										<a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo $imgsrc; ?>&description=<?php the_title(); ?> | By Lébo Skin Care Center, York PA" class="fa-pinterest-p"></a>

										<a href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&via=LeboSkinCtr&text=Just%20redeemed%20this%20awesome%20promotion%20from%20Lebo%20Skin%20Care%20Center!%20%23LeboBeautiful" class="fa-twitter"></a>
										<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
											<img src="<?php echo $imgsrc; ?>">
											<span><?php the_field('title_line_1'); ?><br> <?php the_field('title_line_2'); ?></span>
										</a>
									</li>

								<?php endwhile; ?>
								</ul>
							<?php else: ?>
								<p>There are currently no promotions</p>
							<?php endif;
							wp_reset_postdata();

						?>	
						
						<a class="button secondary" href="<?php bloginfo( 'url' ) ?>/promotions/">View More Promotions</a>
						</div>
					</div>
				</section>
				<section class="consultations">
					<div>
						<h2><?php the_field('section_2_title'); ?></h2>
						<div class="nine columns npl end">
							<strong>Not sure which service is right for you?</strong>
							<p>One of our medical professionals will sit down and talk about how they can help you with your concerns to determine the best treatment for your skin.</p>

							<?php echo do_shortcode( '[contact-form-7 id="68" title="ALWAYS FREE CONSULTATIONS"]' ); ?>

						</div>

						<?php 
						// query employee bios
						if( have_rows('employee_bios') ): ?>
							<div class="altimg" id="altimg">
								<?php while( have_rows('employee_bios') ): the_row(); 
									// vars
									$image = get_sub_field('image');
								?>
									<div><img src="<?php echo $image['url'];?>" alt=""></div>
								<?php endwhile; ?>
							</div>
							<section>
								<?php while( have_rows('employee_bios') ): the_row(); ?>
									<p><?php the_sub_field('bio_text'); ?></p>
								<?php endwhile; ?>
							</section>

						<?php endif; ?>

					</div>
				</section>
				<section class="testimonials">
					<div>
						<h2><?php the_field('section_3_title'); ?></h2>
						<p><?php the_field('section_3_copy'); ?></p>
						<?php

							// query patient journeys post type
							$args = array (
								'post_type'      => 'patient-journey',
								'posts_per_page' => '-1',
								'post_count'     => '3',
								'order'          => 'title',
								'order'          => 'asc'
							);
							$journey_query = new WP_Query( $args );
							
							if ( $journey_query->have_posts() ) : ?>
								<div class="circ" id="journeys">
								
								<?php while ( $journey_query->have_posts() ) : $journey_query->the_post(); 

									// $imgsrc returns an array if set / if not, goes to fallback image									
									$imgsrc = get_the_post_thumbnail($post_id) != '' ? wp_get_attachment_image_src(  get_post_thumbnail_id($post->ID), $size='sq280')[0] : 'http://lorempixel.com/g/280/280/';

									// get the journey type taxonomy name - store in $journey_type
										$terms = get_terms( 'journey-type' );
										$terms = get_the_terms( $post->ID, 'journey-type' );
										// echo '<pre>';
										// var_dump($terms);
										// echo '</pre>';

										if ( $terms && ! is_wp_error( $terms ) ) : 
											$journey_type_list = array();
											foreach ( $terms as $term ) {
												$journey_type_list[] = $term->name;
											}
										$journey_type = join( ", ", $journey_type_list );
										endif;

								?>

									<div>
										<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink();?>&p[images][0]=<?php echo $imgsrc; ?> &p[title]=<?php the_title(); ?>&p[summary]=<?php the_title(); ?>"  onclick="window.open('http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink();?>&p[images][0]=<?php echo $imgsrc; ?> &p[title]=<?php the_title(); ?>&p[summary]=<?php the_title(); ?>', 'newwindow', 'width=600, height=600'); return false;" class="fa-facebook"></a>

										<a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo $imgsrc; ?>&description=<?php the_title(); ?> | By Lébo Skin Care Center, York PA" class="fa-pinterest-p"></a>
										
										<a href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&via=LeboSkinCtr&text=Check%20out%20this%20patient's%20journey%20when%20they%20chose%20Lebo!%20%23LeboBeautiful" class="fa-twitter"></a>
										<a href="<?php the_permalink();?>">
											<img src="<?php echo $imgsrc; ?>">
											<span><strong><?php the_title(); ?></strong><br> <?php echo $journey_type; ?></span>
										</a>
									</div>

								<?php endwhile; ?>
								</div>
								<a class="button secondary" href="<?php bloginfo( 'url' ) ?>/patient-journeys/">View More Journeys</a>
							<?php else: ?>
								<p>There are currently no patient journeys</p>
							<?php endif;
							wp_reset_postdata();

						?>	


					</div>
				</section>
				<section class="ty">
					<div>
						<h2><?php the_field('section_4_title'); ?></h2>
						<p><?php the_field('section_4_copy'); ?></p>
						
						<ul class="block-grid three-up">
							<li>
								<a href="<?php bloginfo( 'url' ) ?>/awards/">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-15-years.png">
								</a>
							</li>
							<li>
								<a href="<?php bloginfo( 'url' ) ?>/awards/">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2014-best-of.png">
								</a>
							</li>
							<li>
								<a href="<?php bloginfo( 'url' ) ?>/awards/">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-allergan.png">
								</a>
							</li>
						</ul>
					</div>
				</section>
			</main>

<?php endwhile; else : // end of the loop. ?>
	<p><?php _e( 'The page you were looking for can not be found.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
