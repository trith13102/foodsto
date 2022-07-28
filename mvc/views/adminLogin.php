<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php require_once 'mvc/views/requirements/baseTag.php'; ?>
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="public/scss/admin/adminLogin.css">
     <title>FoodSto Management System</title>
</head>

<body>
     <div class="wrapper">
          <div class="form-wrapper">
               <div class="information">
                    <img class="logo" src="https://res.cloudinary.com/foodstocloud/image/upload/v1656514542/page_images/Logo-Transparent_pze1xl.png" alt="">
                    <h3 class="title">Đăng nhập vào hệ thống</h3>
               </div>
               <form id="login-form" class="form" method="POST" target="_self">
                    <div class="form-group">
                         <label for="username">Tên đăng nhập</label>
                         <input onclick="inputReset(this)" onblur="checkOnBlur(this)" id="username" class="" name="username" type="text">
                         <p class="hidden"></p>
                    </div>
                    <div class="form-group">
                         <label for="password">Mật khẩu</label>
                         <input onclick="inputReset(this)" onblur="checkOnBlur(this)" id="password" class="" name="password" type="password">
                         <p class="hidden"></p>
                    </div>
                    <div class="controller">
                         <button id="login-button" type="submit">
                              Đăng nhập
                         </button>
                    </div>
               </form>
          </div>
     </div>
     <script src="public/js/blocks/adminView/adminLogin.js"></script>
</body>

</html>