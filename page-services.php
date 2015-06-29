<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="sub-page">
  <section>
    
    <div class="sub-header container clearfix">

    <div class="left-shortcode">
    <?php 
    if ( has_post_thumbnail() ) {
  the_post_thumbnail('full');
} 
?>
</div>
<div class="right-shortcode right-pad">
<h1 class="page-title entry-title" id="<?php echo $post->post_name; ?>-id" itemprop="headline"><?php the_title(); ?></h1>
<?php the_field ('service_header'); ?>
</div>    



    </div>
    <p class="hb-page-title" id="second-title"> <?php the_title(); ?></p>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">
                <?php the_content(); ?>
            
              </section> <!-- end article section -->
              
            
            </article> <!-- end article -->
                        
            <?php endwhile; ?>    
            

            
            <?php endif; ?>


          </div> <!-- end #main -->

      
        </div> <!-- end #content -->

      </div> <!-- end .container -->

      <div class="ba-gallery" id="beforeafter" name="beforeafter">

      <div class="social-share">
      <a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink();?>#beforeafter&p[images][0]=<?php echo $imgsrc; ?> &p[title]=<?php the_title(); ?>&p[summary]=<?php the_title(); ?>"  onclick="window.open('http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink();?>#beforeafter&p[images][0]=<?php echo $imgsrc; ?> &p[title]=<?php the_title(); ?>&p[summary]=<?php the_title(); ?>', 'newwindow', 'width=600, height=600'); return false;" class="fa-facebook"></a>

                    <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>#beforeafter&media=http://www.gavinadvertising.com/leboskincare.com/wp-content/uploads/2015/05/before-1.jpg&description=Before and After By Lebo" class="fa-pinterest-p"></a>
                    
                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>%23beforeafter&via=LeboSkinCtr&text=A%20before%20and%20after%20gallery%20of%20<?php the_title(); ?>%20%23LeboBeautiful" class="fa-twitter"></a>
      <p>share this gallery</p>
      </div>

      <h4>Before and After Gallery</h4>

        
<div id="sync1" class="owl-carousel">

<?php if( have_rows('before_and_after_gallery') ): ?>

  <?php while( have_rows('before_and_after_gallery') ): the_row(); 

    // vars
    $bimage = get_sub_field('before_image');
    $aimage = get_sub_field('after_image');

    ?>

<div class="item">
    <div class="item-container">
          <div class="before"> <img src="<?php echo $bimage ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> </div>
          <div class="after"> <img src="<?php echo $aimage ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> </div>
    </div>
</div>

  <?php endwhile; ?>

<?php endif; ?>


</div>

<div id="sync2" class="owl-carousel">

<?php if( have_rows('before_and_after_gallery') ): ?>

  <?php while( have_rows('before_and_after_gallery') ): the_row(); 

    // vars
    $aimage = get_sub_field('after_image');

    ?>

<div class="item">
    <div class="item-thumb">
          <img src="<?php echo $aimage ?>" alt="Before and After Images Lebo, York PA" />
    </div>
</div>

  <?php endwhile; ?>

<?php endif; ?>


</div>







</div> <!-- before and after gallery -->



<!--


</div>

-->

<div class="video-test">

<h4>Video Gallery</h4>
<p class="white"><?php the_field('video_gallery_description'); ?></p>
         <div class="circ">

<!-- Checks for the Page ID then inserting the matching custom post type "Patient Journeys" to the custom category in the query below -->

<?php if ( is_page( 70 ) ) { $Customjourney = 'dermapen'; } ?>
<?php if ( is_page( 118 ) ) { $Customjourney = 'botox-cosmetic'; } ?>
<?php if ( is_page( 140 ) ) { $Customjourney = 'cosmetic-fillers'; } ?>
<?php if ( is_page( 158 ) ) { $Customjourney = 'miscellaneous'; } ?>
<?php if ( is_page( 179 ) ) { $Customjourney = 'leg-vein-therepy'; } ?>
<?php if ( is_page( 194 ) ) { $Customjourney = 'coolsculpting-by-zeltiq'; } ?>
<?php if ( is_page( 210 ) ) { $Customjourney = 'co2re-laser'; } ?>
<?php if ( is_page( 235 ) ) { $Customjourney = 'velashape'; } ?>

<?php query_posts(array('post_type' => 'patient-journey','journey-type' => $Customjourney,'orderby' => 'rand','posts_per_page' => 3)); ?>
            


<?php if(have_posts()) : while(have_posts()) : the_post();
           ?>


           <?php $imgsrc = get_the_post_thumbnail($post_id) != '' ? wp_get_attachment_image_src(  get_post_thumbnail_id($post->ID), $size='sq280')[0] : 'http://lorempixel.com/g/280/280/';



?>
                  <div>
                    <a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink();?>&p[images][0]=<?php echo $imgsrc; ?> &p[title]=<?php the_title(); ?>&p[summary]=<?php the_title(); ?>"  onclick="window.open('http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink();?>&p[images][0]=<?php echo $imgsrc; ?> &p[title]=<?php the_title(); ?>&p[summary]=<?php the_title(); ?>', 'newwindow', 'width=600, height=600'); return false;" class="fa-facebook"></a>

                    <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=<?php echo $imgsrc; ?>&description=<?php the_title(); ?> | By Lébo Skin Care Center, York PA" class="fa-pinterest-p"></a>
                    
                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&via=LeboSkinCtr&text=Check%20out%20this%20patient's%20journey%20when%20they%20chose%20Lebo!%20%23LeboBeautiful" class="fa-twitter"></a>
                    <a href="<?php the_permalink();?>">
                      <img src="<?php echo $imgsrc; ?>">
                      <span><strong><?php the_title(); ?></strong></span>
                    </a>
                  </div>

                 <?php endwhile; endif; wp_reset_query(); ?>
                </div>
                
             
           

              


          </div>
<div class="testimonial-services">
<p class="top-test">"<?php the_field('testimonial_top'); ?>"</p>
<p class="test-text">"<?php the_field('testimonial'); ?>"<span>- <?php the_field('testimonial_author'); ?></span></p>
</div>








    </section>
</main>

<?php get_footer(); ?>
