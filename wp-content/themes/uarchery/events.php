<?php
/*
 * Template Name: Events page
 */

get_header();

$bg = get_field('background');
if ($bg) {
	$style = 'style="background: url('. $bg .') center no-repeat; background-size: cover"';
} else {
	$style = '';
}
?>
    <section class="events head" <?=$style?>>
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <?php
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<section class="breadcrumbs"><div class="container">','</div></section>' );
    }
    ?>

    <section class="events">
        <div class="container">
            <div class="content">
                <div class="article">
					<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
                </div>
            </div>
        </div>
	    <?php
	    get_template_part( 'partials/tags' );
	    ?>
    </section>

<?php get_footer(); ?>