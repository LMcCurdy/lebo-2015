<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="sub-page serv">
  <section>
    
    <div class="sub-header container clearfix">
<?php $featured = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<div class="left-shortcode service-banner service-head" style="background-image:url(<?= $featured[0]; ?>);"></div>

<div class="right-shortcode right-pad service-head">
<h1 class="page-title entry-title" id="<?php echo $post->post_name; ?>-id" itemprop="headline"><?php the_title(); ?></h1>
<?php the_field ('service_header'); ?>
</div>    



    </div>
    <p class="hb-page-title" id="second-title"><?php the_title(); ?></p>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articlebody">
                <div class="left-shortcode">
                <?php the_content(); ?>
                </div>
                <div class="right-shortcode">
                  <div class="service-images">
                    <div>
                      <img src="<?php the_field('before_image'); ?>" alt="lebo skin care center">
                      <p>Before | <span><?php the_field('first_ba_label'); ?></span></p>
                    </div>
                    <div>
                      <img src="<?php the_field('after_image'); ?>" alt="lebo skin care center">
                       <p>After | <span><?php the_field('first_ba_label'); ?></span></p>
                    </div>
                  </div>
                </div>
            
              </section> <!-- end article section -->
              
            
            </article> <!-- end article -->
                        
            <?php endwhile; ?>    
            

            
            <?php endif; ?>


          </div> <!-- end #main -->

      
        </div> <!-- end #content -->

      </div> <!-- end .container -->

      <div class="ba-gallery-service" id="beforeafter" name="beforeafter">

      

      <h4>Before and After Gallery</h4>

        
<div id="sync1" class="owl-carousel">

<?php if( have_rows('before_and_after_gallery') ): ?>

  <?php while( have_rows('before_and_after_gallery') ): the_row(); 

    // vars
    $bimage = get_sub_field('before_image');
    $aimage = get_sub_field('after_image');
    $label = get_sub_field('image_label');

    ?>

<div class="item">
    <div class="item-container">
          <div class="before"> <img src="<?php echo $bimage ?>" alt="Before and After Images Lébo, York PA" /> <span>Before</span><span class="label"><?php echo $label ?></span> </div>
          <div class="after"> <img src="<?php echo $aimage ?>" alt="Before and After Images Lébo, York PA" /> <span>After</span><span class="label"><?php echo $label ?></span> </div>
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
          <img src="<?php echo $aimage ?>" alt="Before and After Images Lébo, York PA" />
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
<?php if ( is_page( 179 ) ) { $Customjourney = 'leg-vein-therapy'; } ?>
<?php if ( is_page( 194 ) ) { $Customjourney = 'coolsculpting-by-zeltiq'; } ?>
<?php if ( is_page( 210 ) ) { $Customjourney = 'co2re-laser'; } ?>
<?php if ( is_page( 235 ) ) { $Customjourney = 'velashape'; } ?>
<?php if ( is_page( 227 ) ) { $Customjourney = 'picosure-skin-revitalization'; } ?>
<?php if ( is_page( 237 ) ) { $Customjourney = 'chemical-peel'; } ?>
<?php if ( is_page( 239 ) ) { $Customjourney = 'microdermabrasion'; } ?>
<?php if ( is_page( 245 ) ) { $Customjourney = 'photorejuvenation'; } ?>
<?php if ( is_page( 231 ) ) { $Customjourney = 'permanent-makeup'; } ?>
<?php if ( is_page( 233 ) ) { $Customjourney = 'isolaz'; } ?>
<?php if ( is_page( 225 ) ) { $Customjourney = 'tattoo-removal'; } ?>
<?php if ( is_page( 243 ) ) { $Customjourney = 'laser-hair-removal'; } ?>
<?php if ( is_page( 3457 ) ) { $Customjourney = 'botox-cosmetic'; } ?>
<?php if ( is_page( 3499 ) ) { $Customjourney = 'smartlipo'; } ?>

<?php query_posts(array('post_type' => 'videos','video-type' => $Customjourney,'orderby' => 'rand','posts_per_page' => 2)); ?>

     


<?php if(have_posts()) : while(have_posts()) : the_post();
           ?>


           <?php $imgsrc = get_the_post_thumbnail($post_id) != '' ? wp_get_attachment_image_src(  get_post_thumbnail_id($post->ID), $size='sq280')[0] : 'http://lorempixel.com/g/280/280/';



?>
                  <div>
                    
                    <a class="various yt fancybox.iframe" href="http://www.youtube.com/embed/<?php the_field('youtube_video_code'); ?>?autoplay=1&rel=0&showinfo=0">
                      <img src="<?php echo $imgsrc; ?>">
                      <span><strong><?php the_title(); ?></strong></span>
                    </a>
                  </div>

                 <?php endwhile; endif; wp_reset_query(); ?>

                 <?php
            $lb = 0;
              // query patient journeys post type
              $args = array (
                'post_type'      => 'journeys',
                'posts_per_page' => '1',
                'post_count'     => '3',
                'journey-services' => $Customjourney,
                'orderby'          => 'rand'
              );
              $journey_query = new WP_Query( $args );
              
              if ( $journey_query->have_posts() ) : ?>
            

                
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
                <?php endwhile; endif; wp_reset_query(); ?>
             
                
             
           

              


          </div>
<div class="testimonial-services">
<p class="top-test">"<?php the_field('testimonial_top'); ?>"</p>
<p class="test-text">"<?php the_field('testimonial'); ?>"<span>- <?php the_field('testimonial_author'); ?></span></p>
</div>








    </section>
</main>

<?php get_footer(); ?>