<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <base href="http://localhost/foodsto/" target="_blank">
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="stylesheet" href="public/css/base.css">
     <link rel="stylesheet" href="public/css/headerFooter.css">
     <link rel="stylesheet" href="public/css/homeView.css">
     <title>FoodSto Store</title>

</head>

<body>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="public/js/homeView.js"></script>

     <?php require_once 'mvc/views/blocks/header.php'; ?>

     <div class="banner-main_home"> </div>

     <main>
<<<<<<< HEAD

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
                              <a href=""> Cửa hàng </a>
                         </div>
                    </div>
                    <div class="services-item ">
                         <div class="service-img ser-img2"></div>
                         <div class="ser-con">
                              <span>Giảm giá 30%</span>
                              <h4>Thực phẩm sạch</h4>
                              <a href=""> Cửa hàng </a>
                         </div>
                    </div>
                    <div class="services-item ">
                         <div class="service-img ser-img3"></div>
                         <div class="ser-con">
                              <span>Không chứa Gluten</span>
                              <h4>Super Salads</h4>
                              <a href=""> Cửa hàng </a>
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
                    <button data-filter = ".breakfast-cereals" class="show active">Ngũ cốc ăn sáng</button>
                    <button data-filter = ".fruit-yogurt">Sữa chua trái cây</button>
                    <button data-filter = ".salads">Salads</button>
               </div>
               <div class="home_product">
                    <div class="h-product-list .breakfast-cereals">
                         <div class="h-product-main">
                              <div class="h-product-item">
                                   <a href="">
                                        <div class="h-product-img">
                                        <img src="https://res.cloudinary.com/foodstocloud/image/upload/v1655112834/product_images/d2qx4eynlriebzyhonkq.jpg" alt="">
                                        </div>
                                        <div class="h-product_content">
                                             <div class="h-product__category">
                                                  <span class="h-category">Ngũ cốc</span>
                                                  ,
                                                  <span class="h-category">Đồ ăn nhẹ</span>
                                             </div>
                                             <div class="h-product__title-price">
                                                  <a href="">Khoai tây chiên</a>
                                                  <div class="h-product__price">
                                                       <div class="h-price">
                                                       <span>10.000</span> VNĐ
                                                       </div>
                                                       <ul class="h-ratings">
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
                                        </div>
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

=======
          <div class="banner-main_home">               
          </div>
>>>>>>> c08cae66b7737c4ac332e9cff09e554ed424339f
     </main>

     <?php require_once 'mvc/views/blocks/footer.php'; ?>

</body>

</html>