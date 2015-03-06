<?php
$con=mysqli_connect("localhost", "u787682332_scane", "260689", "u787682332_vscan");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT `version` FROM `PCClientVErsion` WHERE 1");

while($row = mysqli_fetch_array($result)) {
  echo $row['version'];


}

mysqli_close($con);
?>