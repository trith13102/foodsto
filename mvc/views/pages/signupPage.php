<form action="./login/signup" method="POST" target="_self">
    <div class="flex flex-row items-center justify-center lg:justify-start">
        <h1 class="text-title-color font-bold text-[38px] mb-4">Đăng ký</h1>
    </div>



    <div class="mb-6">
        <label for="name" class="block leading-loose mb-2.25">Email<span class="text-red-700">*</span></label>
        <input name="email" required id="name" type="text" class="rounded-md h-11 transition-colors duration-500 focus:border focus:border-primary-color w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
    </div>


    <div class="mb-6">
        <label for="name" class="block leading-loose mb-2.25">Mật khẩu<span class="text-red-700">*</span></label>
        <input name="password" required id="name" type="password" class="rounded-md h-11 transition-colors duration-500 focus:border focus:border-primary-color w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
    </div>

    <div class="mb-6">
        <label for="name" class="block leading-loose mb-2.25">Nhập lại mật khẩu<span class="text-red-700">*</span></label>
        <input name="password_cfm" required id="name" type="password" class="rounded-md h-11 transition-colors duration-500 focus:border focus:border-primary-color w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
    </div>

    <div class="text-center lg:text-left">
        <button name="btn_signup" type="submit" class="inline-block px-10 py-5 bg-green-500 text-white font-medium text-lg leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
            Tạo tài khoản
        </button>

    </div>
</form>










<!-- <script>

    const targetEl = document.getElementById('modalEl');
    const modal = new Modal(targetEl);
    modal.toggle();
</script> -->