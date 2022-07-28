<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php require_once 'mvc/views/requirements/baseTag.php'; ?>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script src="node_modules/chart.js/dist/chart.js"></script>
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <script src="https://unpkg.com/validator@latest/validator.min.js"></script>
     <link rel="shortcut icon" href="favicon.ico">
     <link rel="stylesheet" href="public/scss/admin/admin.css">
     <title>FoodSto Management System</title>
</head>

<body>
     <div class="wrapper">
          <aside class="sidebar">
               <div class="information">
                    <img class="logo" src="https://res.cloudinary.com/foodstocloud/image/upload/v1654415483/page_images/wide-logo_zoohrq.png" alt="">
               </div>
               <div class="menu">
                    <ul class="links-menu">
                         <li class="link">
                              <a href="admin/default/dashboard" target="_self">
                                   <i class='bx bxs-pie-chart-alt-2'></i>
                                   <p>Số liệu thống kê</p>
                              </a>
                         </li>
                         <li class="link">
                              <a href="admin/default/account" target="_self">
                                   <i class='bx bxs-user-circle'></i>
                                   <p>Các loại tài khoản</p>
                              </a>
                         </li>
                         <li class="link">
                              <a href="admin/default/order" target="_self">
                                   <i class='bx bxs-package'></i>
                                   <p>Quản lý đơn hàng</p>
                              </a>
                         </li>
                         <li class="link">
                              <a href="admin/default/discount" target="_self">
                                   <i class='bx bxs-offer'></i>
                                   <p>Sản phẩm giảm giá</p>
                              </a>
                         </li>
                         <li class="link">
                              <a href="admin/default/product" target="_self">
                                   <i class='bx bxs-box'></i>
                                   <p>Sản phẩm đang bán</p>
                              </a>
                         </li>
                         <li class="link">
                              <a href="admin/default/category" target="_self">
                                   <i class='bx bxs-category'></i>
                                   <p>Danh mục sản phẩm</p>
                              </a>
                         </li>
                    </ul>
               </div>
               <div class="controller">
                    <a class="logout" href="admin/logout" target="_self">
                         <i class='bx bx-log-out'></i>
                         <p>Đăng xuất</p>
                    </a>
               </div>
          </aside>
          <div class="content">
               <?php
               $page = isset($data['page']) ? $data['page'] : '';
               require_once 'blocks/adminBlocks/' . $page . '.php';
               ?>
          </div>
     </div>


     <script src="public/js/adminView.js"></script>
     <?php echo '<script src="public/js/blocks/adminView/' . $page . '.js"></script>'; ?>
</body>

</html>