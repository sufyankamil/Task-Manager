<?php

include("connection.php");
session_start();
error_reporting(0);

$_GET['task'];
$_GET['date'];
$_GET['description'];
$_GET['status'];

$userprofile = $_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update</title>
    <div id="menu">

        <a class="active" href="dashboard.php">Dashboard</a>
        <a href="task.php">Task</a>
        <a href=""></a>

        <li style="float: right; margin-right:  80px;"><a href="logout.php"> Logout</a></li>

    </div>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }


        #menu {
            width: 100%;
            padding: -0px;
            background-color: yellowgreen;
            overflow: hidden;
            padding-top: 10px;
            padding-bottom: 10px;
            display: block;
            list-style-type: none;
        }

        div a {
            padding: 15px 20px;
            text-decoration: none;
            color: black;
            font-size: 18px;
        }

        #menu .active {
            background-color: greenyellow;
            color: black;
            border: 1px solid black;
            border-width: 7px;
            padding-right: 10px;
            padding-left: 10px;
            margin-left: 10px;
        }

        #menu li a {
            background-color: greenyellow;
            color: black;
            border: 1px solid black;
            border-width: 2px;
            padding-right: 10px;
            padding-left: 10px;
            margin-left: 50px;
        }
    </style>

</head>

<body>
    <div class="container my-5">
        <form method="GET">
            <div class="form-group">
                <label>Task</label>
                <input type="text" class="form-control" placeholder="Enter the task" name="task" value="<?php echo $_GET['task']; ?>" />
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Enter the date" name="date" value="<?php echo $_GET['date']; ?>" />
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="textarea" class="form-control" placeholder="Enter the description" name="description" <?php echo $_GET['description']; ?>" />
            </div>
            <div class="form-group">
                <label>Status</label>
                <input type="text" class="form-control" placeholder="Enter the status" name="status" value="<?php echo $_GET['status']; ?>" />
            </div>

            <button type="submit" class="btn btn-primary" name="submit" value="Update" />Submit</button>
        </form>

        <?php

        if (isset($_GET['submit'])) {
            $tsk = $_GET['task'];
            $dt = $_GET['date'];
            $desc = $_GET['description'];
            $status = $_GET['status'];

            $query = "UPDATE `task-list` SET task='$tsk', date='$dt', description='$desc', status='$status' WHERE task='$tsk'";

            

            $data = mysqli_query($con, $query);

            if ($data) {
                echo "<script>alert('Task Updated Successfully')</script>";
                echo "<script>window.open('dashboard.php','_self')</script>";
            } else {
                echo "<script>alert('Task Not Updated')</script>";
                echo "<script>window.open('dashboard.php','_self')</script>";
            }
        }
        ?>
    </div>

</body>

</html>