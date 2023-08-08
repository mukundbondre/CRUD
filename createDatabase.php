<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $conn = mysqli_connect("localhost","root","","Project_crud");
    
    $sql = "INSERT INTO `data`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
        
    $result = mysqli_query($conn,$sql);
    header("location: http://localhost/my_programs/1%20CRUD/signIn.php");
    mysqli_close($conn);
?>