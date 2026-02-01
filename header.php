<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<nav class="navbar">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" height="40">
    </a>

    <?php
    wp_nav_menu([
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => 'navbar-nav'
    ]);
    ?>
</nav>
