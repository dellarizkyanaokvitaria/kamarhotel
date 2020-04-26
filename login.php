<?php
session_start();

if(isset($_SESSION['username'])){

    header("location: index.php");
}
    ?>
    

<!DOCTYPE html>
<html>
<head>
<title> LOGIN </title>
<link rel="stylesheet" href="stylelogin.css">
</head>

<body><center>
<img src="login.png" class="icon">
<div class = "form-login">


</br>
    <h2>Silahkan Login :)</h2>

    <form method="post" action="http://localhost/kamarhotel/index.html">

    <form action>
       <center> <table>
            <tr>
           <td> <svg class="bi bi-envelope-fill" width="1.5 em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M.05 3.555L8 8.414l7.95-4.859A2 2 0 0014 2H2A2 2 0 00.05 3.555zM16 4.697l-5.875 3.59L16 11.743V4.697zm-.168 8.108L9.157 8.879 8 9.586l-1.157-.707-6.675 3.926A2 2 0 002 14h12a2 2 0 001.832-1.195zM0 11.743l5.875-3.456L0 4.697v7.046z"/>
                </svg></td>
                <td></td>
                <td><input type="text" name="username" placeholder="Enter your email"> </td>
</tr>
<tr>
                <td><svg class="bi bi-lock-fill" width="1.5 em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <rect width="11" height="9" x="2.5" y="7" rx="2"/>
                    <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd"/>
                    </svg></td>
                    <td></td>
                <td><input type="password" name="password" placeholder="Enter your password"> </td>
</tr>
<tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="login" ></td>
</tr>
</table></center>
</form>
</form>
</center>
</div>
</body>