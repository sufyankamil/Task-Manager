<?php

include("connection.php");
error_reporting(0);

$_query = " SELECT * from `user`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
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
                        <td><textarea name="description" placeholder="Enter the Description" value="<?php echo $_GET['desc']; ?>   " /></textarea></td>
                    </tr>

                </table>

            <?php
            while ($row = mysqli_fetch_assoc($data)) {
                if ($row['username'] == $userprofile) {
                    echo "<tr>

                    <td>" . $row['task'] . "</td>
                    <td>" . $row['date'] . "</td>
                    <td>" . $row['description'] . "</td>
                    <td>" . $row['status'] . "</td>   
                    <td>
                    <a href='update_ref.php?tsk=$row[task]&dt=$row[date]&desc=$row[description]&status=$row[status]'>Update</a>
                    </td>
                    </tr>";
                }
            }
        }
            ?>

        </div>

    </body>