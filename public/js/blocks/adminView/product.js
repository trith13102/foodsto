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

// Load table
let loadTable = () => {
  document.querySelector(".data-table tbody").innerHTML = `
     <tr>
          <td colspan="10">
               <div class="loader-wrapper">
                    <div id="loader"></div>
               </div>
          </td>
     </tr> 
     `;
  fetch("admin/crud/get_products")
    .then((response) => response.json())
    .then((data) => {
      let products = data.map(
        (product) => `
        <tr>
            <td>
              <img src="${product[0]}" width="100px" alt="Ảnh sản phẩm">
            </td>
            <td>${product[2]}</td>
            <td>${product[3]}</td>
            <td>${truncateString(product[4], 10)}</td>
            <td>${product[5]} VNĐ</td>
            <td>${product[6]} KG</td>
            <td>${truncateString(product[7], 15)}</td>
            <td>${product[8]}</td>
            <td>${product[9]}</td>
            <td>
                <button onclick="openEditProduct(${
                  product[1]
                })" type="button" title="Sửa"><i class="bx bx-edit"></i></button>
                <button onclick="openDeleteProduct(${
                  product[1]
                })" type="button" title="Xoá"><i class="bx bx-trash"></i></button>
            </td>
        </tr>
             `
      );

      document.querySelector(".data-table tbody").innerHTML = products.join("");
    });
};
loadTable();

//  Add product
let addProduct = (form) => {
  document.getElementById("modal").style.display = "none";
  loadTable();

  let formData = new FormData();

  formData.append("category_id", form[0].value);
  formData.append("name", form[1].value);
  formData.append("price", form[2].value);
  formData.append("weight", form[3].value);
  formData.append("description", form[4].value);
  formData.append("thumbnail", form[5].files[0]);
  formData.append("stock", form[6].value);

  fetch("admin/crud/add_product", {
    body: formData,
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.message == "SUCCESS") {
        loadTable();
        pushNotification("Thao tác thành công!");
      } else {
        pushNotification("Thao tác thất bại!");
      }
    });
};

let openAddProduct = () => {
  document.getElementById("modal").style.display = "block";
  document.querySelector("#modal .modal-body").innerHTML = `
    <div class="loader-wrapper">
        <div id="loader"></div>
    </div>
  `;

  fetch("admin/crud/get_categories", {
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => {
      let categories = data.map(
        (category) => `
          <option value="${category[0]}">${category[1]}</option>
        `
      );
      document.querySelector("#modal .modal-body").innerHTML = `
      <div class="add-product">
          <form onsubmit="event.preventDefault(); addProduct(this)" target="_self" enctype="multipart/form-data">
            <div class="form-input">
                <label for="category_id">Danh mục</label>
                <select name="category_id" id="category_id">${categories.join(
                  ""
                )}</select>
            </div>
            <div class="form-input">
                <label for="name">Tên sản phẩm</label>
                <input id="name" name="name" type="text">
            </div>
            <div class="form-input">
                <label for="price">Giá sản phẩm</label>
                <input id="price" name="price" type="number">
            </div>
            <div class="form-input">
                <label for="weight">Khối lượng sản phẩm</label>
                <input id="weight" name="weight" type="number" step="0.01">
            </div>
            <div class="form-input">
                <label for="description">Mô tả sản phẩm</label>
                <textarea id="description" name="description" type="text" rows="4" cols="50"></textarea>
            </div>
            <div class="form-input">
                <label for="thumbnail">Ảnh thu nhỏ</label>
                <input id="thumbnail" name="thumbnail" type="file">
            </div>
            <div class="form-input">
                <label for="stock">Số lượng nhập kho</label>
                <input id="stock" name="stock" type="number">
            </div>
            <div class="controller">
                  <button type="submit">Xác nhận</button>
            </div>
          </form>
      </div>`;
    });
};

//  Delete product
let deleteProduct = (id) => {
  document.getElementById("modal").style.display = "none";
  loadTable();

  let formData = new FormData();
  formData.append("id", id);

  fetch("admin/crud/delete_product", {
    body: formData,
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.message == "SUCCESS") {
        loadTable();
        pushNotification("Thao tác thành công!");
      } else {
        pushNotification("Thao tác thất bại!");
      }
    });
};

let openDeleteProduct = (id) => {
  document.getElementById("modal").style.display = "block";
  document.querySelector("#modal .modal-body").innerHTML = `
  <div class="delete-product">
      <p class="title">Xoá tài khoản này?</p>
      <button onclick="deleteProduct(${id})" type="button">Xác nhận</button>
  </div>
  `;
};

//  Edit product
let updateProduct = (form, id) => {
  document.getElementById("modal").style.display = "none";
  loadTable();
  
  let formData = new FormData();

  formData.append("category_id", form[0].value);
  formData.append("name", form[1].value);
  formData.append("price", form[2].value);
  formData.append("weight", form[3].value);
  formData.append("description", form[4].value);
  formData.append("thumbnail", form[5].files[0]);
  formData.append("stock", form[6].value);
  formData.append("id", id);

  fetch("admin/crud/update_product", {
    body: formData,
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.message == "SUCCESS") {
        loadTable();
        pushNotification("Thao tác thành công!");
      } else {
        pushNotification("Thao tác thất bại!");
      }
    });
};

let openEditProduct = async (id) => {
  document.getElementById("modal").style.display = "block";
  document.querySelector("#modal .modal-body").innerHTML = `
    <div class="loader-wrapper">
        <div id="loader"></div>
    </div>
  `;

  let formData = new FormData();
  formData.append("id", id);

  let product = await fetch("admin/crud/get_product", {
    body: formData,
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => data);

  await fetch("admin/crud/get_categories", {
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => {
      let categories = data.map(
        (category) => `
          <option value="${category[0]}" ${
          category[0] == product[1] ? "selected" : ""
        }>${category[1]}</option>
        `
      );
      document.querySelector("#modal .modal-body").innerHTML = `
      <div class="add-product">
          <form onsubmit="event.preventDefault(); updateProduct(this, ${
            product[0]
          })" target="_self" enctype="multipart/form-data">
            <div class="form-input">
                <label for="category_id">Danh mục</label>
                <select name="category_id" id="category_id">${categories.join(
                  ""
                )}</select>
            </div>
            <div class="form-input">
                <label for="name">Tên sản phẩm</label>
                <input id="name" name="name" type="text" value="${product[3]}">
            </div>
            <div class="form-input">
                <label for="price">Giá sản phẩm</label>
                <input id="price" name="price" type="number" value="${
                  product[4]
                }">
            </div>
            <div class="form-input">
                <label for="weight">Khối lượng sản phẩm</label>
                <input id="weight" name="weight" type="number" step="0.01" value="${
                  product[5]
                }">
            </div>
            <div class="form-input">
                <label for="description">Mô tả sản phẩm</label>
                <textarea id="description" name="description" type="text" rows="4" cols="50">${
                  product[6]
                }</textarea>
            </div>
            <div class="form-input">
                <label for="thumbnail">Ảnh thu nhỏ</label>
                <input id="thumbnail" name="thumbnail" type="file" value="${
                  product[7]
                }">
            </div>
            <div class="form-input">
                <label for="stock">Số lượng nhập kho</label>
                <input id="stock" name="stock" type="number" value="${
                  product[9]
                }">
            </div>
            <div class="controller">
                  <button type="submit">Xác nhận</button>
            </div>
          </form>
      </div>`;
    });
};
