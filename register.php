<?php
include("connection.php");
error_reporting(0);
00

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <link href="css/register-style.css" rel="stylesheet">
</head>



<div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
        </div>
        <div class="input-box">
          <span class="details">Password</span>
          <input type="password" name="password" placeholder="Enter your password" required>
        </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="submit" value="Sign Up">
          <a href='index.php' style="text-decoration: none;">Click here to login</a>
        </div>
      </form>
    </div>
  </div>


<!-- <form action="" method="post" enctype="multipart/form-data">

    <table align="center" border="2" cellpadding="100">
        <tr>
            <th>First Name</th>
            <td><input type="text" name="firstname" placeholder="Enter Full Name" required></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="lastname" placeholder="Enter Last Name" required></td>
        </tr>

        <tr>
            <th>Username</th>
            <td><input type="text" name="username" placeholder="Enter username Name" required></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="password" name="password" placeholder="Enter password" required></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><input type="email" name="email" placeholder="Enter email" required></td>
        </tr>

        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Sign Up"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><a href='index.php' style="color: red; text-decoration: none;">Click here to login</a></td>

        </tr>
    </table>
    <br><br>
</form> -->


<?php

if (isset($_POST['submit'])) {

    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $un = $_POST['username'];
    $pwd =  $_POST['password'];
    $email = $_POST['email'];


    $sql = "INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `email`)
VALUES ('$fn', '$ln', '$un', '$pwd', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo
        "<script>alert('Registration successfully')
            window.location.href='index.php';
            </script>";
        // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>