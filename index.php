<?php get_header(); ?>
<main id="ldm-blog">
	<section>
		<div class="container np">

		<div class="blog-header">
		<img src="http://www.gavinadvertising.com/leboskincare.com/wp-content/uploads/2015/06/banner-lobo-beautiful-blog1.jpg">
		<div class="header-titles-blog">
		<h1>Lébo Skin Care Blog</h1>
		<h2>Keep Your Skin Beautiful</h2>
		</div>
		</div>


			<div id="content" class="row">
				<div id="main" role="main">



					<article id="post-<?php the_ID(); ?>" role="article" <?php post_class(); ?>>

						<section class="page-content entry-content" itemprop="articleBody">

						<div class="top-cats group">
							<p class="top-title">Top Categories</p>

							<div class="columns three group"><a href="#"><p id="sc">Skin Care</p></div></a>
							<div class="columns three group"><a href="#"><p id="lb">Lébo</p></div></a>
							<div class="columns three group"><a href="#"><p id="hw">Health &amp; Wellness</p></div></a>
							<div class="columns three group"><a href="#"><p id="rp">Recipies</p></div></a>
						</div>


<div class="columns eight group">	

<?php
$queryObject = new  Wp_Query( array(
    'showposts' => 5,
    'post_type' => array('post'),
    'category_name' => blog,
    'orderby' => 1,
    ));

// The Loop
if ( $queryObject->have_posts() ) :
    $i = 0;
    while ( $queryObject->have_posts() ) :
        $queryObject->the_post();
        if ( $i == 0 ) : ?>
            <div class="first-post">
            <a href="<?php the_permalink(); ?>" title="<?php printf(__( 'Read %s', 'wpbx' ), wp_specialchars(get_the_title(), 1)) ?>">
                <?php the_post_thumbnail('sidethumbs'); ?>
            </a>
        <?php endif;
        if ( $i != 0 ) : ?>
            <div class="secondary-post">
        <?php endif; ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
        </a>
        </div>
        <?php $i++;
    endwhile;
endif; ?>
</div>

<div class="columns four group sidebar">	
<?php dynamic_sidebar( 'sidebar1' ); ?>
</div>



						</section>

						

					</article>

				</div>
				<?php // get_sidebar(); ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>

