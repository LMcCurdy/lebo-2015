<?php
/**
* Template Name: Flexible
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content','slider' ); ?>

	<div class="content">

		<?php
		if( uri_is_in_menu( 'subpage', $_SERVER['REQUEST_URI'] ) ) {
			wp_nav_menu( array('theme_location'  => 'subpage' )); 
		}

		the_content(); ?>

		<?php
		// check if the flexible content field has rows of data
		if( have_rows('layout') ):

			while ( have_rows('layout') ) : the_row();
/**
	hr
*/
			if( get_row_layout() == 'hr' ): ?>

			<hr>

<?php /**
	Full Width
*/ ?>
			<?php elseif( get_row_layout() == 'full_width' ): ?>

				<div class="row full_width">
					<div class="twelve columns np">
						
						<?php the_sub_field('full_content'); ?>

					</div>
				</div>
<?php /**
	Two Column
*/ ?>
			<?php elseif( get_row_layout() == 'two_column' ): ?>

				<div class="row two_column">
					<div class="twelve columns np">
						<div class="six columns npl">

							<?php the_sub_field('column_left'); ?>

						</div>
						<div class="six columns npr">
							
							<?php the_sub_field('column_right'); ?>
							
						</div>
					</div>
				</div>
<?php /**
	Three Column
*/ ?>
			<?php elseif( get_row_layout() == 'three_column' ): ?>

				<div class="row three_column">
					<div class="twelve columns np">

					<?php if( have_rows('column') ): ?>

							<?php while( have_rows('column') ): the_row(); ?>

						<div class="four columns">

							<div class="title" style="text-align:center;"><?php the_sub_field('column_title'); ?></div>

								<?php if (get_sub_field('will_it_have_a_slideshow')) : ?>
									
									<?php 
										$images = get_sub_field('mini_slideshow_images');
										if( $images ): ?>
										<div class="page-small-slideshow">
											<?php foreach( $images as $image ): ?>
												<div><img src="<?php echo $image['sizes']['minislideshow']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>

								<?php endif; ?>

							<?php the_sub_field('content'); ?>

						</div>

							<?php endwhile; ?>

					<?php endif; ?>

					</div>
				</div>
<?php /**
	Right Third
*/ ?>
			<?php elseif( get_row_layout() == 'right_third' ): ?>

				<div class="row right_third">
					<div class="twelve columns np">
						<div class="four columns npl">
							<?php the_sub_field('column_left'); ?>
						</div>
						<div class="eight columns npr">
							<?php the_sub_field('column_right'); ?>
						</div>
					</div>
				</div>

<?php /**
	Left Third
*/ ?>
			<?php elseif( get_row_layout() == 'left_third' ): ?>

				<div class="row left_third">
					<div class="twelve columns np">
						<div class="eight columns npl">
							<?php the_sub_field('column_left'); ?>
						</div>
						<div class="four columns npr">
							<?php the_sub_field('column_right'); ?>
						</div>
					</div>
				</div>

<?php /**
	Tabs
*/ ?>
			<?php elseif( get_row_layout() == 'tabs' ): ?>

				<div class="row tabs">
					<div class="twelve columns np">
						<div class="four columns npl">

						<?php if( have_rows('tabs') ): 
							$n = 0;
						?>
							<?php while( have_rows('tabs') ): the_row(); 
								$n++;
							?>
								<a href="#" class="content-tab<?php if($n===1){echo ' content-tab-on';} ?>" id="content-tab<?php echo $n; ?>"><?php the_sub_field('tab_title'); ?></a>
							<?php endwhile; ?>
						<?php endif; ?>

						</div>
						<div class="eight columns npr">

							<?php if( have_rows('tabs') ): 
								$num = 0;
							?>
								<?php while( have_rows('tabs') ): the_row(); 
									// vars
									$num++;
									$image   = get_sub_field('tab_image');
									$content = get_sub_field('tab_content');
								?>

									<div class="content-info" id="content-info<?php echo $num; ?>" <?php if($num===1){echo 'style="display:block;"';} ?>>
									<?php if ($image) : ?>
										<div><img src="<?php echo $image['sizes']['tabimage']; ?>" border="0" class="border"></div>
									<?php endif; ?>
									<?php if ($content) : ?>
										<?php echo $content; ?>
									<?php endif; ?>
									</div>

								<?php endwhile; ?>
							<?php endif; ?>

						</div>
					</div>
				</div>

