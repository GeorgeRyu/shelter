"use strict";jQuery(document).ready(function(e){e(".header__btn-menu").on("click",function(){e(this).next().slideToggle(),e(this).toggleClass("active"),e(".header__menu-contents").hasClass("is-open")?(e(".header__menu-contents").removeClass("is-open"),e("html").css("overflow-y","auto")):(e(".header__menu-contents").addClass("is-open"),e("html").css("overflow-y","hidden"))}),e(".header__btn-contact").on("click",function(){e(".header__btn-menu").next().slideToggle(),e(".header__btn-menu").toggleClass("active"),e(".header__menu-contents").removeClass("is-open")})});