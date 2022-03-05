<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500&display=swap" rel="stylesheet">
		

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header id="header" class="header <?php if(wp_is_mobile()){ echo 'mobile-header'; } ?>" role="banner">
				<div class="container flex flex-space-between">
					<!-- logo -->
					<div class="logo">
						<?php  if ( function_exists( 'the_custom_logo' ) ) {
				            the_custom_logo();
				            } ?>
					</div>
					<!-- /logo -->
					
					<?php if( wp_is_mobile() ): ?>
						<div class="mob-menu-bar">
							<span>MENU</span>
							<div>
								<div class="bar1"></div>
								<div class="bar2"></div>
								<div class="bar3"></div>
							</div>						
						</div>						
					<?php endif; ?>	
						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->
				     
				</div><!-- /container -->
			</header>
			<!-- /header -->



			<div class="body-content">