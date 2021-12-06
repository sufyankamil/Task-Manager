<?php
include("connection.php");
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: violet;
        }

        table {
            width: 100%;
            border: 1px solid black;
        }

        td {
            vertical-align: bottom;

        }

        th {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<form action="" method="post" enctype="multipart/form-data">

    <table>

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

</form>


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