<form onsubmit="return validate(this)" method="POST" target="_self" action="home">
    <div class="flex flex-row items-center justify-center lg:justify-start">
        <h1 class="text-4xl mb-7 mr-4">Login</h1>
    </div>


    <!-- Email input -->
    <div class="mb-6">
        <label for="username" class="form-label inline-block mb-3 text-gray-900 text-xl">Username or email address</label>
        <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-green-100 bg-clip-padding border border-solid border-b-green-600 rounded transition ease-in-out m-0 focus:text-gray-700 focus:border-green-600 focus:outline-none" id="username" />
    </div>

    <!-- Password input -->
    <div class="mb-6">
        <label for="password" class="form-label inline-block mb-3 text-gray-900 text-xl">Password</label>
        <input type="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-green-100 bg-clip-padding border border-solid border-b-green-600 rounded transition ease-in-out m-0 focus:text-gray-700 focus:border-green-600 focus:outline-none" id="password" />
    </div>

    <div class="flex justify-between items-center mb-6">
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="exampleCheck2" />
            <label class="form-check-label inline-block text-gray-800" for="exampleCheck2">Remember me</label>
        </div>
        <a href="login/lostPass" class="text-green-600">Forgot password?</a>
    </div>

    <div class="text-center lg:text-left">
        <button type="submit" class="inline-block px-10 py-5 bg-green-500 text-white font-medium text-lg leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
            Log in
        </button>
        <p class="text-sm font-semibold mt-2 pt-1 mb-0">
            Don't have an account?
            <a href="#!" class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out">Register</a>
        </p>
    </div>
</form>

<script src="https://unpkg.com/validator@latest/validator.min.js"></script>

<!-- <script>
    function validate(node) {
        var flag = false;
        for (let i = 0; i < node.length; i++) {
            if (node[i].type != 'email')
                flag = validator.isEmail(node[i]);
        }
        console.log(flag);
        return false;
    }
    // console.log(validator.isEmail('n'));
</script> -->