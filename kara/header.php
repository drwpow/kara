<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php	if(is_front_page()) : ?><?php
				elseif(is_home()) : ?>Blog | <?php
				elseif(is_archive()) : wp_title(' Archive', true, 'right'); ?> | <?php
				else : wp_title(''); ?> | <?php endif;?><?php bloginfo('name'); ?> — <?php bloginfo('description'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body <?php body_class(); ?>>
<div id="main-wrapper">
  <header>
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <nav><?php wp_nav_menu(array('theme_location' => 'primary', 'container_class' => 'menu-header')); ?></nav>
  </header>
