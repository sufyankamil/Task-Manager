<?php

include("connection.php");
session_start();
error_reporting(0);

$userprofile = $_SESSION['username'];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Task</title>

    <div id="menu">



        <a href="dashboard.php">Dashboard</a>
        <a class="active" href="task.php">Task</a>
        <a href=""></a>

        <li style="float: right; margin-right: 30px;"><a href="logout.php"> Logout</a></li>
        <li style="float: right; margin-right:  20px;"><a href="about.html"> About</a></li>

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
    <br><br>
    <h1><?php echo $userprofile; ?> 's TO-DO </h1>
    <div class="container my-5">
        <form method="post" action="task.php">
            <div class="form-group">
                <label>Task</label>
                <input type="text" class="form-control" placeholder="Enter the task" name="task">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Enter the date" name="date">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="textarea" class="form-control" placeholder="Enter the description" name="description">
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Submit</button>


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

        </form>
    </div>
    <!------- FOOTER --------->
    <div class="footer">
        <div class="container">
        </div>
        <hr>
        <p class="copyright">
            Sufyan Kamil © 2021 <br> All Rights Reserved
        </p>
    </div>


</body>

</html>