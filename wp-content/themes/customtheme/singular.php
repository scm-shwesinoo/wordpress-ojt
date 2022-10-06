<!-- for single page -->
<?php
get_header();
$email = the_field('official_email_address');
?>

<main id="site-content">
<?php echo $email?>
<h2 style="text-align: center">Welcome From Custom Single Page</h2>
<?php if( get_field('official_email_address') ): ?>
		<?php echo 'hello' ?>
<?php endif; ?>
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();		
			?>
			<h2><?php the_field('official_email_address'); ?></h2>
			<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			<?php the_content() ?>
			<?php
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>
