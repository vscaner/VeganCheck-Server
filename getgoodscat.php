<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$bcod = htmlspecialchars($_POST['bcod']);
$res = $mysqli->prepare("SELECT Cat,Subcat FROM cat WHERE barcode = ?");
$res->bind_param('s', $bcod);
$res->execute();
$res->bind_result($Cat, $Subcat);
$row = $res->fetch();
if ($Subcat != null) {
    printf($Cat);
    printf("§");
    printf($Subcat);
}
else
{
printf($name);
    printf("731");
}
mysqli_close($mysqli);
?>