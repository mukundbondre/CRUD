<?php
    session_start();
?>

<?php
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $conn = mysqli_connect("localhost","root","","Project_crud");
    
    $sql = "select * from `data` where username='$username' AND password='$password'";
        
    $result = mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $_SESSION['user']='mukund';
        header("location: http://localhost/my_programs/1%20CRUD/welcome.php");
    }
    else{
        header("location: http://localhost/my_programs/1%20CRUD/signIn.php");
    }
    mysqli_close($conn);
?>