<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'avito');
    $delete_user = "DELETE FROM `users` WHERE id = {$_POST['user_id']}";
    mysqli_query($conn, $delete_user);
?>