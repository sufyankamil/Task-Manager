<?php
include("connection.php");
error_reporting(0);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `task-list` WHERE id=$id";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Data Deleted Successfully')</script>";
        echo "<script>window.location.href='dashboard.php'</script>";
    } else {
        echo "<script>alert('Data Not Deleted')</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
</head>

<body>

    <h2>Alert Messages</h2>

    <p>Click on the "x" symbol to close the alert message.</p>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
    </div>

</body>

</html>