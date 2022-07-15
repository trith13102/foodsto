<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <?php require_once 'mvc/views/requirements/baseTag.php'; ?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/headerFooter.css">
    <link rel="stylesheet" href="public/css/homeView.css">
    <link rel="stylesheet" href="public/css/tailwindCommon.css">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  


    <title>FoodSto Store</title>

</head>

<body onload="myFunction()">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/homeView.js"></script>
    <script src="public/js/validate.js"></script>
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <?php require_once "./mvc/views/blocks/header.php";    ?>

    <div class="banner__nav font-primary-font">
        <div class="pt-36 py-26 text-center text-title-color">
            <h1 class="font-bold text-[70px]"> Trang đăng nhập</h1>
            <ol class="flex justify-center text-base mt-3">
                <li class="flex items-center justify-center"><i class="fa-solid fa-house-chimney mr-2"></i><a href="home" class="block hover:text-primary-color">Trang chủ</a></li>
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

    <div class="">
        <button id="btn_modal" type="button" class="inline-block hidden px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            Vertically centered modal
        </button>
    </div>

    <div class="modal font-primary-font fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header mx-auto flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-mediumm leading-normal text-gray-800" id="exampleModalScrollableLabel">
                        Bạn đã <?php if($data["page"] = 'loginPage') echo "đăng nhập";
                                     else if($data["page"] = 'loginPage') echo "đăng ký"; ?> thành công
                    </h5>
                    <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button" class="inline-block mx-auto px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green   -800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">
                        <a href="home" target="_self">Mua hàng ngay</a>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script>
        function myFunction() {
            <?php
            if (isset($data['result'])) {
                if ($data['result'] == 'true') {
            ?>
                    // console.log("<?php echo $data['result']; ?>");   
                    document.getElementById("btn_modal").click();
                <?php
                } else {
                ?>
                    console.log("<?php echo $data['result']; ?>");
            <?php
                }
            }
            ?>
        }
    </script>
</body>

</html>