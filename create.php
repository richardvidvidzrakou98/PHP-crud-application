<?php
include "config.php";
if(isset($_POST["submit"])){
    $first_name = $_POST['firstname'];
    $second_name = $_POST["lastname"];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST["gender"];
    echo $second_name." ".$first_name." ".$password;
}
$sql = "INSERT INTO users (firstname, lastname, email, password, gender)
VALUES('$gender', '$second_name', '$email', '$password', '$gender')";
$result = $conn->query($sql);
if($result == true){
    echo "Value recorded successfully";
}else{
    echo "failed in recording" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <form action="create.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
        first Name:<br>
        <input type="text" name="firstname"><br>
        last name:<br>
        <input type="text" name="lastname"><br>
        email:<br>
        <input type="email" name="email"><br>
        password:<br>
        <input type="password" name="password"><br>
        gender: <br>
        Male
        <input type="radio" name="gender" value="Male">
        Female
        <input type="radio" name="gender" value="Female"><br>
        <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>