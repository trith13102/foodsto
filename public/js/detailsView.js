
    //Sliders When Click Mini Image
    var image = document.querySelector('.product__image--show');
    var miniImages = document.querySelectorAll('.product__image--mini img');
    var widthImage = document.querySelectorAll('.product__image--show img');

    miniImages.forEach((item, index) => {
        item.onclick = () => { image.style.transform = 'translateX(' + (-index * widthImage[0].clientWidth) + 'px)';
        miniImages.forEach(itemStyle => itemStyle.classList.add("opacity-70"));
        item.classList.remove("opacity-70");
        }
    })

    miniImages[0].click();


    //Button Quantity Product
    var btnPlus = document.getElementsByClassName('button-plus')[0];
    var btnSub = document.getElementsByClassName('button-subtract')[0];
    var btnValue = btnPlus.previousElementSibling;

    btnPlus.onclick = () => btnValue.value++;
    btnSub.onclick = () => (btnValue.value >= 2) ? (btnValue.value--) : "";

    //Tabs
    var tabsTitle = document.querySelectorAll('.tabs__title');
    var tabsContent = document.querySelectorAll('.tabs__content');
    tabsTitle.forEach(title => title.onclick = () => {
        tabsContent.forEach(content => content.style.display = 'none');
        tabsTitle.forEach(titleStyle => titleStyle.classList.remove("text-white", "bg-primary-color"));
        title.classList.add("text-white", "bg-primary-color");
        document.getElementById(title.getAttribute("data-name")).style.display = 'block';
    });

    tabsTitle[0].click();

    //Swiper
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
    });
