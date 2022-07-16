
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

let openModal = () => {
    var modal_container = document.getElementById("modal-container");
    if (modal_container.classList.contains("hidden")) {
        modal_container.classList.remove("hidden")
    }
}
let closeModal = () => {
    var modal_container = document.getElementById("modal-container");
    if (!modal_container.classList.contains("hidden")) {
        modal_container.classList.add("hidden")
    }
}
window.onload=function(){
    var btn_open = document.querySelectorAll(".btn-open");

    for (var i = 0 ; i < btn_open.length; i++) {
        btn_open[i].setAttribute('onclick', "openModal()");
    }


    var btnPlus = document.getElementsByClassName('button-plus')[0];
    var btnSub = document.getElementsByClassName('button-subtract')[0];
    var btnValue = btnPlus.previousElementSibling;

    btnPlus.onclick = () => btnValue.value++;
    btnSub.onclick = () => (btnValue.value >= 2) ? (btnValue.value--) : "";
}


