
<?php
    $id = $_GET['id'];

    $conn = mysqli_connect("localhost","root","","Project_crud");
    
    $sql = "DELETE FROM `data` where id='$id'";
        
    $result = mysqli_query($conn,$sql);
    header("location: http://localhost/my_programs/1%20CRUD/welcome.php");
    mysqli_close($conn);
?>