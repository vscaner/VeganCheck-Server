<?php
$mysqli = new mysqli("LOCALHOST", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "РќРµ СѓРґР°Р»РѕСЃСЊ РїРѕРґРєР»СЋС‡РёС‚СЊСЃСЏ Рє MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $bcod = htmlspecialchars($_POST['bcod']); 
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $date =  date("Y-m-d H:i:s");
if ($bcod == null)
{
echo "733";
echo "bcod is null";
}
elseif(str_replace(' ', '', $name) == null)
{
echo "733";
echo "name is null";
}
elseif(str_replace(' ', '', $comment) == null)
{
echo "733";
echo "comment is null";
}
else
{
    $res = $mysqli->prepare("INSERT INTO comments (barcode, name, comment) values(?, ?, ?);");
printf("0");
$res->bind_param('sss', $bcod, $name, $comment);
$res->execute();
    $row = $res->fetch();
}

    mysqli_close($mysqli);
?>