<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="./sass/main.css">
        <link rel="shortcut icon" href="./src/img/culturedev.png" type="image/x-icon">
        <script defer src="./src/js/main.js"></script>
        <script defer src="./src/js/validation.js"></script>
        <title>Sign In page</title>
    </head>
<body class="bg-slate-800 container-register">
    <div class=" bg-slate-800 text-white register-and-signin-container ">
            <div class="register-container w-3/6 px-4 py-4 border-solid border-2 border-sky-500">
                <div class="signup">
                    <h2 class="text-3xl mb-4">Register</h2>
                    <p class="mb-4">Create your account. It’s free and only take a minute</p>
                    <form action="signup.controller.php" method="post" id='registerForm'>
                        <div class="">
                            <input name="name" id="registerName" type="text" placeholder="Username" class="border border-solid border-gray-300 rounded py-2 px-2 w-full focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none text-black">
                            <p class="name-error"></p>
                        </div>
                        <div class="mt-5">
                            <input name="email" id="registerEmail" type="text" placeholder="Email" class="border border-solid border-gray-300 rounded py-2 px-2 w-full focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none text-black">
                            <p class="email-error"></p>
                        </div>
                        <div class="mt-5">
                            <input name="password" id="registerPassword" type="password" placeholder="Password" class="border border-solid border-gray-300 rounded py-2 px-2 w-full focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none text-black">
                            <p class="password-error"></p>
                        </div>
                        <div class="mt-5">
                            <input name="confirmPassword" id="registerConfirmPassword" type="password" placeholder="Confirm Password" class="border border-solid border-gray-300 rounded py-2 px-2 w-full focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none text-black">
                            <p class="cpassword-error"></p>
                        </div>
                        <div class="mt-5">
                            Already have an account? <a class="text-sky-400 font-semibold signinButton button">Sign In</a>
                        </div>
                        <div class="mt-5 ">
                            <button type="submit" class="w-full bg-sky-500/75 hover:bg-cyan-600 rounded-md py-3 text-center text-white button" >Register Now</button>
                        </div>
                    </form>
                </div>

            <div class="signin hidden">
                <h2 class="text-3xl mb-4">Sign in</h2>
                <p class="mt-5">Access CultureDev's best articles</p>
                <form action="./signin-controller.php" method="post">
                    <div class="mt-5">
                        <input name="email" type="text" placeholder="Email" class="border border-solid border-gray-300 rounded py-2 px-2 w-full focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none text-black">
                    </div>
                    <div class="mt-5">
                        <input name="password" type="password" placeholder="Password" class="border border-solid border-gray-300 rounded py-2 px-2 w-full focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none text-black">
                    </div>
                    <div class="mt-5">
                        You don't have an account? <a  class="text-sky-400 font-semibold signupButton button">Sign Up</a>
                    </div>
                    <div class="mt-5 ">
                        <button type="submit" class="w-full bg-sky-500/75 hover:bg-cyan-600 rounded-md py-3 text-center text-white button">Sign In Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>