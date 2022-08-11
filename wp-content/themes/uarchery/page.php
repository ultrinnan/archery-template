<?php
get_header();

$bg = get_field('background');
if ($bg) {
	$style = 'style="background: url('. $bg .') center no-repeat; background-size: cover"';
} else {
	$style = '';
}
?>
    <section class="page head" <?=$style?>>
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="page">
        <div class="container">
            <div class="content">
                <div class="content_meta">
                    <div class="date">
						<?php echo get_the_date('d.m.Y'); ?>
                    </div>
                    <!--                    <div class="author">-->
                    <!--                        Тут може бути автор-->
                    <!--                    </div>-->
                </div>
                <div class="article">
					<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
                </div>
	            <?php
	            $source = get_field('source');
	            if ($source) {
		            ?>
                    <div class="content_meta">
                        <div class="source">
                            За матеріалами: <a rel="nofollow" target="_blank" href="<?=$source?>"><?=$source?></a>
                        </div>
                    </div>
		            <?php
	            }
	            ?>
            </div>
        </div>
		<?php
		get_template_part( 'partials/tags' );
		?>
    </section>

<?php get_footer(); ?>