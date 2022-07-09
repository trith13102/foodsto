<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <?php require_once 'mvc/views/requirements/baseTag.php'; ?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/headerFooter.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="node_modules/chart.js/dist/chart.js"></script>
    <link rel="stylesheet" href="public/css/tailwindCommon.css">
    <title>FoodSto Management System</title>
    <style>
     #drop-down-menu:before {
          right:24px;
          background: #fff;
          box-shadow: none;
          content: "";
          display: block;
          height: 12px;
          width: 12px;
          
          position: absolute;
          bottom: 100%;
          transform: rotate(-45deg) translateY(12px);
          border-radius: 2px;
     }
    </style>
</head>
<body class="font-primary-font">
     <main class="flex h-screen overflow-hidden">
          <aside class="z-50 sticky top-0 left-0 w-1/6 shadow-custom-shadow-1 bg-white">
               <section class="px-8 py-10">
                    <a href="">
                         <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1654415483/page_images/wide-logo_zoohrq.png" alt="">
                    </a>
               </section>
               <section class="px-8">
                    <ul>
                         <li class=""><a class="flex items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/dashboard" target="_self"><i class="pr-2 bx bxs-bar-chart-alt-2 bx-sm text-primary-color"></i> Số liệu thống kê</a></li>
                         <li class=""><a class="flex items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/category" target="_self"><i class="pr-2 bx bxs-category-alt bx-sm text-primary-color"></i> Danh mục</a></li>
                         <li class=""><a class="flex items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/account" target="_self"><i class="pr-2 bx bxs-user-account bx-sm text-primary-color"></i> Tài khoản</a></li>
                         <li class=""><a class="flex items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/product" target="_self"><i class="pr-2 bx bxs-package bx-sm text-primary-color" ></i> Sản phẩm</a></li>
                         <li class=""><a class="flex items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/dashboard" target="_self"><i class="pr-2 bx bxs-discount bx-sm text-primary-color"></i> Chương trình giảm giá</a></li>
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
          <section class="relative z-0 flex-1 bg-whiten-bg-color overflow-auto">
               <div class="absolute z-[-1] top-0 left-0 right-0 w-full h-96 bg-gradient-to-r from-primary-color to-secondary-color"></div>
               <div class="px-10 py-5">
                    <div class="relative flex items-center justify-between  hover:cursor-pointer">
                         <h1 class="font-medium uppercase text-white">Bảng điều khiển</h1>
                         <div onclick="showDropDownMenu();" class="relative select-none">
                              <div class="flex items-center text-white">
                                   <i class="bx bxs-user-circle bx-md pr-1"></i>
                                   <h3 class="font-medium">Tri Tran</h3>
                              </div>
                              <div id="drop-down-menu" class="hidden shadow-custom-shadow-1 absolute top-[130%] right-0 min-w-[12rem] py-2 rounded-md bg-white">
                                   <p class="px-4 py-2 text-xs font-semibold uppercase">Chào mừng!</p>
                                   <ul class="flex flex-col">
                                        <li><a class="flex items-center p-4 text-[.9rem] font-medium hover:bg-slate-100" href="" target="_self"><i class="bx text-[1.2rem] pr-2 bxs-user-account"></i> Hồ sơ của tôi</a></li>
                                        <li><a class="flex items-center p-4 text-[.9rem] font-medium hover:bg-slate-100" href="" target="_self"><i class="bx text-[1.2rem] pr-2 bx-log-out"></i>Đăng xuất</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="grid grid-cols-4 gap-5 my-16">
                         <div class="flex items-center justify-between w-full h-24 p-8 bg-white rounded-md shadow-custom-shadow-1">
                              <div class="flex flex-col justify-between">
                                   <p class="text-[.9rem] font-semibold uppercase text-slate-500">Danh mục</p>
                                   <p class="text-[1.5rem] font-medium">999</p>
                              </div>     
                              <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#f5365c]">
                                   <i class='bx bx-md bxs-category-alt text-white'></i>
                              </div>
                         </div>
                         <div class="flex items-center justify-between w-full h-24 p-8 bg-white rounded-md shadow-custom-shadow-1">
                              <div class="flex flex-col justify-between">
                                   <p class="text-[.9rem] font-semibold uppercase text-slate-500">Tài khoản</p>
                                   <p class="text-[1.5rem] font-medium">999</p>
                              </div>     
                              <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#fb6340]">
                                   <i class='bx bx-md bxs-user-account text-white'></i>
                              </div>
                         </div>
                         <div class="flex items-center justify-between w-full h-24 p-8 bg-white rounded-md shadow-custom-shadow-1">
                              <div class="flex flex-col justify-between">
                                   <p class="text-[.9rem] font-semibold uppercase text-slate-500">Sản phẩm</p>
                                   <p class="text-[1.5rem] font-medium">999</p>
                              </div>     
                              <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#ffd600]">
                                   <i class='bx bx-md bxs-package text-white'></i>
                              </div>
                         </div>
                         <div class="flex items-center justify-between w-full h-24 p-8 bg-white rounded-md shadow-custom-shadow-1">
                              <div class="flex flex-col justify-between">
                                   <p class="text-[.9rem] font-semibold uppercase text-slate-500">Chương trình giảm giá</p>
                                   <p class="text-[1.5rem] font-medium">999</p>
                              </div>     
                              <div class="flex items-center justify-center w-14 h-14 rounded-full bg-[#11cdef]">
                                   <i class='bx bx-md bxs-discount text-white'></i>
                              </div>
                         </div>
                         <div class="col-span-3 p-10 bg-white shadow-custom-shadow-1 rounded-md">
                              <h1 class="pb-5 text-xl font-semibold select-none">Thống kê đơn hàng cả năm</h1>
                              <canvas id="chart-1"></canvas>
                         </div>
                         <div class="p-10 bg-white shadow-custom-shadow-1 rounded-md">
                              <h1 class="pb-5 text-xl font-semibold select-none">Trạng thái các đơn hàng</h1>
                              <canvas id="chart-2"></canvas>
                         </div>
                    </div>              
               </div>
          </section>
     </main>
     <script src="public/js/adminView.js"></script>
</body>
</html>

<!-- npx tailwindcss -i ./public/css/tailwind/tailwindCommon.css -o ./public/css/tailwindCommon.css --watch -->