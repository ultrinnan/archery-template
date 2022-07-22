//This is to fix header on mobile scroll
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);
window.addEventListener('resize', () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
});

jQuery(document).ready(function($) {
    // $('.dont_panic .btn').on('click', function (e) {
    //     $('body').addClass('lock');
    //     $('.modal_box').removeClass('hidden');
    //     $('.modal_box .modal_main').removeClass('hidden');
    // });

    $('.menu_search').on('click', function (e) {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.search_form input').focus();
        }
    });
    $('.search_form').on('click', function (e) {
        e.stopPropagation();
    });

    $('.close_modal, .modal_box, .modal_box .modal_check_success').on('click', function(e) {
        $('body').removeClass('lock');
        $('.modal_box, .header .modal_main, .modal_box .modal_main, .modal_box .modal_thanks').addClass('hidden');
    });

    // document.addEventListener( 'wpcf7mailsent', function( event ) {
    //     $('.modal_main').addClass('hidden');
    //     $('.modal_thanks').removeClass('hidden');
    // }, false );


    // $('#accept_cookie').on('click', function (e) {
    //     $('.cookie').slideUp('smooth');
    //     $.ajax({
    //         url: '/wp-admin/admin-ajax.php',
    //         type: 'POST',
    //         data: 'action=cookieAccept',
    //         success: function() {
    //             $('.cookie').slideUp('smooth');
    //         }
    //     });
    // });

    $('.hamburger').on('click', function () {
        $(this).addClass('hidden_smooth');
        $('body').addClass('lock');
        $('.header_menu').addClass('active');
    });
    $('.header_menu').on('click', function () {
        $(this).removeClass('active');
        $('body').removeClass('lock');
        $('.hamburger').removeClass('hidden_smooth');
    });
});
