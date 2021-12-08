<?php

include("connection.php");
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $tsk = $_POST['task'];
    $dt = $_POST['date'];
    $desc = $_POST['description'];
    $status = $_POST['status'];

    $sql = "UPDATE `task-list` SET task='$tsk', date='$dt',`description`='$desc', `status`='$status'  WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data Updated";
    } else {
        echo "Data Not Updated";
    }
}

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
</head>

<body>
    <div class="container my-5">
        <form method="post">
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
                <input type="text" class="form-control" placeholder="Enter the description" name="desc">
            </div>
            <div class="form-group">
                <label>Status</label>
                <input type="text" class="form-control" placeholder="Enter the status" name="status">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

</body>

</html>