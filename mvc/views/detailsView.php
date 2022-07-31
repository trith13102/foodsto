<?php
$row = $data["product"];
$list = $data["category"];
?>

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

    <title><?php echo $row['name'] . " - FoodSto" ?></title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/homeView.js"></script>

    <?php require_once 'mvc/views/blocks/header.php'; ?>

    <div class="banner__nav font-primary-font">
        <div class="pt-36 py-26 text-center text-title-color">
            <h1 class="font-bold text-[70px]"><?php echo $row['name'] ?></h1>
            <ol class="flex justify-center text-base mt-3">
                <li class="flex items-center justify-center"><i class="fa-solid fa-house-chimney mr-2"></i><a href="" class="block hover:text-primary-color">Trang chủ</a></li>
                <li class="flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs pl-2 pr-4"></i><a href="" class="block hover:text-primary-color transition-colors">Sản phẩm</a></li>
                <li class="flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs pl-2 pr-4"></i><a href="" class="block hover:text-primary-color transition-colors"><?php echo $row['name'] ?></a></li>
            </ol>
        </div>
    </div>

    <main class="font-primary-font relative">
        <div class="absolute z-10 left-auto -top-15 h-[13.25rem] w-[14.2rem] -right-0 bg-[url('https://wordpress.iqonic.design/foodsto/wp-content/themes/foodsto/assets/images/backend/pattern-leaf-top.png')] "></div>
        <div class="container px-4 mx-auto pt-30">
            <!-- Pop Up -->
            <?php 
                if(isset($data['infoProduct'])) {
                    echo '<div class="justify-between text-body-text bg-light-green-color rounded-md py-4 px-8 mb-7.5 text-base inline-flex items-center w-full" role="alert">
                    <div class="flex items-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 text-primary-color" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                        </svg>
                        <p class="pl-2">'.$data['infoProduct'].' x "'.$row['name'].'" đã được thêm vào giỏ hàng của bạn.</p>
                    </div>
                    <a href="cart" class="text-sm bg-primary-color rounded-md py-2.5 px-7.5 hover:bg-secondary-color text-white transition-colors duration-500">XEM GIỎ HÀNG</a>
                </div>';
                }
            ?>
            <section class="product flex justify-between">
            <!--  Images and sub info-->

                <div class="product__image w-[42%]">
                    <div class="overflow-hidden mb-7.5 rounded-md">
                        <div class="product__image--show flex transition-transform duration-700">
                            <img src="<?php echo $row['thumbnail'] ?>" alt="">
                            <img src="<?php echo $row['thumbnail'] ?>" alt="">
                            <img src="<?php echo $row['thumbnail'] ?>" alt="">
                        </div>
                    </div>
                    <div class="product__image--mini grid grid-cols-3 gap-x-4">
                        <img class="rounded-md transition-all duration-500 cursor-pointer" src="<?php echo $row['thumbnail'] ?>" alt="">
                        <img class="rounded-md transition-all duration-500 cursor-pointer" src="<?php echo $row['thumbnail'] ?>" alt="">
                        <img class="rounded-md transition-all duration-500 cursor-pointer" src="<?php echo $row['thumbnail'] ?>" alt="">
                    </div>
                </div>
                <div class="product__details border p-7.5 w-[55%] rounded-md">
                    <h2 class="text-title text-title-color font-bold"><?php echo $row['name'] ?></h2>
                    <p class="text-body-text my-2.25"><?php echo $row['descriptions'] ?></p>
                    <div class="mb-7.5">
                        <span class="text-lg text-title-color">Thể loại: </span>
                        <a href="" class="text-primary-color hover:text-secondary-color transition-colors"><?php echo $row["name_category"] ?></a>
                    </div>
                    <div class="flex items-center">
                        <span class="flex">
                            <?php for ($i = 0; $i < 5; ++$i) {
                                echo '<i class="fa-solid fa-star text-secondary-color"></i>';
                            } ?>
                        </span>
                        <a href="" class="hover:text-secondary-color transition-colors ml-4">(2 đánh giá của khách hàng)</a>
                    </div>
                    <p class="text-primary-color text-4xl font-medium leading-relaxed"><?php echo number_format($row['price']) . ' VNĐ'; ?></p>
                    <form target="_self" method="POST" class="flex mb-4">
                        <span class="flex mr-4">
                            <button class="button-subtract bg-primary-color text-white text-center rounded-md w-11 h-11 border border-primary-color" type="button">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <input id="qty" name="qty" class="appearance-none outline-none mx-1 bg-light-green-color border-b border-b-primary-color px-4 text-center rounded-md w-16" readonly type="number" value="1" min="1">
                            <button class="button-plus bg-primary-color text-white text-center rounded-md w-11 h-11  border border-primary-color" type="button">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </span>
                        <button type="submit" name="insert" class="uppercase text-white duration-500 bg-secondary-color hover:bg-primary-color transition-colors px-7.5 py-3 text-sm font-medium rounded-md shadow tracking-wider">Thêm vào giỏ hàng<i class="pl-2 fas fa-long-arrow-alt-right"></i></button>
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
                <div id="tab__desc" class="tabs__contents">
                    <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et.</p>
                    <div class="grid grid-cols-4 my-7.5 gap-x-7.5">
                        <img class="rounded-md" src="<?php echo $row['thumbnail'] ?>" alt="">
                        <img class="rounded-md" src="<?php echo $row['thumbnail'] ?>" alt="">
                        <img class="rounded-md" src="<?php echo $row['thumbnail'] ?>" alt="">
                        <img class="rounded-md" src="<?php echo $row['thumbnail'] ?>" alt="">
                    </div>
                    <ul class="pl-4 text-primary-color list-disc">
                        <li>Sức khỏe tim mạch và ngăn ngừa đột quỵ</li>
                        <li>Sức khỏe của thế hệ tiếp theo</li>
                        <li>Xương và răng chắc khỏe</li>
                        <li>Tâm trạng tốt hơn</li>
                    </ul>
                    <p class="my-4">Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque.</p>

                </div>
                <div id="tab__info" class="tabs__contents">
                    <table class="w-full rounded-md border border-primary-color border-separate">
                        <tr class="leading-loose">
                            <th class="text-left border-r border-r-primary-color font-semibold py-2.25 pl-5 pr-1 w-44">Quy cách</th>
                            <td class="italic px-7.5 py-2">1 cái, 2 cái, 3 cái</td>
                        </tr>
                        <tr class="leading-loose bg-[#00000006]">
                            <th class="text-left border-r border-r-primary-color font-semibold py-2.25 pl-5 pr-1 w-44">Lợi ích sức khỏe</th>
                            <td class="italic px-7.5 py-2">Có</td>
                        </tr>
                        <tr class="leading-loose">
                            <th class="text-left border-r border-r-primary-color font-semibold py-2.25 pl-5 pr-1 w-44">Cân nặng</th>
                            <td class="italic px-7.5 py-2"><?php echo $row['weight'] . " kg"; ?></td>
                        </tr>
                    </table>
                </div>
                <div id="tab__reviews" class="tabs__contents">
                    <h2 class="font-bold text-3xl text-title-color mb-7.5">2 đánh giá cho Bolthouse</h2>
                    <ol>
                        <li class="flex mb-5">
                            <img class="mb-4 block rounded-full w-20 h-20" src="https://secure.gravatar.com/avatar/172ae4e4ae71d2afcc0e98f33c1b4cfc?s=60&d=mm&r=g">
                            <div class="ml-7.5 flex flex-col justify-between">
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
                            <img class="mb-4 block rounded-full w-20 h-20" src="https://secure.gravatar.com/avatar/172ae4e4ae71d2afcc0e98f33c1b4cfc?s=60&d=mm&r=g">
                            <div class="ml-7.5 flex flex-col justify-between">
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
                            <label for="comment" class="block leading-loose mb-4 font-medium">Ý kiến của bạn *</label>
                            <textarea class="rounded-md w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4 h-28" name="" id="comment" cols="45" rows="8"></textarea>
                        </div>
                        <div class="form__author grid grid-cols-2 gap-x-4 mb-5">
                            <p>
                                <label for="name" class="mb-4 block leading-none">Tên *</label>
                                <input id="name" type="text" class="rounded-md h-11 w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
                            </p>
                            <p>
                                <label for="email" class="mb-4 block leading-none">Email *</label>
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
                        <?php
                        foreach ($list as $raw) {
                            echo '<div class="swiper-slide rounded-md">
                                <div class="p-4">
                                    <div class="px-2.25 shadow-product pt-2.25">
                                        <a href="details?id=' . $raw['id'] . '" class="w-full group">
                                            <div class=" w-full overflow-hidden">
                                                <img class="group-hover:scale-105 w-full transition-transform duration-500" src="' . $raw['thumbnail'] . '">
                                            </div>
                                            <div class="product__content pt-4 px-1">
                                                <p class="text-sm">' . $raw['name_category'] . '</p>
                                                <h1 class="text-title-color hover:text-primary-color leading-normal transition-colors duration-500 text-[22px] font-semibold">' . $raw['name'] . '</h1>
                                                <div class="flex justify-between items-center mt-2 mb-2.25">
                                                    <p class="text-primary-color font-semibold text-lg">' . number_format($raw['price']) . ' VNĐ</p>
                                                    <span class="flex">';
                            for ($i = 0; $i < 5; ++$i) {
                                echo '<i class="text-xs fa-solid fa-star text-secondary-color"></i>';
                            }
                            echo '</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="bars-button flex justify-between pb-4">
                                            <a href="cart?add&id=' . $raw['id'] . '" target="_self" class="uppercase text-white duration-500 bg-secondary-color hover:shadow-md hover:text-white hover:bg-primary-color transition-colors px-4 py-3 text-sm font-medium rounded-md shadow tracking-wider">Thêm vào giỏ<i class="pl-2 fas fa-long-arrow-alt-right"></i></a>
                                            <ul class="flex gap-x-1">
                                                <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-heart"></i></a></li>
                                                <li><a href="" class="block w-11 h-11 leading-[45px] hover:shadow-md text-center rounded-md border hover:bg-secondary-color text-secondary-color hover:text-white transition-all duration-700 hover:border-secondary-color border-secondary-color"><i class="fa-regular fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
        <div class="absolute z-10 left-0 top-auto -bottom-18 right-auto h-[13.25rem] w-[14.2rem] bg-[url('https://wordpress.iqonic.design/foodsto/wp-content/themes/foodsto/assets/images/backend/pattern-leaf-bottom.png')] "></div>
    </main>
    <div class="hidden opacity-70"></div>
    <script src="public/js/detailsView.js"></script>

    <?php require_once 'mvc/views/blocks/footer.php'; ?>

</body>

</html>