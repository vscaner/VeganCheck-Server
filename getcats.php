<?php
$con=$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT `Cat`, `Group` FROM `cat_list` WHERE 1");

while($row = mysqli_fetch_array($result)) {
  echo $row['Cat'];
	echo '|';
echo $row['Group'];
echo '$';

}

mysqli_close($con);
?>