<?php /**
	Slideshow Two Third
*/ ?>
			<?php elseif( get_row_layout() == 'right_third_slideshow' ): 
				$slideshowside = get_sub_field('left_or_right_slideshow');
			?>
			
			<?php if ($slideshowside === 'right' || !$slideshowside): ?>
	
				<div class="row right_third_slideshow" data-side="<?php echo $slideshowside; ?>">
					<div class="twelve columns np">
						<div class="four columns npl">

							<?php the_sub_field('column_left'); ?>

						</div>
						<div class="eight columns npr">
							
							<?php if (get_sub_field('slideshow_images')) : ?>
								<?php 

									$images = get_sub_field('slideshow_images');

									if( $images ): ?>

									<div id="page-slideshow-container">
										<div id="page-slideshow" class="page-slideshow">

										<?php foreach( $images as $image ): ?>
										
											<img src="<?php echo $image['sizes']['slide']; ?>" alt="<?php echo $image['alt']; ?>" />
										
										<?php endforeach; ?>

										</div>
									</div>

								<?php endif; ?>
							<?php endif; ?>
							
						</div>
					</div>
				</div>

			<?php else: ?>

				<div class="row left_third_slideshow" data-side="<?php echo $slideshowside; ?>">
					<div class="twelve columns np">
						<div class="eight columns npl">
							
							<?php if (get_sub_field('slideshow_images')) : ?>
								<?php 

									$images = get_sub_field('slideshow_images');

									if( $images ): ?>

									<div id="page-slideshow-container">
										<div id="page-slideshow" class="page-slideshow">

										<?php foreach( $images as $image ): ?>
										
											<img src="<?php echo $image['sizes']['slide']; ?>" alt="<?php echo $image['alt']; ?>" />
										
										<?php endforeach; ?>

										</div>
									</div>

								<?php endif; ?>
							<?php endif; ?>
							
						</div>
						<div class="four columns npr">

							<?php the_sub_field('column_left'); ?>

						</div>
					</div>
				</div>
			<?php endif ?>
<?php /**
	Videos
*/ ?>
			<?php elseif( get_row_layout() == 'videos' ): ?>

				<div class="row videos">
					<div class="twelve columns np">

						<?php if( have_rows('video_sections') ): ?>
							<?php while( have_rows('video_sections') ): the_row();
 ?>
								<section class="row">
									<div class="subtitle"><?php the_sub_field('video_section_title'); ?></div>

									<?php if( have_rows('videos') ): 

										// $rows = get_field('videos');
										$rows = get_sub_field('videos');
										// $rows = have_rows('videos');
										// var_dump($rows);

										$c = count($rows);
										// echo '<h1>c: '.$c.'</h1>';
										$n = 0;
									?>
										<?php while( have_rows('videos') ): the_row(); 
										 $n++;
										?>
										<div class="four columns end <?php if ($n===$c){echo ' end';} ?>">
											<?php echo apply_filters('the_content', get_sub_field('video_link')); ?>
										</div>
										<?php endwhile; ?>
									<?php endif; ?>

								</section>

							<?php endwhile; ?>
						<?php endif; ?>

					</div>
				</div>
<?php /**
	Repeater
*/ ?>
			<?php elseif( get_row_layout() == 'repeater' ): 
				$n=0;
				$isFaq = get_sub_field('expanding_content');

				if ($isFaq) {
					echo '<script language="javascript" type="text/javascript"> function showFaq(faqID) { if(document.getElementById("answer" + faqID).style.display == "none") { document.getElementById("answer" + faqID).style.display = "inline";} else {document.getElementById("answer" + faqID).style.display = "none";} };</script>';
				}

			?>

				<?php if (the_sub_field('heading')) : ?>
					<h3 class="title"><?php the_field('heading'); ?></h3>
				<?php endif; ?>

				<?php if( have_rows('repeating_block') ): ?>
					<?php while( have_rows('repeating_block') ): the_row(); 
						// vars
						$title   = get_sub_field('title');
						$content = get_sub_field('content');
						$n++;
					?>

				<?php if ($isFaq) :?>

					<div class="subtitle"><a href="javascript:showFaq(<?php echo $n; ?>);" class="subtitle"><?php  echo $title; ?></a></div>
					<div id="answer<?php echo $n; ?>" style="display:none;" class="section-expand">
						<?php echo $content; ?>
					</div>

				<?php else: ?>

					<div class="subtitle"><?php  echo $title; ?></div>
					<div>
						<?php echo $content; ?>
					</div>

				<?php endif; ?>
						
					<?php endwhile; ?>
				<?php endif; ?>


<?php /**
	CTA
*/ ?>
			<?php elseif( get_row_layout() == 'cta' ): ?>

				<hr>
				<section class="cta">
					<a href="<?php the_field('button_1_link', 'options'); ?>" class="button"><?php the_field('button_1_text', 'options'); ?></a>
					<span>- or -</span>
					<a href="<?php the_field('button_2_link', 'options'); ?>" class="button"><?php the_field('button_2_text', 'options'); ?></a>
					<span>- or -</span>
					<div>
						<div class="subtitle"><?php the_field('call_text', 'options'); ?></div>
						<div class="title"><?php the_field('telephone_full', 'options'); ?></div>
					</div>
				</section>
				<hr>

			<?php endif; // end if layouts

			endwhile;

			else :

			// no layouts found

		endif;

		?>

		<?php 
		if( uri_is_in_menu( 'subpage', $_SERVER['REQUEST_URI'] ) ) {
			wp_nav_menu( array('container_class' => 'subtitle', 'theme_location'  => 'subpage' )); 
		} ?>


	</div>

	<?php get_template_part( 'content','subfooter' ); ?>

<?php endwhile; else : // end of the loop. ?>
	<p><?php _e( 'The page you were looking for can not be found.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
