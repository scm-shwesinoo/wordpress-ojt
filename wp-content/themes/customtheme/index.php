<?php

get_header();

$my_input = get_field('my_input');
?>

<p><strong>ACF: </strong><?php the_field('description'); ?></p>

<?php if($my_input): ?>
	ACF: <?php echo $my_input?>
<?php endif; ?>

<?php
if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); ?>
    <article class="post">
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<div class="home-content">
		<?php the_content() ?>
		</div>
    </article>

	<?php the_field('official_email_address'); ?>

<!-- <h2>ACF: <?php the_field('official_email_address'); ?></h2> -->

	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;
?>
<?php posts_nav_link('separator','Previous','Next'); ?>


<?php
// get_sidebar(); //sidebar
get_footer();

?>