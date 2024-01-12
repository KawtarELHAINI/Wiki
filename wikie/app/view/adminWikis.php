<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/wikie/app/service/WikiService.php");


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-blue-100 min-h-screen flex items-center justify-center">
   
               
  <div class="bg-white flex-1 flex flex-col space-y-5 lg:space-y-0 lg:flex-row lg:space-x-10 max-w-6xl sm:p-6 sm:my-2 sm:mx-4 sm:rounded-2xl">
    <!-- Navigation -->
    <div class="bg-gray-100 px-2 lg:px-4 py-2 lg:py-10 sm:rounded-xl flex lg:flex-col justify-between">
      <nav class="flex items-center flex-row space-x-2 lg:space-x-0 lg:flex-col lg:space-y-2">
        <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="../view/adminWikis.php">
          Wikie
        </a>
        <!-- Active: bg-gray-800 text-white, Not active: text-white/50 -->
        <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover"  href="../view/adminCategory.php">
          Category
        </a>
        <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="../view/adminTags.php">
          Tags
        </a>
      </nav>
      <div class="flex items-center flex-row space-x-2 lg:space-x-0 lg:flex-col lg:space-y-2">
      
        <a class="text-gray-500 p-4 inline-flex justify-center rounded-md hover:bg-gray-200 hover:text-gray-800 smooth-hover" href="../public/login.php">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
        </a>
        
      </div>
      
    </div>
    
            <div>
      <div class="flex justify-between items-center">
      <h3 class="text-3xl font-extralight text-gray-800">Categories</h3>  
        </div>

            </div>

            <div class="flex-1 p-4 w-full md:w-1/2">
                <!-- <div class="text-right mt-4">
                    <button id="addBtn" class="mr-4 bg-cyan-500 text-white px-4 py-2 rounded">Add Tag</button>
                </div> -->
                <div class="">
          
          <button id="addBtn" class="mr-4 bg-blue-800 text-white px-3 py-2 rounded">Add Category</button>
          </a>
        </div>

                <div class="flex flex-wrap -mx-4">
                <?php
                    $WikiService = new WikiService;
                    $Wikis = $WikiService->display();
                    foreach ($Wikis as $Wiki): ?>
                        <div class="flex-1  p-4  min-w-md max-w-md">
                            <div class="mt-8">
                                <div class="flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                                    <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">

                                        <h2 class="flex justfy-between text-gray-500 text-lg font-semibold pb-1">
                                            <img src="../../public/images/<?= $Wiki['pictureWiki']; ?>"
                                                class="w-52 h-28" alt="" srcset="">
                                        </h2><span class=" flex justify-between py-2 px-8 bg-grey-lightest font-bold uppercase
                                            text-l text-grey-light ">
                                            <?= $Wiki['title']; ?>
                                            <div class="flex">
                                                <p class="px-4">id:<?= $Wiki['idWiki']; ?>
                                                </p>
                                                
                                                <form action="../controller/Wiki.php" method="POST">
                                                    <input type="hidden" name="archivedWiki">
                                                    <input type="hidden" name="archived_Wiki_ID"
                                                        value="<?= $Wiki['idWiki'] ?>">
                                                    <button type="submit" >

                                                    <svg class="w-6 h-6 text-gray-800 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 15">
    <path d="M1 13a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H1v7Zm5.293-3.707a1 1 0 0 1 1.414 0L8 9.586V8a1 1 0 0 1 2 0v1.586l.293-.293a1 1 0 0 1 1.414 1.414l-2 2a1 1 0 0 1-1.416 0l-2-2a1 1 0 0 1 .002-1.414ZM17 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1Z"/>
  </svg>
  
                                                        
                                                    </button>
                                                </form>
                                            </div>
                                        </span>
                                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                                        <div class="flex">
                                            <div class="w-96">
                                                <?= $Wiki['content']; ?>
                                            </div>
                                        </div>
                                        <h3
                                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-gray-500 border-b border-grey-light">
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
        </div>
        

    
    <script src="/wikie/public/js/modal.js"></script>
</body>

</html>