<?php get_header(); ?>
<main class="testimonials giveback" id="ldm-blog">
  <section>
    
    <div class="sub-header container clearfix">
<?php 
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id; 
$thumbnail = get_field('product_category_image', $queried_object); 
?>

    <div class="background-header"><img src="<?= $thumbnail; ?>" /></div>

</div>

    <h1 class="hb-page-title" id="second-title"><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">

  <div class="product-intro">
  <h2>Why Choose Lèbo Products</h2>
  <p>Lébo Skin Care products are all medical-grade, FDA-approved products designed to make a long-term physical change to your skin. Our best selling products have high customer satisfaction and are guaranteed to make you feel #LeboBeautiful.</p>
  </div>
<div class="products-page" class="group">
<div id="prod-con" class="group">
<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  

<div class="product-sliv">
                <div class="image-c">
                   <?php the_post_thumbnail('full'); ?>
                </div>
                <div class="name-c">
                    <p class="em-name"><?php the_title(); ?></p>
                </div>
                <div class="em-b">
                    <?php the_content(); ?>
                </div>

                                   
</div>
  <?php endwhile; wp_reset_query(); ?>
  <div class="prod-con-form">
<?php echo do_shortcode( '[contact-form-7 id="2344" title="Simple Consultation"]' ); ?>
</div>
</div>
</div>

<?php else: ?>
  <h2>No posts found</h2>
<?php endif; ?>



<?php if ( $wp_query->max_num_pages > 1 ) : ?>
  <div class="prev">
    <?php next_posts_link( __( '&larr; Older posts' ) ); ?>
  </div>
  <div class="next">
    <?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
  </div>
<?php endif; ?>

</div>




            
              </section> <!-- end article section -->
              
            
            </article> <!-- end article -->
                        
           

          </div> <!-- end #main -->

      
        </div> <!-- end #content -->

      </div> <!-- end .container -->



     </section>
</main>
<?php get_footer(); ?>
