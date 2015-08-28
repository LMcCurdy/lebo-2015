<?php
/*
Template Name: Gift Cards
*/
?>

<?php get_header(); ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="giveback" id="ldm-blog">
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

    <h1 class="hb-page-title" id="second-title"><?php the_title(); ?></h1>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">
<div id="pding" class="group">
              <div class="left-shortcode">
                <?php the_content(); ?>
              </div>

              <div class="right-shortcode">
              <div class="gift-con">
              <h2>Purchase Gift Certificate Here</h2>
<form action="https://www.e-junkie.com/ecom/gb.php?c=cart&i=LSC-GC-10339382288&cl=142401&ejc=2" target="ej_ejc" method="POST" accept-charset="UTF-8">
<p>Please enter the name of the gift card recipient and the name of who the gift card is from.</p>
<input type="hidden" name="on0" value="To"/>
<div class="gf-con">
To:<br/>
<input type="text" name="os0" maxlength="200"/>
</div>
<input type="hidden" name="on1" value="From"/>
<div class="gf-con">
From:<br/>
<input type="text" name="os1" maxlength="200"/>
</div>
<p>In the pop-up window you'll be able to add the desired gift certificate amount. Once entered, please proceed to checkout.</p>
<br/>
<input type="image" src="http://www.e-junkie.com/ej/ej_add_to_cart.gif" border="0"  alt="Add to Cart" class="ec_ejc_thkbx" onClick="javascript:return EJEJC_lc(this.parentNode);"/>
</form>

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



     </section>
</main>
<?php get_footer(); ?>
