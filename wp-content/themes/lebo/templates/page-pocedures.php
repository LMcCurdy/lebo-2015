<?php
/*
Template Name: Procedures
*/
?>

<?php get_header(); ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="sub-page proc-vid">
  <section>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

              <h1 id="no-head-h1"><?php the_title(); ?></h1>
              <h2><a href="#" class="flipper">Choose a Service <i class="fa fa-caret-down"></i></a></h2>
            <div class="flipcon">
              <div class="flipped" style="display:none;">

                   <div class="column four">
                    <a href="#qa-1" class="btn2 scroll">BOTOX<sup>®</sup> Cosmetic</a>
                    <a href="#qa-2" class="btn2 scroll">Chemical Peel</a>
                    <a href="#qa-3" class="btn2 scroll">CO2RE<sup>™</sup> Laser</a>
                    <a href="#qa-4" class="btn2 scroll">Cosmetic Filler</a>
                    <a href="#qa-5" class="btn2 scroll">Dermapen<sup>®</sup></a>
                   </div>

                    <div class="column four">
                   <a href="#qa-6" class="btn2 scroll">Isolaz<sup>™</sup></a>
                    <a href="#qa-7" class="btn2 scroll">Laser Hair Removal Eyebrows</a>
                   <a href="#qa-8" class="btn2 scroll">Laser Hair Removal Lips</a>
                   <a href="#qa-9" class="btn2 scroll">Leg Vein Therapy</a>
                   <a href="#qa-10" class="btn2 scroll">Microdermabrasion</a>
                   </div>

                    <div class="column four">
                   <a href="#qa-11" class="btn2 scroll">Permanent Makeup</a>
                   <a href="#qa-12" class="btn2 scroll">Photorejuvenation</a>
                   <a href="#qa-13" class="btn2 scroll">PicoSure<sup>™</sup> Skin Revitalization</a>
                   <a href="#qa-14" class="btn2 scroll">Tattoo Removal</a>
                   <a href="#qa-15" class="btn2 scroll">VelaShape<sup>™</sup></a>
                   </div>
              </div>
            </div>

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">
                 <div class="q-con">
                        <?php  $args = array( 'post_type' => 'videos', 'video-type' => 'procedures', 'posts_per_page' => '20', 'order' => 'ASC', 'orderby' => 'title');
                          $loop = new WP_Query( $args );
                          $lb = 0;
                          while ( $loop->have_posts() ) : $loop->the_post(); 
                          $vid = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                          $lb++
                           ?>

                          <?php if( $loop->current_post == 0 ) { /*first post*/ ?>
      <a href="" id="qa-<?= $lb; ?>">
              <div class="group first vid-con">
                 <a class="various yt fancybox.iframe" href="http://www.youtube.com/embed/<?php the_field('youtube_video_code'); ?>?autoplay=1&rel=0&showinfo=0"><div class="column four vid-thumb" style="background-image:url(<?= $vid[0]; ?>);"></div></a>
                    <div class="column eight">
                    <div class="vid-desc">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        </div>
                    </div>
              </div>
         

                          <?php } else { ?>
<a href="" id="qa-<?= $lb; ?>">
              <div class="group second vid-con">
                  <a class="various yt fancybox.iframe" href="http://www.youtube.com/embed/<?php the_field('youtube_video_code'); ?>?autoplay=1&rel=0&showinfo=0"><div class="column four vid-thumb" style="background-image:url(<?= $vid[0]; ?>);"></div></a>
                    <div class="column eight">
                        <div class="vid-desc">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        </div>
                    </div>
              </div>
              <?php } ?>

            <?php endwhile; ?>




<div class="sched-more">
<button class="btn2">Show More Galleries <i class="fa fa-caret-down"></i></button>
<h4>Schedule your FREE consultation today!</h4>
<p>The results are pretty spectacular, and we’re sure they will make you feel Lèbo Beautiful. Want to better understand which treatment is the right fit for you? Schedule your free consultation with one of our experts to learn more and start your Lèbo Beautiful journey today.</p>
<a href="<?php bloginfo( 'url' ) ?>/contact-us/" class="schedule-button">Schedule Today</a>
</div>

</div><!-- END OF Q-CON -->

<div class="sched-after">
<h4>Schedule your FREE consultation today!</h4>
<p>The results are pretty spectacular, and we’re sure they will make you feel Lèbo Beautiful. Want to better understand which treatment is the right fit for you? Schedule your free consultation with one of our experts to learn more and start your Lèbo Beautiful journey today.</p>
<a href="<?php bloginfo( 'url' ) ?>/contact-us/" class="schedule-button">Schedule Today</a>
</div>


              </section> <!-- end article section -->
              
            
            </article> <!-- end article -->
                        
            <?php endwhile; ?>    
            

            
            <?php endif; ?>


          </div> <!-- end #main -->

      
        </div> <!-- end #content -->

      </div> <!-- end .container -->



     </section>
</main>
<i class="fa fa-caret-up scrollToTop"></i>
<?php get_footer(); ?>
