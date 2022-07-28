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
    <link rel="stylesheet" href="public/css/tailwindCommon.css">
    <link rel="stylesheet" href="public/css/productView.css">
    <title>Sản Phẩm - FoodSto</title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/homeView.js"></script>
    <?php require_once './mvc/views/blocks/header.php' ?>
    <div class="banner__nav font-primary-font">
        <div class="pt-36 py-26 text-center text-title-color">
            <h1 class="font-bold text-[70px]"> Trang bán hàng</h1>
            <ol class="flex justify-center text-base mt-3">
                <li class="flex items-center justify-center"><i class="fa-solid fa-house-chimney mr-2"></i><a href="" class="block hover:text-primary-color">Trang chủ</a></li>
                <li class="flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs pl-2 pr-4"></i><a href="" class="block hover:text-primary-color transition-colors">Trang bán hàng</a></li>
            </ol>
        </div>
    </div>

    <div class="shop-page_content max-w-[1400px] mx-auto font-primary-font py-[120px]">
        <section class="product">
            <div class="product__wrapper flex">
                <!-- List-items -->
                <div class="list-product w-[75%] flex">
                    <div class="pr-[20px] pl-[15px] flex flex-wrap w-full">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <p class="text-[18px] leading-[48px] text-title-color">Showing 1-12 of 41 results</p>
                                <form action="" method="get" class="mb-[30px]">
                                    <select name="orderby" class="orderby" id="" aria-label="Shop Order">
                                        <option value="menu_order" selected="selected">Mặc định</option>
                                        <option value="rating">Sắp xếp theo mức độ phổ biến</option>
                                        <option value="date">Sắp xếp theo mới nhất</option>
                                        <option value="price">Sắp xếp theo giá: thấp đến cao</option>
                                        <option value="price-desc">Sắp xếp theo giá: cao đến thấp</option>
                                    </select>
                                </form>
                            </div>
                            <!-- List-Product -->
                            <div class=" mx-[-15px] flex flex-wrap">
                                <?php if (isset($_GET['keyword'])&&!$_GET['keyword']=="") {
                                    while ($rows = mysqli_fetch_array($data['keyword'])) {
                                ?>
                                        <div class="w-[33.33%] px-[15px] mb-[30px]">
                                            <div class="pt-[10px] pb-[10px] px-[10px] inline-block relative w-full shadow-[0px_1px_30px_0px_rgb(36,38,43,0.1)] bg-white-color rounded-[5px]">
                                                <div>
                                                    <img class="w-full rounded-[5px]" src="<?php echo $rows['productThumbnail'] ?>" alt="">
                                                </div>
                                                <div class="py-[15px] px-[5px] text-left">
                                                    <div class="block items-center">
                                                        <span class="text-[14px]"><?php echo $rows['name']; ?></span>
                                                    </div>
                                                    <div class="text-left">
                                                        <h5 class="self-center text-[1.37em] font-[600] leading-[1.3] tracking-[-0.02em]">
                                                            <a href="" class="hover:text-primary-color transition-colors duration-700"><?php echo $rows['productName'] ?></a>
                                                        </h5>
                                                        <div class="my-[10px] text-[18px] flex justify-between items-center font-[600]">
                                                            <div class="text-primary-color">
                                                                <span>$ </span>
                                                                <span><?php echo number_format($rows['price']); ?></span>
                                                            </div>
                                                            <div class="iq-woo-product-price-rating-holder flex justify-between">
                                                                <div class="iq-woo-ratings text-secondary-color text-[14px] flex">
                                                                    <ul>
                                                                        <li class="inline-block mr-[2px]"><i class="fas fa-star text-[12px] font-[900]"></i></li>
                                                                        <li class="inline-block mr-[2px]"><i class="fas fa-star text-[12px] font-[900]"></i></li>
                                                                        <li class="inline-block mr-[2px]"><i class="fas fa-star text-[12px] font-[900]"></i></li>
                                                                        <li class="inline-block mr-[2px]"><i class="fas fa-star text-[12px] font-[900]"></i></li>
                                                                        <li class="inline-block "><i class="fas fa-star text-[12px] font-[900]"></i></li>
                                                                    </ul>
                                                                    <span class="iq-review inline-block ml-[5px] text-body-text">(2)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="relative">
                                                        <ul class="flex">
                                                            <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                                <a href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                                    Thêm vào giỏ hàng
                                                                </a>
                                                            </li>
                                                            <li class="inline-block">
                                                                <span class="feedback">
                                                                    <a href="" target="_blank" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                        <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                                    </a>
                                                                </span>
                                                            </li>
                                                            <li class="inline-block ml-[5px]">
                                                                <button class="hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } else { ?>
                                    <?php foreach ($data['arrProducts'] as $product) { ?>
                                        <div class="w-[33.33%] px-[15px] mb-[30px]">
                                            <div class="pt-[10px] pb-[10px] px-[10px] inline-block relative w-full shadow-[0px_1px_30px_0px_rgb(36,38,43,0.1)] bg-white-color rounded-[5px]">
                                                <div>
                                                    <img class="w-full rounded-[5px]" src="<?php echo $product['thumbnail'] ?>" alt="">
                                                </div>
                                                <div class="py-[15px] px-[5px] text-left">
                                                    <div class="block items-center">
                                                        <span class="text-[14px]"><?php echo $product['categoryName']; ?></span>
                                                    </div>
                                                    <div class="text-left">
                                                        <h5 class="self-center text-[1.37em] font-[600] leading-[1.3] tracking-[-0.02em]">
                                                            <a href="" class="hover:text-primary-color transition-colors duration-700"><?php echo $product['name'] ?></a>
                                                        </h5>
                                                        <div class="my-[10px] text-[18px] flex justify-between items-center font-[600]">
                                                            <div class="text-primary-color">
                                                                <span>$ </span>
                                                                <span><?php echo number_format($product['price']); ?></span>
                                                            </div>
                                                            <div class="iq-woo-product-price-rating-holder flex justify-between">
                                                                <div class="iq-woo-ratings text-secondary-color text-[14px] flex">
                                                                    <ul>
                                                                        <li class="inline-block mr-[2px]"><i class="fas fa-star text-[12px] font-[900]"></i></li>
                                                                        <li class="inline-block mr-[2px]"><i class="fas fa-star text-[12px] font-[900]"></i></li>
                                                                        <li class="inline-block mr-[2px]"><i class="fas fa-star text-[12px] font-[900]"></i></li>
                                                                        <li class="inline-block mr-[2px]"><i class="fas fa-star text-[12px] font-[900]"></i></li>
                                                                        <li class="inline-block "><i class="fas fa-star text-[12px] font-[900]"></i></li>
                                                                    </ul>
                                                                    <span class="iq-review inline-block ml-[5px] text-body-text">(2)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="relative">
                                                        <ul class="flex">
                                                            <li class="mr-auto transition-all duration-500 mb-[10px]">
                                                                <a href="" class="flex hover:bg-primary-color hover:border-primary-color py-[14px] px-[15px]  text-white-color text-[14px] font-[600] capitalize bg-secondary-color border-solid border border-secondary-color rounded-[5px] text-center transition-all duration-500">
                                                                    Thêm vào giỏ hàng
                                                                </a>
                                                            </li>
                                                            <li class="inline-block">
                                                                <span class="feedback">
                                                                    <a href="" target="_blank" class="group hover:bg-secondary-color inline-flex items-center justify-center rounded-[5px] w-[45px] h-[45px] text-center border-solid  border border-secondary-color transition-all duration-500">
                                                                        <i class="fas fa-heart text-secondary-color group-hover:text-white-color transition-all duration-500"></i>
                                                                    </a>
                                                                </span>
                                                            </li>
                                                            <li class="inline-block ml-[5px]">
                                                                <button class="hover:bg-secondary-color hover:text-white text-secondary-color fa fa-eye w-[45px] h-[45px] border-solid rounded-[5px]  border border-secondary-color transition-all duration-500"></button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>



                            </div>
                            <!-- Number-Pages  -->
                            <div class="pagination text-center">
                                <ul class="flex justify-center">
                                    <?php if (isset($_GET['keyword'])&&!$_GET['keyword']=='') {
                                        for ($i = 1; $i <= ceil(mysqli_num_rows($data['keyword'])/6); $i++) {
                                    ?>
                                            <?php if ($i == $data['getPage']) { ?>
                                                <li class="inline-block">
                                                    <span aria-current="page" class="pages-number block rounded-[5px] px-[15px] w-[45px] h-[45px] leading-[45px] mx-[5px] border cursor-pointer text-white-color bg-primary-color border-primary-color">
                                                        <?php echo $i ?>
                                                    </span>
                                                </li>
                                            <?php } else { ?>
                                                <li class="inline-block">
                                                    <a href="product&page=<?php echo $i ?>" target="_blank" class="pages-numberblock block rounded-[5px] px-[15px] w-[45px] h-[45px] leading-[45px] mx-[5px] border cursor-pointer text-title-color bg-white-color border-white-light-color hover:text-white-color hover:bg-primary-color hover:border-primary-color transition-all duration-500">
                                                        <?php echo $i ?>
                                                    </a>
                                                </li>
                                        <?php }
                                        }
                                    } else { ?>
                                        <?php for ($i = 1; $i <= $data['numberPages']; $i++) {  ?>
                                            <?php if ($i == $data['getPage']) { ?>
                                                <li class="inline-block">
                                                    <span aria-current="page" class="pages-number block rounded-[5px] px-[15px] w-[45px] h-[45px] leading-[45px] mx-[5px] border cursor-pointer text-white-color bg-primary-color border-primary-color">
                                                        <?php echo $i ?>
                                                    </span>
                                                </li>
                                            <?php } else { ?>
                                                <li class="inline-block">
                                                    <a href="product&page=<?php echo $i ?>" target="_blank" class="pages-numberblock block rounded-[5px] px-[15px] w-[45px] h-[45px] leading-[45px] mx-[5px] border cursor-pointer text-title-color bg-white-color border-white-light-color hover:text-white-color hover:bg-primary-color hover:border-primary-color transition-all duration-500">
                                                        <?php echo $i ?>
                                                    </a>
                                                </li>

                                    <?php }
                                        }
                                    } ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nav Control -->
                <div class="control-product w-[25%] flex relative">
                    <div class="p-[10px] flex">
                        <div class="w-full">
                            <div class="inline-block p-[30px] text-body-text mt-[-5px] mb-[30px] rounded-[5px] shadow-[0px_1px_30px_0px_rgb(36,38,43,0.1)]">
                                <form class="relative" method="GET">
                                    <button type="submit" href="#" target="_blank" class="flex items-center justify-center absolute right-0 top-0 w-[48px] h-[48px]">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <input placeholder="Tìm sản phẩm" name="keyword" type="search" class="focus:outline-primary-color bg-light-yellow-color border border-solid rounded-[5px] border-secondary-color py-[9px] pl-[15px] pr-[50px]">
                                </form>
                            </div>
                            <div class="p-[30px] inline-block w-full mb-[30px] rounded-[5px] shadow-[0px_1px_30px_0px_rgb(36,38,43,0.1)]">
                                <div>
                                    <h4 before="" class="relative before:bottom-0 before:absolute before:w-[28px] before:h-[3px] before:bg-secondary-color before:content-[attr(before)] text-[20px] mb-[15px] pb-[15px] font-[600]">
                                        Dò tìm theo giá
                                    </h4>
                                    <form action="" method="get" class="">
                                        <div class="scroll-price relative mt-[30px] rounded-[1em] bg-[#d5d5d5] mb-[1em] h-[0.5em] ">
                                            <div class="ui-slider-range absolute z-[1] left-[0%]  h-full bg-secondary-color rounded-[1em]"></div>
                                            <input type="range" min="58" max="1200" value="0" class="range-input range-min ui-slider-handle left-[0%]  cursor-ew-resize  absolute    z-[2]  "></input>
                                            <input type="range" min="58" max="1200" value="1200" class="range-input range-max ui-slider-handle left-[0%]  cursor-ew-resize  absolute    z-[2]  "></input>
                                        </div>
                                        <div class="price-slider-amount">
                                            <!-- <input type="text" id="min-price" value="5> -->
                                            <div class="price-label text-[0.857em]">
                                                Price:
                                                <span class="from">$58</span>
                                                -
                                                <span class="to">$1,200</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="p-[30px] inline-block w-full mb-[30px] rounded-[5px] shadow-[0px_1px_30px_0px_rgb(36,38,43,0.1)]">
                                <div>
                                    <h4 before="" class="relative before:bottom-0 before:absolute before:w-[28px] before:h-[3px] before:bg-secondary-color before:content-[attr(before)] text-[20px] mb-[15px] pb-[15px] font-[600]">
                                        Sản phẩm hiện có
                                    </h4>
                                    <div>
                                        <ul>
                                            <li class="mb-[10px] pb-[10px] border-b border-solid border-[rgba(82,95,129,0.09)]">
                                                <input type="checkbox" class="hidden" id="choose">
                                                <label for="choose" class="cursor-pointer">featured</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" class="hidden" id="rate">
                                                <label for="choose" class="cursor-pointer">rated-5</label>
                                                <span class="check-choose inline-block ml-[3px]">(1)</span>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="p-[30px] inline-block w-full mb-[30px] rounded-[5px] shadow-[0px_1px_30px_0px_rgb(36,38,43,0.1)]">
                                <div>
                                    <h4 before="" class="relative before:bottom-0 before:absolute before:w-[28px] before:h-[3px] before:bg-secondary-color before:content-[attr(before)] text-[20px] mb-[15px] pb-[15px] font-[600]">
                                        Danh mục sản phẩm
                                    </h4>
                                    <div>
                                        <ul>

                                            <li>
                                                <input type="checkbox" class="hidden" id="fruit">
                                                <label for="fruit" class="cursor-pointer">Trái cây</label>
                                                <span class="check-choose inline-block ml-[3px]">(1)</span>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="p-[30px] inline-block w-full mb-[30px] rounded-[5px] shadow-[0px_1px_30px_0px_rgb(36,38,43,0.1)]">
                                <div>
                                    <h4 before="" class="relative before:bottom-0 before:absolute before:w-[28px] before:h-[3px] before:bg-secondary-color before:content-[attr(before)] text-[20px] mb-[15px] pb-[15px] font-[600]">
                                        Sản phẩm phổ biến
                                    </h4>
                                    <!-- <div class="flex items-start mb-[15px]">
                                        <div class="w-[80px] h-[80px] mr-[10px]">
                                            <img class="w-full h-full rounded-[5px]" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114216/product_images/ewpox6n9joghkl9z5b6j.jpg" alt="">
                                        </div>
                                        <div class="self-center flex-1">
                                            <a href="" target="_blank">
                                                <h5 class="text-title-color text-[1.37em] font-[600] hover:text-primary-color transition-all duration-500">
                                                    Bánh mì
                                                </h5>
                                            </a>
                                            <ins class="no-underline">
                                                <span class="woocommerce-Price-amount amount no-underline"><span class="woocommerce-Price-currencySymbol no-underline">$</span>7.50</span>
                                            </ins>
                                        </div>
                                    </div>
                                    <div class="flex items-start mb-[15px]">
                                        <div class="w-[80px] h-[80px] mr-[10px]">
                                            <img class="w-full h-full rounded-[5px]" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114216/product_images/ewpox6n9joghkl9z5b6j.jpg" alt="">
                                        </div>
                                        <div class="self-center flex-1">
                                            <a href="" target="_blank">
                                                <h5 class="text-title-color text-[1.37em] font-[600] hover:text-primary-color transition-all duration-500">
                                                    Bánh mì
                                                </h5>
                                            </a>
                                            <ins class="no-underline">
                                                <span class="woocommerce-Price-amount amount no-underline"><span class="woocommerce-Price-currencySymbol no-underline">$</span>7.50</span>
                                            </ins>
                                        </div>
                                    </div> -->
                                    <?php while ($row = mysqli_fetch_array($data['popular'])) { ?>
                                        <div class="flex items-start mb-[15px]">
                                            <div class="w-[80px] h-[80px] mr-[10px]">
                                                <img class="w-full h-full rounded-[5px]" src="<?php echo $row['thumbnail'] ?>" alt="">
                                            </div>
                                            <div class="self-center flex-1">
                                                <a href="" target="_blank">
                                                    <h5 class="text-title-color text-[1.37em] font-[600] hover:text-primary-color transition-all duration-500">
                                                        <?php echo $row['name'] ?>
                                                    </h5>
                                                </a>
                                                <del class="mr-5px text-secondary-color inline-block">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>7500</span>
                                                </del>
                                                <ins class="no-underline">
                                                    <span class="woocommerce-Price-amount amount no-underline"><span class="woocommerce-Price-currencySymbol no-underline">$</span><?php echo number_format($row['price']) ?></span>
                                                </ins>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <script src="public/js/productView.js"></script>

    </div>
    <?php require_once './mvc/views/blocks/footer.php' ?>
</body>

</html>