<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['nameRole']);

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>wikie </title>
    

<body>
<div class="bg-gray-100 flex justify-center items-center h-screen">
        <!-- Left: Image -->
    <div class="w-1/2 h-screen hidden lg:block">
    <img src="images/wiki2.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
        <form action="index.php?action=process_login" method="post"> 
                    
                    <div class="mb-10">
                        <h3 class="text-3xl font-extrabold">Login</h3>
                    </div> 
                    <div>
                        <label class="text-sm mb-2 block">User E-mail</label>
                        <div class="relative flex items-center">
                            <input name="email" id="emailLogin" type="email"  class="w-full text-sm border border-solid px-4 py-3 rounded-md outline-none" placeholder="Enter E-mail" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                                <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                                <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                            </svg>
                        </div>
                        <p id="errormessage2" class="hidden text-red-500">invalid E-mail</p>

                    </div>
                    <div class="mt-6">
                        <label class="text-sm mb-2 block">Password</label>
                        <div class="relative flex items-center">
                            <input name="password" type="password"  class="w-full text-sm border border-gray-300 px-4 py-3 rounded-md outline-gray-600" placeholder="Enter password" />
                            
                        </div>
                    </div>

                    <div class="mt-10">
                        <button type="submit" name="login" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-black hover:bg-gray-700 focus:outline-none">
                            Log in
                        </button>
                    </div>
                    <p class="text-sm mt-6 text-center">Don't have an account <a href="register.php" class="text-gray-600 font-semibold hover:underline ml-1 whitespace-nowrap">Register here</a></p>
                </form>
            </div>
</body>

</html>