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
    <div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #fff; padding: 20px; border: 2px solid #333;">
      <img src="https://uarchery.org/wp-content/uploads/2024/04/for-sale.jpeg" alt="For sale" style="width: 50%; height: auto;">
      <div>
        <p>Проект UArchery.org продається разом з усіма повʼязаними акаунтами в соцмережах:</p>
        <ul>
          <li>https://www.facebook.com/uarchery.org/</li>
          <li>https://twitter.com/uarchery_org</li>
          <li>https://t.me/uarchery_org</li>
        </ul>

        <p>а також в сервісах</p>
        <ul>
          <li>https://www.patreon.com/uarchery</li>
          <li>https://ko-fi.com/uarchery</li>
        </ul>

        <p>Особливості проекту:</p>

        <ul>
          <li>
            унікальний “SEO-friendly” домен – адреса сайту ідеальна для будь чого повʼязаного зі стрільбою з лука. Можна продовжувати розвивати проект чи зробити переадресацію на ваш проект
          </li>
          <li>
            інтерактивний календар лучних подій України
          </li>
          <li>
            унікальна лучна карта України – клуби, магазини, школи
          </li>
          <li>
            зручний і простий дизайн, адаптований під всі мобільні пристрої
          </li>
          <li>
            PWA мобільний додаток з можливістю додавання функціоналу чи створення чого завгодно на його основі
          </li>
        </ul>
        <p>Всім зацікавленим прохання писати на пошту – info@uarchery.org</p>
      </div>
      <button onclick="closePopup()">Закрити</button>
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
