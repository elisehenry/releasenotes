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
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
<section class="header">
            <div class="header-content">
                                                            <a class="logo" href="<?php echo site_url(); ?>" <p><?php bloginfo('name'); ?></p>
            </div>
        </section>
	<div id="content" class="site-content">
		<style>
			.header {
    height: 50px;
    width: 2000px;
}
(index):76
.header {
    /* padding: 30px 45px; */
    background-color: #FFF;
    border-bottom: 1px solid #f2f2f2;
    margin-bottom: 50px;
}
(index):91
user agent stylesheet article, aside, footer, header, hgroup, main, nav, section {
    display: block;
}
			element.style {
}
default.less:29
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
Inherited from body
default.less:17
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
element.style {
}
default.less:41
.header {
    padding: 30px 45px;
    background-color: #FFF;
    border-bottom: 1px solid #f2f2f2;
    margin-bottom: 50px;
}
normalize.less:33
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
default.less:29
* {
    box-sizing: border-box;
}
user agent stylesheet
article, aside, footer, header, hgroup, main, nav, section {
    display: block;
}
Inherited from body
default.less:17
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
		</style>
