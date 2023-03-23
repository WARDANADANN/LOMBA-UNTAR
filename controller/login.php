<?php
include'../controller.php';
session_start();

if(isset($_POST['login'])){
    //mengambil semua data user dari database
    $email=$_POST['email'];
    $result = mysqli_query($conn,"select*from data where email= '$email'");
    $password=$_POST['password'];
    
    //deklarasi session
    if(mysqli_num_rows($result)===1){
        //email telah masuk
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password,$row['Password'])){
            $_SESSION['login']=true;
            if($_SESSION['login']){
            header("Location: ../index.php");
            $result= mysqli_query($conn,"select * from data where Email='$email'");
            $data=mysqli_fetch_assoc($result);
            $_SESSION['FName']=$data['FName'];
            $_SESSION['LName']=$data['LName'];
            exit;}
        }
    }
        echo"
        <script>
        alert('username atau password salah')
        document.location.href='../login.html'
        </script>
        ";
        
    
}
?>