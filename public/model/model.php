<?php 

include '../config/config.php';

$conn = mysqli_connect($server, $username, $password , $db) or die("Server Error");
$data = json_decode(file_get_contents('php://input'), true);

$choice = $_GET['modelchoice'];
	
$query = "SELECT description,image FROM t_model WHERE model_id= '$choice' ";
$result = mysqli_query($conn,$query);

header("Content-type: image/jpeg");
while ($row = mysqli_fetch_array($result)) {

    header("Content-Type: image/jpeg");
    echo '<center><img src="'.$row['image'].'" width="400" height="250"/></center>';
    
    echo "<center><p>".$row{'description'}."</p></center>";
}

?>