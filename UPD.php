<?php

include("connection.php");
error_reporting(0);

$query = " SELECT * from `task-list` WHERE `id` = '" . $_GET['id'] . "' ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
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
                background: linear-gradient(135deg, #71b7e6, #9b59b6);
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
                color: black;
                border: 1px solid black;
                border-width: 2px;
                padding-right: 10px;
                padding-left: 10px;
                margin-left: 10px;
            }

            #menu li a {
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
                    <input type="date" class="form-control" placeholder="Enter the date" name="date" value="<?php echo $_GET['dt']; ?>" />
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Enter the description" name="description" value="<?php echo $_GET['desc']; ?>" />
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" placeholder="Enter the status" name="status" value="<?php echo $_GET['status']; ?>" />
                </div>

                <button type="submit" name="submit" class="btn btn-primary" value="update_ref.php">Submit</button>
            </form>

        <?php
        while ($row = mysqli_fetch_assoc($data)) {

            echo "<tr>

                    <td>" . $row['task'] . "</td>
                    <td>" . $row['date'] . "</td>
                    <td>" . $row['description'] . "</td>
                    <td>" . $row['status'] . "</td>   
                    <td>
                    <a href='update_ref.php?task=$row[tsk]&date=$row[dt]&description=$row[desc]&status=$row[status]'>Update</a>
                    </td>
                    </tr>";
        }
    }
        ?>



    </body>

    </html>