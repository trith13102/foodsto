<?php $row = $data['result'] ?? null;?>

<main class="py-30 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto font-primary-font text-body-text">

  <div class="flex justify-start item-start space-y-2 flex-col">
    <h1 class="text-3xl  lg:text-4xl font-semibold leading-7 lg:leading-9 ">Đơn hàng #<?php echo $row[0]['id_order'] ?></h1>
    <p class="text-base font-medium leading-6">Đặt hàng vào lúc:<?php echo ' ' . date_format(date_create($row[0]['date_order']), "d/m/Y H:i:s"); ?></p>
  </div>
  <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
    <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
      <div class="shadow-product flex flex-col justify-start items-start  bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
        <p class="text-lg md:text-xl  font-semibold leading-6 xl:leading-5 ">Chi tiết đơn hàng</p>
        <?php foreach ($row as $raw) {
          if (isset($raw['thumbnail_product'])) {
            echo '<div class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
              <div class="pb-4 md:pb-8 w-full md:w-40">
                <img class="rounded w-full hidden md:block" src="' . $raw['thumbnail_product'] . '" alt="thumbnail" />
                <img class="rounded w-full md:hidden" src="' . $raw['thumbnail_product'] . '" alt="thumbnail" />
              </div>
              <div class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                <div class="w-full flex flex-col justify-start items-start space-y-8">
                  <h3 class="text-xl xl:text-2xl font-semibold leading-6 text-title-color">' . $raw['name_product'] . '</h3>
                </div>
                <div class="flex justify-between space-x-8 items-start w-full">
                  <p class="text-base xl:text-lg leading-6">' . number_format($raw['price_product']) . ' VNĐ</p>
                  <p class="text-base xl:text-lg leading-6 ">' . $raw['qty_product'] . '</p>
                  <p class="text-base xl:text-lg font-semibold leading-6 text-primary-color">' . number_format($raw['subtotal_product']) . ' VNĐ</p>
                </div>
              </div>
              </div>';
          }
        } ?>
      </div>
      <div class="flex justify-center flex-col md:flex-row items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
        <div class="shadow-product flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50  space-y-6">
          <h3 class="text-xl  font-semibold leading-5 ">Tóm tắt đơn hàng</h3>
          <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
            <div class="flex justify-between w-full">
              <p class="text-base leading-4">Tổng cộng</p>
              <p class="text-base leading-4"><?php echo number_format($row[0]['order_amount']) . ' VNĐ' ?></p>
            </div>
            <div class="flex justify-between items-center w-full">
              <p class="text-base leading-4">Voucher</p>
              <span class="bg-gray-200 p-1 text-xs font-medium leading-3 ">Không áp dụng</span>
            </div>
            <div class="flex justify-between items-center w-full">
              <p class="text-base leading-4">Phí vận chuyển</p>
              <p class="text-base leading-4">Miễn phí</p>
            </div>
          </div>
          <div class="flex justify-between items-center w-full">
            <p class="text-base font-semibold leading-4">Thanh toán</p>
            <p class="text-base font-semibold leading-4"><?php echo number_format($row[0]['order_amount']) . ' VNĐ' ?></p>
          </div>
        </div>
        <div class="shadow-product flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50  space-y-6">
          <h3 class="text-xl  font-semibold leading-5 ">Vận chuyển</h3>
          <div class="flex justify-between items-start w-full">
            <div class="flex justify-center items-center space-x-4">
              <div class="w-8 h-8">
                <img class="w-full h-full" alt="logo" src="https://i.ibb.co/L8KSdNQ/image-3.png" />
              </div>
              <div class="flex flex-col justify-start items-center">
                <p class="text-xs leading-6 font-semibold">FoodSto Express<br /><span class="font-normal">Giao hàng trong 24h</span></p>
              </div>
            </div>
            <p class="text-lg font-semibold leading-6">Miễn phí</p>
          </div>
          <div class="w-full flex justify-center items-center">
            <button class="tracking-wide text-white duration-500 bg-secondary-color hover:bg-primary-color transition-colors px-7.5 py-3 text-sm font-medium rounded-md shadow">Thông tin vận chuyển chi tiết<i class="pl-2 fas fa-long-arrow-alt-right"></i></button>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow-product bg-gray-50  w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
      <h3 class="text-xl font-semibold leading-5">Khách hàng</h3>
      <div class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
        <div class="flex flex-col justify-start items-start flex-shrink-0">
          <div class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-bborder-gray-200">
            <img class="rounded" src="https://i.ibb.co/5TSg7f6/Rectangle-18.png" alt="avatar" />
            <div class="flex justify-start items-start flex-col space-y-2">
              <p class="text-base font-semibold leading-4 text-left"><?php echo $row[0]['name_customer']; ?></p>
            </div>
          </div>

          <div class="flex justify-center   md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M3 7L12 13L21 7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <p class="cursor-pointer text-sm leading-5 "><?php echo $row[0]['email_customer']; ?></p>
          </div>
        </div>
        <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
          <div class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
            <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
              <p class="text-base font-semibold leading-4 text-center md:text-left ">Địa chỉ mặc định</p>
              <p class="w-48 lg:w-full  xl:w-48 text-center md:text-left text-sm leading-5"><?php echo $row[0]['default_address']; ?></p>
            </div>
            <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
              <p class="text-base font-semibold leading-4 text-center md:text-left ">Địa chỉ nhận hàng</p>
              <p class="w-48 lg:w-full  xl:w-48 text-center md:text-left text-sm leading-5"><?php echo $row[0]['order_address']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>