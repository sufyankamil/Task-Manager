<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM `task-list`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
}
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
        <a href="task.php">Task</a>
        <a class="active" href="delete.php">Delete</a>

        <li style="float: right; margin-right:  80px;"><a href="logout.php"> Logout</a></li>

    </div>
    <title>Delete Task</title>
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
    </style>

</head>

<body>

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
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                <td>" . $result['id'] . "</td> 
                <td>" . $result['task'] . "</td>
                <td>" . $result['description'] . "</td>
                <td>" . $result['date'] . "</td>
                <td>" . $result['status'] . "</td> 

                <td><a href='delete_request.php?id=$result[id]'>Delete</a></td>
                </tr>";
            }
            ?>

        </table>
    </div>



</body>

</html>