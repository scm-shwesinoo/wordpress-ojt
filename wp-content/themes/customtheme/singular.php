<!-- for single page -->
<?php
get_header();
?>

<main id="site-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
			?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			<?php the_content() ?>

			<?php
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>
