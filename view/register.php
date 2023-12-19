<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
    <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');</style>
</head>
<body>

<div id="register-form" class="hidden min-w-screen min-h-screen bg-gray-900 items-center justify-center">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:50%">
        <div class="md:flex w-full">
            <div class="w-full md:w-full py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-gray-900">REGISTER</h1>
                    <p>Enter your information to register</p>
                </div>
                <form action="..\trait\register_trait.php" method="POST">
                    <div class="flex -mx-3">
                        <div class="w-1/2 px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">First name</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                <input name="f-name" type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="John">
                            </div>
                        </div>
                        <div class="w-1/2 px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Last name</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                <input name="l-name" type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Smith">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Email</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                <input name="email" type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="johnsmith@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-12">
                            <label for="" class="text-xs font-semibold px-1">Password</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                <input name="password" type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="************">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button type="submit" name="submit" class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">REGISTER NOW</button>
                        </div>
                    </div>
                    <div class="text-sm font-display font-semibold text-gray-700 text-center">
                        Already have an account? <a id="login" class="cursor-pointer text-indigo-600 hover:text-indigo-800"> Login!</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="login-form" class="bg-gray-900 h-screen w-screen">
    <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
        <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
            <div class="flex flex-col w-full md:w-1/2 p-4">
                <div class="flex flex-col flex-1 justify-center mb-8">
                    <h1 class="text-4xl text-center font-thin">Welcome Back</h1>
                    <div class="w-full mt-4">
                        <form class="form-horizontal w-3/4 mx-auto" method="POST" action="#">
                            <div class="flex flex-col mt-4">
                                <input id="email" type="text" class="flex-grow h-8 px-2 border rounded border-grey-400" name="email" value="" placeholder="Email">
                            </div>
                            <div class="flex flex-col mt-4">
                                <input id="password" type="password" class="flex-grow h-8 px-2 rounded border border-grey-400" name="password" required placeholder="Password">
                            </div>
                            <div class="flex items-center mt-4">
                                <input type="checkbox" name="remember" id="remember" class="mr-2"> <label for="remember" class="text-sm text-grey-dark">Remember Me</label>
                            </div>
                            <div class="flex flex-col mt-8">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                    Login
                                </button>
                            </div>
                        </form>
                        <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                            Don't have an account ? <a id="sign-up" class="cursor-pointer text-indigo-600 hover:text-indigo-800">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 rounded-r-lg" style="background: url('https://images.unsplash.com/photo-1515965885361-f1e0095517ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3300&q=80'); background-size: cover; background-position: center center;"></div>
        </div>
    </div>
</div>

<script>
    const form_regist = document.getElementById("register-form");
    const form_login = document.getElementById("login-form");
    const switch_login = document.getElementById("login");
    const switch_register = document.getElementById("sign-up");

    switch_login.addEventListener('click', function () {
        // Toggle the display property
        form_regist.style.display = 'none';
        form_login.style.display = 'block';
    });

    switch_register.addEventListener('click', function () {
        // Toggle the display property
        form_regist.style.display = 'flex';
        form_login.style.display = 'none';
    });
</script>

</body>
</html>