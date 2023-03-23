<?php
include'../controller.php';
session_start();
$code=$_POST['code'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];
if(isset($_POST['verify'])){
if($code=='123'){
    $query="INSERT INTO data (FName,LName,Email,Password) values
    ('$fname','$lname','$email','$password')";
    mysqli_query($conn,$query);
    header("Location: ../login.html");
    return mysqli_affected_rows($conn);
}
}
header("Location: ../login.html");

?>