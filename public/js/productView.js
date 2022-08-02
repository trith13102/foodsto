
const rangeInput = document.querySelectorAll(".range-input"),
    priceInput = document.querySelectorAll(".price-label span"),
progress = document.querySelector(".ui-slider-range");
let priceGap = 10;

console.log('dadadda');

let minVal = parseInt(rangeInput[0].value),
    maxVal = parseInt(rangeInput[1].value);
    

if (!progress.style.width) {
    progress.style.width = "100%";
}
rangeInput.forEach((input) => {
    input.addEventListener("change", (e) => {
        progress.style.width = "";

        let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);

        if (maxVal - minVal < priceGap) {
            if (e.target.className === "range-min") {
                rangeInput[0].value = maxVal - priceGap;
            } else {
                rangeInput[1].value = minVal + priceGap;
            }
        } else {
            let percent = (maxVal / rangeInput[1].max) * 100;
            priceInput[0].innerHTML = minVal + " VND";
            priceInput[1].innerHTML = maxVal + " VND";
            progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
    });
});