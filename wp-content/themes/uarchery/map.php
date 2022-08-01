<?php
/*
 * Template Name: Map
 */

get_header();
?>

<section class="map head">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="breadcrumbs">
    <div class="container">
        Бажаєте додати вашу організацію, команду чи тир? напишіть нам на <a href="mailto:info@uarchery.org">info@uarchery.org</a>
    </div>
</section>

<section class="map">
    <div class="container">
        <div class="article">
		    <?php if (have_posts()): while (have_posts()): the_post(); ?>
			    <?php the_content(); ?>
		    <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
