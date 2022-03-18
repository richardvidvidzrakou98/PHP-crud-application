<?php

include "config.php";
if(isset($_POST["update"])){
    $first_name = $_POST['firstname'];
    $second_name = $_POST["lastname"];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST["gender"];
    //firstname, lastname, email, password, gender
    $sql3 = "UPDATE 'users' SET 'firstname' = '$first_name', 'lastname' = '$second_name', 'email' = '$email', 'password' = '$password', 'gender' = '$gender' ";
    $result = $conn->query($sql3);
    if($result == true){
        echo "Record updated successfully";
    }else{
        echo "record update is unsuccessful";
    }
}