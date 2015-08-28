<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<?php /*
		// icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) 
		// <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		// <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=2">
*/	?>
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/dimages/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/dimages/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-8890977-1', 'auto');
ga('send', 'pageview');
</script>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div>
			<nav id="mmenu" class="mmenu">
				<?php wp_nav_menu( array( 'theme_location' => 'mobilenav', 'menu_class' => 'children', 'container' => '' ) ); ?>
			</nav>
			<header class="group">
				<div>
					<a href="#mmenu" class="mmenu-trigger"></a>
					<a href="<?php bloginfo( 'url' ) ?>/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-lebo-skin.png" alt="Lébo"></a>
					<aside>
						<div class="toptier">
							<nav>
								<?php wp_nav_menu( array( 'theme_location' => 'topHeader', 'container' => '' ) ); ?>
							</nav>
						</div>
						<p class="newsletter"><a href="http://visitor.r20.constantcontact.com/manage/optin?v=001o9BVU3HO12wCdjsSBp2yvmO31KSd5NWI_gKB1FUywcojF2sT6gYWykZpstn1lnJKXqajGI3k3U3qsxawgSQNPbzNtpbCVT2OC87uf0tK3VhpBixVSfe8BRA3Q6QYes5CiJSup6Nkwt2qzYwXGN55f2UQ8MoibvXVVSWckBBFfKpEPogiBssgAg%3D%3D" target="_blank">Newsletter Sign-Up</a></p>
						<div class="social">
						<div class="phone"><span>York: <?php the_field('york_phone', 'options'); ?></span><span>Hanover: <?php the_field('hanover_phone', 'options'); ?></span></div>
							<ul>
								<li><a href="<?php the_field('twitter_link', 'options'); ?>" class="fa-twitter" target="_blank"></a></li>
								<li><a href="<?php the_field('facebook_link', 'options'); ?>" class="fa-facebook" target="_blank"></a></li>
								<li><a href="<?php the_field('pinterest_link', 'options'); ?>" class="fa-pinterest-p" target="_blank"></a></li>
								<li><a href="<?php the_field('youtube_link', 'options'); ?>" class="fa-youtube" target="_blank"></a></li>
							</ul>
						</div>
					</aside>
				</div>
				<div class="sitenav">
					<div>
						<nav class="main">
							<ul>
								<li><a href="index.html" class="has-dd">Women</a>
									<div class="dd">
										<ul class="parents">
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/women-legs.jpg" alt=""></figure><span>Body</span></a></li>
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/women-face.jpg" alt=""></figure><span>Face</span></a></li>
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/women-smile.jpg" alt=""></figure><span>Eyes</span></a></li>
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/women-tattoo.jpg" alt=""></figure><span>Tattoo Removal</span></a></li>
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/women-shoulder.jpg" alt=""></figure><span>Skin Analysis</span></a></li>
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wome-arms.jpg" alt=""></figure><span>Hair Removal</span></a></li>
										</ul>
						

						<?php wp_nav_menu( array( 'theme_location' => 'womenBody', 'menu_class' => 'children', 'container' => '' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'womenFace', 'menu_class' => 'children', 'container' => '' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'womenEyes', 'menu_class' => 'children', 'container' => '' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'tattooRemoval', 'menu_class' => 'children', 'container' => '' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'skin', 'menu_class' => 'children', 'container' => '' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'womenHair', 'menu_class' => 'children', 'container' => '' ) ); ?>	
						<ul class="children intro-instructions" style="display: block;"><li>Here at Lèbo we offer a wide variety of services. We've divided up those services into six different categories based on certain areas of the body. Click the area you're interested in learning more about to see all of the services we have to offer.</li></ul>			
										
									</div>
								</li>
								<li><a href="index.html" class="has-dd">Men</a>
									<div class="dd">
										<ul class="parents">
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/men-abs.jpg" alt=""></figure><span>Body</span></a></li>
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/men-face.jpg" alt=""></figure><span>Face</span></a></li>
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/men-front.jpg" alt=""></figure><span>Hair Removal</span></a></li>
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/men-tattoo.jpg" alt=""></figure><span>Tattoo Removal</span></a></li>
											<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/men-back.jpg" alt=""></figure><span>Skin Analysis</span></a></li>
										</ul>
						<?php wp_nav_menu( array( 'theme_location' => 'menBody', 'menu_class' => 'children', 'container' => '' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'menFace', 'menu_class' => 'children', 'container' => '' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'menHair', 'menu_class' => 'children', 'container' => '' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'tattooRemoval', 'menu_class' => 'children', 'container' => '' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'skin', 'menu_class' => 'children', 'container' => '' ) ); ?>
						<ul class="children intro-instructions" style="display: block;"><li>Here at Lèbo we offer a wide variety of services. We've divided up those services into five different categories based on certain areas of the body. Click the area you're interested in learning more about to see all of the services we have to offer.</li></ul>	
									</div>
								</li>
						<?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => '', 'items_wrap' => '<li>%3$s</li>' ) ); ?>
							</ul>
						</nav>
						
					</div>
				</div>
			</header>
			<section class="main">
<?php /*
    <header class="header">

      <nav role="navigation">
        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo('name'); ?></a>

            </div>

            <div class="navbar-collapse collapse navbar-responsive-collapse">
              <?php bones_main_nav(); ?>

            </div>
          </div>
        </div> 
        
      </nav>




		</header> <?php // end header ?>

*/ ?>