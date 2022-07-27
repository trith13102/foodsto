// Sidebar toggling
const body = document.querySelector("body"),
  sidebar = body.querySelector("aside"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
  sidebar.classList.remove("close");
});
