<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$bcod = htmlspecialchars($_POST['bcod']); 
$result = mysqli_query($con,"SELECT gps,date FROM gps WHERE barcode = $bcod");

while($row = mysqli_fetch_array($result)) {
  echo $row['gps'];
	echo '|';
echo $row['date'];
echo '$';

}

mysqli_close($con);
?>