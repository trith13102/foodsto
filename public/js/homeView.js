
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('header').addClass('header-scroll');
        } else {
            $('header').removeClass('header-scroll');
        }
    })
})




$(document).ready(function(){
    $('.tabs__content').hide();
    $('.tabs__content:first-child').fadeIn();
    $('.tabs__title').click(function(){
        //actice tab
        $('.tabs__title').removeClass('show');
        $(this).addClass('show');

        //show tab_content
        let id_tab_content = $(this).children('a').attr('href');
        $('.tabs__content').hide();
        $(id_tab_content).fadeIn();

        return false;
    });
});


//Swiper
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});
