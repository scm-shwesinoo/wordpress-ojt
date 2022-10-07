<?php
/*
 * Template Name: Content Page
 */

$image = get_field('feature_image');
$picture = $image['sizes']['my-custom-size'];
$alt = $image['alt'];
$title = $image['title'];

$file = get_field('upload_a_file');
$filename = $file['filename'];
$fileurl = $file['url'];

$embed = get_field('embed_a_video');

 get_header(); ?>

 <section class="page">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <h3>ACF Plugin</h3>

        <?php if(have_posts()): while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: endif;?>

        <?php if($image): ?>
            <h3 style="color: purple"><strong><i>Image Field</i></strong></h3>
            <!-- <?php echo $image['alt']; ?> -->
            <h4><?php echo $title ?></h4>
            <br>
            <img src="<?php echo $picture; ?>" class="img-fluid" alt="<?php echo $alt;?>" title="<?php echo $title ?>">
            <hr>
            <!-- <?php var_dump($image) ?> -->
            <?php echo $picture ?>
        <?php endif; ?>
        <hr>

        <?php if($file): ?>
            <h3 style="color: purple"><strong><i>File Field</i></strong></h3>
            <a href="<?php echo $fileurl; ?>" download><?php echo $filename ?></a>
            <!-- <?php var_dump($file) ?>  -->
        <?php endif; ?>
        <hr>

        <?php if($embed): ?>
            <h3 style="color: purple"><strong><i>oEmbed Field</i></strong></h3>
            <?php echo $embed; ?>
        <?php endif; ?>

    </div>
 </section>

 <?php get_footer(); ?>