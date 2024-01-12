<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>
<div class="bg-gray-100 flex justify-center items-center h-screen">
    <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
  <img src="images/wiki3.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <form id="registerForm" action="../../controllers/ConUser.php" method="post" class="max-w-4xl mx-auto bg-white shadow-[0_2px_18px_-3px_rgba(6,81,237,0.4)] sm:p-8 p-4 rounded-md">
                 <div class="mb-10">
                        <h3 class="text-3xl font-extrabold">Sign Up</h3>
                    </div>
            <div class="w-full  mb-6">
         
                 <?php
                 if (isset($_SESSION['error'])) {
                    ?>
                  <p class="text-red-600"><?= $_SESSION['error'] ?> </p>
                  <?php  
                    unset($_SESSION['error']);
                } else { ?>
                  
              <?php }  ?>  
            
              </div>
                <div class="grid md:grid-cols-2 gap-y-7 gap-x-12">
                  
                    <div>
                        <label class="text-sm mb-2 block">Full Name</label> 
                        <input name="Fname" id="Fname" type="text" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md border border-solid outline-none" placeholder="Enter Full name" />
                        <p id="errorMessage" class="hidden text-red-500">invalid characters</p>
                    </div>
                    
                    <div>
                        <label class="text-sm mb-2 block">Email Id</label>
                        <input name="email" id="email" type="text" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md border border-solid outline-none" placeholder="Enter email" />
                        <p id="errormessage1" class="hidden text-red-500">invalid E-mail</p>

                    </div>

                    <div>
                        <label class="text-sm mb-2 block">Password</label>
                        <input name="password" type="password" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter password" />
                    </div>
                    <div>
                        <label class="text-sm mb-2 block">Confirm Password</label>
                        <input name="cpassword" type="password" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter confirm password" />
                    </div>
                </div>
                <div class="!mt-10">
                    <button type="submit" name="register" class="min-w-[150px] py-3 px-4 text-sm font-semibold rounded-md text-white bg-blue-800 hover:bg-blue-600 focus:outline-none">
                        Sign up
                    </button>
                </div>
                <p class="text-sm mt-6 text-center">Already have an account?<a href="login.php" class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Login here</a></p>

            </form>
        </div>
    </div>
    <script  src="../../../public/js/regexRegister.js" >
    </script>
</body>

</html>