<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'project';
    $conn = mysqli_connect($host,$username,$password,$database);
    /////< database connection >/////
    
    /////< processing-function >/////

        
        /////< login >/////
        function login($data){
            $email=$data['email'];
            $password=$data['password'];
        }
?>