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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/tailwindCommon.css">
    <title>FoodSto Management System</title>
</head>
<body class="font-primary-font">
     <main class="flex h-screen">
          <aside class="w-1/6 h-screen placeholder:shadow-custom-shadow-1">
               <section class="px-8 py-10">
                    <a href="">
                         <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1654415483/page_images/wide-logo_zoohrq.png" alt="">
                    </a>
               </section>
               <section class="px-8">
                    <ul>
                         <li class=""><a class="flex items-center py-2.5 text-slate-400 hover:text-slate-800 hover:font-semibold transition-all ease-linear" href="admin/dashboard" target="_self"><i class="pr-2 bx bxs-bar-chart-alt-2 bx-sm text-primary-color"></i> Bảng điều khiển</a></li>
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
          <section class="flex-1 h-screen bg-whiten-bg-color"></section>
     </main>
</body>

</html>

