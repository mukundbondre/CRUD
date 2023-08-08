<?php
    $id = $_GET['id'];

    $conn = mysqli_connect("localhost","root","","Project_crud");

    $sql = "SELECT * from `data` where id='$id'";

    $result = mysqli_query($conn,$sql);

    $total = mysqli_num_rows($result);
    if($id==null){
        header("location: http://localhost/my_programs/1%20CRUD/signIn.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <h2 style="margin-left: 40%;">Update</h2>
        <?php if($total!=0){ ?>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <form action="updateDatabase.php?id=<?php echo $row['id']?>" method="POST" id="registration-form" >  
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" value="<?php echo $row['username']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo $row['email']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" value="<?php echo $row['password']?>" required>
                    </div>
                <?php } ?>
                <button type="submit" class="btn">Update</button>
            </form>
        <?php } ?>
    </div>
</body>
</html>