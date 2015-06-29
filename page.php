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



     </section>
</main>
<?php get_footer(); ?>
