<form onsubmit="return validate(this)" method="POST" target="_self" action="login">
    <div class="flex flex-row items-center justify-center lg:justify-start">
        <h1 class="text-title-color font-bold text-[38px] mb-4">Đăng nhập</h1>
    </div>


    <!-- Email input -->
    <div class="mb-6">
        <label for="name" class="block leading-loose mb-2.25">Email<span class="text-red-700">*</span></label>
        <input name="email" id="name" type="text" class="rounded-md h-11 transition-colors duration-500 focus:border focus:border-primary-color w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
    </div>

    <!-- Password input -->
    <div class="mb-6">
        <label for="password" class="block leading-loose mb-2.25">Mật khẩu<span class="text-red-700">*</span></label>
        <input name="password" id="password" type="password" class="rounded-md h-11 transition-colors duration-500 focus:border focus:border-primary-color w-full leading-loose outline-none bg-light-green-color border-b border-b-primary-color px-4">
    </div>

    <div class="flex justify-between items-center mb-6">
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-green-600 checked:border-green-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="exampleCheck2" />
            <label class="form-check-label inline-block text-gray-800 text-lg" for="exampleCheck2">Tự động đăng nhập</label>
        </div>
        <a href="login/lostPass" class="text-green-600 text-lg">Quên mật khẩu?</a>
    </div>

    <div class="text-center lg:text-left">
        <button name="btn_login" type="submit" class="inline-block px-10 py-5 bg-green-500 text-white font-medium text-lg leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
            Đăng nhập
        </button>
        <p class="text-sm font-semibold mt-2 pt-1 mb-0">
            Không có tài khoản?
            <a href="login/signup" class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out">Đăng ký</a>
        </p>
    </div>
</form>

<script src="https://unpkg.com/validator@latest/validator.min.js"></script>

<script>
    function validate(node) {
        var flag = false;
        for (let i = 0; i < node.length; i++) {
            if (validator.isEmpty(node[i])) {
                node[i].classlist.remove('bg-light-green-color');
                node[i].classlist.add('bg-light-red-color');
            }
        }
        // console.log(flag);
        return false;
    }
</script>