<link rel="stylesheet" href="public/scss/admin/output/account.css">

<h1>Các loại tài khoản</h1>
<p>Quản lý các loại tài khoản trên hệ thống.</p>

<div class="section-wrapper">
     <div class="management-table">
          <div class="table-search">
               <div class="add">
                    <!-- <button onclick="openModal()" type="button">Thêm danh mục mới</button> -->
               </div>
               <div class="search-input">
                    <form id="search-by-email" target="_self">
                         <input type="text" placeholder="Tìm bằng email">
                    </form>
                    <i class='bx bx-search'></i>
               </div>
          </div>
          <table class="data-table">
               <thead>
                    <tr>
                         <th>Tên đăng nhập</th>
                         <th>Email</th>
                         <th>Họ và Tên</th>
                         <th>Loại tài khoản</th>
                         <th>Địa chỉ</th>
                         <th>Quốc gia</th>
                         <th>Số điện thoại</th>
                         <th>Thao tác</th>
                    </tr>
               </thead>
               <tbody></tbody>
          </table>
     </div>
</div>