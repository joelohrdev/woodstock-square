<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="bg-peach text-white">
    <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
        <a href="/">
            <img src="<?php the_field('header_logo', 'option'); ?>" alt="Real Woodstock" class="w-64 flex-none">
        </a>
        <?php
        wp_nav_menu(
            array(
                'menu'       => '',
                'container'  => 'ul',
                'menu_class' => 'flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0 text-xs lg:text-base font-bold uppercase',
                'theme_location' => 'main-menu',
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            )
        );
        ?>
    </nav>
</header>