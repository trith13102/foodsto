let pushNotification = (message) => {
  Toastify({
    text: message,
    duration: 3000,
    close: true,
    gravity: "top",
    position: "right",
    stopOnFocus: true,
    style: {
      background: "linear-gradient(to right, #3bb77e, #ffba43)",
    },
    onClick: function () {},
  }).showToast();
};

//   Modal
let openModal = () => {
  document.getElementById("modal").style.display = "block";
};

let closeModal = () => {
  document.getElementById("modal").style.display = "none";
};

//   String truncating
function truncateString(str, num) {
  if (str == null || str == "") return;
  if (str.length > num) {
    return str.slice(0, num) + "...";
  } else {
    return str;
  }
}

//   Load table
let loadTable = () => {
  document.querySelector(".data-table tbody").innerHTML = `
     <tr>
          <td colspan="8">
               <div class="loader-wrapper">
                    <div id="loader"></div>
               </div>
          </td>
     </tr> 
     `;

  let roles = ["Quản trị viên", "Khách hàng"];

  fetch("admin/crud/get_accounts")
    .then((response) => response.json())
    .then((data) => {
      let accounts = data.map(
        (row) => `
           <tr>
                <td>${truncateString(row[1], 5)}</td>
                <td>${truncateString(row[2], 5)}</td>
                <td>${truncateString(row[4], 5)}</td>
                <td>${roles[row[5]]}</td>
                <td>${truncateString(row[6], 5)}</td>
                <td>${truncateString(row[7], 5)}</td>
                <td>${row[8]}</td>
                <td>                     
                     <button onclick="openEditAccount(${
                       row[0]
                     })"type="button" title="Sửa"><i class='bx bx-edit'></i></button>
                     <button onclick="openDeleteAccount(${
                       row[0]
                     })" type="button" title="Xoá"><i class='bx bx-trash'></i></button>
                </td>
           </tr>
       `
      );

      document.querySelector(".data-table tbody").innerHTML = accounts.join("");
    });
};
loadTable();

//   Search by email
document
  .getElementById("search-by-email")
  .addEventListener("submit", (event) => {
    event.preventDefault();
    let email = document.getElementById("search-by-email")[0].value.trim();
    document.querySelector(".data-table tbody").innerHTML = `
     <tr>
          <td colspan="8">
               <div class="loader-wrapper">
                    <div id="loader"></div>
               </div>
          </td>
     </tr> 
     `;

    let roles = ["Quản trị viên", "Khách hàng"];

    let formData = new FormData();
    formData.append("email", email);

    fetch("admin/crud/find_account", {
      body: formData,
      method: "POST",
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.length == 0) {
          document.querySelector(".data-table tbody").innerHTML = `
            <tr>
              <td colspan="8">
                <p class="not-found">Không tìm thấy dữ liệu phù hợp!</p>
              </td>
            </tr> 
          `;
        } else {
          let accounts = data.map(
            (row) => `
              <tr>
                   <td>${truncateString(row[1], 5)}</td>
                   <td>${truncateString(row[2], 5)}</td>
                   <td>${truncateString(row[4], 5)}</td>
                   <td>${roles[row[5]]}</td>
                   <td>${truncateString(row[6], 5)}</td>
                   <td>${truncateString(row[7], 5)}</td>
                   <td>${row[8]}</td>
                   <td>                        
                        <button onclick="openEditAccount(${
                          row[0]
                        })"type="button" title="Sửa"><i class='bx bx-edit'></i></button>
                        <button onclick="openDeleteAccount(${
                          row[0]
                        })" type="button" title="Xoá"><i class='bx bx-trash'></i></button>
                   </td>
              </tr>
          `
          );

          document.querySelector(".data-table tbody").innerHTML =
            accounts.join("");
        }
      });
  });

//  Delete account by id
let deleteAccount = (id) => {
  document.getElementById("modal").style.display = "none";
  loadTable();

  let formData = new FormData();
  formData.append("id", id);

  fetch("admin/crud/delete_account", {
    body: formData,
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.message == "SUCCESS") {
        pushNotification("Thao tác thành công!");
      } else {
        pushNotification("Thao tác thất bại!");
      }
    });
};

let openDeleteAccount = (id) => {
  document.getElementById("modal").style.display = "block";
  document.querySelector("#modal .modal-body").innerHTML = `
    <div class="delete-account">
        <p class="title">Xoá tài khoản này?</p>
        <button onclick="deleteAccount(${id})" type="button">Xác nhận</button>
    </div>
  `;
};

// Edit account

let editAccount = (form, id) => {
  document.getElementById("modal").style.display = "none";
  loadTable();

  let formData = new FormData();
  formData.append("id", id);
  formData.append("email", form[0].value.trim());
  formData.append("full_name", form[1].value.trim());
  formData.append("role", form[2].value.trim());
  formData.append("address", form[3].value.trim());
  formData.append("country", form[4].value.trim());
  formData.append("phone", form[5].value.trim());

  console.log(formData);

  fetch("admin/crud/update_account", {
    body: formData,
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.message == "SUCCESS") {
        pushNotification("Thao tác thành công!");
      } else {
        pushNotification("Thao tác thất bại!");
      }
    });

  loadTable();
};

let openEditAccount = (id) => {
  document.getElementById("modal").style.display = "block";
  document.querySelector("#modal .modal-body").innerHTML = `
    <div class="loader-wrapper">
        <div id="loader"></div>
    </div>
  `;

  let formData = new FormData();
  formData.append("id", id);

  fetch("admin/crud/get_account_by_id", {
    body: formData,
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => {
      document.querySelector("#modal .modal-body").innerHTML = `
      <div class="edit-account">
          <form onsubmit="event.preventDefault(); editAccount(this, ${
            data[0]
          });" target="_self">
              <div class="form-input">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" value="${
                      data[2]
                    }">
              </div>
              <div class="form-input">
                    <label for="full_name">Họ và Tên</label>
                    <input id="full_name" name="full_name" type="text" value="${
                      data[4]
                    }">
              </div>
              <div class="form-input">
                    <label for="role">Vai trò</label>
                    <select name="role" id="role">
                          <option value="0" ${
                            data[5] == 0 ? "selected" : ""
                          }>Quản trị viên</option>
                          <option value="1" ${
                            data[5] == 1 ? "selected" : ""
                          }>Khách hàng</option>
                    </select>
              </div>
              <div class="form-input">
                    <label for="address">Địa chỉ</label>
                    <input id="address" name="address" type="text" value="${
                      data[6]
                    }">
              </div>
              <div class="form-input">
                    <label for="country">Quốc gia</label>
                    <input id="country" name="country" type="text" value="${
                      data[7]
                    }">
              </div>
              <div class="form-input">
                    <label for="phone">Số điện thoại</label>
                    <input id="phone" name="phone" type="text" value="${
                      data[8]
                    }">
              </div>
              <div class="controller">
                    <button type="submit">Xác nhận</button>
              </div>
          </form>
      </div>`;
    });
};
