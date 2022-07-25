//  Image preview
let acceptedImageType = ["jpg", "jpeg", "png"];
let thumbnail = document.getElementById("thumbnail");
let preview = document.getElementById("preview");

let changePreviewVisibility = () => {
  let type = thumbnail.value.split(".");
  type = type[type.length - 1];

  if (thumbnail.value == "" || !acceptedImageType.includes(type)) {
    thumbnail.src = "";
    preview.parentNode.classList.add("hidden");
  } else {
    preview.parentNode.classList.remove("hidden");
  }
};

thumbnail.addEventListener("change", (e) => {
  if (e.target.files.length) {
    const src = URL.createObjectURL(e.target.files[0]);
    preview.src = src;
  }

  changePreviewVisibility();
});

//  Push notification
let pushNotification = (message) => {
  Toastify({
    text: message,
    duration: 1500,
    close: true,
    gravity: "top",
    position: "right",
    stopOnFocus: true,
    offset: {
      x: 10,
      y: 50,
    },
    style: {
      background: "linear-gradient(to right, #3bb77e, #ffba43)",
    },
    onClick: function () {}, // Callback after click
  }).showToast();
};

//  Ajax
let ajaxCall = (theUrl, method, postData, responseCallback) => {
  $(document).ready(() => {
    $.ajax({
      url: theUrl,
      type: method,
      dataType: "JSON",
      data: postData,
      beforeSend: () => {
        $("#loader-wrapper").removeClass("hidden");
      },
      complete: () => {
        $("#loader-wrapper").addClass("hidden");
      },
    }).done((response) => responseCallback(response));
  });
};

//  Form validate
let resetForm = (formId) => {
  let form = document.getElementById(formId);

  for (let i = 0; i < form.length; i++) {
    if (form[i].tagName.toLowerCase() == "input") {
      hideError(form[i]);
      form[i].value = "";
    }
  }
};

let showError = (input, message) => {
  setTimeout(() => {
    input.classList.remove("border-slate-300");
    input.style.borderColor = "rgb(248, 113, 113)";

    let messagePlace = input.nextSibling.nextSibling;
    messagePlace.classList.remove("hidden");
    messagePlace.innerHTML = message;
  }, 200);
};

let hideError = (input) => {
  setTimeout(() => {
    input.style.borderColor = "rgb(203, 213, 225)";

    let messagePlace = input.nextSibling.nextSibling;
    messagePlace.classList.add("hidden");
    messagePlace.innerText = "";
  }, 100);
};

let checkTextInput = (input, type) => {
  let value = input.value.trim();

  if (value == "") {
    showError(input, "Trường này không được để trống.");
    return false;
  }

  hideError(input);

  if (type == "email" && !validator.isEmail(value)) {
    showError(input, "Dữ liệu đã nhập không phải là email.");
    return false;
  } else {
    hideError(input);
  }

  if (type == "number" && !validator.isNumeric(value)) {
    showError(input, "Dữ liệu đã nhập không phải là số.");
    return false;
  } else {
    hideError(input);
  }

  return true;
};

let checkForFileInput = (input) => {
  let type = thumbnail.value.split(".");
  type = type[type.length - 1];

  if (input.value == "" || !acceptedImageType.includes(type)) {
    if (input.value == "") {
      showError(input, "Không có tệp nào được chọn.");
      return false;
    }
    hideError(input);

    if (!acceptedImageType.includes(type)) {
      showError(
        input,
        "Định dạng tệp không đúng (chỉ hỗ trợ JPG, JPEG và PNG)."
      );
      return false;
    } else {
      hideError(input);
    }
  }

  return true;
};

let validate = (formId) => {
  let form = document.getElementById(formId);

  let result = true;

  if (!checkTextInput(form[0], "string")) result = false;

  if (!checkTextInput(form[1], "string")) result = false;

  if (!checkForFileInput(form[2])) result = false;

  if (result) {
    ajaxCall(
      "admin/crud/existence_check",
      "POST",
      {
        table: "categories",
        column: "name",
        value: form[0].value.trim(),
      },
      (response) => {
        if (response.message == "does_not_exist") {
          pushNotification("Thêm danh mục mới thành công!");
        } else {
          pushNotification("Danh mục đã tồn tại!");
        }
      }
    );
  }
};
