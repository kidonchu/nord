<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|', true, 'right') ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
<link href='<?php echo get_stylesheet_directory_uri() ?>/favicon.ico' rel='shortcut icon'>

<link rel="stylesheet" href="http://basehold.it/24">

<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php do_action('before') ?>
	<div class="container">
		<header class="header" role="banner">
			<div class="row">
				<div class="col-md-6">
					<h1 class="logo">
						<a href="<?php echo esc_url(home_url('/')) ?>" rel="home">
							<?php bloginfo('name') ?>
							<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="NORD Logo">
						</a>
					</h1>
					<!-- <h2 class="slogan"><?php bloginfo('description') ?></h2> -->
				</div>
			</div>
		</header>

		<nav role="navigation">
			<div class="navbar-toggle-wrapper">
				<button type="button" class="navbar-toggle-button" data-toggle="collapse" data-target=".main-navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="skip-link"><a class="screen-reader-text" href="#content"><?php _e('Skip to content', 'nord') ?></a></div>

			<?php wp_nav_menu(array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse main-navbar',
				'menu_class'      => 'main-nav',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
			))
			?>
		</nav>

		<div class="content">
