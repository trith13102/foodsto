// Load Categories
$("#loader-wrapper").removeClass("hidden");

let getData = (data) => {
  console.log(data);
};

let getCategories = () => {
  fetch("admin/crud/get_categories")
    .then((response) => response.json())
    .then((responses) => {
      $("#loader-wrapper").addClass("hidden");
      return responses;
    });
};

// categories.forEach((category) => {
//   let row = document.createElement("tr");
//   row.classList.add(
//     "hover:bg-slate-100",
//     "transition-all",
//     "duration-400",
//     "w-full",
//     "border-b",
//     "h-ful"
//   );

//   row.innerHTML = `
//           <td class="font-[700] text-left text-[.8rem] text-primary-color uppercase px-6 py-2">
//               <img class="w-[20rem] border-1 border-black" src="${category.thumbnail}" alt="">
//           </td>
//           <td class="font-[700] text-left text-[.8rem] text-primary-color uppercase px-6 py-2">${category.id}</td>
//           <td class="font-[700] text-left text-[.8rem] text-primary-color uppercase px-6 py-2">${category.name}</td>
//           <td class="font-[700] text-left text-[.8rem] text-primary-color uppercase px-6 py-2">${category.description}</td>
//           <td class="flex items-stretch font-[700] text-left text-[.8rem] text-stone-600 uppercase h-full px-6 py-2">
//           <button class="rounded-[4px] flex items-center justify-center w-8 h-8 mr-2 bg-blue-500 drop-shadow-md hover:translate-y-[-0.05rem] hover:drop-shadow-xl transition-all" type="button" title="Sửa"><i class="bx bxs-edit text-[.9rem] text-white"></i></button>
//           <button class="rounded-[4px] flex items-center justify-center w-8 h-8 ml-2 bg-[#f5365c] drop-shadow-md hover:translate-y-[-0.05rem] hover:drop-shadow-xl transition-all" type="button" title="Xoá"><i class="bx bxs-trash text-[.9rem] text-white"></i></button>
//           </td>
//         `;

//   document.getElementById("data-place").appendChild(row);
// });

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
      "admin/crud/find_category",
      "POST",
      {
        category: form[0].value.trim(),
      },
      (response) => {
        console.log(response);
      }
    );
  }
};
