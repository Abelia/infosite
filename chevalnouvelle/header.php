<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name')?><?php wp_title('');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>

<body>
<header>
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        </a></h1>
    <div class="separation"></div>
</header>
<main>