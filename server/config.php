


<?php
 header("Access-Control-Allow-Origin: *");

$result_array = array();
$servername = "172.16.32.27";
$username = "crudapi";
$password = "crudapi";
$dbname="crud-operation";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";



$sql = "SELECT * FROM student";
$result = $conn->query($sql);
/* If there are results from database push to result array */
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($result_array, $row);
    }
}



/* send a JSON encded array to client */
// header('Content-type: application/json');

echo json_encode($result_array);




mysqli_close($conn);






?>



