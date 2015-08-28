<?php get_header(); ?>
<main id="ldm-blog">
	<section>
		<div class="container np">

		<div class="blog-header">
		<img src="http://www.wecoyorkpa.com/lebo/wp-content/uploads/2015/06/banner-lobo-beautiful-blog1.jpg">
		<div class="header-titles-blog">
		<p class="blog-header-one">Lébo Skin Care Blog</p>
		<p class="blog-header-two">Keep Your Skin Beautiful</p>
		</div>
		</div>


			<div id="content" class="row">
				<div id="main" role="main">



					<article id="post-<?php the_ID(); ?>" role="article" <?php post_class(); ?>>

						<section class="page-content entry-content" itemprop="articleBody">

						<!--<div class="top-cats single-cats group">
							<p class="top-title">Top Categories</p>

							<div class="columns three group"><a href="<?php the_field('category_circle_one', get_option('page_for_posts')); ?>"><p id="sc">Skin Care</p></div></a>
							<div class="columns three group"><a href="<?php the_field('category_circle_two', get_option('page_for_posts')); ?>"><p id="lb">Lébo</p></div></a>
							<div class="columns three group"><a href="<?php the_field('category_circle_three', get_option('page_for_posts')); ?>"><p id="hw">Health &amp; Wellness</p></div></a>
							<div class="columns three group"><a href="<?php the_field('category_circle_four', get_option('page_for_posts')); ?>"><p id="rp">Recipes</p></div></a>
						</div>-->


<div class="columns eight group left-board">	



<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  	<?php $featured = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>


<div class="first-post-head" style="background-image: url('<?= $featured[0]; ?>')"></div>

<div class="first-post-body single-post-leb">
<h1>
<?php the_title(); ?>
</h1>
<p class="cats">Posted In:
<?php
$categories = get_the_category();
$separator = ', ';
$output = '';
if($categories){
	foreach($categories as $category) {

		$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
	}
echo trim($output, $separator);
}
?>
</p>
<p class="date"><?php the_time('F j, Y'); ?></p>
<div class="ex-first">
<?php the_content(); ?>
</div>
</div>

<div class="social-media-custom group">
<div><a class="fa fa-twitter" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a></div>
    <div><a class="fa fa-facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Share on Facebook." onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a></div>
   <div><a class="fa fa-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&title=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="Share on LinkedIn" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" ></a></div>
   <div> <a class="fa fa-google-plus" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a></div>

</div>

  <?php endwhile; wp_reset_query(); ?>
<?php endif; ?>


<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>2,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
	if ($tags) {
echo '<p class="related">Related Posts</p>';
while ($my_query->have_posts()) : $my_query->the_post();
$featured = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<div class="sim-post">
<div class="first-post-head" style="background-image: url('<?= $featured[0]; ?>')"></div>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</div>

<?php
endwhile;
}
wp_reset_query();
}
?>


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

