<?php
$options = get_option('general_options');

$email = isset($options['email']) ? $options['email'] : '';
?>

</main>
<footer>
    <div class="footer_social">
	    <?php
	    get_template_part( 'partials/social' );
	    ?>
    </div>
    <div class="container">
        <?php wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'footer_menu'
        ]);?>
    </div>
    <div class="copyright">
        <div class="copy_left">
            <?=date('Y');?> &copy; UArchery
        </div>
        <div class="copy_right">
            Created by <a target="_blank" class="footer_author" href="https://fedirko.pro">FEDIRKO.PRO</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<?php
if (defined('WP_DEBUG') && WP_DEBUG === true) {
    echo '<div class="debugger">debug mode ON</div>';
}
?>

</body>
</html>
