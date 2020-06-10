<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
	<!-- Fonts from google font api -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500&family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<header class="mt-0">
		<!-- If the user has selected a banner image -->
		<?php if(has_header_image()): ?>
			<div class="header-image header-image-size" style="background-image:url(<?php echo get_header_image(); ?>);">
				<!-- parent container to the nav bar -->
				<nav class="navbar navbar-expand-md navbar-dark top-bar shadow" role="navigation">
					<div class="container-fluid">
						<!-- Branding/home button -->
						<a class="navbar-brand" href="<?php echo home_url(); ?>">
							<?php 
								if ( function_exists( 'the_custom_logo' ) ){ 
									the_custom_logo();
								}
							?>
						</a>
						<!-- Allows user to toggle mobile menu -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-controls="bs-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
							<!-- Hamburger menu -->
							<span class="navbar-toggler-icon"></span>
						</button>
						<!-- Dynamically creates menu -->
						<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'depth' => 2,
									'container' => 'div',
									'container_class' => 'collapse navbar-collapse',
									'container_id' => 'bs-navbar-collapse-1',
									'menu_class' => 'navbar-nav mr-auto',
									'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
									'walker' => new WP_Bootstrap_Navwalker(),
								)
							);
						?>
					</div>
				</nav>
				<h1 class="page-heading"><?php the_title(); ?></h1>
			</div>
		<?php endif ?>

		<!-- If the user has selected no header -->
		<?php if(!has_header_image()):?>
			<p>no header</p>
		<?php endif; ?>
	</header>
	
