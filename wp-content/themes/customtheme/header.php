<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

<div class="outer">
<div class="container-fluid">
<div class="container">
<header class="site-header">
<div class="logo">
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <h4><?php bloginfo( 'description' ); ?></h4>
</div>

    <!-- create menu -->
<?php
    wp_nav_menu( array( 
        'theme_location' => 'my-custom-menu', //menu name
        'container_class' => 'custom-menu-class', //class name
        // 'before' => '*' 
        ) ); 
?>
</header>
</div>
</div> <!-- closes <div class=container-fluid"> -->

<div class="container">


<!-- <div class="custom-menu-class">
<h2>With HTML list</h2>
<ul>
    <li><a href="<?php echo home_url(); ?>">Home</a></li>
    <li><a href="<?php echo home_url(); ?>/about">Home</a></li>
    <li><a href="<?php bloginfo("template_url")?>/about">About</a></li>
    <li><a href="<?php bloginfo("template_url")?>/services">Services</a></li>
</ul>
</div> -->
