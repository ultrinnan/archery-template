<?php
/*
 * Template Name: Front page
 */

get_header();

?>

<section class="latest_events">
    <div class="next_event">
        Найближча подія: <a href="#">Турнір "Тернопільські мрії", Тернопіль, 2023</a>
    </div>
    <div class="social_top">
	    <?php
	    get_template_part( 'partials/social' );
	    ?>
    </div>
</section>

<section class="featured">
    <div class="main_slider">
	    <?php
	    if ( is_active_sidebar( 'main_slider' ) ) {
		    dynamic_sidebar( 'main_slider' );
	    }
	    ?>
    </div>
    <div class="latest_news">
        <h2>Новини</h2>
        <div class="latest_list">
	        <?php
	        $post_args = array(
		        'post_type' => 'post',
		        'category_name' => 'news',
		        'posts_per_page' => 4
	        );
	        //wp query
	        $post_query = new WP_Query($post_args);
	        while ( $post_query->have_posts() ) :
		        $post_query->the_post();
		        $post_url = get_the_permalink();
		        $thumb = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : '/wp-content/themes/uarchery/img/default_article.jpg';
		        $date = get_the_date('d.m.Y');
		        $title = get_the_title();
		        ?>
                <div class="latest_article">
                    <div class="latest_preview">
                        <a href="<?=$post_url?>" class="preview_img" style="background: url(<?=$thumb?>) center no-repeat; background-size: cover"></a>
                    </div>
                    <div class="latest_description">
                        <div class="post_date">
					        <?=$date?>
                        </div>
                        <a href="<?=$post_url?>" class="post_title">
					        <?=$title?>
                        </a>
                    </div>
                </div>
	        <?php
	        endwhile;
	        ?>
        </div>
        <a class="button arrowed" href="/news">Всі новини</a>
    </div>
</section>

<section class="hero">
    <div class="container">
        <h1 class="title">UArchery</h1>
        <br>
        <h2 class="title">Розвиток і популяризація стрільби з лука в Україні</h2>
    </div>
</section>

<section class="map_section">
    <div class="left">
        <a href="/map" class="archery_map">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ukraine_map.png" alt="ukraine archery map">
        </a>
    </div>
    <div class="right">
        <a href="/map">
            <h2>Лучна карта України</h2>
        </a>
        <div>
            Знаходьте однодумців, школи, клуби чи тири по всій країні!
        </div>
    </div>
</section>

<div class="calendar_section">
    <div class="left">
        <a href="/events">
            <h2>Календар лучних подій</h2>
        </a>
        <div>
            Знаходьте найближчі змагання чи реєструйте власні!
        </div>
    </div>
    <div class="right">
        <a href="/events" class="calendar">
            <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="ukraine archery calendar">
        </a>
    </div>
</div>

<?php get_footer(); ?>
