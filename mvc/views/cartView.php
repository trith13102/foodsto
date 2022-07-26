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
    <title>Giỏ hàng - FoodSto</title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/homeView.js"></script>

    <?php require_once 'mvc/views/blocks/header.php'; ?>
    <div class="banner__nav font-primary-font">
        <div class="pt-36 py-26 text-center text-title-color">
            <h1 class="font-bold text-[70px]">Giỏ hàng</h1>
            <ol class="flex justify-center text-base mt-3">
                <li class="flex items-center justify-center"><i class="fa-solid fa-house-chimney mr-2"></i><a href="" class="block hover:text-primary-color">Trang chủ</a></li>
                <li class="flex items-center justify-center"><i class="fa-solid fa-chevron-right text-xs pl-2 pr-4"></i><a href="" class="block hover:text-primary-color transition-colors">Giỏ hàng</a></li>
            </ol>
        </div>
    </div>
    <main class="py-30 font-primary-font">
        <div class="container mx-auto px-4">
            <article class="p-7.5 shadow-product">
                <!-- Form Product -->
                <form action="cart" target="_self" method="POST" class="border">
                    <table class="w-full rounded-md overflow-hidden ">
                        <thead class="border-b">
                            <tr class="text-xl font-bold text-left text-title-color">
                                <th class="p-4">&nbsp;</th>
                                <th class="p-4">&nbsp;</th>
                                <th class="p-4">Sản phẩm</th>
                                <th class="p-4">Giá</th>
                                <th class="p-4">Số lượng</th>
                                <th class="p-4">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row Product -->
                            <?php
                            $cart = $data["cart"];
                            $_SESSION['total'] = 0;
                            
                            if (sizeof($cart) > 0) {
                                foreach ($cart as $product) {
                                    echo '<tr class="border-b">
                                        <td class="align-middle p-4">
                                            <a href="cart?remove&id=' . $product['id'] . '" target="_self" class="w-7.5 h-7.5 inline-block text-center rounded-md text-white bg-primary-color text-lg">x</a>
                                        </td>
                                        <td class="align-middle p-4"> <a href=details?id='.$product['id'].' target="_self">
                                        <img class="rounded-md w-20 h-20" src="' . $product['image'] . '" alt=""></a>
                                        </td>
                                        <td class="align-middle p-4">' . $product['name'] . '</td>
                                        <td class="align-middle p-4">$' . number_format($product['price']) . '</td>
                                        <td class="align-middle p-4">
                                            <span class="flex mr-4">
                                                <a href="cart?subtraction&id=' . $product['id'] . '" target="_self" class="flex items-center justify-center button-subtract bg-primary-color text-white text-center rounded-md w-11 h-11 border border-primary-color" type="button">
                                                    <i class="fa-solid fa-minus"></i>
                                                </a>
                                                <input type="hidden" name="idProduct[]" value="'.$product['id'].'">
                                                <input id="qty" name="qtyProduct[]" class="input-qty appearance-none outline-none mx-1 bg-light-green-color border-b border-b-primary-color px-4 text-center rounded-md w-16" type="number" value="' . $product['qty'] . '" min="1">
                                                <a href="cart?addition&id=' . $product['id'] . '" target="_self" class="flex items-center justify-center button-plus bg-primary-color text-white text-center rounded-md w-11 h-11  border border-primary-color" type="button">
                                                    <i class="fa-solid fa-plus"></i>
                                                </a>
                                            </span>
                                        </td>
                                        <td class="align-middle p-4">$' . number_format($product['subtotal']) . '</td>
                                    </tr>';
                                    $_SESSION['total'] += $product['subtotal'];
                                }
                            } else {
                                echo '<tr class="border-b">
                                    <td colspan="6" class="align-middle p-4 text-center font-bold">Không có sản phẩm nào trong giỏ hàng.</td>
                                    <tr>';
                            }
                            ?>

                            <!-- Subtotal Product -->
                            <tr>
                                <td colspan="6">
                                    <div class="flex p-4">
                                        <div class="coupon flex">
                                            <input class="placeholder-body-text rounded-md mr-4 p-4 bg-light-green-color border outline-none h-[46px] text-body-text" type="text" placeholder="Mã giảm giá">
                                            <button class="text-white duration-500 tracking-wide bg-secondary-color hover:bg-primary-color transition-colors px-7.5 py-3 text-sm font-medium rounded-md shadow">Áp dụng<i class="pl-2 fas fa-long-arrow-alt-right"></i></button>
                                        </div>
                                        <button type="submit" name="update" class="ml-auto tracking-wide text-white duration-500 bg-secondary-color hover:bg-primary-color transition-colors px-7.5 py-3 text-sm font-medium rounded-md shadow">Cập nhật giỏ hàng<i class="pl-2 fas fa-long-arrow-alt-right"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <!-- Cart total -->
                <div class="pt-18">
                    <h1 class="font-bold text-title-color mb-7.5 text-[51px] leading-tight">Tổng tiền giỏ hàng</h1>
                    <table class="w-full rounded-md overflow-hidden">
                        <tbody class="border text-left">
                            <tr>
                                <th class="leading-tight text-xl p-4 w-[35%] font-bold">Thành tiền</th>
                                <td class="p-4">
                                    <?php echo '$'.number_format($_SESSION['total']);?>
                                </td>
                            </tr>
                            <tr>
                                <th class="leading-tight text-xl p-4 w-[35%] font-bold">Tổng cộng</th>
                                <td class="p-4 font-medium">
                                    <?php echo '$'.number_format($_SESSION['total']);?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="py-4">
                        <a href="checkout" class="inline-block mb-3 tracking-wider leading-relaxed ml-auto uppercase text-white duration-500 bg-secondary-color hover:bg-primary-color transition-colors px-7.5 py-3 text-sm font-medium rounded-md shadow">Tiến hành thanh toán<i class="pl-2 fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <script>
        var newURL = location.href.split("?")[0];
        window.history.pushState('object', document.title, newURL);
    </script>
    <?php require_once 'mvc/views/blocks/footer.php'; ?>

</body>

</html>