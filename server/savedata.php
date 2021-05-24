<?php

 $stu_name = $_POST['sname'];
 $stu_email = $_POST['semail'];
 $stu_phone = $_POST['sphone'];
 $stu_class = $_POST['sclass'];

$conn = mysqli_connect("172.16.32.27","crudapi","crudapi","crud-operation") or die("Connection Failed");

$sql = "INSERT INTO student(sname,semail,sphone,sclass) VALUES ('{$stu_name}','{$stu_email}','{$stu_phone}','{$stu_class}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location:http://localhost/client/index.php");

mysqli_close($conn);

?>










