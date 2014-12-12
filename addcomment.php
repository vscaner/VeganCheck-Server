<?php
$mysqli = new mysqli("localhost", "u787682332_scane", "260689", "u787682332_vscan");
if ($mysqli->connect_errno) {
    echo "РќРµ СѓРґР°Р»РѕСЃСЊ РїРѕРґРєР»СЋС‡РёС‚СЊСЃСЏ Рє MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $bcod = htmlspecialchars($_POST['bcod']); 
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $date =  date("Y-m-d H:i:s");
if ($bcod != null)
{
    $res = $mysqli->prepare("INSERT INTO comments (barcode, name, comment) values(?, ?, ?);");
printf("0");
$res->bind_param('sss', $bcod, $name, $comment);
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