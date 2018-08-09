// =====================
// 		sp-menu-btn
// =====================

jQuery(document).ready(function($){

    function menu() {
        $(".header__btn-menu").on("click", function() {
            $(this).next().slideToggle();
            $(this).toggleClass("active");
            if ($(".header .header__menu-contents").hasClass('is-open')) {
                $(".header .header__menu-contents").removeClass('is-open');
            } else {
                $(".header .header__menu-contents").addClass('is-open');
            }
        });
    
        $(".header__btn-contact").on("click", function() {
            $(".header__btn-menu").next().slideToggle();
            $(".header__btn-menu").toggleClass("active");
            $(".header .header__menu-contents").removeClass('is-open');
            // $(".header .menu-contents .sub-menu").removeClass('is-open2');
        });
    };
    
    menu();  
});






