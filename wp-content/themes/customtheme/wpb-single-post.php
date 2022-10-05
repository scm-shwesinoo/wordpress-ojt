<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
   
//  get_header();  ?>

<main id="site-content">
<h1 style="background-color: pink;">Hello Custom Template</h1>
<?php

if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );
    }
}

?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
