// import menu from "./components/menu";


jQuery(document).ready(function($) {

    $(".header__btn-menu").on("click", function() {
        $(this).next().slideToggle();
        $(this).toggleClass("active");
        if ($(".header__menu-contents").hasClass('is-open')) {
            $(".header__menu-contents").removeClass('is-open');
            $('html').css('overflow-y', 'auto');
        } else {
            $(".header__menu-contents").addClass('is-open');
            $('html').css('overflow-y', 'hidden');
        }
    });

    $(".header__btn-contact").on("click", function() {
        $(".header__btn-menu").next().slideToggle();
        $(".header__btn-menu").toggleClass("active");
        $(".header__menu-contents").removeClass('is-open');
    });

});