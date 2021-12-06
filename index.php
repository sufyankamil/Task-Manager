<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("connection.php");
?>

<?php
?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Task Management</title>

    <style>
        body {
            text-align: center;
            margin-top: 270px;
        }

        h1 {
            font-size: 50px;
            color: black;
            text-shadow: 2px 2px #000;

        }
    </style>
</head>

<body>

    <div id="form-group">
        <form action="" method="post" width="40%" , height="50%" ;>
            <br><br>

            <h1> TASK MANAGER </h1>

            Username: <input type="text" name="username" placeholder="Username" required />
            <br><br>
            Password: <input type="password" name="password" placeholder="Password" required />
            <br><br>
            <input type="submit" name="submit" value="Login" />

            <a href="ForgotPassword.php">Forgot Password</a>
            <br><br>
            <a href="register.php">Sign Up</a>
            <!-- <a href="connection.php">#</a> -->
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $un = $_POST['username'];
        $pwd = $_POST['password'];

        $query = "SELECT * FROM users WHERE username='$un' AND password='$pwd'";

        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $un;

    ?>

            <script>
                alert("Login Successful");
                window.location.href = "dashboard.php";
            </script>
    <?php
        } else {
            echo
            "<script>alert('Incorrect Username or Password');
            window.location.href='index.php';
            </script>";
        }
    }

    ?>
</body>