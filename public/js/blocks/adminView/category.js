//Image preview
let input = document.getElementById("thumbnail");
let image = document.getElementById("preview");

let changePreviewVisibility = () => {
  if (input.value == "") {
    image.src = "";
    image.parentNode.classList.add("hidden");
  } else {
    image.parentNode.classList.remove("hidden");
  }
};

input.addEventListener("change", (e) => {
  if (e.target.files.length) {
    const src = URL.createObjectURL(e.target.files[0]);
    image.src = src;
  }
  changePreviewVisibility();
});

// HTTP request
