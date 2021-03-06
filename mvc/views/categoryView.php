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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/tailwindCommon.css">
    <title>Danh Mục - FoodSto</title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/homeView.js"></script>
    <?php require_once './mvc/views/blocks/header.php' ?>

    <div class="banner__nav font-primary-font">
        <div class="pt-36 py-26 text-center text-title-color">
            <h1 class="font-bold text-[70px]">Danh Mục</h1>
            <ol class="flex justify-center text-base mt-3">
                <li class="flex items-center justify-center"><i class="fa-solid fa-house-chimney mr-2"></i><a href="" class="block hover:text-primary-color">Trang chủ</a></li>
                <li class="flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs pl-2 pr-4"></i><a href="" class="block hover:text-primary-color transition-colors">Danh mục</a></li>
            </ol>
        </div>
    </div>

    <div class="category-page_wrapper font-primary-font max-w-[1400px] mx-auto py-[120px]">
        <div class="grid grid-cols-3 gap-x-[30]">
            <?php foreach($data['arrCategory'] as $category){ ?>
            <div class="px-[15px]">
                <div class="rounded-[5px] bg-cover bg-no-repeat mb-[30px] " style="background-image:url('<?php echo $category['thumbnail']?>')">
                    <a href="" target="blank__" class="h-full flex justify-center rounded-[5px] overflow-hidden items-center text-[18px]">
                        <div class="flex text-left z-[1] p-[25px] flex-wrap items-center content-center w-full min-h-[280px] rounded-[5px] group ">
                            <h5 class="block w-full mb-[15px] text-[1.37rem] font-[600] tracking[-0.02em] group-hover:text-primary-color transition-colors duration-[0.7s]"><?php echo $category['name']  ?></h5>
                            <span class="flex items-center border-[1px] border-solid bg-secondary-color hover:bg-primary-color rounded-[5px] hover:border-primary-color border-secondary-color py-[10px] px-[15px] text-center text-[14px] transition-all duration-[0.5s]">
                                <span class="iq-button-effact flex text-white-color text-[16px] tracking[0.5px] font-[500]">
                                    <div><span>X</span><span>e</span><span>m</span><span>&nbsp;</span><span>H</span><span>ế</span><span>t</span></div>
                                </span>
                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right ml-2 text-white-color "></i>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <?php } ?>
            


        </div>
    </div>

    <?php require_once './mvc/views/blocks/footer.php' ?>
</body>

</html>