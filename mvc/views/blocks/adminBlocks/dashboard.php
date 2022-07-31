<link rel="stylesheet" href="public/scss/admin/output/dashboard.css">

<?php
$summary = isset($data['summary']) ? $data['summary'] : '';
?>

<h1>Welcome! 👋👋👋</h1>
<p>Thống kê các số liệu trên hệ thống.</p>

<div class="section-wrapper">
     <div class="summary">
          <div class="summary-card">
               <div class="icon">
                    <i class='bx bxs-user-circle'></i>
               </div>
               <div class="description">
                    <h3 class="title">
                         Các loại tài khoản
                    </h3>
                    <p class="amount"><?php echo $summary[0] ?> Tài khoản</p>
               </div>
               <a class="view-more" href="admin/account" target="_self">
                    <p>Xem Thêm</p>
                    <i class='bx bx-info-circle'></i>
               </a>
          </div>

          <div class="summary-card">
               <div class="icon">
                    <i class='bx bxs-package'></i>
               </div>
               <div class="description">
                    <h3 class="title">
                         Đơn hàng hệ thống
                    </h3>
                    <p class="amount"><?php echo $summary[1] ?> Đơn hàng</p>
               </div>
               <a class="view-more" href="admin/order" target="_self">
                    <p>Xem Thêm</p>
                    <i class='bx bx-info-circle'></i>
               </a>
          </div>

          <div class="summary-card">
               <div class="icon">
                    <i class='bx bxs-offer'></i>
               </div>
               <div class="description">
                    <h3 class="title">
                         Sản phẩm giảm giá
                    </h3>
                    <p class="amount"><?php echo $summary[2] ?> Sản phẩm</p>
               </div>
               <a class="view-more" href="admin/discount" target="_self">
                    <p>Xem Thêm</p>
                    <i class='bx bx-info-circle'></i>
               </a>
          </div>

          <div class="summary-card">
               <div class="icon">
                    <i class='bx bxs-box'></i>
               </div>
               <div class="description">
                    <h3 class="title">
                         Sản phẩm đang bán
                    </h3>
                    <p class="amount"><?php echo $summary[3] ?> Sản phẩm</p>
               </div>
               <a class="view-more" href="admin/product" target="_self">
                    <p>Xem Thêm</p>
                    <i class='bx bx-info-circle'></i>
               </a>
          </div>

          <div class="summary-card">
               <div class="icon">
                    <i class='bx bxs-category'></i>
               </div>
               <div class="description">
                    <h3 class="title">
                         Danh mục sản phẩm
                    </h3>
                    <p class="amount"><?php echo $summary[4] ?> Đanh mục</p>
               </div>
               <a class="view-more" href="admin/category" target="_self">
                    <p>Xem Thêm</p>
                    <i class='bx bx-info-circle'></i>
               </a>
          </div>

     </div>

     <div class="charts">
          <div class="line-chart"></div>
          <div class="donut-chart"></div>
     </div>
</div>