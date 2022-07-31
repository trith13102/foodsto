$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop()) {
      $("header").addClass("header-scroll");
    } else {
      $("header").removeClass("header-scroll");
    }
  });
});

$(document).ready(function () {
  $(".tabs__content").hide();
  $(".tabs__content:first-child").fadeIn();
  $(".tabs__title").click(function () {
    //actice tab
    $(".tabs__title").removeClass("show");
    $(this).addClass("show");

    //show tab_content
    let id_tab_content = $(this).children("a").attr("href");
    $(".tabs__content").hide();
    $(id_tab_content).fadeIn();

    return false;
  });
});


let openModal = (node) => {
  var modal_container = document.getElementById("modal-container");
  if (modal_container.classList.contains("hidden")) {
    modal_container.classList.remove("hidden");
  }
  let id = node.nextSibling.nextSibling.innerHTML.trim();

  document.querySelector(".modal").innerHTML = `<div id="loader"></div>`;

  let loadedData = sessionStorage.getItem(`PRODUCT${id}`);

  if (loadedData) {
    let product = JSON.parse(loadedData);
    modalHTML(product);
  } else {
    fetch(`http://localhost/foodsto/HOME/get_product_by_id/${id}`)
      .then((response) => response.json())
      .then((data) => {
        sessionStorage.setItem(`PRODUCT${id}`, JSON.stringify(data));
        setTimeout(() => {
          modalHTML(data);
        }, 300);
      });
  };
}


let closeModal = () => {
  var modal_container = document.getElementById("modal-container");
  if (!modal_container.classList.contains("hidden")) {
    modal_container.classList.add("hidden");
  }
};


let modalHTML = (data) => {
  document.querySelector(".modal").innerHTML = `
  <div class="modal-img">
      <section class="splide" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
              <ul class="splide__list">
                  <li class="splide__slide">
                      <img src="${data.gallery[0][2]}" alt="">
                  </li>
                  <li class="splide__slide">
                      <img src="${data.gallery[1][2]}" alt="">
                  </li>
                  <li class="splide__slide">
                      <img src="${data.gallery[2][2]}" alt="">
                  </li>
              </ul>
          </div>
      </section>
  </div>
  <div class="bg-white ml-3 px-4 pt-5 pb-4 w-1/2 relative">
      <h2 class="text-title text-title-color font-bold">${data.info[0][3]}</h2>
      <div class="text-primary-color text-4xl mb-2 font-medium leading-relaxed">

          <ins>

              <span>${
                new Intl.NumberFormat('it-IT', { style: 'currency', currency: 'VND' }).format(data.info[0][4])
              }</span>
          </ins>
      </div>
      <p class="inline-block text-body-text mb-3">${data.info[0][6]}</p>
      <form target="_self" method="POST" class="flex mb-4">
          <span class="flex mr-4">
              <button class="button-subtract bg-primary-color text-white text-center rounded-md w-11 h-11 border border-primary-color" type="button">
                  <i class="fa-solid fa-minus"></i>
              </button>
              <input id="qty" name="qty" class="appearance-none outline-none mx-1 bg-light-green-color border-b border-b-primary-color px-4 text-center rounded-md w-16" readonly type="number" value="1" min="1">
              <button class="button-plus bg-primary-color text-white text-center rounded-md w-11 h-11  border border-primary-color" type="button">
                  <i class="fa-solid fa-plus"></i>
              </button>
          </span>
          <button type="submit" name="insert" class="uppercase text-white duration-500 bg-secondary-color hover:bg-primary-color transition-colors px-7.5 py-3 text-sm font-medium rounded-md shadow tracking-wider">Thêm vào giỏ hàng<i class="pl-2 fas fa-long-arrow-alt-right"></i></button>
      </form>
      <a target="_self" href="" class="inline-block mt-3 hover:text-primary-color"><i
              class="far fa-heart mr-2.25"></i><span>Thêm vào danh sách yêu thích</span></a>
      <ul class="mt-6 flex gap-x-2">
          <li><a target="_self" href=""
                  class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i
                      class="fab fa-facebook"></i></a></li>
          <li><a target="_self" href=""
                  class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i
                      class="fab fa-twitter"></i></a></li>
          <li><a target="_self" href=""
                  class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i
                      class="fab fa-google-plus"></i></a></li>
          <li><a target="_self" href=""
                  class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i
                      class="fab fa-instagram"></i></a></li>
      </ul>
  </div>
`;
  var splipe = new Splide(".splide", {
    type: "loop",
  });
  splipe.mount();


  var btnPlus = document.getElementsByClassName("button-plus")[0];
  var btnSub = document.getElementsByClassName("button-subtract")[0];
  var btnValue = btnPlus.previousElementSibling;

  btnPlus.onclick = () => btnValue.value++;
  btnSub.onclick = () => (btnValue.value >= 2 ? btnValue.value-- : "")
}