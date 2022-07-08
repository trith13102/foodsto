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
    <title>Thanh toán - FoodSto</title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/homeView.js"></script>

    <?php require_once 'mvc/views/blocks/header.php'; ?>
    <div class="banner__nav font-primary-font">
        <div class="pt-36 py-26 text-center text-title-color">
            <h1 class="font-bold text-[70px]">Thanh toán</h1>
            <ol class="flex justify-center text-base mt-3">
                <li class="flex items-center justify-center"><i class="fa-solid fa-house-chimney mr-2"></i><a href="" class="block hover:text-primary-color">Trang chủ</a></li>
                <li class="flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs pl-2 pr-4"></i><a href="" class="block hover:text-primary-color transition-colors">Thanh toán</a></li>
            </ol>
        </div>
    </div>
    <main class="py-30 font-primary-font">
        <div class="container mx-auto px-4">
            <article class="p-7.5 shadow-product">
                <form action="">
                    <div class="grid grid-cols-2">
                        <!-- Fields -->
                        <section class="px-4">
                            <h1 class="text-title-color font-bold text-[38px] mb-4">Thông tin hóa đơn</h1>
                            <div class="mb-4">
                                <label for="name" class="block leading-loose mb-2.25">Họ tên <span class="text-red-700">*</span></label>
                                <input required id="name" type="text" class="rounded-md h-11 transition-colors duration-500 focus:border focus:border-primary-color w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block leading-loose  mb-2.25">Số điện thoại <span class="text-red-700">*</span></label>
                                <input required id="phone" type="text" class="rounded-md h-11 transition-colors duration-500 focus:border focus:border-primary-color w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block leading-loose mb-2.25">Email <span class="text-red-700">*</span></label>
                                <input required id="email" type="email" class="rounded-md h-11 transition-colors duration-500 focus:border focus:border-primary-color w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
                            </div>
                            <div>
                                <label for="address" class="block leading-loose mb-2.25">Địa chỉ <span class="text-red-700">*</span></label>
                                <input required id="address" type="text" class="rounded-md h-11 mb-4 transition-colors duration-500 focus:border focus:border-primary-color w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
                            </div>
                            <h1 class="text-title-color font-bold text-[38px] mt-7.5 mb-4">Thông tin thêm</h1>
                            <label for="address" class="block leading-loose mb-2.25">Ghi chú đơn hàng (không bắt buộc)</label>
                            <textarea placeholder="Ghi chú về đơn hàng của bạn hoặc về việc vận chuyển." class="transition-colors duration-500 focus:border focus:border-primary-color h-36 p-4 placeholder-body-text rounded-md w-full outline-none bg-light-green-color border-b border-b-primary-color px-4" name="" id="comment" cols="5" rows="2"></textarea>

                        </section>
                        <!-- Infor Order -->
                        <section class="px-4">
                            <h1 class="text-title-color font-bold text-[38px] mb-4">Hóa đơn của bạn</h1>
                            <div class="rounded-md border mb-6">
                                <table class="w-full text-left">
                                    <thead>
                                        <tr>
                                            <th class="text-title-color font-bold p-4 text-xl">Sản phẩm</th>
                                            <th class="text-title-color font-bold p-4 text-xl">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle p-4">Thức uống lúa mạch&nbsp;<b>× 1</b></td>
                                            <td class="align-middle p-4 font-medium">$320.00</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle p-4">Khoai tây chiên&nbsp;<b>× 2</b></td>
                                            <td class="align-middle p-4 font-medium">$320.00</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle p-4 font-bold text-xl leading-none">Tạm tính</td>
                                            <td class="align-middle p-4 font-medium">$320.00</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle p-4 font-bold text-xl leading-none">Tổng cộng</td>
                                            <td class="align-middle p-4 font-bold text-primary-color text-2xl">$320.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border p-4 rounded-md">
                                <p class="my-4 leading-snug">Dữ liệu cá nhân của bạn sẽ được sử dụng để xử lý đơn đặt hàng, hỗ trợ trải nghiệm của bạn trên toàn bộ trang web này và cho các mục đích khác được mô tả trong <a href="" class="text-primary-color">chính sách bảo mật</a> của chúng tôi.</p>
                                <button type="submit" class="inline-block mb-3 tracking-wider leading-relaxed ml-auto uppercase text-white duration-500 bg-secondary-color hover:bg-primary-color transition-colors px-7.5 py-3 text-sm font-medium rounded-md shadow">Đặt hàng<i class="pl-2 fas fa-long-arrow-alt-right"></i></button>
                            </div>
                        </section>
                    </div>
                </form>
            </article>
        </div>
    </main>
    <div class="hidden opacity-70"></div>
    <?php require_once 'mvc/views/blocks/footer.php'; ?>

</body>

</html>