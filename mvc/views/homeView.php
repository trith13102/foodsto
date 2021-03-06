<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <?php require_once 'mvc/views/requirements/baseTag.php'; ?>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/headerFooter.css">
    <link rel="stylesheet" href="public/css/homeView.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/tailwindCommon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
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
                        <a target="_self" href="product" class="h-button shop">
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
                        <a target="_self" href="product" class="h-button shop">
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
                        <a target="_self" href="product" class="h-button shop">
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
                <button class="tabs__title show"><a target="_self" href="#fruit">Trái cây</a></button>
                <button class="tabs__title"><a target="_self" href="#vegetable">Rau củ</a></button>
                <button class="tabs__title"><a target="_self" href="#salads">Salads</a></button>
            </div>
            <div class="home_product">

                <?php
                $productSale = isset($data['productSale']) ? $data['productSale'] : '';
                
                foreach ($productSale as $sale) { ?>
                    
                    <div class="tabs__content h-product-list" id="fruit">
                        <div class="h-product-main">
                            <?php
                            $fruits = isset($data['fruits']) ? $data['fruits'] : '';
                            foreach ($fruits as $product) {
                                echo
                                '
                            <div class="h-product-item">
                                <div class="inner-h-product">';
                                if ($sale['product_id'] == $product['id']) {
                                    echo '<span class="onSale">Sale!</span>';
                                }
                                echo '<a target="_self" href="details?id=' . $product['id'] . '">
                                    <div class="h-product-img">
                                        <img src="' . $product['thumbnail'] . '" alt="">
                                    </div>
                                    <div class="h-product_content">
                                        <div class="h-product__category">
                                            <span class="h-category">Trái cây</span>
                                        </div>
                                        <div class="h-product__title-price">
                                            <a target="_self" href="details?id=' . $product['id'] . '" class="h-product__title">' . $product['name'] . '</a>
                                            <div class="h-product__price">
                                                <div class="h-pricing-details">
                                                    <ins>
                                                        <span>' . number_format($product['price']) . '</span> VNĐ
                                                    </ins>
                                                </div>
                                                <div class="h-ratings">
                                                    <ul> ';
                                for ($i = 0; $i < 5; ++$i) {
                                    echo '<i class="text-xs fa-solid fa-star text-secondary-color"></i>';
                                }
                                echo '
                                                    </ul>
                                                    <span class="h-review">(4)</span>
                                                </div>
                                            </div>
                                            <div class="bars-button flex justify-between pb-4">
                                                <a href="cart?add&id=' . $product['id'] . '" target="_self" class="uppercase text-white duration-500 bg-secondary-color hover:shadow-md hover:text-white hover:bg-primary-color transition-colors px-4 py-3 text-sm font-medium rounded-md shadow tracking-wider">
                                                    Thêm vào giỏ
                                                    <i class="pl-2 fas fa-long-arrow-alt-right"></i>
                                                </a>
                                                <ul class="flex gap-x-1">
                                                    <li>
                                                        <a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color">
                                                            <i class="fa-regular fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button onclick="openModal(this)" class="btn-open block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color">
                                                            <i class="fa-regular fa-eye"></i>
                                                        </button>
                                                    <div class="hidden">' . $product['id'] . '</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        ';
                            } ?>
                        </div>
                    </div>

                    <div class="tabs__content h-product-list" id="vegetable">
                        <div class="h-product-main">

                            <?php
                            $vegetables = isset($data['vegetables']) ? $data['vegetables'] : '';
                            foreach ($vegetables as $product) {
                                echo
                                '
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <div class="h-product-img">
                                        <img src="' . $product['thumbnail'] . '" alt="">
                                        </div>
                                <div class="h-product_content">
                                    <div class="h-product__category">
                                        <span class="h-category">Rau củ</span>
                                    </div>
                                    <div class="h-product__title-price">
                                        <a target="_self" href="" class="h-product__title">' . $product['name'] . '</a>
                                        <div class="h-product__price">
                                            <div class="h-pricing-details">
                                                <ins>
                                                    <span>' . number_format($product['price'])  . '</span> VNĐ
                                                </ins>
                                            </div>
                                            <div class="h-ratings">
                                                <ul> ';
                                for ($i = 0; $i < 5; ++$i) {
                                    echo '<i class="text-xs fa-solid fa-star text-secondary-color"></i>';
                                }
                                echo '
                                                </ul>
                                                <span class="h-review">(4)</span>
                                            </div>
                                        </div>
                                        <div class="bars-button flex justify-between pb-4">
                                            <a href="cart?add&id=' . $product['id'] . '" target="_self" class="uppercase text-white duration-500 bg-secondary-color hover:shadow-md hover:text-white hover:bg-primary-color transition-colors px-4 py-3 text-sm font-medium rounded-md shadow tracking-wider">
                                                Thêm vào giỏ
                                                <i class="pl-2 fas fa-long-arrow-alt-right"></i>
                                            </a>
                                            <ul class="flex gap-x-1">
                                                <li>
                                                    <a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <button onclick="openModal(this)" class="btn-open block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                <div class="hidden">' . $product['id'] . '</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        ';
                            } ?>


                        </div>
                    </div>

                    <div class="tabs__content h-product-list" id="salads">
                        <div class="h-product-main">

                            <?php
                            $salads = isset($data['salads']) ? $data['salads'] : '';
                            foreach ($salads as $product) {
                                echo
                                '
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <div class="h-product-img">
                                        <img src="' . $product['thumbnail'] . '" alt="">
                                        </div>
                                <div class="h-product_content">
                                    <div class="h-product__category">
                                        <span class="h-category">Trái cây</span>
                                    </div>
                                    <div class="h-product__title-price">
                                        <a target="_self" href="" class="h-product__title">' . $product['name'] . '</a>
                                        <div class="h-product__price">
                                            <div class="h-pricing-details">
                                                <ins>
                                                    <span>' . number_format($product['price'])  . '</span> VNĐ
                                                </ins>
                                            </div>
                                            <div class="h-ratings">
                                                <ul> ';
                                for ($i = 0; $i < 5; ++$i) {
                                    echo '<i class="text-xs fa-solid fa-star text-secondary-color"></i>';
                                }
                                echo '
                                                </ul>
                                                <span class="h-review">(4)</span>
                                            </div>
                                        </div>
                                        <div class="bars-button flex justify-between pb-4">
                                            <a href="cart?add&id=' . $product['id'] . '" target="_self" class="uppercase text-white duration-500 bg-secondary-color hover:shadow-md hover:text-white hover:bg-primary-color transition-colors px-4 py-3 text-sm font-medium rounded-md shadow tracking-wider">
                                                Thêm vào giỏ
                                                <i class="pl-2 fas fa-long-arrow-alt-right"></i>
                                            </a>
                                            <ul class="flex gap-x-1">
                                                <li>
                                                    <a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <button onclick="openModal(this)" class="btn-open block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                <div class="hidden">' . $product['id'] . '</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        ';
                            } ?>


                        </div>
                    </div>
                <?php } ?>
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
                    <?php
                    $products = isset($data['products']) ? $data['products'] : '';
                    foreach ($products as $product) {
                        echo
                        '
                            <div class="h-product-item">
                                <div class="inner-h-product">
                                    <div class="h-product-img">
                                        <img src="' . $product['thumbnail'] . '" alt="">
                                    </div>
                                    <div class="h-product_content">
                                        <div class="h-product__title-price">
                                            <a target="_self" href="" class="h-product__title">' . $product['name'] . '</a>
                                            <div class="h-product__price">
                                                <div class="h-pricing-details">
                                                    <ins>
                                                        <span>' . number_format($product['price']) . '</span> VNĐ
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

                        ';
                    } ?>


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
    <div id="modal-container" class="hidden relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class=" fixed z-50 inset-0 overflow-y-auto">
            <div class="modal-wrapper flex items-center justify-center">
                <button onclick="closeModal()" class="btn-close fa-solid fa-xmark absolute cursor-pointer"></button>

                <div class="modal relative flex flex-row bg-white rounded-lg text-left overflow-hidden ">
                    <!-- <span class="onSale">Sale!</span> -->

                </div>
            </div>
        </div>
        <div class="modal-body"></div>
    </div>

    <div class="relative hidden z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex flex-col items-center justify-center">
                            <i class="fa-solid fa-check"></i>
                            <h3 id="modal-title">Đã thêm vào giỏ hàng!</h3>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-11 mb-5 justify-center items-center py-3 sm:px-6 sm:flex">
                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-8 py-3 bg-secondary-color font-medium text-white hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-amber-300 sm:w-auto text-[17px]">Thanh
                            toán</button>
                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-8 py-3 bg-primary-color font-medium text-white hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-emerald-400 sm:ml-3 sm:w-auto text-[17px]">Tiếp
                            tục mua hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
    <script src="public/js/homeView.js"></script>
</body>

</html>