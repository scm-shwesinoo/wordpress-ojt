<?php
/*
 * Template Name: Options Page
 */

$color = get_field('choose_your_color');
$flavour = get_field('choose_a_flavour');

get_header(); 
 ?>
<section class="page">
    <div class="container">

    <h1><?php the_title(); ?></h1>

    <?php if($color): ?>
        <strong>Color: </strong> <?php echo $color['value']; ?>
    <?php endif; ?>
        <br><br>
    <!-- <?php switch($color['value']){
        case 'blue': echo 'The color is blue';
        case 'red': echo 'The color is red';
        break;
    }?> -->
    <!-- <?php var_dump($color) ?> -->

    <?php  foreach($color as $c): ?>
        <?php echo $c['value']; ?>
    <?php endforeach; ?>

    <br><br>

    <?php echo implode($flavour, ', '); ?>
    <!-- <?php var_dump($flavour) ?> -->

    </div>
</section>

<?php get_footer(); ?>