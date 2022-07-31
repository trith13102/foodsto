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

//   VND Currency formatter
let vndCurrency = (money) => {
  if (isNaN(money)) {
    return;
  }

  return new Intl.NumberFormat("vi-VN", {
    style: "currency",
    currency: "VND",
  }).format(money);
};

// Discount format
let discountFormat = (discount) => {
  if (discount == null) return "0%";
  return `${discount}%`;
};

// Load table
let loadTable = () => {
  document.querySelector(".data-table tbody").innerHTML = `
     <tr>
          <td colspan="6">
               <div class="loader-wrapper">
                    <div id="loader"></div>
               </div>
          </td>
     </tr> 
     `;

  fetch("admin/crud/get_products_with_discount")
    .then((response) => response.json())
    .then((products) => {
      let orders = products.map(
        (product) => `
          <tr>
               <td>${product[0]}</td>
               <td>${product[1]}</td>
               <td>${vndCurrency(product[2])}</td>
               <td>${vndCurrency(product[3])}</td>
               <td>${discountFormat(product[4])}</td>
               <td>
                    <div class="input-range">
                         <label for="discount">${discountFormat(
                           product[4]
                         )}</label>
                         <input onchange="changeDiscount(this, ${
                           product[4] == null ? 0 : 1
                         })"
                         type="range" id="discount" name="discount"
                         step="0.01" min="0" max="0.9" value="${
                           product[4] == null ? 0 : product[4] / 100
                         }" productDiscountId=${product[0]}>
                    </div>
               </td>
          </tr>
           `
      );

      document.querySelector(".data-table tbody").innerHTML = orders.join("");
    });
};
loadTable();

//   Change discount
changeDiscount = (input, type) => {
  let discount = input.value.trim();
  let productDiscountId = input.getAttribute("productDiscountId");

  let label = input.previousSibling.previousSibling;
  label.innerHTML = `${(discount * 100).toFixed()}%`;

  let discountCell =
    input.parentNode.parentNode.previousSibling.previousSibling;

  discountCell.innerHTML = `
     <td>
          <div class="discount-loader-wrapper">
               <div id="loader"></div>
          </div>
     </td>
  `;

  let urls = ["create_product_discount", "update_product_discount"];

  let formData = new FormData();
  formData.append("id", productDiscountId);
  formData.append("discount", discount);

  fetch(`admin/crud/${urls[type]}`, {
    body: formData,
    method: "POST",
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.message == "SUCCESS") {
        pushNotification("Thao tác thành công!");
        discountCell.innerHTML = `${(discount * 100).toFixed()}%`;
      } else {
        pushNotification("Thao tác thất bại!");
      }
    });
};
