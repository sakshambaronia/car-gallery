<?php 

include '../config/config.php';

$conn = mysqli_connect($server, $username, $password , $db) or die("Server Error");
$data = json_decode(file_get_contents('php://input'), true);

$query = "SELECT distinct make_id,make FROM t_make";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($result)) {
   		echo "<option value = ".$row{'make_id'}.">" . $row{'make'} . "</option>";
}

?>