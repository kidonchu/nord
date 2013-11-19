<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|', true, 'right') ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
<link href='<?php echo get_stylesheet_directory_uri() ?>/favicon.ico' rel='shortcut icon'>

<!-- <link rel="stylesheet" href="http://basehold.it/24"> -->

<?php wp_head() ?>
</head>

<body <?php body_class() ?>>

  <?php do_action('before') ?>

  <!-- ===================================================================== -->
  <!-- ============================ HEADER ================================= -->
  <!-- ===================================================================== -->
  <header class="header" role="banner">

    <div class="container">
      <div class="logo">

        <!-- Not visible. Used for SEO optimization -->
        <h1 class="logo-text">
          <?php bloginfo('name') ?>
        </h1>

        <!-- Logo image -->
        <a href="<?php echo esc_url(home_url('/')) ?>" rel="home" class="logo-link">
          <img class="logo-img"
               src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/img/logo.png') ?>"
               alt="National Organization for Renal Disease">
        </a>

      </div>

      <div class="main-btn-grp">
        <a href="<?php echo esc_url(home_url('get-involved/donate')) ?>" class="btn-donate">DONATE</a>
        <a href="<?php echo esc_url(home_url('get-involved/volunteer')) ?>" class="btn-volunteer">VOLUNTEER</a>
      </div>

      <nav class="main-navigation">
        <ul class="main-navs">
          <li class="main-nav">
            <a class="main-nav-link" href="<?php echo esc_url(home_url('about-us/contact-us')) ?>" data-target="contact-us">
              <span>Contact</span>
            </a>
          </li>
          <li class="main-nav">
            <a class="main-nav-link" href="<?php echo esc_url(home_url('renal-disease-screening-diagnostics')) ?>" data-target="renal-disease-screening-diagnostics">
              <span>Screening</span>
            </a>
          </li>
          <li class="main-nav">
            <a class="main-nav-link" href="<?php echo esc_url(home_url('resources/renal-disease')) ?>" data-target="renal-disease">
              <span>Resources</span>
            </a>
          </li>
          <li class="main-nav">
            <a class="main-nav-link" href="<?php echo esc_url(home_url('get-involved/events')) ?>" data-target="events">
              <span>Events</span>
            </a>
          </li>
          <li class="main-nav">
            <a class="main-nav-link" href="<?php echo esc_url(home_url('about-us/mission')) ?>" data-target="mission">
              <span>About</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

  </header>

  <!-- ===================================================================== -->
  <!-- ============================= PAGE ================================== -->
  <!-- ===================================================================== -->
  <div class="content clearfix">
