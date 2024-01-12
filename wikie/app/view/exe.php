<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/Depiawiki-main/app/service/WikiService.php");


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
          
          <button id="addBtn" class="mr-4 bg-blue-800 text-white px-3 py-2 rounded">Add Wiki</button>
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
                                    <div class="relative group bg-blue-300 py-5 sm:py-4 px-2 sm:px-2 flex flex-col space-y-1 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                                        <h2 class="flex justfy-between text-gray-500 text-lg font-semibold pb-1">
                                            
                                        </h2><span class=" flex justify-between py-2 px-8 bg-grey-lightest font-bold uppercase
                                            text-l text-grey-light ">
                                            <?= $Wiki['title']; ?>
                                            <div class="flex">
                                                <p class="px-4">id:<?= $Wiki['idWiki']; ?>
                                                </p>
                                                <form method="post">
                                                    <input type="hidden" name="idWiki">
                                                    <button type="button"
                                                        onclick="showeditModal(<?= $Wiki['idWiki'] ?>)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                                <path d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z" data-original="#000000" />
                                                <path d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z" data-original="#000000" />
                                            </svg>
                                                    </button>
                                                </form>
                                                <form action="../controller/Wiki.php" method="POST">
                                                    <input type="hidden" name="archivedWiki">
                                                    <input type="hidden" name="archived_Wiki_ID"
                                                        value="<?= $Wiki['idWiki'] ?>">
                                                        <button type="submit" >

                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                                <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z" data-original="#000000" />
                                                <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000" />
                                            </svg>
                                                        </a>
                                                    </button>
                                                </form>
                                            </div>
                                        </span>
                                        <div class="bg-gradient-to-r from-blue-300 to-blue-500 h-px mb-6"></div>
                                        <div class="flex">
                                            <div class="my-1">
                                                <?= $Wiki['description']; ?>
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

        <div id="addModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden items-center flex justify-center">
            <div class="bg-white p-8 rounded shadow-lg w-96">
                <h2 class="text-2xl font-bold mb-4">Add Wiki</h2>
                <form id="addForm" action="../controller/Wiki.php" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-semibold text-gray-600">title:</label>
                        <input type="text" id="title" name="title" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-semibold text-gray-600">content:</label>
                        <input type="text" id="content" name="content" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="datecreated" class="block text-sm font-semibold text-gray-600">datecreated:</label>
                        <input type="date" id="datecreated" name="title" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-semibold text-gray-600">title:</label>
                        <input type="text" id="title" name="title" class="w-full p-2 border rounded">
                    </div>

                    <button type="submit" name="addWiki" class="bg-blue-800 text-white px-4 py-2 rounded">Add
                        Wiki</button>
                    <button type="button" id="closeAddModal"
                        class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                </form>
            </div>
        </div>
        <div id="editModal"
            class="fixed inset-0 bg-gray-900 bg-opacity-80 backdrop-blur-sm hidden items-center flex justify-center">
            <div class="bg-white p-8 rounded shadow-lg w-96">
                <h2 class="text-2xl font-bold mb-4">edit Wiki</h2>
                <form method="post" action="../controller/Wiki.php" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-semibold text-gray-600">Title:</label>
                        <input type="text" id="title" name="title" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="wikipic" class="block text-sm font-semibold text-gray-600">Wiki pic:</label>
                        <input type="file" id="wikipic" name="wikipic" class="w-full p-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-semibold text-gray-600">description:</label>
                        <input type="text" id="description" name="description" class="w-full p-2 border rounded">
                    </div>
                    <input type="hidden" id="id-edit" name="id-edit">
                    <button type="submit" name="editWiki" action="../controller/Wiki.php"
                        onclick="hideeditModal()" class="bg-blue-800 text-black px-4 py-2 rounded">edit
                        Wiki</button>
                    <button type="button" id="closeeditModal" onclick="hideeditModal()"
                        class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                </form>
            </div>
        </div>
    
    <script src="/Depiawiki-main/public/js/modal.js"></script>
</body>

</html>