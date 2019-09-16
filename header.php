<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- site-header -->
<header class="site-header">
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <h5><?php bloginfo('description'); ?>
    </h5>




    <!-- navigation menu -->
    <nav class="site-nav">
        <?php

        $args = array(

            'theme_location' => 'primary'
        );

        ?>

        <?php wp_nav_menu( $args ); ?>
    </nav><!-- navigation menu -->
</header><!-- site-header -->
