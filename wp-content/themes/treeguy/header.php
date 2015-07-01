<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TreeGuy
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script src="//use.typekit.net/nes7uij.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'treeguy' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="top-bar">
			<div class="inner-wrap clear">
				<div class="contact-info">
	                <ul class="clear">
	                    <li><i class="fa fa-phone"></i>(401) 741-4918</li>
	                    <li><i class="fa fa-envelope"></i>treeguydrew@gmail.com</li>
	                    <li><i class="fa fa-map-marker"></i>10 Autumn Lane, Westerly, RI 02891</li>
	                </ul>
	            </div><!-- contact-info -->
            </div><!-- inner-wrap -->
		</div><!-- top-bar -->

		<div class="site-branding">
			<div class="inner-wrap clear">
				<?php if ( get_theme_mod( 'img-upload' ) ) : ?>
				    <div class='site-logo' style="width=200px">
				        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'img-upload' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				    </div>
				<?php endif; ?>
				<div class="branding-title">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div><!-- branding-title -->
			</div><!-- inner-wrap -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="inner-wrap">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'treeguy' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				<div class="search-toggle">
				    <i class="fa fa-search"></i>
				    <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'my-simone' ); ?></a>
				</div>
			</div><!-- inner-wrap -->
		</nav><!-- #site-navigation -->

		<div id="search-container" class="search-box-wrapper clear">
		    <div class="search-box clear">
				<div class="inner-wrap">
			        <?php get_search_form(); ?>
				</div><!-- inner-wrap -->
		    </div><!--search-box-->
		</div><!-- search-box-wrapper -->
	</header><!-- #masthead -->
	<?php if ( ! is_front_page() ) {


	echo '<div class="breadcrumbs">';
			echo '<div class="inner-wrap clear">';
		    	the_title( '<h2 class="entry-title bc-title">', '</h2>' );
		    	echo '<ul>';
					echo '<li><a href="index.html">Home</a></li>';
					echo '<li><i class=" fa fa-angle-right"></i></li>';
					echo '<li><span>';
						the_title();
					echo '</span></li>';
		    	echo '</ul>';
	    	echo '</div><!-- inner-wrap -->';
	    echo '</div><!-- breadcrumbs -->';
	}?>
	<div id="content" class="site-content">
