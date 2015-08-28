<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="sub-page">
  <section>
    
    <div class="sub-header container clearfix">

    <div class="background-header">
    <?php 
    if ( has_post_thumbnail() ) {
  the_post_thumbnail('full');
} 
?>
<?php if (the_field ('sub_page_h2')) { ?>
<h2 id="sub-header-over" itemprop="headline"><?php the_field ('sub_page_h2'); ?></h2>
<?php } ?>
</div>
</div>

    <h1 class="hb-page-title" id="second-title"> <?php the_title(); ?></h1>
    <section class="contact-consultations group">
					<div>
						<h2>Always Free Consultations</h2>
						<div class="nine columns npl end top">
							<?php echo do_shortcode( '[contact-form-7 id="3572" title="ALWAYS FREE CONSULTATIONS_contact"]' ); ?>
						</div>

						<?php 
						// query employee bios
						if( have_rows('employee_bios') ): ?>
							<div id="contact-doctors" class="owl-carousel owl-theme">
								<?php while( have_rows('employee_bios') ): the_row(); 
									// vars
									$image = get_sub_field('image');
								?>

								  <div class="item">
									<div><img src="<?php echo $image['url'];?>" alt="" /></div>
									<p><?php the_sub_field('bio_text'); ?></p>
									</div>
								<?php endwhile; ?>
							
						</div>
						<?php endif; ?>


					</div>
				</section>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
             
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">
             <!-- <div class="consultations">
					<div>
						<h2>Always Free Consultations</h2>
						<div class="nine columns npl end">
							<p><span class="bspan">Not sure which service is right for you?</span><br />
							One of our medical professionals will sit down and talk about how they can help you with your concerns to determine the best treatment for your skin.</p>

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
									<div><img src="<?php echo $image['url'];?>" alt="" /></div>
								<?php endwhile; ?>
							</div>
							<section>
								<?php while( have_rows('employee_bios') ): the_row(); ?>
									<p><?php the_sub_field('bio_text'); ?></p>
								<?php endwhile; ?>
							</section>

						<?php endif; ?>

					</div>
				</div> -->
                <?php the_content(); ?>
            
              </section> <!-- end article section -->
              
            
            </article> <!-- end article -->
                        
            <?php endwhile; ?>    
            

            
            <?php endif; ?>


          </div> <!-- end #main -->

      
        </div> <!-- end #content -->

      </div> <!-- end .container -->



     </section>
</main>
<?php get_footer(); ?>
