<div class="col-span-4 h-96 p-6 rounded-md bg-white shadow-custom-shadow-1">
     <h1 class="font-medium pb-8">Thêm danh mục mới</h1>
     <form action="" method="POST" target="_self">
          <div class="flex flex-col">
               <label class="font-primary-font pb-2" for="new_category">Tên danh mục</label>
               <input class="border border-slate-300 px-4 py-2 rounded-md focus:outline-none focus:border-primary-color font-primary-font" id="new_category" name="new_category" type="text">
          </div>
          <div>
               <button type="submit"></button>
          </div>
     </form>
</div>

<?php
     $categories = isset($data['pageData'][1]) ? $data['pageData'][1] : [];

     foreach ($categories as $category) {
         print_r($category['ten_dmuc']);
         echo '<br><br>';
     }
?>