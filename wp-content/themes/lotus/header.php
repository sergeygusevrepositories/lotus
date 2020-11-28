<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage lotus
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="header_container">
        <div class="header_row">
            <a href="<?php echo home_url(); ?>" class="header_logo">
                <img src="<?php bloginfo("template_directory")?>/img/logo.svg" alt="alt">
            </a>
            <div class="header_right">
                <div class="header_geo">
                    <img src="<?php bloginfo("template_directory")?>/img/h-icon1.svg" alt="alt">
                    <p>275 Grove St Suit 2-400
                        Newton, MA 02466</p>
                </div>
                <div class="header_mail">
                    <img src="<?php bloginfo("template_directory")?>/img/h-icon2.svg" alt="alt">
                    <a href="mailto:ef@lotuspsychiatric.com">ef@lotuspsychiatric.com</a>
                </div>
                <div class="header_tel">
                    <img src="<?php bloginfo("template_directory")?>/img/h-icon3.svg" alt="alt">
                    <a href="tel:617-992-4456" class="tel">617-992-4456
                    </a>
                </div>
                <div class="btn_mnu">
                    <div class="btn_row"></div>
                    <div class="btn_row"></div>
                    <div class="btn_row"></div>
                </div>
            </div>
        </div>
    </div>
    <nav class="header_nav">
        <?php $args = [
            'theme_location' => 'top',
            'container' => '',
            'menu_class' => 'header_ul',
            'depth'         => 1,
            'fallback_cb'   => false,
            'add_li_class'  => 'header_li'
        ]?>
        <?php wp_nav_menu($args)?>
    </nav>
</header>