<?php

include("connection.php");
session_start();
error_reporting(0);

$_GET['tsk'];
$_GET['dt'];
$_GET['desc'];

$userprofile = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <div id="menu">

        <a class="active" href="dashboard.php">Dashboard</a>
        <a href="task.php">Task</a>
        <a href=""></a>

        <li style="float: right; margin-right:  80px;"><a href="logout.php"> Logout</a></li>

    </div>

    <div id="content">
        <br><br>
        <h1>Welcome <?php echo $userprofile; ?> ! </h1>
        <br><br>

        <form action="update.php" method="GET">

            <table align="center" border="1" cellspacing="10">

                <tr>
                    <td>Task</td>
                    <td><input type="text" name="task" placeholder="Enter the Task" value="<?php echo $_GET['tsk']; ?>         " /></td>
                </tr>

                <tr>
                    <td>Date of Completion</td>
                    <td><input type="date" name="date" value="<?php echo $_GET['dt']; ?>" /></td>
                </tr>

                <tr>
                    <td>Description</td>
                    <td><textarea name="description" placeholder="Enter the Description" value="<?php echo $_GET['description']; ?>" /></textarea></td>
                </tr>

                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Update" /></td>
                </tr>

            </table>
    </div>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tsk = $_GET['task'];
        $dt = $_GET['date'];
        $desc = $_GET['description'];

        $query = "UPDATE `task-list` SET task='$tsk', date='$dt', description='$desc' WHERE task='$tsk'";

        $run = mysqli_query($con, $query);

        if ($run) {
            echo "<script>alert('Task Updated Successfully')</script>";
            echo "<script>window.open('dashboard.php','_self')</script>";
        } else {
            echo "<script>alert('Task Not Updated')</script>";
        }
    }
    ?>






</body>

</html>



<!-- test purpose only -->