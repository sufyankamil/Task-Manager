<?php

include("connection.php");
session_start();
error_reporting(0);

$userprofile = $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">

    <div id="menu">

        <a href="dashboard.php">Dashboard</a>
        <a class="active" href="task.php">Task</a>
        <a href=""></a>

        <li style="float: right; margin-right:  80px;"><a href="logout.php"> Logout</a></li>

    </div>

    <div id="tab">


        <form method="post" action="task.php">
            <center>
                <table border="3" cellpadding="8" cellspacing="6">

                    <tr>
                        <td colspan="2" align="center">
                            <h2>Add Task</h2>
                        </td>
                    </tr>

                    <tr>
                        <td>Task</td>
                        <td><input type="text" name="task" placeholder="Enter the Task" required></td>
                    </tr>

                    <tr>
                        <td>Date of Completion</td>
                        <td><input type="date" name="date" required></td>
                    </tr>

                    <tr>
                        <td>Description</td>
                        <td><textarea name="description" placeholder="Enter the Description" required></textarea></td>
                    </tr>

                    <!-- <tr>
                        <td>Status</td>
                        <td>
                            <select name="class" required>
                                <option value="" selected="" disabled="">--select status--</option>
                                <option value="Incomplete">Incomplete</option>
                                <option value="Pending">Pending</option>
                                <option value="Complete">Complete</option>
                            </select>
                        </td>
                    </tr> 

                    <tr>
                        <td>Description</td>
                        <td><input type="text" name="subject" placeholder="Describe your Task" required></td>
                    </tr> -->

                    <tr>
                        <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
                    </tr>

                </table>

                <?php

                if (isset($_POST['submit'])) {

                    $tsk = $_POST['task'];
                    $dt = $_POST['date'];
                    $desc = $_POST['description'];


                    $sql = "INSERT INTO `task-list` (`task`,`date`,`description`) VALUES ('$tsk', '$dt', '$desc')";

                    if (mysqli_query($conn, $sql)) {
                        echo
                        "<script>alert('Task added successfully')
            window.location.href='dashboard.php';
            </script>";
                        // echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
                ?>


</html>











</div>

</head>