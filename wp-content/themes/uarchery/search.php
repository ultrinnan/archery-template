<?php
    global $wp_query;
    get_header();
?>
    <section class="search_page head">
        <div class="container">
            <h1>Результати пошуку за запитом "<?=$wp_query->query['s']?>"</h1>
        </div>
    </section>

    <section class="search_page">
        <div class="container">
            <div class="post_box">
	            <?php
	            if (have_posts()){
		            while (have_posts()): the_post();
			            $post_url = get_the_permalink();
			            $thumb = get_the_post_thumbnail_url() ?: '/wp-content/themes/uarchery/img/bg/archery.jpg';
			            $title = get_the_title();
                        $exc = get_the_excerpt();
			            $date = get_the_date('d.m.Y');
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
		            endwhile;
	            } else {
                    ?>
                    <div class="no_results">
                        <p>На жаль, нічого не знайдено...</p>
                        <p>Спробуйте інший запит</p>
                    </div>
                    <?php
	            }?>
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