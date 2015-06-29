<?php
/*
Template Name: Page w/ Header Image
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
<h2 id="sub-header-over" itemprop="headline"><?php the_field ('sub_page_h2'); ?></h2>
</div>
</div>

    <h1 class="hb-page-title" id="second-title"> <?php the_title(); ?></h1>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">

                 <?php if ( is_page( 433 ) ) { ?>

                <?php if( have_rows('specials') ): ?>

<div class="faq-block-con group">

    <?php while( have_rows('specials') ): the_row(); 
    // vars
    $month = get_sub_field('month');
    $special = get_sub_field('special');
    ?>

    <div class="question-block">

        <p class="que"><?php echo $month; ?></p>
        <p class="ans"><?php echo $special; ?></p>

    </div>

  <?php endwhile; ?>

  </div>

<?php endif; ?>

                      <?php } ?>  



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
