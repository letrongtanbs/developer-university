<!DOCTYPE html>
<html>
	<head>
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="site-header">
		  <div class="container">
		    <h1 class="school-logo-text float-left">
		      <a href="#"><strong>University of the</strong> Developer</a>
		    </h1>
		    <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
		    <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
		    <div class="site-header__menu group">
		      <nav class="main-navigation">
		        <ul>
		          <li <?php  if(is_page('about-us') or wp_get_post_parent_id(0) == 15) echo 'class="current-menu-item"' ?> ><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li> 
		          <!-- is_page('about-us') or wp_get_post_parent_id(0) == 15 to check weather it's on "about us" or child of "about us" page -->
		          <li><a href="<?php echo site_url('/programs'); ?>">Programs</a></li>
		          <li><a href="<?php echo site_url('/events'); ?>">Events</a></li>
		          <li><a href="<?php echo site_url('/campuses'); ?>">Campuses</a></li>
		          <li><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
		        </ul>
		      </nav>
		      <div class="site-header__util">
		        <a href="<?php echo site_url('/login'); ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
		        <a href="<?php echo site_url('/sign-up'); ?>" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
		        <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
		      </div>
		    </div>
		  </div>
		</header>