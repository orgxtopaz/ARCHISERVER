<?php

// UPDATE

$conn = mysqli_connect("172.16.32.27","crudapi","crudapi","crud-operation") or die("Connection Failed");
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_email = $_POST['semail'];
$stu_phone = $_POST['sphone'];
$stu_class = $_POST['sclass'];



$sql = "UPDATE student SET sname = '{$stu_name}', semail = '{$stu_email}', sphone = '{$stu_phone}', sclass = '{$stu_class}' WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location:http://localhost/client/index.php");

mysqli_close($conn);

?>
