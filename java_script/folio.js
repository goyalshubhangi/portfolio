function openNav() {
       document.getElementById("mysidenav").style.width="100%";
    }
    function closeNav() {
       document.getElementById("mysidenav").style.width="0";
     
    }
var swiper = new Swiper('.gallery-top', {
        spaceBetween: 0,
        pagination: false,
        loop: true,
        simulateTouch: false,
        speed: 1000,
        autoplay: 3000,
        autoplayDisableOnInteraction: false,
        paginationClickable: false
    });

    var thumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 0,
        centeredSlides: true,
        loop: true,
        paginationClickable: false,
        direction: 'vertical',
        simulateTouch: false,
        slideToClickedSlide: true
    });

    swiper.params.control = thumbs;
    thumbs.params.control = swiper;