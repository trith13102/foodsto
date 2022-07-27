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
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="public/scss/admin/admin.css">
     <title>FoodSto Management System</title>
</head>

<body>
     <aside class="sidebar close">
          <header>
               <div class="image-text">
                    <span class="image">
                         <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1658906602/page_images/Rounded-logo_dats5s.png" alt="">
                    </span>

                    <div class="text logo-text">
                         <span class="name">FoodSto MS</span>
                         <span class="profession">Quản trị viên</span>
                    </div>
               </div>

               <i class='bx bx-chevron-right toggle'></i>
          </header>

          <div class="menu-bar">
               <div class="menu">

                    <li class="search-box">
                         <i class='bx bx-search icon'></i>
                         <input type="text" placeholder="Tìm kiếm...">
                    </li>

                    <ul class="menu-links">
                         <li class="nav-link">
                              <a href="admin/#1" target="_self">
                                   <i class='bx bxs-pie-chart-alt-2 icon'></i>
                                   <span class="text nav-text">Số liệu thống kê</span>
                              </a>
                         </li>

                         <li class="nav-link">
                              <a href="admin/#2" target="_self">
                                   <i class='bx bxs-user-circle icon'></i>
                                   <span class="text nav-text">Các loại tài khoản</span>
                              </a>
                         </li>

                         <li class="nav-link">
                              <a href="admin/#3" target="_self">
                                   <i class='bx bxs-box icon'></i>
                                   <span class="text nav-text">Sản phẩm đang bán</span>
                              </a>
                         </li>

                         <li class="nav-link">
                              <a href="admin/#4" target="_self">
                                   <i class='bx bxs-offer icon'></i>
                                   <span class="text nav-text">Sản phẩm giảm giá</span>
                              </a>
                         </li>

                         <li class="nav-link">
                              <a href="admin/#5" target="_self">
                                   <i class='bx bxs-category-alt icon'></i>
                                   <span class="text nav-text">Danh mục sản phẩm</span>
                              </a>
                         </li>

                         <li class="nav-link">
                              <a href="admin/#6" target="_self">
                                   <i class='bx bxs-shopping-bag-alt icon'></i>
                                   <span class="text nav-text">Đơn hàng đang giao</span>
                              </a>
                         </li>

                    </ul>
               </div>

               <div class="bottom-content">
                    <li class="">
                         <a href="admin/#7" target="_self">
                              <i class='bx bx-log-out icon'></i>
                              <span class="text nav-text">Đăng xuất</span>
                         </a>
                    </li>
               </div>
          </div>
     </aside>
     <div class="home"></div>
     <script src="public/js/adminView.js"></script>
</body>

</html>