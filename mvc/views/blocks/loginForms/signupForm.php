<form>
    <div class="flex flex-row items-center justify-center lg:justify-start">
        <h1 class="text-4xl mb-7 mr-4">Sign Up</h1>
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

    <div class="mb-6">
        <label for="password_cfm" class="form-label inline-block mb-3 text-gray-900 text-xl">Confirm Password</label>
        <input type="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-green-100 bg-clip-padding border border-solid border-b-green-600 rounded transition ease-in-out m-0 focus:text-gray-700 focus:border-green-600 focus:outline-none" id="password_cfm" />
    </div>

    <div class="text-center lg:text-left">
        <button type="button" class="inline-block px-10 py-5 bg-green-500 text-white font-medium text-lg leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
            Create Account
        </button>

    </div>
</form>