<!-- for single post -->

<?php
get_header();

?>
<!-- <h2 style="text-align: center">Welcome From Custom Single Post</h2> -->

<article class="sg-page">
    <h2><?php the_title() ?></h2>
	<?php the_content() ?>
</article>

<?php get_footer(); ?>