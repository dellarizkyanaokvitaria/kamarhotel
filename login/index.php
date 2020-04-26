<?php
session_start();
//if (isset($_SESSION["id_petugas"])) {
  //  header("Location : http://localhost/kamarhotel/index.php");
//} 
?>
<html>
<head>

    <meta charset="utf-8">
    <title> Silahkan Login </title>
    <link rel="stylesheet" href="style.css">
</head>
<body
<center>
<div class = "form-login">
   <div class="box">
        <h2> Login</h2>
    <form action="proses-login.php" method="post">
        <div class="inputBox">
            <input type="text" name="username" id="">
            <label for="">Username</label>
        </div>
        <div class="inputBox">
            <input type="password" name="password" id="">
            <label for="">Password</label>
        </div>
        
        <input type="submit" value="submit" name="btnlogin">
    </form>
</div>
</div>
</body>
