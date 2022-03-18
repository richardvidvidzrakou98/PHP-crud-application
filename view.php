<?php
include "config.php";
$sql2 = "SELECT * FROM users";
$result = $conn->query($sql2); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="bootstap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="containe">
        <h2>Users</h2>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Second Name</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){ ?>
                    <tr>
                        <td> <?php echo $row["id"]; ?> </td>
                        <td> <?php echo $row["firstname"]; ?> </td>
                        <td> <?php echo $row["lastname"]; ?> </td>
                        <td> <?php echo $row["email"]; ?> </td>
                        <td> <?php echo $row["gender"]; ?> </td>
                        <td><a class="btn btn-info" href="update.php?id=<?php echo $row["id"] ?>">Edit </a>
                        &nbsp; <a class="btn btn-danger" href="delete.php?id=<?php echo $row["id"] ?> "> 
                    </td>
                        
                    </tr>

                   <?php } ?>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>
