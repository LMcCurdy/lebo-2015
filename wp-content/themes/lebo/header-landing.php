<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
		
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/assets/css/landing.css"  media="all" />
		
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="/lebo/wp-content/themes/lebo/assets/js/owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="/lebo/wp-content/themes/lebo/assets/js/scripts-landing.js"></script>
	</head>
	
	<?php
		global $post; 
		$parent_id = $post->post_parent;
		if($parent_id == 2820)
			$parent_id = $post->ID;
	?>
	
	<body <?php body_class(); ?>>
		<div>
			<header>
				<div>
					<a href="<?php bloginfo('url') ?>/" class="logo"><img src="<?= get_template_directory_uri(); ?>/assets/images/logo-lebo-skin.png" alt="Lébo"></a>
					<aside>
						<div class="phone"><span>Call Today <span><?php the_field('phone', $parent_id); ?></span></span></div>
					
					</aside>
				</div>
			</header>
			<section class="main">