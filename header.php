<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<section class="header">
            <div class="header-content">
                                                            <a class="logo" href="<?php echo site_url(); ?>" <p class="logo"><?php bloginfo('name'); ?></p>
            </div>
        </section>
	<div id="content" class="site-content">
		<style>
.header {
    height: 50px;
    width: 3000px;
}
.header {
    padding: 30px 45px;
    background-color: #FFF;
    border-bottom: 1px solid #f2f2f2;
    margin-bottom: 50px;
}
div {
    display: block;
}
* {
    box-sizing: border-box;
}
article, aside, footer, header, hgroup, main, nav, section {
    display: block;
}
body {
    background-color: #fbfbfb;
    font-size: 16px;
    line-height: 1.8;
    color: #787c7f;
    min-width: 350px;
    font-family: 'Noto Sans';
    font-weight: 300;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
}
.header {
    padding: 30px 45px !important;
    background-color: #FFF !important;
    border-bottom: 1px solid #f2f2f2 !important;
    margin-bottom: 50px !important;
}
.header #logo {
    color: #333;
    display: inline-block;
    text-decoration: none;
    height: 50px;
    width: 300px;
    background-position: center left;
    background-size: contain;
    background-repeat: no-repeat;
    box-sizing: border-box;
}
.header-content {
    display: block;
}
		</style>
