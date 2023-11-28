<?php
    // Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'avito');
    // SQL users query
    $select_users = "SELECT * FROM users";
    $result_users = mysqli_query($conn, $select_users);
    $users = mysqli_fetch_all($result_users);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard admin</title>
</head>
<body>
    <section class="p-2 h-screen">
        <nav class=" bg-blue-200 w-full flex relative justify-between items-center mx-auto px-8 h-20">

                
            <div class="flex gap-1 items-center">
                <div class="h-12 w-12 bg-black rounded-full"></div>
                <div class="italic font-serif">Admin</div>
            </div>
            <div class=" md:block">
                        <div width="102" height="32" fill="currentcolor" style="display: block">
                            <img src="img/avito-logo.svg" alt="logo">
                        </div>
                    </div>
            <div class="flex items-center gap-6">
                <div id="add_product" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 font-medium r text-sm px-5 py-2.5 text-center me-2 mb-2 cursor-pointer rounded-md italic font-serif">
                    <div>+ ajouter user</div>
                    
                </div>
                <ion-icon name="exit-outline" class="text-3xl cursor-pointer"></ion-icon>
            </div>
        </nav>

        <!-- products section -->
        <section>
            <form id="adminForm" action="user.php" method="post" class="px-2 py-4 flex flex-col gap-2">
                <?php 
                $main = ''; 
                foreach($users as $user) {
                    $main .= <<<HERDOC
                    <div class="flex gap-2">
                        <button type="submit" name="user_id" value="$user[0]" class="w-full bg-gray-200 p-1 flex justify-between items-center cursor-pointer">
                            <div class=" flex gap-1 items-center">
                                <div class="h-12 w-12 rounded-full" style="background-image: url('$user[4]');background-size: cover;"></div>
                                <div class="">$user[1]</div>
                            </div>
                            <ion-icon name="settings" class="text-3xl"></ion-icon>
                        </button>
                        <button  user_id="$user[0]" class="delete_user bg-red-500 flex items-center gap-1 p-1 cursor-pointer"> 
                            <div>DELETE</div>
                            <ion-icon name="trash" class="text-2xl text-white"></ion-icon>
                        </button>
                    </div>
                    HERDOC;
                }
                echo $main;
                ?>
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