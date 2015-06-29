<?php
/*
Template Name: Page w/out Header Image
*/
?>

<?php get_header(); ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="sub-page">
  <section>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

              <h1 id="no-head-h1"> <?php the_title(); ?></h1>
              <h2 id="no-head-h2"><?php the_field ('sub_page_h2'); ?></h2>

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">


                <?php if ( is_page( 351 ) ) { ?>

                <?php if( have_rows('faqs') ): ?>

<div class="faq-block-con group">

    <?php while( have_rows('faqs') ): the_row(); 
    // vars
    $question = get_sub_field('question');
    $answer = get_sub_field('answer');
    ?>

    <div class="question-block">

        <p class="que"><?php echo $question; ?></p>
        <p class="ans"><?php echo $answer; ?></p>

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
