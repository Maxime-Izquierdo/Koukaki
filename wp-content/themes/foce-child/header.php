<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
        
            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
        
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <!-- <span class="line"></span>
                <span class="line"></span> -->
            </button>
            <ul class="menu-burger">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants"></a></li>
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/footer.png'; ?> " alt="Studio Koukaki"></a></li>
            </ul>
           
            <div class="fleurs">
                <img class="orchid" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?> " alt="Orchid">
                <img class="sunflower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?> "alt="Sunflower">
                <img class="random-flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png' ; ?> "alt="Random Flower">
                <img class="flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?> " alt="Flower">
                <img class="hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'; ?> " alt="Hibiscus">
            </div>

            <div class="chats">
                <img class="cat1 logoAnim" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat1.png'; ?> "alt="Cat 1">
                <img class="cat2 logoAnim" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat2.png'; ?> "alt="Cat 2">
                <img class="cat3 logoAnim" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat3.png'; ?> " alt="Cat 3">
            </div>


		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
