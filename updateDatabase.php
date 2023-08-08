<?php
    $id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $conn = mysqli_connect("localhost","root","","Project_crud");
    
    $sql = "UPDATE `data` SET `username`='{$username}',`email`='{$email}',`password`='{$password}' where `id`='$id'";

    $result = mysqli_query($conn,$sql);

    header("location: http://localhost/my_programs/1%20CRUD/welcome.php");

    mysqli_close($conn);

?>