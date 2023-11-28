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
    <title>adminSection</title>
</head>
<body>
    <section class="p-2 h-screen">
        <nav class="pb-2 flex justify-between items-center border-b border-solid border-black">
            <div class="flex gap-1 items-center">
                <div class="h-12 w-12 bg-black rounded-full"></div>
                <div class="">ADMIN</div>
            </div>
            <div class="flex items-center gap-6">
                <div class="flex gap-1 items-center bg-black text-white px-2 py-1 cursor-pointer rounded-md">
                    <div>ADD USER</div>
                    <ion-icon name="add-outline" class="text-3xl cursor-pointer"></ion-icon>
                </div>
                <ion-icon name="exit-outline" class="text-3xl cursor-pointer"></ion-icon>
            </div>
        </nav>

        <!-- products section -->
        <section>
            <section class="px-2 py-4 flex flex-col gap-2">
                <?php 
                $main = ''; 
                foreach($users as $user) {
                    $main .= <<<HERDOC
                    <main class="user_id $user[0] bg-gray-200 p-1 flex justify-between items-center cursor-pointer">
                        <div class=" flex gap-1 items-center">
                            <div class="h-12 w-12 rounded-full" style="background-image: url('$user[4]');background-size: cover;"></div>
                            <div class="">$user[1]</div>
                        </div>
                        <ion-icon name="settings" class="text-3xl"></ion-icon>
                    </main>
                    HERDOC;
                }
                echo $main;
                ?>
            </section>
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