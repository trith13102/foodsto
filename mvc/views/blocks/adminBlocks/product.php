<link rel="stylesheet" href="public/scss/admin/output/product.css">

<h1>Sản phẩm đang bán</h1>
<p>Quản lý các loại sản phẩm trên hệ thống.</p>

<div class="section-wrapper">
     <div class="management-table">
          <div class="table-search">
               <div class="add">
                    <button onclick="openAddProduct()" type="button">Thêm sản phẩm mới</button>
               </div>
               <!-- <div class="search-input">
                    <form id="search-by-email" target="_self">
                         <input type="text" placeholder="Tìm bằng email">
                    </form>
                    <i class='bx bx-search'></i>
               </div> -->
          </div>
          <table class="data-table">
               <thead>
                    <tr>
                         <th>Ảnh</th>
                         <th>Tên</th>
                         <th>Danh mục</th>
                         <th>SKU</th>
                         <th>Giá</th>
                         <th>Khối lượng</th>
                         <th>Mô tả</th>
                         <th>Ngày thêm</th>
                         <th>Tồn kho</th>
                         <th>Thao tác</th>
                    </tr>
               </thead>
               <tbody></tbody>
          </table>
     </div>
</div>