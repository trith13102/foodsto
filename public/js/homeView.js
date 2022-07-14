
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


window.onload=function(){
    const btn_open = document.getElementById("btn-open");
    const btn_close = document.getElementById("btn-close");
    const modal_container = document.getElementById("modal-container");
    const modal = document.getElementById("modal");

    btn_open.addEventListener('click', () =>{
        modal_container.classList.remove('hidden');
    });
    btn_close.addEventListener('click', () => {
        modal_container.classList.add('hidden');
    });
    modal_container.addEventListener('click', (e) =>{
        if (!modal.contains(e.target)) {
            btn_close.click();
        }
    })

    var btnPlus = document.getElementsByClassName('button-plus')[0];
    var btnSub = document.getElementsByClassName('button-subtract')[0];
    var btnValue = btnPlus.previousElementSibling;

    btnPlus.onclick = () => btnValue.value++;
    btnSub.onclick = () => (btnValue.value >= 2) ? (btnValue.value--) : "";
}


