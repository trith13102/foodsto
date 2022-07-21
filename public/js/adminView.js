let showDropDownMenu = () => {
  let dropDownMenu = document.getElementById("drop-down-menu");
  if (dropDownMenu.classList.contains("hidden")) {
    dropDownMenu.classList.remove("hidden");
  } else {
    dropDownMenu.classList.add("hidden");
  }
};

