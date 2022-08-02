let minVal = parseInt(rangeInput[0].value),
    maxVal = parseInt(rangeInput[1].value);
    progress.style.width = "";
    progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
    progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";


