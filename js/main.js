$(document).ready(function(){var b=document.querySelector(".menu-button");b.addEventListener("click",function(){console.log("Клик по кнопке меню");document.querySelector(".navbar-bottom").classList.toggle("navbar-bottom--visible")});var a=new Swiper(".hotel-slider",{loop:true,navigation:{nextEl:".hotel-slider__button--next",prevEl:".hotel-slider__button--prev"},keyboard:{enabled:true}});var f=new Swiper(".reviews-slider",{loop:true,navigation:{nextEl:".reviews-slider__button--next",prevEl:".reviews-slider__button--prev"}});var e=$("[data-togle=modal]");var g=$(".modal__close");e.on("click",c);g.on("click",d);function c(){var h=$(".modal__overlay");var i=$(".modal__dialog");var i=$(".modal__dialog");h.addClass("modal__overlay--visible");i.addClass("modal__dialog--visible")}function d(j){j.preventDefault();var h=$(".modal__overlay");var i=$(".modal__dialog");var i=$(".modal__dialog");h.removeClass("modal__overlay--visible");i.removeClass("modal__dialog--visible")}$(document).keydown(function(h){if(h.keyCode===27){d(h)}});$(".form").each(function(){$(this).validate({errorClass:"invalid",messages:{name:{required:"Please specify your name",minlength:"Name must be more than two characters"},email:{required:"We need your email address to contact you",email:"Your email address must be in the format of name@domain.com"},phone:{required:"Enter your phone please!",minlength:"Enter the full number"}}})});$(".subscribe__form").validate({errorClass:"invalid__sub",messages:{email_sub:{required:"We need your email address to contact you",email:"Your email address must be in the format of name@domain.com"}}});$(".phone").each(function(){$(this).mask("+7(999) 000-00-00")});AOS.init();$("img.lazy").lazyload();});