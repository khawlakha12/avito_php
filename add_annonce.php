<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addProductSection</title>
</head>
<body>
    <!-- add_product section -->
    <section id="add_product_section" class="p-2 bg-slate-50 h-auto w-full">
        <nav class="pb-2 flex justify-between items-center border-b border-solid bg-blue-200 mx-auto px-8 h-20 ">
            <div class="flex gap-1 items-center ">
                <div class="h-12 w-12 rounded-full" style="background-image: url(<?php echo '' . $_SESSION['myImage'] . '' ?>);background-size:cover;"></div>
                <div class="italic font-serif"><?php echo $_SESSION['myName'] ?></div>
            </div>
            <div class="block">
                        <div class="inline relative">
                            <button id="add_product_exit" name="close-outline"  type="button"
                                class="inline-flex items-center relative px-2 border rounded-full hover:shadow-lg">
                                <div class="pl-1">
                                    <span class="italic font-medium text-md">Profil</span>
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
        </nav>
        <section class="h-full flex justify-center items-center">
            <!-- add_product form -->
            <form id="add_product_form" class=" justify-center  p-8 md:p-14 relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:space-y-0" enctype="multipart/form-data">
            <div class="flex flex-col justify-center p-8 md:p-14">
                    
                            <span class="text-center mb-3 text-4xl font-bold italic">Neuveau annonce</span>
                            </div>
            <div class="py-4 ">
                <span class="text-base mb-3  font-bold">Produit</span>
                    <input id="" type="text" name="product_name" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" required><br>
                </div>

                <div class="py-4 ">
                <span class="text-base mb-3  font-bold">description</span>
                    <input id="" type="text" name="description" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" required><br>
                </div>

                <div class="py-4 ">
                <span class="text-base mb-3  font-bold">Prix</span>
                    <input id="" type="text" name="price" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" required><br>
                </div>

                <div class="py-4 ">
                <span class="text-base mb-3  font-bold">Image de produit</span>
                    <input type="file" name="file"  class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" required><br>
                </div>

                <div class="flex justify-center py-4 ">
                <button type="submit"
                                class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                                Poster</button>
                </div>
            </form>
        </section>
    </section>
    <!-- Scripts: -->
    <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- local script -->
    <script src="script.js"></script>
</body>
</html>