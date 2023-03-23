<?php
    include 'send.php';
    if(isset($_POST['send'])){
        verify($_POST['nama'],$_POST['email'],$_POST['pesan']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<label>
    nama
    <input type = "text" name = "nama">
</label>
<label>
    Email
    <input type = "email" name = "email">
</label>
<label>
    massage
    <input type = "text" name = "pesan">
</label>
<button type="submit" name="send">kirim pesan</button>

    </form>
</body>
</html>