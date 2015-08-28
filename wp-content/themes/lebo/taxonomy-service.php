<?php get_header(); 

	$find = array('®','™');
	$rplc = array('<sup>®</sup>','<sup>™</sup>');

?>
<main class="testimonials giveback" id="ldm-blog">
  <section>
    
    <div class="sub-header container clearfix">

    <div class="background-header"><img src="http://www.wecoyorkpa.com/lebo/wp-content/uploads/2015/07/lebo-testimonials-header1.jpg"></div>

</div>

    <h1 class="hb-page-title" id="second-title"><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo str_replace($find,$rplc,$term->name); ?> Testimonials</h1>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">

<div class="columns eight group left-board">            
<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="testimonial-con">
    <div class="test-bod"> 
    <?php the_content(); ?>
    </div>

    <p class="test-author"><?php the_title(); ?></p>
    </div>
  <?php endwhile; wp_reset_query(); ?>
<?php else: ?>
  <h2>No posts found</h2>
<?php endif; ?>
  <div class="bump group">
<?php if ( $wp_query->max_num_pages > 1 ) : ?>

  <div class="prev">
    <?php next_posts_link( __( '&larr; Older Testimonials' ) ); ?>
  </div>
  <div class="next">
    <?php previous_posts_link( __( 'Newer Testimonials &rarr;' ) ); ?>
  </div>

<?php endif; ?>
  </div>
</div>

<div class="columns four group sidebar">  
<?php dynamic_sidebar( 'testimonials' ); ?>
</div>


            
              </section> <!-- end article section -->
              
            
            </article> <!-- end article -->
                        
           

          </div> <!-- end #main -->

      
        </div> <!-- end #content -->

      </div> <!-- end .container -->



     </section>
</main>
<?php get_footer(); ?>
