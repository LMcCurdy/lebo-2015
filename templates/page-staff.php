<?php
/*
Template Name: Staff
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
<h1 id="sub-header-over" itemprop="headline"><?php the_title(); ?></h1>
</div>
</div>



      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-8 clearfix" role="main">

            
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
            
              <section class="page-content entry-content clearfix" itemprop="articleBody">
                					<?php if( have_rows('staff_members') ): $lb = 0; ?>


						<div id="staff-con" class="group">

						<?php while( have_rows('staff_members') ): the_row(); $lb++;

							// vars
							$image = get_sub_field('image');
							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$bio = get_sub_field('bio');
							$fav = get_sub_field('favorites');
							$cred = get_sub_field('credentials');
							?>

							<div class="staff-member">
								<div class="image-c">
					            			<img src="<?= $image; ?>" alt="Lebo Staff">
					            		</div>
					            		<div class="name-c">
					            			<p class="em-name"><?= $name; ?></p>
					            			<p class="em-title"><?= $title; ?></p>
					            		</div>
						            		<div class="em-b"><?= $bio; ?></div>


						            	<?php if ( $cred ) { ?>
						            				<a href="#inline-<?= $lb; ?>" class="various fa fa-list-alt">Credentials</a> 
												   
														    <div id="inline-<?= $lb; ?>">             
														
														       <div class="cred-name">
														       <?= $name; ?>'s <br/>Credentials
														       </div>

														        <div class="cred-con">
														        	<?= $cred; ?>
														        </div>
														        <?php if ( $fav ) { ?>
														        <a href="#inline_two-<?= $lb; ?>" class="various fa fa-heart"></a>
														        <?php } ?>
														    </div>
													
												<?php } ?>

												<?php if ( $fav ) { ?>
												    <a href="#inline_two-<?= $lb; ?>" class="various fa fa-heart">Favorites</a>
												    <div id="inline_two-<?= $lb; ?>">             
														
														       <div class="cred-name fav-corner">
														       <img src="<?= $image; ?>" alt="Lebo Staff Favorites">
														       </div>

														        <div class="cred-con fav-tex">
														        	<?= $fav; ?>
														        </div>
														        <?php if ( $cred ) { ?>
														        <a href="#inline-<?= $lb; ?>" class="various fa fa-list-alt"></a> 
														        <?php } ?>
														       
														    </div>
												<?php } ?>


								

							</div>

						<?php endwhile; ?>

					</div>

					<?php endif; ?>
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
