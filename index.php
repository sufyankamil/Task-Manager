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
    <link rel="stylesheet" href="css/style2.css">
    <title>Task Management</title>
</head>

<body>
    <div class="center">
        <h1 style="color: #2691d9">TASK MANAGEMENT</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass"><a style="text-decoration: none; color: #2691d9;" href="ForgotPassword.php">Forgot Password?</a></div>
            <input type="submit" name="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="register.php">Register</a>
            </div>
        </form>
    </div>

    <!-- <div id="form-group">
    <form action="" method="post" width="40%" , height="50%" ;>
        <br><br>

        <h1 class="item-center"> TASK MANAGER </h1>

        Username: <input type="text" name="username" placeholder="Username" required />
        <br><br>
        Password: <input type="password" name="password" placeholder="Password" required />
        <br><br>
        <input type="submit" name="submit" value="Login" />

        <a href="ForgotPassword.php">Forgot Password</a>
        <br><br>
        <a href="register.php">Sign Up</a>
         <a href="connection.php">#</a> -->
    <!-- </form>
</div> -->

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