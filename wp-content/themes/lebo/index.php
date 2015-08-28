<?php get_header(); ?>
<main id="ldm-blog">
	<section>
		<div class="container np">

		<div class="blog-header">
		<img src="http://www.wecoyorkpa.com/lebo/wp-content/uploads/2015/06/banner-lobo-beautiful-blog1.jpg">
		<div class="header-titles-blog">
		<h1 class="blog-header-one">Lébo Skin Care Blog</h1>
		<h2 class="blog-header-two">Keep Your Skin Beautiful</h2>
		</div>
		</div>


			<div id="content" class="row">
				<div id="main" role="main">



					<article id="post-<?php the_ID(); ?>" role="article" <?php post_class(); ?>>

						<section class="page-content entry-content" itemprop="articleBody">

						<div class="top-cats group">
							<p class="top-title">Top Categories</p>

							<div class="columns three group"><a href="<?php the_field('category_circle_one', get_option('page_for_posts')); ?>"><p id="sc">Skin Care</p></div></a>
							<div class="columns three group"><a href="<?php the_field('category_circle_two', get_option('page_for_posts')); ?>"><p id="lb">Lébo</p></div></a>
							<div class="columns three group"><a href="<?php the_field('category_circle_three', get_option('page_for_posts')); ?>"><p id="hw">Health &amp; Wellness</p></div></a>
							<div class="columns three group"><a href="<?php the_field('category_circle_four', get_option('page_for_posts')); ?>"><p id="rp">Recipes</p></div></a>
						</div>



<div class="columns eight group left-board">	



<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  	<?php $featured = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<?php if( $wp_query->current_post == 0 && !is_paged() ) { /*first post*/ ?>


<div class="first-post-head" style="background-image: url('<?= $featured[0]; ?>')"></div>

<div class="first-post-body">
<h4>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h4>
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
<?php the_excerpt(); ?>
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

<?php } else { ?>

<div class="secondary-post group">

<div class="columns four post-sec post-back" style="background-image: url('<?= $featured[0]; ?>')"></div>

<div class="columns eight post-sec right-board">
<h4>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h4>
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
<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
</div>
<div class="social-media-custom">
<div><a class="fa fa-twitter" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a></div>
    <div><a class="fa fa-facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Share on Facebook." onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a></div>
   <div><a class="fa fa-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&title=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="Share on LinkedIn" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" ></a></div>
   <div> <a class="fa fa-google-plus" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a></div>

</div>


</div>

    <?php } ?>
  <?php endwhile; wp_reset_query(); ?>
<?php else: ?>
  <h4>No posts found</h4>
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

