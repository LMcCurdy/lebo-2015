<?php
/*
Template Name: Patient Journey
*/
?>

<?php get_header(); ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="sub-page pjs proc-vid">
  <section>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

              <h1 id="no-head-h1"><?php the_title(); ?></h1>
              <h2><a href="#" class="flipper">Choose a Service <i class="fa fa-caret-down"></i></a></h2>
            <div class="flipcon">
              <div class="flipped" style="display:none;">

                   <div class="column six">
                    <a href="#BOTOX<sup>®</sup>" class="scroll">BOTOX<sup>®</sup> Cosmetic</a>
                    <a href="#CO2RE<sup>™</sup>" class="scroll">CO2RE<sup>™</sup> Laser</a>
                    <a href="#Chemical" class="scroll">Chemical Peel</a>
                    <a href="#Coolsculpting" class="scroll">CoolSculpting<sup>®</sup></a>
                   <a href="#Cosmetic" class="btn2 scroll">Cosmetic Fillers</a>
                   <a href="#Eyelash" class="btn2 scroll">Eyelash Tinting</a>
                    <a href="#Juvéderm" class="btn2 scroll">Juvéderm Voluma<sup>™</sup> XC</a>
                    <a href="#Laser" class="btn2 scroll">Laser Hair Removal</a>
                   </div>

                    <div class="column six">
                    <a href="#Lebo" class="btn2 scroll">Lebo Skin Care Products</a>
                    <a href="#Leg" class="btn2 scroll">Leg Vein Therepy</a>
                    <a href="#Permanent" class="btn2 scroll">Permanent Makeup</a>
                   <a href="#Photorejuvenation" class="btn2 scroll">Photorejuvenation</a>
                   <a href="#Tattoo" class="btn2 scroll">Tattoo Removal</a>
                    <a href="#VelaShape<sup>™</sup>" class="btn2 scroll">VelaShape<sup>™</sup></a>
                    <a href="#VI" class="btn2 scroll">VI PEEL<sup>™</sup></a>
                   </div>

              </div>
            </div>

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">


<div class="group first vid-con">
  <div class="column six ba">
<iframe width="420" height="315" src="https://www.youtube.com/embed/NG4UTP22aUE?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="column six bab">
        <div>
          <h3>Welcome</h3>
          <p>Here at Lebo Skin Care Center, we wanted you to meet and follow some of our patients. Check out photos, videos and written testimonials. Providing you this information helps to answer any questions you may have and also shows you how Lébo Skin Care Center can help you. Thank you for taking the journey with us!</p>
       </div>
  </div>
</div>






<div class="q-con">
<!-- ******************************************** START OF BOTOX QUERY ******************************************** --> 
<a href="" id="BOTOX<sup>®</sup>"></a>      
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'botox-cosmetic');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>BOTOX<sup>®</sup> Cosmetic | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s BOTOX<sup>®</sup> Cosmetic Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** -->     

<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->  
<a href="" id="CO2RE<sup>™</sup>"></a>     
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'co2re-laser');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>CO2RE<sup>™</sup> Laser | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-cl-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-cl-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s CO2RE<sup>™</sup> Laser Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** -->       

            
<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->   
<a href="" id="Chemical"></a>    
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'chemical-peel');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>Chemical Peel | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-cp-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-cp-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Chemical Peel Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 







<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->       
<a href="" id="Coolsculpting"></a>
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'coolsculpting-by-zeltiq');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>CoolSculpting<sup>®</sup> | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-cs-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-cs-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s CoolSculpting by Zeltiq<sup>®</sup> Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 

<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->   
<a href="" id="Cosmetic"></a>    
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'cosmetic-fillers');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>Cosmetic Fillers | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-cf-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-cf-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Cosmetic Fillers Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 



<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->   
<a href="" id="Eyelash"></a>    
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'eyelash-tinting');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>Eyelash Tinting | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-et-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-et-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Eyelash Tinting Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 


<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->       
<a href="" id="Juvéderm"></a>
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'juvederm-voluma-xc');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>Juvéderm Voluma<sup>™</sup> XC | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-vx-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-vx-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Juvéderm Voluma<sup>™</sup> XC Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 


<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->   
<a href="" id="Laser"></a>    
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'laser-hair-removal');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>Laser Hair Removal | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-lhr-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-lhr-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Laser Hair Removal Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 



<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->  
<a href="" id="Lebo"></a>    
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'lebo-skin-care-products');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>Lébo Skin Care Products | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-lsp-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-lsp-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Lébo Skin Care Products Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 

<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->       
<a href="" id="Leg"></a>
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'leg-vein-therepy');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>Leg Vein Therepy | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-lvt-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-lvt-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Leg Vein Therepy Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 

<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->       
<a href="" id="Permanent"></a>
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'permanent-makeup');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>Permanent Makeup | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-pm-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-pm-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Permanent Makeup Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 


<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->       
<a href="" id="Photorejuvenation"></a>
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'photorejuvenation');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>Photorejuvenation | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-prj-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-prj-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Photorejuvenation Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 




<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->       
<a href="" id="Tattoo"></a>
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'tattoo-removal');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>Tattoo Removal | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-tr-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-tr-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s Tattoo Removal Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 



<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->    
<a href="" id="VelaShape<sup>™</sup>"></a>   
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'velashape');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>VelaShape<sup>™</sup> | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-vs-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-vs-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s VelaShape<sup>™</sup> Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 




<!-- ******************************************** START OF BOTOX QUERY ******************************************** -->    
<a href="" id="VI"></a>   
<div class="journey-q">    
<div id="owl-carousel" class="owl-carousel ba-gallery">   
<?php  $args = array( 'post_type' => 'journeys', 'journey-services' => 'vi-peel');
$loop = new WP_Query( $args );
$lb = 0;
while ( $loop->have_posts() ) : $loop->the_post(); 
$lb++
?>

<!-- ******************************************** START OF BEFORE AND AFTER SECTION ******************************************** -->



      <div class="item">
          <div class="item-container group">
              <div class="group second vid-con">
                  <div class="column six vid-thumb ba">

                        <div class="before-b"> <img src="<?php the_field('before_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>Before</span> 
                        </div>
                        <div class="after-b"> <img src="<?php the_field('after_image'); ?>" alt="Before and After Images Lebo, York PA" /> <span>After</span> 
                        </div>
                  
                  </div>
                  <div class="column six bab">
                      <div class="vid-desc">
              <h3>VI PEEL<sup>™</sup> | <?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="#inline-vp-<?= $lb; ?>" class="jr journey-vid-link">Watch <?php the_title(); ?>'s Video Journey</a>
                      </div>
                  </div>
              </div>

          <div id="inline-vp-<?= $lb; ?>"> 
          <p class="patient-title"><?php the_title(); ?>'s VI PEEL<sup>™</sup> Journey</p>
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



      </div><!-- END OF item-container group -->
  </div><!-- END OF item -->

   


<!-- ******************************************** END OF BEFORE AND AFTER SECTION ******************************************** -->
<?php endwhile; ?>    
</div>
</div>
<!-- ******************************************** END OF BOTOX QUERY ******************************************** --> 






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
