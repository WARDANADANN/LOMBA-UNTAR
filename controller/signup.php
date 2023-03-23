<?php
session_start();
    include 'phpmailer/send.php';
    include '../controller.php';
/////< signup >/////
function signup($data){
    global $conn;
    $fname=$data['FName'];
    $lname=$data['LName'];
    $email=$data['email'];
    $password=$data['password'];
    $password2=$data['password2'];
    //validasi password == konfirmasi password
    if($password !== $password2){
        echo"
        <script>alert('konfirmasi password tidak sesuai');</script>";
        return false;
    }
    //encripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);
    // cek Email yang telah ada
    $result= mysqli_query($conn,"select * from data where Email='$email'");
    if(mysqli_fetch_assoc($result)){
        echo"
        <script>
        alert('Email telah didaftarkan');
        </script>
        ";
        return false;
    }

    $code='123';
    verify("verifikasi",$email,$code);

    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
                //memasukan data sign up -> database
                // $query="INSERT INTO data (FName,LName,Email,Password) values
                // ('$fname','$lname','$email','$password')";
                // mysqli_query($conn,$query);
                // header("Location: ../login.html");
                // return mysqli_affected_rows($conn);
                echo"
                <script>
                alert('code telah dikirim');
                document.location.href='../validasi.html'
                </script>
                ";
    }



    if(isset($_POST["signup"])){
        if(signup($_POST)>0){
            echo"
            <script>
            alert('proses validasi');
            document.location.href='../login.html'
            </script>
            ";
        }
        else{
            echo"
            <script>
            alert('userbaru GAGAL ditambahkan ');
            document.location.href='../signup.html'
            </script>
            ";
            mysqli_error($conn);
        }
    }
?>