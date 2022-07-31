let inputReset = (input) => {
  setTimeout(() => {
    input.classList.remove("error");
    input.nextSibling.nextSibling.innerText = "";
    input.nextSibling.nextSibling.classList.add("hidden");
  }, 100);
};

let inputError = (input, message) => {
  setTimeout(() => {
    input.classList.add("error");
    input.nextSibling.nextSibling.innerText = message;
    input.nextSibling.nextSibling.classList.remove("hidden");
  }, 200);
};

let inputCheck = (input, message) => {
  let value = input.value.trim();

  if (value == "") {
    inputError(input, message);
    return false;
  }

  inputReset(input);
  return true;
};

let checkOnBlur = (input) => {
  inputCheck(input, "Trường này không được để trống.");
};

let loginForm = document.getElementById("login-form");

loginForm.addEventListener("submit", (event) => {
  event.preventDefault();

  if (!inputCheck(loginForm[0], "Trường này không được để trống")) {
    return;
  }

  if (!inputCheck(loginForm[1], "Trường này không được để trống")) {
    return;
  }

  let loginButton = document.getElementById("login-button");

  loginButton.classList.add("disabled");
  loginButton.innerHTML = `<div id="loader"></div>`;

  let postData = new URLSearchParams();
  postData.append("username", loginForm[0].value.trim());
  postData.append("password", loginForm[1].value.trim());

  fetch("admin/check_account", {
    method: "POST",
    body: postData,
  })
    .then((response) => response.json())
    .then((data) => {
      loginButton.classList.remove("disabled");
      loginButton.innerHTML = `Đăng nhập`;

      if (data.message == "SUCCESS") {
        loginForm.setAttribute("action", "admin/login");
        loginForm.submit();
      } else {
        inputError(loginForm[0], "");
        inputError(loginForm[1], "Tên đăng nhập hoặc Mật khẩu không đúng.");
      }
    });
});
