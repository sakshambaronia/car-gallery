<?php 

include '../config/config.php';

$conn = mysqli_connect($server, $username, $password , $db) or die("Server Error");
$data = json_decode(file_get_contents('php://input'), true);

$choice = $_GET['choice'];
	
$query = "SELECT model_id,model FROM t_model WHERE make_id= '$choice' ";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($result)) {
   		echo "<option value = ".$row{'model_id'}.">" . $row{'model'} . "</option>";
}

?>