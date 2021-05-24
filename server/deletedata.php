<?php 

$conn = mysqli_connect("172.16.32.27","crudapi","crudapi","crud-operation") or die("Connection Failed");
if(isset($_GET['delete'])){

$stu_id = $_GET['delete'];

$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location:http://localhost/client/index.php");

mysqli_close($conn);

}
?>
