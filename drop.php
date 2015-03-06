<?php
$log = htmlspecialchars($_POST['log']);
$pas= htmlspecialchars($_POST['pas']);
$bcod = htmlspecialchars($_POST['bcod']); 
$con=mysqli_connect("localhost", $log,  $pas, "DB");
// Check connection
if (mysqli_connect_errno()) 
{
  echo "999ua11: " . mysqli_connect_error();
}

$result = mysqli_query($con,"DELETE FROM main WHERE barcode =  $bcod");
if (!$check1_res) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
while($row = mysqli_fetch_array($result))
 {
echo("0");
  

}

mysqli_close($con);
?>