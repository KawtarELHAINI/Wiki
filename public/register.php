<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['nameRole']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Wikie </title>
  
</head>

<body>
<div class="bg-gray-100 flex justify-center items-center h-screen">
    <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
  <img src="images/wiki3.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <form id="registerForm"action="index.php?action=process_registration" method="post"> 
                 <div class="mb-10">
                        <h3 class="text-3xl font-extrabold">Sign Up</h3>
                    </div>
<!-- 
        Formulaire d'inscription --> 
       <form action="index.php?action=process_registration" method="post">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="username" id="name" class="mt-1 p-2 w-full border rounded-md" placeholder="Enter name">

            <label for="email" class="block mt-4 text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md" placeholder="Enter email">

            <label for="password" class="block mt-4 text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md" placeholder="Enter password ">
<br><br>
             <!-- Ajoutez d'autres champs d'inscription ici si nécessaire  -->
             <button type="submit" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-black hover:bg-gray-700 focus:outline-none">Register</button>
             <p class="text-sm mt-6 text-center">you already have an account <a href="login.php" class="text-gray-600 font-semibold hover:underline ml-1 whitespace-nowrap">login</a></p>
        </form>
    </div>
 
</body>
</html>