<?php
/*
Template Name: Awards
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

</div>
</div>

    <h1 class="hb-page-title" id="second-title"> <?php the_title(); ?></h1>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">
                
                  <?php

                    // check if the repeater field has rows of data
                    if( have_rows('awards') ):

                      // loop through the rows of data
                        while ( have_rows('awards') ) : the_row(); 

                        // display a sub field value
                           // the_sub_field('sub_field_name');?>

                          
                           <div class="awards" style="background-image:url(<?= the_sub_field('image'); ?>);">

                              <h2><?= the_sub_field('title'); ?></h2>
                              <p><?= the_sub_field('description'); ?></p>

                           </div>




                       <?php endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>

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
