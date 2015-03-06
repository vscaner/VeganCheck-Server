<?php
$log = htmlspecialchars($_POST['log']);
$pas= htmlspecialchars($_POST['pas']);
$con=mysqli_connect("localhost", $log,  $pas, "DB");
// Check connection
if (mysqli_connect_errno()) 
{
  echo "999ua11: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT barcode,name,veganstatus,vegetarianstatus,Testinanimals,GMO,CompanyProizvod,Publika FROM main WHERE moderate = 0");

while($row = mysqli_fetch_array($result)) {
echo("|");
  echo($row['barcode']);
echo("§");
  echo($row['name']);
   echo("§");
echo($row['veganstatus']);
   echo("§");
echo($row['vegetarianstatus']);
    echo("§");
echo($row['Testinanimals']);
    echo("§");
echo($row['GMO']);
   echo("§");
echo($row['CompanyProizvod']);

}

mysqli_close($con);
?>