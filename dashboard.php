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
}

$userprofile = $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div id="menu">

        <a class="active" href="dashboard.php">Dashboard</a>

        <li style="float: right; margin-right: 30px;"><a href="logout.php"> Logout</a></li>
        <li style="float: right; margin-right:  20px;"><a href="about.html"> About</a></li>

    </div>


    <style type="text/css">
        body {
            background-color: #f2f2f2;
            font-size: 18px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: black;
        }

        table {
            width: 100%;
            border: 1px solid black;
        }

        th {
            background-color: #71b7e6;
            color: white;
            padding: 5px;
        }

        td {
            text-align: center;
            padding: 5px;
        }

        tr:hover {
            background: linear-gradient(135deg, #71b7e6, #9b59b6, #71b7e6);
        }

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
            border-radius: 5px;
        }

        #menu li a {
            color: black;
            border: 1px solid black;
            border-width: 2px;
            padding-right: 10px;
            padding-left: 10px;
            margin-left: 50px;
        }

        /* ---------- footer -----------*/
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;

            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            color: whitesmoke;
            font-size: 14px;
            padding: 10px 0 20px;
        }

        .footer p {
            color: white;
        }

        .footer h3 {
            color: white;
            margin-bottom: 20px;
        }

        .footer-col-1,
        .footer-col-2,
        .footer-col-3,
        .footer-col-4 {
            min-width: 250px;
            margin-bottom: 20px;
        }

        .footer-col-4 {
            flex-basis: 12%;
            text-align: center;
        }

        ul {
            list-style-type: none;
        }


        .footer hr {
            border: none;
            background: #b5b5b5;
            height: 1px;
            margin-bottom: 70px;
        }

        .copyright {
            text-align: center;
        }
    </style>

</head>

<body>

    <div id="content">
        <br><br>
        <h1>Welcome <?php echo $userprofile; ?> ! </h1><br><br>

        <table>
            <tr>
                <th>Sr. No.</th>
                <th>Task</th>
                <th>Description</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <button type="button" onclick="window.location.href='task.php'">Add Task</button><br><br>


            <?php
            while ($row = mysqli_fetch_assoc($data)) {
                echo "<tr>
                <td>" . $row['id'] . "</td>
                 <td>" . $row['task'] . "</td>;
                 <td>" . $row['description'] . "</td>;
                 <td>" . $row['date'] . "</td>;
                 <td>" . $row['status'] . "</td>;

                    <td>
                    <a href='update_ref.php?id=" . $row['id'] . "&task=" . $row['task'] . "&date=" . $row['date'] . "&description=" . $row['description'] . "&status=" . $row['status'] . "'>Edit</a>
                    
                    <a href='delete_request.php?id=" . $row['id'] . "'>Delete</a>
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

<!------- FOOTER --------->
<div class="footer">
    <div class="container">
    </div>
    <hr>
    <p class="copyright">
        Sufyan Kamil © 2021 <br> All Rights Reserved
    </p>
</div>
</div>

</html>