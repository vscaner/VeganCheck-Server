<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "РќРµ СѓРґР°Р»РѕСЃСЊ РїРѕРґРєР»СЋС‡РёС‚СЊСЃСЏ Рє MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$bcod = htmlspecialchars($_POST['bcod']);
$res = $mysqli->prepare("SELECT name,comment,date FROM comments WHERE barcode = ?");
$res->bind_param('s', $bcod);
$res->execute();
$res->bind_result($name,$comment,$date);
while($row = $res->fetch())
{
if ($name != null) {
    printf($name);
 printf( '|');
 printf($comment);
 printf( '|');
 printf($date);
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