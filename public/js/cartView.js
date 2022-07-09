    //Button Quantity Product
    var btnPlus = document.getElementsByClassName('button-plus')[0];
    var btnSub = document.getElementsByClassName('button-subtract')[0];
    var btnValue = btnPlus.previousElementSibling;

    btnPlus.onclick = () => btnValue.value++;
    btnSub.onclick = () => (btnValue.value >= 2) ? (btnValue.value--) : "";