<?php
session_start();
require 'dbcon.php';

if(isset($_POST['save_users'])){
    $name1 = mysqli_real_escape_string($con, $_POST['name1']);
    $name2 = mysqli_real_escape_string($con, $_POST['name2']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['location']);

    $query = "INSERT INTO Users (name1,name2,email,phone,course) VALUES ('$name1','name2','$email','$phone','$location')";

    $query_run = mysqli_query($con, $query);
    if($query_run){
        $_SESSION['message'] ="user created successfully";
        header("Location:index.php");
        exit(0);
    }else{
        $_SESSION['message'] = "user not created successfully";
        header("Location:index.php");
        exit(0);
    }
}
?>
