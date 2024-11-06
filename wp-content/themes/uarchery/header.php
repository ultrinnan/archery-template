<?php
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
          if (isset($_SERVER['HTTP_USER_AGENT']) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        header('X-UA-Compatible: IE=edge,chrome=1');
    ?>
    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="<?=is_front_page()?'frontpage':''?>">
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="header_logo">
            <a href="<?=home_url();?>" title="UArchery"></a>
        </div>
        <div class="header_menu">
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'menu_class' => 'menu_list'
            ]);?>
<!--            <div class="menu_support">-->
<!--                <div class="menu_icon support"></div>-->
<!--                <div class="menu_title">Підтримати</div>-->
<!--            </div>-->
<!--            <div class="menu_member">-->
<!--                <div class="menu_icon member"></div>-->
<!--                <div class="menu_title">Вхід</div>-->
<!--            </div>-->
        </div>
        <div class="menu_search">
            <div class="menu_icon search"></div>
            <div class="menu_title">Пошук</div>
            <?php get_search_form(); ?>
        </div>
    </header>
    <div id="popup" style="display: none; text-align: center; position: fixed; z-index: 3; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #fff; padding: 20px; border: 2px solid #333;">
      <img src="https://uarchery.org/wp-content/uploads/2024/04/for-sale.jpeg" alt="For sale" style="width: 50%; height: auto; margin: 40px auto;">
      <div>
        <p>Проект UArchery.org продається разом з усіма повʼязаними акаунтами в соцмережах і інших сервісах!</p>
        <div>Детальніше - <a href="https://uarchery.org/articles/project-for-sale/">https://uarchery.org/articles/project-for-sale/</a></div>
        <p>Всім зацікавленим прохання писати на пошту – info@uarchery.org</p>
      </div>
      <button class="button" onclick="closePopup()" style="margin: 40px auto">Закрити</button>
    </div>
    <script>
      function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = name + "=" + value + "; expires=" + date.toUTCString() + "; path=/";
      }

      function getCookie(name) {
        const value = "; " + document.cookie;
        const parts = value.split("; " + name + "=");
        if (parts.length === 2) return parts.pop().split(";").shift();
      }

      function showPopup() {
        document.getElementById('popup').style.display = 'block';
      }

      function closePopup() {
        document.getElementById('popup').style.display = 'none';
        setCookie("popupClosed", "true", 10);
      }

      window.onload = function() {
        if (!getCookie("popupClosed")) {
          showPopup();
        }
      };
    </script>

    <main>
