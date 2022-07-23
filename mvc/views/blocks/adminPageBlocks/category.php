<style>
     #loader {
          border: 3px solid hsla(152, 51%, 47%, 0.2);
          border-top-color: #3bb77e;
          border-radius: 50%;
          width: 3em;
          height: 3em;
          animation: spin 1s linear infinite;
     }

     @keyframes spin {
          to {
               transform: rotate(360deg);
          }
     }
</style>
<div class="col-span-4 p-6 rounded-md bg-white shadow-custom-shadow-1">
     <h1 class="font-medium text-[1.2rem] pb-8">Thêm danh mục mới</h1>
     <form onsubmit="return false;" action="" method="POST" target="_self" enctype="multipart/form-data">
          <div class="flex flex-col mb-6">
               <label class="text-[1.1rem] font-medium font-primary-font pb-2 text-slate-500" for="name">Tên danh mục<sup>*</sup></label>
               <input class="border text-[1rem] border-slate-300 px-4 py-2 rounded-md focus:outline-none focus:border-primary-color font-primary-font" id="name" name="name" type="text" placeholder="Nhập tên danh mục">
          </div>
          <div class="flex flex-col mb-6">
               <label class="text-[1.1rem] font-medium font-primary-font pb-2 text-slate-500" for="description">Mô tả danh mục<sup>*</sup></label>
               <input class="border text-[1rem] border-slate-300 px-4 py-2 rounded-md focus:outline-none focus:border-primary-color font-primary-font" id="description" name="description" type="text" placeholder="Nhập tên danh mục">
          </div>
          <div class="flex flex-col mb-6">
               <label class="text-[1.1rem] font-medium font-primary-font pb-2 text-slate-500" for="thumbnail">Ảnh thu nhỏ<sup>*</sup></label>
               <input class="w-80 border text-[1rem] border-slate-300 px-4 py-2 rounded-md focus:outline-none focus:border-primary-color font-primary-font" id="thumbnail" name="thumbnail" type="file" placeholder="Nhập tên danh mục">
               <div class="hidden overflow-hidden w-80 mt-4 border-2 border-primary-color rounded-lg">
                    <img id="preview" class="" alt="Preview Image" />
               </div>
          </div>
          <div class="flex pt-20 pb-2">
               <button class="w-44 h-10 text-[.9rem] text-white mr-2 bg-primary-color rounded-md drop-shadow-md hover:translate-y-[-0.1rem] hover:drop-shadow-xl font-medium transition-all" type="submit">Thêm</button>
               <button class="w-44 h-10 text-[.9rem] text-stone-800 ml-2 bg-slate-100 rounded-md drop-shadow-md hover:translate-y-[-0.1rem] hover:drop-shadow-xl font-medium transition-all" type="submit">Nhập lại</button>
          </div>
     </form>
</div>

<div class="col-span-4 rounded-md bg-white shadow-custom-shadow-1 pb-8">
     <div class="flex items-center justify-between">
          <h1 class="font-medium text-[1.2rem] p-6 pb-8">Danh sách danh mục</h1>
          <div class="mr-6 border border-slate-400 rounded-md overflow-hidden">
               <input class="p-2 font-primary-font focus:outline-none text-[.9rem]" type="text" placeholder="Tìm kiếm danh mục">
               <button class="px-6 py-2 bg-slate-600 hover:bg-slate-400 text-white font-primary-font text-[.9rem]" type="button">Tìm kiếm</button>
          </div>
     </div>

     <table class="table-auto border-t border-b w-full">
          <thead class="border-b">
               <tr class="bg-slate-100">
                    <th class="font-[600] text-left text-[.7rem] text-slate-400 uppercase px-6 py-2">Ảnh thu nhỏ</th>
                    <th class="font-[600] text-left text-[.7rem] text-slate-400 uppercase px-6 py-2">Mã danh mục</th>
                    <th class="font-[600] text-left text-[.7rem] text-slate-400 uppercase px-6 py-2">Tên danh mục</th>
                    <th class="font-[600] text-left text-[.7rem] text-slate-400 uppercase px-6 py-2">Mô tả danh mục</th>
                    <th class="font-[600] text-left text-[.7rem] text-slate-400 uppercase px-6 py-2">Hành động</th>
               </tr>
          </thead>
          <tbody id="data-place">
               <tr class=" hover:bg-slate-100 transition-all duration-400 w-full border-b h-ful">
                    <td class="font-[700] text-left text-[.8rem] text-primary-color uppercase px-6 py-2">
                         <img class="w-[20rem] border-1 border-black" src="https://res.cloudinary.com/foodstocloud/image/upload/v1657664939/category/bakery-4_u7eyha.png" alt="">
                    </td>
                    <td class="font-[700] text-left text-[.8rem] text-primary-color uppercase px-6 py-2">1</td>
                    <td class="font-[700] text-left text-[.8rem] text-primary-color uppercase px-6 py-2">Bánh ngọt</td>
                    <td class="font-[700] text-left text-[.8rem] text-primary-color uppercase px-6 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td class="flex items-stretch font-[700] text-left text-[.8rem] text-stone-600 uppercase h-full px-6 py-2">
                         <button class="rounded-[4px] flex items-center justify-center w-8 h-8 mr-2 bg-blue-500 drop-shadow-md hover:translate-y-[-0.05rem] hover:drop-shadow-xl transition-all" type="button" title="Sửa">
                              <i class="bx bxs-edit text-[.9rem] text-white"></i>
                         </button>
                         <button class="rounded-[4px] flex items-center justify-center w-8 h-8 ml-2 bg-[#f5365c] drop-shadow-md hover:translate-y-[-0.05rem] hover:drop-shadow-xl transition-all" type="button" title="Xoá">
                              <i class="bx bxs-trash text-[.9rem] text-white"></i>
                         </button>
                    </td>
               </tr>
               <div id="loader-wrapper" class="flex items-center justify-center"></div>
          </tbody>

     </table>
     <div></div>
</div>