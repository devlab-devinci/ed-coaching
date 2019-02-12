<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500,700|Source+Sans+Pro:400,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header" role="banner">

            <div class="nav-left-items">
                <div class="nav-wrap">
                    <a href="#"><img src="" alt="logo"></a>
                </div>
            </div>

            <div class="nav-right-items">
                <div class="nav-wrap">
	                <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
                </div>
            </div><!-- .navigation-top -->

	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
