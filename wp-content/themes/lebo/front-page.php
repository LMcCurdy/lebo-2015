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
								<div><a href="<?php echo $link; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></a></div>
							<?php else : ?>
								<div><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>
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



<ul class="block-grid three-up circ">
<?php

// check if the repeater field has rows of data
if( have_rows('home_promotions') ):

 	// loop through the rows of data
    while ( have_rows('home_promotions') ) : the_row(); ?>
        <li>
			<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_sub_field('link'); ?>&p[images][0]=<?php the_sub_field('image'); ?> &p[title]=<?php the_sub_field('promo_line_1'); ?> | <?php the_sub_field('promo_line_2'); ?> | By Lébo Skin Care Center, York PA&p[summary]=<?php the_sub_field('promo_line_1'); ?>"  onclick="window.open('http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_sub_field('link'); ?>&p[images][0]=<?php the_sub_field('image'); ?> &p[title]=<?php the_sub_field('promo_line_1'); ?> | <?php the_sub_field('promo_line_2'); ?> | By Lébo Skin Care Center, York PA&p[summary]=<?php the_sub_field('promo_line_1'); ?>', 'newwindow', 'width=600, height=600'); return false;" class="fa-facebook"></a>

			<a href="https://pinterest.com/pin/create/button/?url=<?php the_sub_field('link'); ?>&media=<?php the_sub_field('image'); ?>&description=<?php the_sub_field('promo_line_1'); ?> | <?php the_sub_field('promo_line_2'); ?> | By Lébo Skin Care Center, York PA" class="fa-pinterest-p"></a>

			<a href="https://twitter.com/intent/tweet?url=<?php the_sub_field('link'); ?>&via=LeboSkinCtr&text=Just%20redeemed%20this%20awesome%20promotion%20from%20Lebo%20Skin%20Care%20Center!%20%23LeboBeautiful" class="fa-twitter"></a>
				<a href="<?php the_sub_field('link'); ?>">
				<img src="<?php the_sub_field('image'); ?>">
				<span><?php the_sub_field('promo_line_1'); ?><br><?php the_sub_field('promo_line_2'); ?></span>
			</a>
		</li>

   <?php endwhile;

else :

    // no rows found

endif;

?>
</ul>												
								
						
						<a class="button secondary" href="<?php bloginfo( 'url' ) ?>/monthly-specials/">View Our Promotions Calendar</a>
						</div>
					</div>
				</section>
				<section class="consultations">
					<div>
						<h2><?php the_field('section_2_title'); ?></h2>
						<div>
							<?php echo do_shortcode( '[contact-form-7 id="68" title="ALWAYS FREE CONSULTATIONS"]' ); ?>
						</div>
					</div>
				</section>
				<section class="testimonials">
					<div>
						<h2><?php the_field('section_3_title'); ?></h2>
						<p><?php the_field('section_3_copy'); ?></p>
						<?php
						$lb = 0;
							// query patient journeys post type
							$args = array (
								'post_type'      => 'journeys',
								'posts_per_page' => '6',
								'post_count'     => '3',
								'orderby'          => 'rand'
							);
							$journey_query = new WP_Query( $args );
							
							if ( $journey_query->have_posts() ) : ?>
								<div class="circ" id="journeys">

								
								<?php 
								
								while ( $journey_query->have_posts() ) : $journey_query->the_post(); 
								
								$lb++;

									// $imgsrc returns an array if set / if not, goes to fallback image									
									$imgsrc = get_the_post_thumbnail($post_id) != '' ? wp_get_attachment_image_src(  get_post_thumbnail_id($post->ID), $size='sq280')[0] : 'http://lorempixel.com/g/280/280/';

									// get the journey type taxonomy name - store in $journey_type
										$terms = get_terms( 'journey-services' );
										$terms = get_the_terms( $post->ID, 'journey-services' );
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
										
										<a href="#inline-tr-<?= $lb; ?>" class="jr">
											<img src="<?php echo $imgsrc; ?>" />
											<span><strong><?php the_title(); ?></strong><br> <?php echo $journey_type; ?></span>
										</a>
									

		<div id="inline-tr-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Journey</p>
                      <div class="left-shortcode">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('video_url'); ?>?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>  
            </div>
            <div class="right-shortcode">
            <img src="<?php the_field('ba_images'); ?>" height="auto" width="100%" alt="Lebo Before and After">
            </div>    
            <div class="questions-j group">
              <div class="column six">
                <p class="pj-q"><?php the_field('question_one'); ?></p>
                <?php the_field('answer_one'); ?>

                <p class="pj-q"><?php the_field('question_two'); ?></p>
                <?php the_field('answer_two'); ?>
              </div>

              <div class="column six">
                <p class="pj-q"><?php the_field('question_three'); ?></p>
                <?php the_field('answer_three'); ?>

                <p class="pj-q"><?php the_field('question_four'); ?></p>
                <?php the_field('answer_four'); ?>
              </div>
            </div>                                
          </div>
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
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhosWho_York_white-1fe973c5.jpg" />
								</a>
							</li>
							<li>
								<a href="<?php bloginfo( 'url' ) ?>/awards/">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2015-ribbon.png" />
								</a>
							</li>
							<li>
								<a href="<?php bloginfo( 'url' ) ?>/awards/">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-allergan.png" />
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
