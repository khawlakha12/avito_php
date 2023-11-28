<?php
// require_once 'data.php';
session_start();
$_SESSION['init'] = 0;
?>

<!DOCTYPE html>n">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landingPage</title>
    <style>
        .HIDDEN {
            display: none;
        }
    </style>
</head>

<body>



    <!-- User Register Section -->
    <section>
        <!-- Sign in Section -->
        <section id="signin_section" class=" p-2 h-auto ">
            <nav class=" bg-blue-200 w-full flex relative justify-between items-center mx-auto px-8 h-20">
                <div class="inline-flex">
                    <div class="hidden md:block">
                        <div width="102" height="32" fill="currentcolor" style="display: block">
                            <img src="img/avito-logo.svg" alt="logo">
                        </div>
                    </div>
                </div>
                <div class="block relative">
                    <div class="block">
                        <div class="inline relative">
                            <button id="signup_button" type="button"
                                class="inline-flex items-center relative px-2 border rounded-full hover:shadow-lg">
                                <div class="pl-1">
                                    <span class="italic font-medium text-md">Sign-up</span>
                                </div>

                                <div class="block flex-grow-0 flex-shrink-0 h-10 w-12 pl-5">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        role="presentation" focusable="false"
                                        style="display: block; height: 100%; width: 100%; fill: currentcolor;">
                                        <path
                                            d="m16 .7c-8.437 0-15.3 6.863-15.3 15.3s6.863 15.3 15.3 15.3 15.3-6.863 15.3-15.3-6.863-15.3-15.3-15.3zm0 28c-4.021 0-7.605-1.884-9.933-4.81a12.425 12.425 0 0 1 6.451-4.4 6.507 6.507 0 0 1 -3.018-5.49c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5a6.513 6.513 0 0 1 -3.019 5.491 12.42 12.42 0 0 1 6.452 4.4c-2.328 2.925-5.912 4.809-9.933 4.809z">
                                        </path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                </div>
            </nav>

            <!-- sign-in form: -->
            <section class="h-full w-full flex justify-center items-center ">
                <form id="signin_form" action="signIn.php" method="post">

                    <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:space-y-0">
                        <div class="flex flex-col justify-center  p-8 md:p-14">

                            <span class="text-center mb-3 text-4xl font-bold">Welcome Back</span>
                            <span class="text-center font-light text-gray-400 mb-8">Welcome back! Please entrer your
                                details</span>
                            <div
                                class="relative w-10 h-10 mx-auto overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="py-4 ">
                                <span class="text-base mb-3  font-bold">Email</span>
                                <input type="text"
                                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                                    id="in_email" type="email" name="in_email" />
                            </div>
                            <div class="py-4 ">
                                <span class="text-base mb-3  font-bold">Password</span>
                                <input type="password"
                                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                                    id="in_password" type="password" name="in_password" />
                            </div>
                            <div class="flex justify-between w-full py-4">
                                <div class="mr-24">
                                    <input type="checkbox" name="ch" id="ch" class="mr-2" />
                                    <span class="text-md">Remember for 30 days</span>
                                </div>
                                <span class="font-bold text-md">Forget password</span>
                            </div>
                            <button type="submit"
                                class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                                Sign in</button>

                            <div class="text-center text-gray-400">Dont have an account?
                                <a href="#"><span class="font-bold text-black">Sign up</span></a>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </section>

        <!-- Sign up Section -->
        <section id="signup_section" class="HIDDEN p-2  h-auto">
            <nav class="flex justify-between">
                <div></div>
                <ion-icon id="close_icon" name="close" class="text-2xl cursor-pointer"></ion-icon>
            </nav>
            <!-- sign-up form: -->
            <section class="h-full w-full flex justify-center items-center bg-blue-200">
                <form id="signup_form" class="  px-8 py-4 flex flex-col gap-2 rounded-md w-80"
                    enctype="multipart/form-data">

                    <div class="relative flex flex-col m-6 w-96 space-y-8 bg-white shadow-2xl rounded-2xl md:space-y-0justify-center items-center">
                        <div class="flex flex-col justify-center p-8 md:p-14">
                            <img src="img/avito-logo.svg" class="h-14 w-46" alt="imag">
                            <span class="text-center font-light text-gray-400 mb-8">Welcome back! Please entrer your
                                details</span>
                            <div
                                class="relative w-10 h-10 mx-auto overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>

                            <div class="py-4 ">
                                <span class="text-base mb-3  font-bold">username</span>
                                <input type="text"
                                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                                    id="username" type="text" name="username" />
                            </div>
                            <div class="py-4 ">
                                <span class="text-base mb-3  font-bold">Email</span>
                                <input type="text"
                                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                                    id="up_email" type="email" name="up_email" />
                            </div>
                            <div class="py-4 ">
                                <span class="text-base mb-3  font-bold">Password</span>
                                <input type="password"
                                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                                    id="up_password" type="password" name="up_password" />
                            </div>
                            <div class="py-4 ">
                                <span class="text-base mb-3  font-bold">Confirm password</span>
                                <input type="password"
                                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                                    id="up_confirm" type="password" name="up_confirm" />
                            </div>

                            <div class="py-4 ">
                                <span class="text-base mb-3  font-bold">upload image</span>
                            <input 
                                class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                                type="file" name="file">
                            </div>
                            <button type="submit" id="signup_button2"
                                class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                                Sign up</button>

                            <div class="text-center text-gray-400">I have an account?
                                <a href="#"><span class="font-bold text-black">Sign in</span></a>
                            </div>
                </form>
            </section>
        </section>
    </section>

    <!-- Scripts: -->
    <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- local scripts: -->
    <script src="script.js"></script>

</body>

</html>