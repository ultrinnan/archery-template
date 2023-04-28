<?php
get_header();
?>
	<section class="archive head">
        <div class="container">
            <h1><?=get_the_archive_title();?></h1>
        </div>
	</section>

    <?php
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<section class="breadcrumbs"><div class="container">','</div></section>' );
    }
    ?>

	<section class="archive">
		<div class="container">
			<div class="post_box">
				<?php
				$paged = ( get_query_var( 'paged' ) ) ?: 1;

				$post_args = array(
					'post_type' => get_post_type(),
					'paged'     => $paged
				);

				//wp query
				$post_query = new WP_Query( $post_args );
				while ( $post_query->have_posts() ) {
					$post_query->the_post();
					$post_url = get_the_permalink();
					$thumb = get_the_post_thumbnail_url() ?: get_template_directory_uri() . '/img/bg/default.jpg';
                    $title = get_the_title();
					$exc = get_the_excerpt();
					$date = get_the_date('d/m/Y');
					?>
                    <div class="post">
                        <div class="preview">
                            <a href="<?=$post_url?>" class="preview_img" style="background: url(<?= $thumb; ?>) center no-repeat; background-size: contain"></a>
                        </div>
                        <div class="preview_description">
                            <div class="post_date">
								<?=$date?>
                            </div>
                            <a href="<?=$post_url?>" class="post_title">
								<?=$title?>
                            </a>
                            <div class="post_exc">
								<?=$exc?>
                            </div>
                            <div class="post_read_more">
                                <a class="button" href="<?=$post_url?>">
                                    Докладніше...
                                </a>
                            </div>
                        </div>
                    </div>
					<?php
				}
				?>
			</div>
			<div class="pagination">
				<?php
				the_posts_pagination( [
					'prev_text'          => 'Попередня',
					'next_text'          => 'Наступна',
				] );
				wp_reset_query(); // Restore the $wp_query and global post data to the original main query.
				?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>