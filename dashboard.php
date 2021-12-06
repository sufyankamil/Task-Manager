<?php

include("connection.php");
session_start();
error_reporting(0);
$query = "SELECT * FROM `task-list`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {

?>
<?php
    // Path: dashboard.php TO BE USED IN THE DASHBOARD
    // while ($result = mysqli_fetch_assoc($data)) {
    //     $id = $result['id'];
    //     $task = $result['task'];
    //     $status = $result['status'];
    //     if ($status == '0') {
    //         $status = 'Not Completed';
    //     } else {
    //         $status = 'Completed';
    //     }
    // }
}


$userprofile = $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style type="text/css">
        table {
            width: 100%;
            border: 1px solid black;
        }

        th {
            background-color: #04AA6D;
            color: white;
        }

        td {
            text-align: center;
        }

        #menu {
            width: 100%;
            padding: -0px;
            background-color: goldenrod;
            overflow: hidden;
            padding-top: 10px;
            padding-bottom: 10px;
            display: block;
            list-style-type: none;
        }

        div a {
            text-decoration: none;
            color: black;
            font-size: 18px;
        }

        #menu .active {
            background-color: lightgray;
            border-radius: 40px;
            color: black;
        }
    </style>

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

        <table>
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Description</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($data)) {
                echo "<tr>
                <td>" . $row['id'] . "</td>
                 <td>" . $row['task'] . "</td>;
                 <td>" . $row['description'] . "</td>;
                 <td>" . $row['date'] . "</td>;
                 <td>" . $row['status'] . "</td>;
                    
                 <td>
                    <button type='submit' name='update' id='update'><a href='update.php'></a>
                    <a href='update_ref.php?tsk=" . $row['task'] . "&dt=" . $row['date'] . "&desc=" . $row['desc'] . "&status=" . $row['status'] . "'>Edit</a></button>
                    </td>

                </tr>";
            }

            ?>

            <?php
            if ($total == 0) {
                echo "<tr>
                <script>
                alert('No Task Found');
                </script>
                <td colspan='4'>No Task</td>
                </tr>";
            }
            ?>

        </table>
    </div>
</body>

</html>