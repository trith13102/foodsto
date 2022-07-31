<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <?php require_once 'mvc/views/requirements/baseTag.php'; ?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/headerFooter.css">
    <link rel="stylesheet" href="public/css/homeView.css">
    <link rel="stylesheet" href="public/css/tailwindCommon.css">

    <!-- 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script> -->

    <style>
        .error {
            border: 1px solid red;
        }
    </style>

    <title>FoodSto Store</title>

</head>

<body>
    <script src="https://unpkg.com/validator@latest/validator.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/validate.js"></script>
    <?php require_once "./mvc/views/blocks/header.php";    ?>

    <div class="banner__nav font-primary-font">
        <div class="pt-36 py-26 text-center text-title-color">
            <h1 class="font-bold text-[70px]"> Trang đăng nhập</h1>
            <ol class="flex justify-center text-base mt-3">
                <li class="flex items-center justify-center"><i class="fa-solid fa-house-chimney mr-2"></i><a href="home" class="block hover:text-primary-color" id="home_link" target="_self">Trang chủ</a></li>
                <li class="flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs pl-2 pr-4"></i><a href="login" class="block hover:text-primary-color transition-colors">Trang đăng nhập</a></li>
            </ol>
        </div>
    </div>


    <section class="mb-10 mt-20 font-primary-font">

        <div class="px-2 text-gray-800 ">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6 ">
                <div class="xl:ml-20 xl:w-9/12 lg:w-10/12 md:w-10/12 mb-12 md:mb-0 shadow-product p-10">

                    <?php
                    require_once "./mvc/views/pages/" . $data["page"] . ".php";
                    ?>
                </div>
            </div>
        </div>
    </section>


    <?php require_once 'mvc/views/blocks/footer.php'; ?>



    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>


    <?php
    if (isset($data['result'])) {

        if ($data['result'] == 'true') {
    ?>
            <script>
                document.getElementById('home_link').click();
            </script>
        <?php
        } else {
        ?>
            <script>
                // document.querySelector('input').classlist.add = "error";
                document.getElementById('error_log').style.display = "block";
                document.getElementById('error_log').innerHTML = "Bạn nhập sai tài khoản hoặc mật khẩu";
            </script>   
    <?php
        }
    }
    ?>

</body>

</html>