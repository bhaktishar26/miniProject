<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'counseling data');

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "insert into userinfodata (user, email, message)
values('$user','$email','$message')";

mysqli_query($con,$query);
header('location:contact.php');
?>