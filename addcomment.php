<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "РќРµ СѓРґР°Р»РѕСЃСЊ РїРѕРґРєР»СЋС‡РёС‚СЊСЃСЏ Рє MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $bcod = htmlspecialchars($_POST['bcod']); 
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    $date =  date("Y-m-d H:i:s");
if ($bcod != null)
{
    $res = $mysqli->prepare("INSERT INTO comments (barcode, name, comment, date) values(?, ?, ?, ?);");
printf("0");
$res->bind_param('ssss', $bcod, $name, $comment, $date);
$res->execute();
    $row = $res->fetch();
}
else
{
echo "733";
echo "bcod is null";
}
    mysqli_close($mysqli);
?>