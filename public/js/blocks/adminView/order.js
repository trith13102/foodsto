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
          <td colspan="8">
               <div class="loader-wrapper">
                    <div id="loader"></div>
               </div>
          </td>
     </tr> 
     `;

  let status = [
    "Thất bại",
    "Chờ xác nhận",
    "Chờ lấy hàng",
    "Đang giao",
    "Thành công",
  ];

  let tag = ["failure", "pending", "picking", "shipping", "success"];

  fetch("admin/crud/get_orders")
    .then((response) => response.json())
    .then((data) => {
      let orders = data.map(
        (order) => `
               <tr>
                    <td>${order[0]}</td>
                    <td>${order[1]}</td>
                    <td>${new Intl.NumberFormat("vi-VN", {
                      style: "currency",
                      currency: "VND",
                    }).format(order[2])}</td>
                    <td>${truncateString(order[3], 5)}</td>
                    <td>${truncateString(order[4], 5)}</td>
                    <td>${order[5]}</td>
                    <td class="${tag[order[6]]}">${status[order[6]]}</td>
                    <td>
                         <select onchange="changeStatus(this)" name="status" id="status" orderId="${
                           order[0]
                         }">
                              <option value="-1">Trạng thái</option>
                              <option value="0">Thất bại</option>
                              <option value="1">Chờ xác nhận</option>
                              <option value="2">Chờ lấy hàng</option>
                              <option value="3">Đang giao</option>
                              <option value="4">Thành công</option>
                         </select>
                    </td>
               </tr>
           `
      );

      document.querySelector(".data-table tbody").innerHTML = orders.join("");
    });
};
loadTable();

//   Change order status
let changeStatus = (select) => {
  let statusCell = select.parentNode.previousSibling.previousSibling;

  if (select.value >= 0 && select.value != statusCell.innerHTML.trim()) {
    statusCell.innerHTML = `
  <td>
    <div class="status-loader-wrapper">
      <div id="loader"></div>
    </div>
  </td>
  `;

    let formData = new FormData();
    formData.append("id", select.getAttribute("orderId"));
    formData.append("status", select.value);

    fetch("admin/crud/update_order_status", {
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

    let status = [
      "Thất bại",
      "Chờ xác nhận",
      "Chờ lấy hàng",
      "Đang giao",
      "Thành công",
    ];

    let tag = ["failure", "pending", "picking", "shipping", "success"];

    formData = new FormData();
    formData.append("id", select.getAttribute("orderId"));

    fetch("admin/crud/get_order_status", {
      body: formData,
      method: "POST",
    })
      .then((response) => response.json())
      .then((data) => {
        statusCell.innerHTML = `${status[data.status]}`;
        statusCell.removeAttribute("class");
        statusCell.setAttribute("class", tag[data.status]);
      });
  }
};
