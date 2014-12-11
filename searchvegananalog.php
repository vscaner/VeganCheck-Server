<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$Subcat = htmlspecialchars($_POST['Subcat']);
$res = $mysqli->prepare("SELECT barcode FROM cat WHERE Subcat = ? AND veganstatus = 0 AND Testinanimals = 0");
$res->bind_param('s', $Subcat);
$res->execute();
$res->bind_result($barcode);
while($row = $res->fetch())
{
if ($barcode != null) {
    printf($barcode);
    printf("§");
}
else
{
printf($name);
    printf("731");
}
}
mysqli_close($mysqli);
?>