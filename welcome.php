<?php
    session_start();
    if($_SESSION['user']==false){
        header("location: http://localhost/my_programs/1%20CRUD/signIn.php");
    }
?>

<?php

    $conn = mysqli_connect('localhost','root','','Project_crud');

    $sql = "select * from data";

    $result = mysqli_query($conn,$sql);

    $total = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Table Program</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            margin-left: 40%;
        }
        .btn:hover {
            background-color: #45a049;
        }
        #dbtn, #ubtn{
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 15px;
            margin-left: 15px;
        }
        #ubtn:hover{
            background-color: #45a049;
        }
        #dbtn{
            background-color: #f94449;
        }
        #dbtn:hover{
            background-color: #ff2c2c;
        }
    </style>
</head>
<body>
    <form action="signOut.php" method="post">
        <?php if($total!=0){ ?>
            <table id="data-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row['username']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['password']?></td>
                            <td>
                                <a href="delete.php?id=<?php echo $row['id']?>"><button id="dbtn" type="button">Delete</button></a>
                                <a href="update.php?id=<?php echo $row['id']?>"><button id="ubtn" type="button">Update</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
        <button type="submit" class="btn">Sign Out</button>
    </form>
</body>
</html>
