<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
<section id="primary" class="site-content">
<h3 style="background-color: violet">Welcome From Category Page</h3>
<div id="content" role="main">

 
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
 
<header class="archive-header">
<h1 class="archive-title">Category: <?php echo single_cat_title( '', false ); ?></h1>
 
 
<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header>
 
<div class="cat-post">
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<div>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
 
<div class="entry">
    <div class="content">
    <?php the_content(); ?>
    </div>

 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
</div>
</div>
 
<?php endwhile; ?>
</div>
 <?php
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
<?php endif; ?>
</div>
</section>
 
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>