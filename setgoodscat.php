<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
   $bcod = htmlspecialchars($_POST['bcod']); 
    $cat = htmlspecialchars($_POST['cat']);
    $subcat = htmlspecialchars($_POST['subcat']);
    $veganstatus = htmlspecialchars($_POST['veganstatus']);
    $vegetstatus = htmlspecialchars($_POST['vegetstatus']);
$Testinanimals = htmlspecialchars($_POST['Testinanimals']);
    $res = $mysqli->prepare("INSERT INTO cat (barcode, Cat,Subcat,veganstatus,vegetarianstatus,Testinanimals) values(?, ?, ?, ?, ?,?);");
$res->bind_param('ssssss', $bcod,$cat,$subcat,$veganstatus,$vegetstatus,$Testinanimals);
$res->execute();
    $row = $res->fetch();
    mysqli_close($mysqli);
printf("0");
?>