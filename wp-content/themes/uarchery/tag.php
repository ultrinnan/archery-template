<?php
get_header();
?>
	<section class="tags head">
        <div class="container">
            <h1>Тег: <?=single_tag_title();?></h1>
        </div>
	</section>

	<section class="tags">
		<div class="container">
			<div class="post_box">
				<?php
				$tag_id = get_queried_object()->term_id;
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

				$post_args = [
					'paged'     => $paged,
                    'tag_id' => $tag_id,
                    'post_type' => 'any'
				];

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
                            <a href="<?=$post_url?>" class="preview_img" style="background: url(<?= $thumb; ?>) center no-repeat; background-size: cover"></a>
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