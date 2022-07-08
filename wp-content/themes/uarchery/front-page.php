<?php
/*
 * Template Name: Front page
 */

get_header();

?>

<section class="latest_events">
    <div class="next_event">
        Найближча подія: <a href="#">Турнір "Тернопільські мрії", Тернопіль, 2022</a>
    </div>
    <div class="social_top">
	    <?php
	    get_template_part( 'partials/social' );
	    ?>
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
        <a href="/calendar">
            <h2>Календар лучних подій</h2>
        </a>
        <div>
            Знаходьте найближчі змагання чи реєструйте власні!
        </div>
    </div>
    <div class="right">
        <a href="/calendar" class="calendar">
            <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" alt="ukraine archery calendar">
        </a>
    </div>
</div>

<section class="hero">
    <div class="container">
        <h1 class="title"><герб></h1>
        <br>
        <h1 class="title">UArchery</h1>
        <br>
        <h2 class="title">Розвиток і популяризація стрільби з лука в Україні</h2>
    </div>
</section>

<?php get_footer(); ?>
