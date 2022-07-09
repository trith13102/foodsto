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
    <link rel="stylesheet" href="public/css/detailsView.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <title>Bolthouse - FoodSto</title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/homeView.js"></script>

    <?php require_once 'mvc/views/blocks/header.php'; ?>
    <div class="banner__nav">
        <div class="pt-36 py-26 text-center text-title-color">
            <h1 class="font-bold text-[70px]">Bolthouse</h1>
            <ol class="flex justify-center text-base mt-3">
                <li class="flex items-center justify-center"><i class="fa-solid fa-house-chimney mr-2"></i><a href="" class="block hover:text-primary-color">Trang chủ</a></li>
                <li class="flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs pl-2 pr-4"></i><a href="" class="block hover:text-primary-color transition-colors">Sản phẩm</a></li>
                <li class="flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs pl-2 pr-4"></i><a href="" class="block hover:text-primary-color transition-colors">Bolthouse</a></li>
            </ol>
        </div>
    </div>

    <main class="font-primary-font relative">
        <div class="absolute z-10 left-auto -top-15 h-[13.25rem] w-[14.2rem] -right-12.5 bg-[url('https://wordpress.iqonic.design/foodsto/wp-content/themes/foodsto/assets/images/backend/pattern-leaf-top.png')] "></div>
        <!--  Images and sub info-->
        <div class="container mx-auto">
            <section class="product flex pt-30 justify-between">
                <div class="product__image w-[42%]">
                    <div class="overflow-hidden mb-7.5 rounded-md">
                        <div class="product__image--show flex transition-transform duration-700">
                            <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114089/product_images/mjggsl5l7iakjesdapb1.png" alt="">
                            <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114877/product_images/sb9b5tdmr840odmxhkxl.jpg" alt="">
                            <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114023/product_images/visgq0suwwzz4wc2lvwt.jpg" alt="">
                        </div>
                    </div>
                    <div class="product__image--mini grid grid-cols-3 gap-x-4">
                        <img class="rounded-md transition-all duration-500 cursor-pointer" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114089/product_images/mjggsl5l7iakjesdapb1.png" alt="">
                        <img class="rounded-md transition-all duration-500 cursor-pointer" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114877/product_images/sb9b5tdmr840odmxhkxl.jpg" alt="">
                        <img class="rounded-md transition-all duration-500 cursor-pointer" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114023/product_images/visgq0suwwzz4wc2lvwt.jpg" alt="">
                    </div>
                </div>
                <div class="product__details border p-7.5 w-[55%] rounded-md">
                    <h2 class="text-title text-title-color font-bold">Bolthouse</h2>
                    <p class="text-body-text my-2.25">Cà rốt, sinh tố, nước trái cây và nước xốt được tính đến. Một khẩu phần bằng 1/2 cốc nước trái cây. Khuyến nghị hàng ngày.</p>
                    <div class="mb-7.5">
                        <span class="text-lg text-title-color">Thể loại: </span>
                        <a href="" class="text-primary-color hover:text-secondary-color transition-colors">Bánh mì</a>,
                        <a href="" class="text-primary-color hover:text-secondary-color transition-colors">Ngũ cốc ăn sáng</a>
                    </div>
                    <div class="flex items-center">
                        <span class="flex">
                            <?php for ($i = 0; $i < 5; ++$i) {
    echo '<i class="fa-solid fa-star text-secondary-color"></i>';
} ?>
                        </span>
                        <a href="" class="hover:text-secondary-color transition-colors ml-4">(2 đánh giá của khách hàng)</a>
                    </div>
                    <p class="text-primary-color text-4xl font-medium leading-relaxed">$100.00</p>
                    <form action="" class="flex mb-4">
                        <span class="flex mr-4">
                            <button class="button-subtract bg-primary-color text-white text-center rounded-md w-11 h-11 border border-primary-color" type="button">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <input id="qty" name="qty" class="appearance-none outline-none mx-1 bg-light-green-color border-b border-b-primary-color px-4 text-center rounded-md w-16" readonly type="number" value="1" min="1">
                            <button class="button-plus bg-primary-color text-white text-center rounded-md w-11 h-11  border border-primary-color" type="button">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </span>
                        <button class="uppercase text-white duration-500 bg-secondary-color hover:bg-primary-color transition-colors px-7.5 py-3 text-sm font-medium rounded-md shadow">Thêm vào giỏ hàng<i class="pl-2 fas fa-long-arrow-alt-right"></i></button>
                    </form>
                    <a href="" class="block hover:text-primary-color"><i class="far fa-heart mr-2.25"></i><span>Thêm vào danh sách yêu thích</span></a>
                    <ul class="mt-4 flex gap-x-2">
                        <li><a href="" class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="" class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="" class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i class="fab fa-google-plus"></i></a></li>
                        <li><a href="" class="block w-11 h-11 leading-[45px] text-center rounded-md border hover:bg-secondary-color text-primary-color hover:text-white transition-colors duration-700 hover:border-secondary-color border-primary-color"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <ul class="grid mt-4 gap-y-2">
                        <li><a href="" class="p-4 bg-light-green-color rounded-md flex hover:text-secondary-color"><img class="mr-4" src="https://wordpress.iqonic.design/foodsto/wp-content/uploads/2020/12/ek-4.png"><span>Chính sách bảo mật</span></a></li>
                        <li><a href="" class="p-4 bg-light-green-color rounded-md flex hover:text-secondary-color"><img class="mr-4" src="https://wordpress.iqonic.design/foodsto/wp-content/uploads/2020/12/doh-4.png"><span>Chính sách giao hàng</span></a></li>
                        <li><a href="" class="p-4 bg-light-green-color rounded-md flex hover:text-secondary-color"><img class="mr-4" src="https://wordpress.iqonic.design/foodsto/wp-content/uploads/2020/12/teen-4.png"><span>Chính sách hoàn trả</span></a></li>
                    </ul>
                </div>
            </section>
            <!-- Tabs Description about Product -->
            <section class="p-7.5 mt-15" style="box-shadow: 0px 1px 30px 0px rgb(36 38 43 / 10%)">
                <div class="flex mb-11 gap-x-4">
                    <button class="tabs__title rounded-md py-2.5 px-7.5 hover:bg-primary-color hover:text-white transition-colors duration-500" data-name="tab__desc">Mô tả chi tiết</button>
                    <button class="tabs__title rounded-md py-2.5 px-7.5 hover:bg-primary-color hover:text-white transition-colors duration-500" data-name="tab__info">Thông tin phụ</button>
                    <button class="tabs__title rounded-md py-2.5 px-7.5 hover:bg-primary-color hover:text-white transition-colors duration-500" data-name="tab__reviews">Đánh giá (2)</button>
                </div>
                <div id="tab__desc" class="tabs__content hidden">
                    <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et.</p>
                    <div class="grid grid-cols-4 my-7.5 gap-x-7.5">
                        <img class="rounded-md" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655171112/product_images/ubgolasezpmmacnnmjas.jpg" alt="">
                        <img class="rounded-md" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655116223/product_images/mabtc6zfsymculllnt07.jpg" alt="">
                        <img class="rounded-md" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655116126/product_images/bzkuetfa7gqykmbhqgsw.jpg" alt="">
                        <img class="rounded-md" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655116048/product_images/emutw8yvztavoi8rtm67.jpg" alt="">
                    </div>
                    <ul class="pl-4 text-primary-color list-disc">
                        <li>Sức khỏe tim mạch và ngăn ngừa đột quỵ</li>
                        <li>Sức khỏe của thế hệ tiếp theo</li>
                        <li>Xương và răng chắc khỏe</li>
                        <li>Tâm trạng tốt hơn</li>
                    </ul>
                    <p class="my-4">Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque.</p>
    
                </div>
                <div id="tab__info" class="tabs__content hidden">
                    <table class="w-full rounded-md border border-primary-color border-separate">
                        <tr class="leading-loose">
                            <th class="border-r border-r-primary-color font-semibold py-2.25 pl-5 pr-1 w-44">Quy cách</th>
                            <td class="italic px-7.5 py-2">1 cái, 2 cái, 3 cái</td>
                        </tr>
                        <tr class="leading-loose bg-[#00000006]">
                            <th class="border-r border-r-primary-color font-semibold py-2.25 pl-5 pr-1 w-44">Lợi ích sức khỏe</th>
                            <td class="italic px-7.5 py-2">Có</td>
                        </tr>
                        <tr class="leading-loose">
                            <th class="border-r border-r-primary-color font-semibold py-2.25 pl-5 pr-1 w-44">Kích thước</th>
                            <td class="italic px-7.5 py-2">5 x 5 x 10cm</td>
                        </tr>
                    </table>
                </div>
                <div id="tab__reviews" class="tabs__content hidden">
                    <h2 class="font-bold text-3xl text-title-color mb-7.5">2 đánh giá cho Bolthouse</h2>
                    <ol>
                        <li class="flex mb-5">
                            <img class="block rounded-full w-20 h-20" src="https://secure.gravatar.com/avatar/172ae4e4ae71d2afcc0e98f33c1b4cfc?s=60&d=mm&r=g">
                            <div class="ml-7.5 flex flex-col mb-4 justify-between">
                                <b class="text-title-color text-lg">ADMIN</b>
                                <span class="uppercase text-primary-color text-sm font-bold">9 Tháng 7, 2022</span>
                                <p>Ngon lắm!</p>
                            </div>
                            <span class="flex ml-auto">
                                <?php for ($i = 0; $i < 5; ++$i) {
    echo '<i class="fa-solid fa-star text-secondary-color"></i>';
} ?>
                            </span>
                        </li>
                        <li class="flex mb-5">
                            <img class="block rounded-full w-20 h-20" src="https://secure.gravatar.com/avatar/172ae4e4ae71d2afcc0e98f33c1b4cfc?s=60&d=mm&r=g">
                            <div class="ml-7.5 flex flex-col mb-4 justify-between">
                                <b class="text-title-color text-lg">ADMIN</b>
                                <span class="uppercase text-primary-color text-sm font-bold">9 Tháng 7, 2022</span>
                                <p>Sản phẩm tốt, đáng để mua!</p>
                            </div>
                            <span class="flex ml-auto">
                                <?php for ($i = 0; $i < 5; ++$i) {
    echo '<i class="fa-solid fa-star text-secondary-color"></i>';
} ?>
                            </span>
                        </li>
                    </ol>
                    <h2 class="text-title-color font-medium text-2xl mt-12 leading-loose">Thêm một đánh giá</h2>
                    <form action="">
                        <p class="mb-5 leading-normal">Địa chỉ email của bạn sẽ không được công khai. Những trường bắt buộc được đánh dấu *</p>
                        <div class="form__rating mb-4 flex">
                            <label class="font-medium">Đánh giá của bạn *</label>
                            <span class="ml-7.5">
                                <?php for ($i = 0; $i < 5; ++$i) {
    echo '<i class="rating__star fa-regular fa-star text-secondary-color"></i>';
} ?>
                            </span>
                        </div>
                        <div class="form__comment mb-5">
                            <label for="comment" class="block leading-none mb-4 font-medium">Ý kiến của bạn *</label>
                            <textarea class="rounded-md w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4 h-28" name="" id="comment" cols="45" rows="8"></textarea>
                        </div>
                        <div class="form__author grid grid-cols-2 gap-x-4 mb-5">
                            <p>
                                <label for="name" class="block leading-none">Tên *</label>
                                <input id="name" type="text" class="rounded-md h-11 w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
                            </p>
                            <p>
                                <label for="email" class="block leading-none">Email *</label>
                                <input id="email" type="text" class="rounded-md h-11 w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
                            </p>
                        </div>
                        <div class="flex items-center mb-9">
                            <input type="checkbox" id="checkbox" class="mr-2.25 h-6">
                            <label for="checkbox">Lưu tên, email trong trình duyệt website này cho lần đánh giá tiếp theo của tôi.</label>
                        </div>
                        <button type="submit" class="uppercase text-white bg-primary-color hover:bg-secondary-color duration-500 transition-colors px-7.5 py-3 text-sm font-medium rounded-md shadow">Gửi</button>
                    </form>
                </div>
    
            </section>
            <!-- Related product -->
            <section class="mt-40 pb-30">
                <div class="text-center mb-15">
                    <p class="font-great-vibes text-primary-color text-2xl font-semibold">Sản xuất</p>
                    <h1 class="font-bold tracking-wide text-title-color text-title">Sản phẩm liên quan</h1>
                    <div class="bg-secondary-color h-0.75 w-12.5 inline-block"></div>
                </div>
                <!-- Slider auto product -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide rounded-md">
                            <div class="p-4">
                                <div class="px-2.25 shadow-product pt-2.25">
                                    <a href="#" class="w-full group">
                                        <div class=" w-full overflow-hidden">
                                            <img class="group-hover:scale-105 w-full transition-transform duration-500" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114089/product_images/mjggsl5l7iakjesdapb1.png">
                                        </div>
                                        <div class="product__content pt-4 px-1">
                                            <p class="text-sm">Ngũ cốc ăn sáng</p>
                                            <h1 class="text-title-color hover:text-primary-color leading-normal transition-colors duration-500 text-[22px] font-semibold">Bánh mì ăn sáng</h1>
                                            <div class="flex justify-between items-center mt-2 mb-2.25">
                                                <p class="text-primary-color font-semibold text-lg">$7.50</p>
                                                <span class="flex">
                                                    <?php for ($i = 0; $i < 5; ++$i) {
    echo '<i class="text-xs fa-solid fa-star text-secondary-color"></i>';
} ?>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="bars-button flex justify-between pb-4">
                                        <a href="#" class="uppercase text-white duration-500 bg-secondary-color hover:shadow-md hover:text-white hover:bg-primary-color transition-colors px-4 py-3 text-sm font-medium rounded-md shadow">Thêm vào giỏ<i class="pl-2 fas fa-long-arrow-alt-right"></i></a>
                                        <ul class="flex gap-x-1">
                                            <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-heart"></i></a></li>
                                            <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-md">
                            <div class="p-4">
                                <div class="px-2.25 shadow-product pt-2.25">
                                    <a href="#" class="w-full group">
                                        <div class=" w-full overflow-hidden">
                                            <img class="group-hover:scale-105 w-full transition-transform duration-500" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114089/product_images/mjggsl5l7iakjesdapb1.png">
                                        </div>
                                        <div class="product__content pt-4 px-1">
                                            <p class="text-sm">Ngũ cốc ăn sáng</p>
                                            <h1 class="text-title-color hover:text-primary-color leading-normal transition-colors duration-500 text-[22px] font-semibold">Bánh mì ăn sáng</h1>
                                            <div class="flex justify-between items-center mt-2 mb-2.25">
                                                <p class="text-primary-color font-semibold text-lg">$7.50</p>
                                                <span class="flex">
                                                    <?php for ($i = 0; $i < 5; ++$i) {
    echo '<i class="text-xs fa-solid fa-star text-secondary-color"></i>';
} ?>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="bars-button flex justify-between pb-4">
                                        <a href="#" class="uppercase text-white duration-500 bg-secondary-color hover:shadow-md hover:text-white hover:bg-primary-color transition-colors px-4 py-3 text-sm font-medium rounded-md shadow">Thêm vào giỏ<i class="pl-2 fas fa-long-arrow-alt-right"></i></a>
                                        <ul class="flex gap-x-1">
                                            <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-heart"></i></a></li>
                                            <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-md">
                            <div class="p-4">
                                <div class="px-2.25 shadow-product pt-2.25">
                                    <a href="#" class="w-full group">
                                        <div class=" w-full overflow-hidden">
                                            <img class="group-hover:scale-105 w-full transition-transform duration-500" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114089/product_images/mjggsl5l7iakjesdapb1.png">
                                        </div>
                                        <div class="product__content pt-4 px-1">
                                            <p class="text-sm">Ngũ cốc ăn sáng</p>
                                            <h1 class="text-title-color hover:text-primary-color leading-normal transition-colors duration-500 text-[22px] font-semibold">Bánh mì ăn sáng</h1>
                                            <div class="flex justify-between items-center mt-2 mb-2.25">
                                                <p class="text-primary-color font-semibold text-lg">$7.50</p>
                                                <span class="flex">
                                                    <?php for ($i = 0; $i < 5; ++$i) {
    echo '<i class="text-xs fa-solid fa-star text-secondary-color"></i>';
} ?>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="bars-button flex justify-between pb-4">
                                        <a href="#" class="uppercase text-white duration-500 bg-secondary-color hover:shadow-md hover:text-white hover:bg-primary-color transition-colors px-4 py-3 text-sm font-medium rounded-md shadow">Thêm vào giỏ<i class="pl-2 fas fa-long-arrow-alt-right"></i></a>
                                        <ul class="flex gap-x-1">
                                            <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-heart"></i></a></li>
                                            <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-md">
                            <div class="p-4">
                                <div class="px-2.25 shadow-product pt-2.25">
                                    <a href="#" class="w-full group">
                                        <div class=" w-full overflow-hidden">
                                            <img class="group-hover:scale-105 w-full transition-transform duration-500" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114089/product_images/mjggsl5l7iakjesdapb1.png">
                                        </div>
                                        <div class="product__content pt-4 px-1">
                                            <p class="text-sm">Ngũ cốc ăn sáng</p>
                                            <h1 class="text-title-color hover:text-primary-color leading-normal transition-colors duration-500 text-[22px] font-semibold">Bánh mì ăn sáng</h1>
                                            <div class="flex justify-between items-center mt-2 mb-2.25">
                                                <p class="text-primary-color font-semibold text-lg">$7.50</p>
                                                <span class="flex">
                                                    <?php for ($i = 0; $i < 5; ++$i) {
    echo '<i class="text-xs fa-solid fa-star text-secondary-color"></i>';
} ?>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="bars-button flex justify-between pb-4">
                                        <a href="#" class="uppercase text-white duration-500 bg-secondary-color hover:shadow-md hover:text-white hover:bg-primary-color transition-colors px-4 py-3 text-sm font-medium rounded-md shadow">Thêm vào giỏ<i class="pl-2 fas fa-long-arrow-alt-right"></i></a>
                                        <ul class="flex gap-x-1">
                                            <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-heart"></i></a></li>
                                            <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide rounded-md">
                            <div class="p-4">
                                <div class="px-2.25 shadow-product pt-2.25">
                                    <a href="#" class="w-full group">
                                        <div class=" w-full overflow-hidden">
                                            <img class="group-hover:scale-105 w-full transition-transform duration-500" src="https://res.cloudinary.com/foodstocloud/image/upload/v1655114089/product_images/mjggsl5l7iakjesdapb1.png">
                                        </div>
                                        <div class="product__content pt-4 px-1">
                                            <p class="text-sm">Ngũ cốc ăn sáng</p>
                                            <h1 class="text-title-color hover:text-primary-color leading-normal transition-colors duration-500 text-[22px] font-semibold">Bánh mì ăn sáng</h1>
                                            <div class="flex justify-between items-center mt-2 mb-2.25">
                                                <p class="text-primary-color font-semibold text-lg">$7.50</p>
                                                <span class="flex">
                                                    <?php for ($i = 0; $i < 5; ++$i) {
    echo '<i class="text-xs fa-solid fa-star text-secondary-color"></i>';
} ?>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="bars-button flex justify-between pb-4">
                                        <a href="#" class="uppercase text-white duration-500 bg-secondary-color hover:shadow-md hover:text-white hover:bg-primary-color transition-colors px-4 py-3 text-sm font-medium rounded-md shadow">Thêm vào giỏ<i class="pl-2 fas fa-long-arrow-alt-right"></i></a>
                                        <ul class="flex gap-x-1">
                                            <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-heart"></i></a></li>
                                            <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="absolute z-10 left-0 top-auto -bottom-18 right-auto h-[13.25rem] w-[14.2rem] bg-[url('https://wordpress.iqonic.design/foodsto/wp-content/themes/foodsto/assets/images/backend/pattern-leaf-bottom.png')] "></div>
    </main>
    <script src="public/js/detailsView.js"></script>

    <?php require_once 'mvc/views/blocks/footer.php'; ?>

</body>

</html>

