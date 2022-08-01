<header class="header">
    <div class="main-header">
        <div class="navbar">
            <div class="logo_block">
                <a href="home" target="_self">
                    <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1654415483/page_images/wide-logo_zoohrq.png" alt="">
                </a>
            </div>
            <div class="navbar-collapse">
                <ul class="list-menu">
                    <li class="menu-item">
                        <a class="item_title" href="home" target="_self">Trang chủ</a>
                    </li>
                    <li class="menu-item">
                        <a class="item_title angle-down" href="" target="_self">Cửa hàng</a>

                        <div class="menu-sol">
                            <ul class="list-menu-sol">
                                <li>
                                    <a href="category" target="_self">Danh mục sản phẩm</a>
                                </li>
                                <li>
                                    <a href="product" target="_self">Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="" target="_self">Bán chạy</a>
                                </li>
                                <li>
                                    <a href="" target="_self">Giám giá</a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <?php
                    if (!isset($_SESSION['is_logged_in'])) {
                    ?>

                        <li class="menu-item">
                            <a class="item_title angle-down" href="" target="_self">Tài khoản</a>

                            <div class="menu-sol">
                                <ul class="list-menu-sol">
                                    <li>
                                        <a href="login" target="_self">Đăng nhập</a>
                                    </li>
                                    <li>
                                        <a href="login/signup" target="_self">Đăng ký</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php   } else {
                    ?>

                        <li class="menu-item">

                            <a class="item_title angle-down" href="" target="_self"> <img src="https://img.icons8.com/nolan/344/40C057/user.png" style="width: 30px; height: 30px; display: inline-block; margin-right: 8px; border-radius: 50%;" alt=""></a>

                            <div class="menu-sol">
                                <ul class="list-menu-sol">
                                    <form action="" method="post" target="_self">
                                        <div>
                                            <!-- <img src="user_logo.jpg" style="border-radius: 50%; margin: auto;" alt=""> -->
                                            <h1 class="mt-3"><b><?php echo $_SESSION['email'] ?></b></h1>
                                        </div>
                                        <li>
                                            <a href="#" target="_self">Tài khoản</a>
                                        </li>
                                        <li>
                                            <button type="submit" name="logout">Đăng xuất</button>
                                        </li>
                                    </form>
                                </ul>
                            </div>
                        </li>


                    <?php
                    } ?>
                    <!-- <div class="menu-sol">
                            <ul class="list-menu-sol">
                                <li>
                                    <a href="" target="_self">Cài đặt</a>
                                </li>
                                <li>
                                    <a href="" target="_self">Đăng xuất</a>
                                </li>
                            </ul>
                        </div> -->

                </ul>
                <div class="iq-shop-btn">
                    <ul>
                        <li class="menu-item no-down">
                            <a href="cart" target="_self">
                                <i class="fas fa-shopping-basket"></i>
                                <div class="basket-item-count">
                                    <span class="cart-items-count">
                                        <?php echo (isset($_SESSION['cart'])) ? count(($_SESSION['cart'])) : '0'; ?>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="menu-item no-down">
                            <a href="" target="_self">
                                <i class="fa-solid fa-heart"></i>
                                <div class="basket-item-count">
                                    <span class="wcount">
                                        0
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="menu-item no-down">
                            <form action="" id="search-box" method="post" target="_self">
                                <button id="search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                                <input type="text" id="search-text" placeholder="Tìm kiếm" required>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ---------- đăng xuất --------------- -->
<?php
if (isset($_POST['logout'])) {
    if (isset($_SESSION['is_logged_in'])) {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        // header("Refresh:0");
        echo "<script> location.reload();</script>";
    }
}
?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>