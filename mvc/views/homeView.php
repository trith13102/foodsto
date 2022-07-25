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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/tailwindCommon.css">
    <title>FoodSto Store</title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <?php require_once 'mvc/views/blocks/header.php'; ?>

    <div class="banner-main_home">
        <div class="h-inner-banner">
            <div class="h-hident-title">Organic</div>
            <div class="h-title-main">
                <div class="banner-title">
                    Thực phẩm
                    <span>Tươi sống</span>
                </div>
                <div class="banner-descr">
                    Tham gia cùng chúng tôi để tìm hiểu cách sản xuất rau rau sạch và các lựa chọn salad lành mạnh.
                </div>
                <a target="_self" href="" class="h-button view">
                    <span class="h-add">
                        <div>
                            <span>X</span>
                            <span>e</span>
                            <span>m</span>
                            <span>&nbsp;</span>
                            <span>T</span>
                            <span>h</span>
                            <span>ê</span>
                            <span>m</span>
                            <span>&nbsp;&nbsp;</span>
                        </div>
                    </span>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </a>
            </div>
            <div class="banner-img">
                <img class="bg-img" src="https://res.cloudinary.com/foodstocloud/image/upload/v1657402689/page_images/shap_vdk0el.png" alt="">

                <img class="main-img" src="https://res.cloudinary.com/foodstocloud/image/upload/v1657402691/page_images/man_f07ozl.png" alt="">

            </div>
        </div>
    </div>

    <main>

        <section class="home__title-bar">
            <div class="title-bar__list">
                <div class="title-bar__item">
                    <div class="title-bar__img">
                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1656752379/icon_images/tt-home-1_rlyid0.png" alt="">
                    </div>
                    <div class="in-item">
                        <h5>Nông sản</h5>
                        Nông sản tươi - sạch
                    </div>
                </div>
                <div class="title-bar__item">
                    <div class="title-bar__img">
                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1656752379/icon_images/tt-home-2_epec9h.png" alt="">
                    </div>
                    <div class="in-item">
                        <h5>Salads</h5>
                        Salads giàu dinh dưỡng
                    </div>
                </div>
                <div class="title-bar__item">
                    <div class="title-bar__img">
                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1656752380/icon_images/tt-home-3_rqihgk.png" alt="">
                    </div>
                    <div class="in-item">
                        <h5>Giỏ hàng</h5>
                        Giỏ hàng tiện lợi
                    </div>
                </div>
                <div class="title-bar__item">
                    <div class="title-bar__img">
                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1656752380/icon_images/tt-home-4_ano0b4.png" alt="">
                    </div>
                    <div class="in-item">
                        <h5>Hỗ trợ</h5>
                        Hỗ trợ nhanh
                    </div>
                </div>
            </div>
        </section>

        <section class="home__services-con">
            <div class="services-list">
                <div class="services-item ">
                    <div class="service-img ser-img1"></div>
                    <div class="ser-con">
                        <span>Sản phẩm hữu cơ</span>
                        <h4>Rau củ</h4>
                        <a target="_self" href="" class="h-button shop">
                            <span class="h-add">
                                <div>
                                    <span>C</span>
                                    <span>ử</span>
                                    <span>a</span>
                                    <span>&nbsp;</span>
                                    <span>h</span>
                                    <span>à</span>
                                    <span>n</span>
                                    <span>g</span>
                                    <span>&nbsp;&nbsp;</span>
                                </div>
                            </span>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="services-item ">
                    <div class="service-img ser-img2"></div>
                    <div class="ser-con">
                        <span>Giảm giá 30%</span>
                        <h4>Thực phẩm sạch</h4>
                        <a target="_self" href="" class="h-button shop">
                            <span class="h-add">
                                <div>
                                    <span>C</span>
                                    <span>ử</span>
                                    <span>a</span>
                                    <span>&nbsp;</span>
                                    <span>h</span>
                                    <span>à</span>
                                    <span>n</span>
                                    <span>g</span>
                                    <span>&nbsp;&nbsp;</span>
                                </div>
                            </span>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
                <div class="services-item ">
                    <div class="service-img ser-img3"></div>
                    <div class="ser-con">
                        <span>Không chứa Gluten</span>
                        <h4>Super Salads</h4>
                        <a target="_self" href="" class="h-button shop">
                            <span class="h-add">
                                <div>
                                    <span>C</span>
                                    <span>ử</span>
                                    <span>a</span>
                                    <span>&nbsp;</span>
                                    <span>h</span>
                                    <span>à</span>
                                    <span>n</span>
                                    <span>g</span>
                                    <span>&nbsp;&nbsp;</span>
                                </div>
                            </span>
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="home__title">
            <div class="title-hident">
                Sản phẩm
            </div>
            <div class="title-main">
                <span>Sản phẩm hữu cơ</span>
                <h2>Món ăn kèm hữu cơ</h2>
                <div class="title-divider"></div>
            </div>
        </section>

        <section class="home_product-bar">
            <div class="home_product-filters">
                <button class="tabs__title">
                    <a target="_self" href="#<?php echo $category[0] ?>">
                        Trái cây
                    </a>
                </button>
                <button class="tabs__title">
                    <a target="_self" href="#<?php echo $category[0] ?>">
                        Trái cây
                    </a>
                </button>
                <button class="tabs__title">
                    <a target="_self" href="#<?php echo $category[0] ?>">
                        Trái cây
                    </a>
                </button>
            </div>
            <div class="home_product">
                <?php
                if (isset($data['arrCategories'])) {
                    $categories = json_decode($data['arrCategories']);
                    foreach ($categories as $key => $category) { ?>
                        <div class="tabs__content h-product-list <?php echo $key == 0 ? 'active' : '' ?>" id="<?php echo $category[0] ?>">
                            <div class="h-product-main">

                                <?php
                                $data['category_id'] = $category[0];
                                if (isset($data['arrProducts'])) {
                                    $products = json_decode($data['arrProducts'][0]);
                                    foreach ($products as $key => $product) { ?>

                                        <div class="h-product-item">
                                            <div class="inner-h-product">
                                                <div class="h-product-img">
                                                    <img src="<?php echo $product[7] ?>" alt="">
                                                </div>
                                                <div class="h-product_content">
                                                    <div class="h-product__category">
                                                        <span class="h-category"><?php echo $category[1] ?></span>
                                                    </div>
                                                    <div class="h-product__title-price">
                                                        <a target="_self" href="" class="h-product__title"><?php echo $product[3] ?></a>
                                                        <div class="h-product__price">
                                                            <div class="h-pricing-details">
                                                                <ins>
                                                                    <span><?php echo $product[4] ?></span> VNĐ
                                                                </ins>
                                                            </div>
                                                            <div class="h-ratings">
                                                                <ul>
                                                                    <li>
                                                                        <i class="fas fa-star"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fas fa-star"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fas fa-star"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fas fa-star"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="far fa-star"></i>
                                                                    </li>
                                                                </ul>
                                                                <span class="h-review">(4)</span>
                                                            </div>
                                                        </div>
                                                        <div class="relative">
                                                            <ul class="flex">
                                                                <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                                    <a target="_self" href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                                        Thêm vào giỏ hàng
                                                                    </a>
                                                                </li>
                                                                <li class="inline-block">
                                                                    <span class="feedback">
                                                                        <a href="" target="_self" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                            <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                                        </a>
                                                                    </span>
                                                                </li>
                                                                <li class="inline-block ml-[5px]">
                                                                    <button class="btn-open hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                <?php }
                                } ?>
                            </div>

                        </div>
                <?php }
                } ?>

                <!-- <div class="tabs__content h-product-list" id="fruit-yogurt">
                        <div class="h-product-main">
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <div class="h-product-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655113241/product_images/htsjy1yio9llgciww9hx.jpg" alt="">
                                    </div>
                                    <div class="h-product_content">
                                        <div class="h-product__category">
                                            <span class="h-category">Trái cây</span>
                                            ,
                                            <span class="h-category">Sữa chua</span>
                                        </div>
                                        <div class="h-product__title-price">
                                            <a target="_self" href="" class="h-product__title">Somoothie</a>
                                            <div class="h-product__price">
                                                <div class="h-pricing-details">
                                                    <ins>
                                                        <span>20.000</span> VNĐ
                                                    </ins>
                                                </div>
                                                <div class="h-ratings">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="h-review">(4)</span>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <ul class="flex">
                                                    <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                        <a target="_self" href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    </li>
                                                    <li class="inline-block">
                                                        <span class="feedback">
                                                            <a href="" target="_self" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                    <li class="inline-block ml-[5px]">
                                                        <button class="btn-open hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <div class="h-product-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114754/product_images/qxi601gby5yrxv7otrp0.jpg" alt="">
                                    </div>
                                    <div class="h-product_content">
                                        <div class="h-product__category">
                                            <span class="h-category">Trái cây</span>
                                            ,
                                            <span class="h-category">Sữa chua</span>
                                        </div>
                                        <div class="h-product__title-price">
                                            <a target="_self" href="" class="h-product__title">Cam</a>
                                            <div class="h-product__price">
                                                <div class="h-pricing-details">
                                                    <ins>
                                                        <span>25.000</span> VNĐ
                                                    </ins>
                                                </div>
                                                <div class="h-ratings">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="h-review">(3)</span>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <ul class="flex">
                                                    <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                        <a target="_self" href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    </li>
                                                    <li class="inline-block">
                                                        <span class="feedback">
                                                            <a href="" target="_self" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                    <li class="inline-block ml-[5px]">
                                                        <button class="btn-open hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <span class="onSale">Sale!</span>
                                    <div class="h-product-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655113774/product_images/rjso5vg8fbk2mempr2o6.jpg" alt="">
                                    </div>
                                    <div class="h-product_content">
                                        <div class="h-product__category">
                                            <span class="h-category">Trái cây</span>
                                            ,
                                            <span class="h-category">Sữa chua</span>
                                        </div>
                                        <div class="h-product__title-price">
                                            <a target="_self" href="" class="h-product__title">Nho</a>
                                            <div class="h-product__price">
                                                <div class="h-pricing-details">
                                                    <del>
                                                        <span>15.000</span> VNĐ
                                                    </del>
                                                    <ins>
                                                        <span>10.000</span> VNĐ
                                                    </ins>
                                                </div>
                                                <div class="h-ratings">

                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="h-review">(5)</span>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <ul class="flex">
                                                    <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                        <a target="_self" href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    </li>
                                                    <li class="inline-block">
                                                        <span class="feedback">
                                                            <a href="" target="_self" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                    <li class="inline-block ml-[5px]">
                                                        <button class="btn-open hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <div class="h-product-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655113452/product_images/oo3ane27k5umt9xzwhyi.jpg" alt="">
                                    </div>
                                    <div class="h-product_content">
                                        <div class="h-product__category">
                                            <span class="h-category">Trái cây</span>
                                            ,
                                            <span class="h-category">Sữa chua</span>
                                        </div>
                                        <div class="h-product__title-price">
                                            <a target="_self" href="" class="h-product__title">Bơ</a>
                                            <div class="h-product__price">
                                                <div class="h-pricing-details">
                                                    <ins>
                                                        <span>10.000</span> VNĐ
                                                    </ins>
                                                </div>
                                                <div class="h-ratings">

                                                    <ul>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <ul class="flex">
                                                    <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                        <a target="_self" href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    </li>
                                                    <li class="inline-block">
                                                        <span class="feedback">
                                                            <a href="" target="_self" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                    <li class="inline-block ml-[5px]">
                                                        <button class="btn-open hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs__content h-product-list" id="salads">
                        <div class="h-product-main">
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <span class="onSale">Sale!</span>
                                    <div class="h-product-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655116048/product_images/emutw8yvztavoi8rtm67.jpg" alt="">
                                    </div>
                                    <div class="h-product_content">
                                        <div class="h-product__category">
                                            <span class="h-category">Salads</span>
                                            ,
                                            <span class="h-category">Soups</span>
                                        </div>
                                        <div class="h-product__title-price">
                                            <a target="_self" href="" class="h-product__title">Salad rau củ</a>
                                            <div class="h-product__price">
                                                <div class="h-pricing-details">
                                                    <del>
                                                        <span>30.000</span> VNĐ
                                                    </del>
                                                    <ins>
                                                        <span>25.000</span> VNĐ
                                                    </ins>
                                                </div>
                                                <div class="h-ratings">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="h-review">(3)</span>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <ul class="flex">
                                                    <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                        <a target="_self" href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    </li>
                                                    <li class="inline-block">
                                                        <span class="feedback">
                                                            <a href="" target="_self" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                    <li class="inline-block ml-[5px]">
                                                        <button class="btn-open hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <div class="h-product-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114282/product_images/adfrdtblh0rsz2dsl7br.jpg" alt="">
                                    </div>
                                    <div class="h-product_content">
                                        <div class="h-product__category">
                                            <span class="h-category">Salads</span>
                                            ,
                                            <span class="h-category">Soups</span>
                                        </div>
                                        <div class="h-product__title-price">
                                            <a target="_self" href="" class="h-product__title">Bạc hà</a>
                                            <div class="h-product__price">
                                                <div class="h-pricing-details">
                                                    <ins>
                                                        <span>10.000</span> VNĐ
                                                    </ins>
                                                </div>
                                                <div class="h-ratings">

                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="h-review">(5)</span>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <ul class="flex">
                                                    <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                        <a target="_self" href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    </li>
                                                    <li class="inline-block">
                                                        <span class="feedback">
                                                            <a href="" target="_self" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                    <li class="inline-block ml-[5px]">
                                                        <button class="btn-open hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <div class="h-product-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655112524/product_images/gnggai5ctgp8urqmy6pt.jpg" alt="">
                                    </div>
                                    <div class="h-product_content">
                                        <div class="h-product__category">
                                            <span class="h-category">Salads</span>
                                            ,
                                            <span class="h-category">Soups</span>
                                        </div>
                                        <div class="h-product__title-price">
                                            <a target="_self" href="" class="h-product__title">Bông cải xanh</a>
                                            <div class="h-product__price">
                                                <div class="h-pricing-details">
                                                    <ins>
                                                        <span>10.000</span> VNĐ
                                                    </ins>
                                                </div>
                                                <div class="h-ratings">

                                                    <ul>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <ul class="flex">
                                                    <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                        <a target="_self" href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    </li>
                                                    <li class="inline-block">
                                                        <span class="feedback">
                                                            <a href="" target="_self" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                    <li class="inline-block ml-[5px]">
                                                        <button class="btn-open hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <div class="h-product-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114335/product_images/jzhhrwdz4lp4dt1dbbos.png" alt="">
                                    </div>
                                    <div class="h-product_content">
                                        <div class="h-product__category">
                                            <span class="h-category">Salads</span>
                                            ,
                                            <span class="h-category">Soups</span>
                                        </div>
                                        <div class="h-product__title-price">
                                            <a target="_self" href="" class="h-product__title">Salad rau trộn</a>
                                            <div class="h-product__price">
                                                <div class="h-pricing-details">
                                                    <ins>
                                                        <span>20.000</span> VNĐ
                                                    </ins>
                                                </div>
                                                <div class="h-ratings">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="h-review">(4)</span>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <ul class="flex">
                                                    <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                        <a target="_self" href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    </li>
                                                    <li class="inline-block">
                                                        <span class="feedback">
                                                            <a href="" target="_self" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                    <li class="inline-block ml-[5px]">
                                                        <button class="btn-open hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </section>

        <section class="h-video">
            <div class="h-background-overlay"></div>
            <div class="h-container-video">
                <section class="home__title">
                    <div class="title-main">
                        <span>Sản phẩm hữu cơ</span>
                        <h2>Thực phẩm tươi và sạch</h2>
                        <div class="title-divider"></div>
                    </div>
                </section>
                <div class="h-video-icon">
                    <div class="sonar-wrapper">

                        <div class="sonar-emitter">
                            <i class="fa-solid fa-play"></i>
                            <div class="sonar-wave">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home__title">
            <div class="title-hident">
                Tự nhiên
            </div>
            <div class="title-main">
                <span>Không chất hóa học và thuốc trừ sâu</span>
                <h2>Sản phẩm hữu cơ</h2>
                <div class="title-divider"></div>
            </div>
        </section>

        <section class="h-categoris">
            <div class="h-categoris__poster">
                <div class="h-poster__img"> </div>
                <div class="h-poster__content">
                    <div class="h-content__title">
                        Trái cây tươi. <br>
                        100% hữu cơ
                    </div>
                    <a target="_self" href="" class="h-button shop">
                        <span class="h-add">
                            <div>
                                <span>C</span>
                                <span>ử</span>
                                <span>a</span>
                                <span>&nbsp;</span>
                                <span>h</span>
                                <span>à</span>
                                <span>n</span>
                                <span>g</span>
                                <span>&nbsp;&nbsp;</span>

                            </div>
                        </span>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
            <div class="h-category__content">
                <div class="h-product-main">
                    <div class="h-product-item">
                        <div class="inner-h-product">
                            <div class="h-product-img">
                                <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655112834/product_images/d2qx4eynlriebzyhonkq.jpg" alt="">
                            </div>
                            <div class="h-product_content">
                                <div class="h-product__title-price">
                                    <a target="_self" href="" class="h-product__title">Khoai tây chiên</a>
                                    <div class="h-product__price">
                                        <div class="h-pricing-details">
                                            <ins>
                                                <span>10.000</span> VNĐ
                                            </ins>
                                        </div>
                                        <div class="h-ratings">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="far fa-star"></i>
                                                </li>
                                            </ul>
                                            <span class="h-review">(4)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="h-product-item">
                        <div class="inner-h-product">
                            <div class="h-product-img">
                                <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655115535/product_images/dbifmooytqnufhqx4pbu.jpg" alt="">
                            </div>
                            <div class="h-product_content">
                                <div class="h-product__title-price">
                                    <a target="_self" href="" class="h-product__title">Món ăn phụ</a>
                                    <div class="h-product__price">
                                        <div class="h-pricing-details">
                                            <ins>
                                                <span>10.000</span> VNĐ
                                            </ins>
                                        </div>
                                        <div class="h-ratings">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="far fa-star"></i>
                                                </li>
                                            </ul>
                                            <span class="h-review">(4)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="h-product-item">
                        <div class="inner-h-product">
                            <div class="h-product-img">
                                <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114023/product_images/visgq0suwwzz4wc2lvwt.jpg" alt="">
                            </div>
                            <div class="h-product_content">
                                <div class="h-product__title-price">
                                    <a target="_self" href="" class="h-product__title">Tương cà</a>
                                    <div class="h-product__price">
                                        <div class="h-pricing-details">
                                            <ins>
                                                <span>10.000</span> VNĐ
                                            </ins>
                                        </div>
                                        <div class="h-ratings">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="far fa-star"></i>
                                                </li>
                                            </ul>
                                            <span class="h-review">(4)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="h-product-item">
                        <div class="inner-h-product">
                            <div class="h-product-img">
                                <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655112834/product_images/d2qx4eynlriebzyhonkq.jpg" alt="">
                            </div>
                            <div class="h-product_content">
                                <div class="h-product__title-price">
                                    <a target="_self" href="" class="h-product__title">Khoai tây chiên</a>
                                    <div class="h-product__price">
                                        <div class="h-pricing-details">
                                            <ins>
                                                <span>10.000</span> VNĐ
                                            </ins>
                                        </div>
                                        <div class="h-ratings">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="far fa-star"></i>
                                                </li>
                                            </ul>
                                            <span class="h-review">(4)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="h-product-item">
                        <div class="inner-h-product">
                            <div class="h-product-img">
                                <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655112245/product_images/f62zvx9wjf1onygdu9tn.jpg" alt="">
                            </div>
                            <div class="h-product_content">
                                <div class="h-product__title-price">
                                    <a target="_self" href="" class="h-product__title">Bánh mì</a>
                                    <div class="h-product__price">
                                        <div class="h-pricing-details">
                                            <ins>
                                                <span>10.000</span> VNĐ
                                            </ins>
                                        </div>
                                        <div class="h-ratings">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="far fa-star"></i>
                                                </li>
                                            </ul>
                                            <span class="h-review">(4)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="h-product-item">
                        <div class="inner-h-product">
                            <div class="h-product-img">
                                <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655112834/product_images/d2qx4eynlriebzyhonkq.jpg" alt="">
                            </div>
                            <div class="h-product_content">
                                <div class="h-product__title-price">
                                    <a target="_self" href="" class="h-product__title">Khoai tây chiên</a>
                                    <div class="h-product__price">
                                        <div class="h-pricing-details">
                                            <ins>
                                                <span>10.000</span> VNĐ
                                            </ins>
                                        </div>
                                        <div class="h-ratings">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="far fa-star"></i>
                                                </li>
                                            </ul>
                                            <span class="h-review">(4)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="h-banner-sale">
            <div class="banner-sale__img"> </div>
            <div class="banner-sale__content">
                <section class="home__title">
                    <div class="title-main">
                        <span>Ưu đã cuối tuần</span>
                        <h2>Thực phẩm hữu cơ Giảm giá tới 50%</h2>
                    </div>
                </section>
                <a target="_self" href="" class="h-button shop">
                    <span class="h-add">
                        <div>
                            <span>C</span>
                            <span>ử</span>
                            <span>a</span>
                            <span>&nbsp;</span>
                            <span>h</span>
                            <span>à</span>
                            <span>n</span>
                            <span>g</span>
                            <span>&nbsp;&nbsp;</span>
                        </div>
                    </span>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </a>
            </div>
        </section>

        <section class="h-testimonial">
            <div class="bg-respond"></div>
            <div class="inner-respond">
                <section class="home__title">
                    <div class="title-hident">
                        Phản hồi
                    </div>
                    <div class="title-main">
                        <span>Phản hồi</span>
                        <h2>Khách hàng của chúng tôi nói gì?</h2>
                        <div class="title-divider"></div>
                    </div>
                </section>
                <div class="h-respond__container mySwiper">
                    <div class="h-respond__list">
                        <div class="h-respond__item">
                            <div class="h-inner-respond__item">
                                <div class="h-item__main">
                                    <p>
                                        Sản phẩm chất lượng, hoàn toàn tự nhiên, không chứa chất hóa học và thuốc trừ
                                        sâu. Mang lại cảm giác tươi mát!
                                    </p>
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="h-item__name">
                                    <h5>Shirley Edwards</h5>
                                    <div class="h-item__user-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1657397548/page_images/6-5_n3atlb.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-respond__item">
                            <div class="h-inner-respond__item">
                                <div class="h-item__main">
                                    <p>
                                        Sản phẩm chất lượng, hoàn toàn tự nhiên, không chứa chất hóa học và thuốc trừ
                                        sâu. Mang lại cảm giác tươi mát!
                                    </p>
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="h-item__name">
                                    <h5>Shirley Edwards</h5>
                                    <div class="h-item__user-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1657397548/page_images/6-5_n3atlb.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-respond__item">
                            <div class="h-inner-respond__item">
                                <div class="h-item__main">
                                    <p>
                                        Sản phẩm chất lượng, hoàn toàn tự nhiên, không chứa chất hóa học và thuốc trừ
                                        sâu. Mang lại cảm giác tươi mát!
                                    </p>
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="h-item__name">
                                    <h5>Shirley Edwards</h5>
                                    <div class="h-item__user-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1657397548/page_images/6-5_n3atlb.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-respond__item">
                            <div class="h-inner-respond__item">
                                <div class="h-item__main">
                                    <p>
                                        Sản phẩm chất lượng, hoàn toàn tự nhiên, không chứa chất hóa học và thuốc trừ
                                        sâu. Mang lại cảm giác tươi mát!
                                    </p>
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="h-item__name">
                                    <h5>Shirley Edwards</h5>
                                    <div class="h-item__user-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1657397548/page_images/6-5_n3atlb.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-respond__item">
                            <div class="h-inner-respond__item">
                                <div class="h-item__main">
                                    <p>
                                        Sản phẩm chất lượng, hoàn toàn tự nhiên, không chứa chất hóa học và thuốc trừ
                                        sâu. Mang lại cảm giác tươi mát!
                                    </p>
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="h-item__name">
                                    <h5>Shirley Edwards</h5>
                                    <div class="h-item__user-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1657397548/page_images/6-5_n3atlb.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-respond__item">
                            <div class="h-inner-respond__item">
                                <div class="h-item__main">
                                    <p>
                                        Sản phẩm chất lượng, hoàn toàn tự nhiên, không chứa chất hóa học và thuốc trừ
                                        sâu. Mang lại cảm giác tươi mát!
                                    </p>
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="h-item__name">
                                    <h5>Shirley Edwards</h5>
                                    <div class="h-item__user-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1657397548/page_images/6-5_n3atlb.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="h-blog">
            <section class="home__title">
                <div class="title-hident">
                    Blog
                </div>
                <div class="title-main">
                    <span>Chủ đề đang được chú ý</span>
                    <h2>Các bài viết nổi bật</h2>
                    <div class="title-divider"></div>
                </div>
            </section>
            <div class="h-blog__list">
                <div class="h-blog__item">
                    <div class="h-blog__img">
                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1657400227/page_images/main-blog1-4_k3y0m0.png" alt="">
                    </div>
                    <div class="h-blog__container">
                        <div class="h-blog__day">20/12/2021</div>
                        <div class="h-blog__wraper">
                            <div class="h-blog__title">
                                Salad rau tốt cho sức khỏe nên thử
                            </div>
                            <div class="h-blog__descr">
                                Tham gia cùng chúng tôi để tìm hiểu cách sản xuất rau rau sạch và các lựa chọn salad
                                lành mạnh.
                            </div>
                            <a target="_self" href="" class="h-button read">
                                <span class="h-add">
                                    <div>
                                        <span>X</span>
                                        <span>e</span>
                                        <span>m</span>
                                        <span>&nbsp;</span>
                                        <span>T</span>
                                        <span>h</span>
                                        <span>ê</span>
                                        <span>m</span>
                                        <span>&nbsp;&nbsp;</span>
                                    </div>
                                </span>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="h-blog__item">
                    <div class="h-blog__img">
                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1657400226/page_images/main-blog2-4_gqzx8v.png" alt="">
                    </div>
                    <div class="h-blog__container">
                        <div class="h-blog__day">20/12/2021</div>
                        <div class="h-blog__wraper">
                            <div class="h-blog__title">
                                Salad rau tốt cho sức khỏe nên thử
                            </div>
                            <div class="h-blog__descr">
                                Tham gia cùng chúng tôi để tìm hiểu cách sản xuất rau rau sạch và các lựa chọn salad
                                lành mạnh.
                            </div>
                            <a target="_self" href="" class="h-button read">
                                <span class="h-add">
                                    <div>
                                        <span>X</span>
                                        <span>e</span>
                                        <span>m</span>
                                        <span>&nbsp;</span>
                                        <span>T</span>
                                        <span>h</span>
                                        <span>ê</span>
                                        <span>m</span>
                                        <span>&nbsp;&nbsp;</span>
                                    </div>
                                </span>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="h-blog__item">
                    <div class="h-blog__img">
                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1657400247/page_images/main-blog3-4_tb8ook.png" alt="">
                    </div>
                    <div class="h-blog__container">
                        <div class="h-blog__day">20/12/2021</div>
                        <div class="h-blog__wraper">
                            <div class="h-blog__title">
                                Salad rau tốt cho sức khỏe nên thử
                            </div>
                            <div class="h-blog__descr">
                                Tham gia cùng chúng tôi để tìm hiểu cách sản xuất rau rau sạch và các lựa chọn salad
                                lành mạnh.
                            </div>
                            <a target="_self" href="" class="h-button read">
                                <span class="h-add">
                                    <div>
                                        <span>X</span>
                                        <span>e</span>
                                        <span>m</span>
                                        <span>&nbsp;</span>
                                        <span>T</span>
                                        <span>h</span>
                                        <span>ê</span>
                                        <span>m</span>
                                        <span>&nbsp;&nbsp;</span>
                                    </div>
                                </span>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <?php require_once 'mvc/views/blocks/footer.php'; ?>
    <div id="modal-container" class=" modal hidden relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed z-50 inset-0 overflow-y-auto">
            <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">

                <div id="modal" class="modal relative flex flex-row bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all  w-1/2">
                    <span class="onSale">Sale!</span>
                    <div class="modal-img w-1/2">
                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655112834/product_images/d2qx4eynlriebzyhonkq.jpg" alt="">
                    </div>
                    <div class="bg-white px-4 pt-5 pb-4 w-1/2 relative">
                        <button onclick="closeModal()" id="btn-close" class="btn-close fa-solid fa-xmark absolute cursor-pointer"></button>
                        <h2 class="text-title text-title-color font-bold">Bolthouse</h2>
                        <div class="text-primary-color text-4xl mb-2 font-medium leading-relaxed">
                            <del class="text-2xl text-body-text">
                                <span>15.000</span> VNĐ
                            </del>
                            <ins>
                                <span>10.000</span>
                                <span>VNĐ</span>
                            </ins>
                        </div>
                        <p class="inline-block text-body-text mb-3">Cà rốt, sinh tố, nước trái cây và nước xốt được tính
                            đến. Một khẩu phần bằng 1/2 cốc nước trái cây. Khuyến nghị hàng ngày.</p>
                        <form action="" class="flex my-4">
                            <span class="flex mr-4">
                                <button class="button-subtract bg-primary-color text-white text-center rounded-md w-11 h-11 border border-primary-color" type="button">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <input id="qty" name="qty" class="appearance-none outline-none mx-1 bg-light-green-color border-b border-b-primary-color px-4 text-center rounded-md w-16" readonly type="number" value="1" min="1">
                                <button class="button-plus bg-primary-color text-white text-center rounded-md w-11 h-11  border border-primary-color" type="button">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </span>
                            <button class="uppercase text-white duration-500 bg-secondary-color hover:bg-primary-color transition-colors px-7.5 py-3 text-sm font-medium rounded-md shadow tracking-wider">Thêm
                                vào giỏ hàng<i class="pl-2 fas fa-long-arrow-alt-right"></i></button>
                        </form>
                        <a target="_self" href="" class="inline-block mt-3 hover:text-primary-color"><i class="far fa-heart mr-2.25"></i><span>Thêm vào danh sách yêu thích</span></a>
                        <ul class="mt-6 flex gap-x-2">
                            <li><a target="_self" href="" class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i class="fab fa-facebook"></i></a></li>
                            <li><a target="_self" href="" class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i class="fab fa-twitter"></i></a></li>
                            <li><a target="_self" href="" class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i class="fab fa-google-plus"></i></a></li>
                            <li><a target="_self" href="" class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/homeView.js"></script>
</body>

</html>