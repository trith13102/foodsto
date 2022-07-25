<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php require_once 'mvc/views/requirements/baseTag.php'; ?>
     <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script src="node_modules/chart.js/dist/chart.js"></script>
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
     <script src="https://unpkg.com/validator@latest/validator.min.js"></script>
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="public/css/tailwindCommon.css">
     <link rel="stylesheet" href="public/css/base.css">
     <title>FoodSto Management System</title>
     <style>
          #scroll-content::-webkit-scrollbar-track {
               background: transparent;
          }

          #scroll-content::-webkit-scrollbar {
               width: 10px;
               background-color: #F5F5F5;
          }

          #scroll-content::-webkit-scrollbar-thumb {
               background-color: #3bb77e;
          }

          #drop-down-menu:before {
               content: "";

               position: absolute;
               bottom: 100%;
               right: 24px;

               display: block;

               width: 12px;
               height: 12px;

               background: #fff;
               border-radius: 2px;
               transform: rotate(-45deg) translateY(12px);
          }

          #loader-wrapper {
               background-color: rgba(0, 0, 0, 0.8) !important;
               backdrop-filter: blur(0.5rem);
          }

          #loader {
               border: 3px solid hsla(152, 51%, 47%, 0.2);
               border-top-color: #3bb77e;
               border-radius: 50%;
               width: 3em;
               height: 3em;
               animation: spin 1s linear infinite;
          }

          @keyframes spin {
               to {
                    transform: rotate(360deg);
               }
          }
     </style>
</head>

<body class="font-primary-font ">
     <main class="flex h-screen overflow-hidden">
          <!-- ⬅️ Left: Navigation -->
          <aside class="z-40 sticky top-0 left-0 w-1/6 shadow-custom-shadow-1 bg-white">
               <section class="px-8 py-10">
                    <a href="admin" target="_self">
                         <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1654415483/page_images/wide-logo_zoohrq.png" alt="">
                    </a>
               </section>
               <section class="px-8">
                    <ul>
                         <li class=""><a class="flex text-[.9rem] items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/dashboard" target="_self"><i class="pr-2 bx bxs-bar-chart-alt-2 bx-sm text-primary-color"></i>Số liệu thống
                                   kê</a></li>
                         <li class=""><a class="flex text-[.9rem] items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/category" target="_self"><i class="pr-2 bx bxs-category-alt bx-sm text-primary-color"></i> Danh mục</a></li>
                         <li class=""><a class="flex text-[.9rem] items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/account" target="_self"><i class="pr-2 bx bxs-user-account bx-sm text-primary-color"></i> Tài khoản</a>
                         </li>
                         <li class=""><a class="flex text-[.9rem] items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/product" target="_self"><i class="pr-2 bx bxs-package bx-sm text-primary-color"></i> Sản phẩm</a></li>
                         <li class=""><a class="flex text-[.9rem] items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/discount" target="_self"><i class="pr-2 bx bxs-discount bx-sm text-primary-color"></i> Chương trình giảm
                                   giá</a></li>
                         <li class=""><a class="flex text-[.9rem] items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/order" target="_self"><i class="pr-2 bx bx-scatter-chart bx-sm text-primary-color"></i> Quản lý đơn hàng</a></li>
                    </ul>
               </section>
               <div class="px-8 mt-6">
                    <div class="flex flex-col items-center">
                         <div class="w-full h-[1px] bg-slate-200"></div>
                    </div>
                    <div class="mt-2 text-slate-500">
                         <p class="text-[13px] font-semibold">FoodSto Management System</p>
                         <p class="text-[12px]">Version 1.0</p>
                    </div>
               </div>
          </aside>

          <!-- ➡️ Right: Content -->
          <section id="scroll-content" class="relative z-0 flex-1 bg-whiten-bg-color overflow-auto">
               <div class="absolute z-[-1] top-0 left-0 right-0 w-full h-96 bg-gradient-to-r from-primary-color to-secondary-color">
               </div>
               <div class="px-10 py-5">
                    <div class="relative flex items-center justify-between  ">
                         <h1 class="font-medium uppercase text-md text-white">
                              <?php
                              $page = isset($data['page']) ? $data['page'] : '';
                              $titles = [
                                   'dashboard' => 'Số liệu thống kê',
                                   'category' => 'Quản lý danh mục',
                                   'account' => 'Quản lý tài khoản',
                                   'product' => 'Quản lý sản phẩm',
                                   'discount' => 'Chương trình giảm giá',
                                   'order' => 'Quản lý đơn hàng',
                              ];
                              echo $titles[$page];
                              ?>
                         </h1>
                         <div onclick="showDropDownMenu();" class="relative select-none">
                              <div class="flex items-center text-white hover:cursor-pointer">
                                   <i class="bx bxs-user-circle bx-md pr-1"></i>
                                   <h3 class="font-medium">Tri Tran</h3>
                              </div>
                              <div id="drop-down-menu" class="hidden shadow-custom-shadow-1 absolute top-[130%] right-0 min-w-[12rem] py-2 rounded-md bg-white">
                                   <p class="px-4 py-2 text-xs font-semibold uppercase">Chào mừng!</p>
                                   <ul class="flex flex-col">
                                        <li><a class="flex items-center p-4 text-[.9rem] font-medium hover:bg-slate-100" href="" target="_self"><i class="bx text-[1.2rem] pr-2 bxs-user-account"></i> Hồ sơ của
                                                  tôi</a></li>
                                        <li><a class="flex items-center p-4 text-[.9rem] font-medium hover:bg-slate-100" href="" target="_self"><i class="bx text-[1.2rem] pr-2 bx-log-out"></i>Đăng xuất</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="grid grid-cols-4 gap-x-[20px] gap-y-[40px] my-16">
                         <?php require_once 'mvc/views/blocks/adminPageBlocks/' . $page . '.php'; ?>
                    </div>
               </div>
          </section>
     </main>

     <!-- ⌛ Page loader -->
     <div id="loader-wrapper" class="hidden z-50 absolute top-0 left-0 right-0 flex items-center justify-center w-screen h-screen">
          <div id="loader"></div>
     </div>

     <script src="public/js/adminView.js"></script>
     <?php echo '<script src="public/js/blocks/adminView/' . $page . '.js"></script>'; ?>

</body>

</html>

<!-- npx tailwindcss -i ./public/css/tailwind/tailwindCommon.css -o ./public/css/tailwindCommon.css --watch -->