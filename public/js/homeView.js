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

let openModal = () => {
  var modal_container = document.getElementById("modal-container");
  if (modal_container.classList.contains("hidden")) {
    modal_container.classList.remove("hidden");
  }
};

let closeModal = () => {
  var modal_container = document.getElementById("modal-container");
  if (!modal_container.classList.contains("hidden")) {
    modal_container.classList.add("hidden");
  }
};

window.onload = function () {
  var btn_open = document.querySelectorAll(".btn-open");

  for (var i = 0; i < btn_open.length; i++) {
    btn_open[i].setAttribute("onclick", "openModal()");
  }

  var btnPlus = document.getElementsByClassName("button-plus")[0];
  var btnSub = document.getElementsByClassName("button-subtract")[0];
  var btnValue = btnPlus.previousElementSibling;

  btnPlus.onclick = () => btnValue.value++;
  btnSub.onclick = () => (btnValue.value >= 2 ? btnValue.value-- : "");
};

//Dùng Ajax để lấy dữ liệu từ API
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    //Dữ liệu được trả về từ API chính là responseText
    let product = JSON.parse(this.responseText);
    console.log(product.descriptions);
  }
};
xmlhttp.open("POST", "home/crud/method_1");
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("id=114");
