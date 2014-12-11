<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$сat = htmlspecialchars($_POST['cat']);
$res = $mysqli->prepare("SELECT Subcat FROM cat_list WHERE Cat = ?");
$res->bind_param('s', $сat);
$res->execute();
$res->bind_result($Subcat);
$row = $res->fetch();
if ($Subcat != null) {
    printf($Subcat);
  }
else
{
printf($name);
    printf("731");
}
mysqli_close($mysqli);
?>