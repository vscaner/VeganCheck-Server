<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$bcod = htmlspecialchars($_POST['bcod']);
$res = $mysqli->prepare("SELECT name,veganstatus,vegetarianstatus,Testinanimals,GMO,CompanyProizvod,Publika FROM main WHERE barcode = ?");
$res->bind_param('s', $bcod);
$res->execute();
$res->bind_result($name, $veganstatus,$vegetarianstatus,$Testinanimals,$GMO,$CompanyProizvod,$Publika);
$row = $res->fetch();
if ($name != null) {
    echo($name);
   echo("§");
    echo($veganstatus);
   echo("§");
    echo($vegetarianstatus);
    echo("§");
  echo($Testinanimals);
    echo("§");
    echo($GMO);
   echo("§");
   echo($CompanyProizvod);
    echo("§");
    echo($Publika);
}
else
{
printf($name);
    printf("731");
}
mysqli_close($mysqli);
?>