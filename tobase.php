<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $bcod = htmlspecialchars($_POST['bcod']); 
    $name = htmlspecialchars($_POST['name']);
    $companyname = htmlspecialchars($_POST['companyname']);
    $veganstatus = htmlspecialchars($_POST['veganstatus']);
    $vegetstatus = htmlspecialchars($_POST['vegetstatus']);
    $gmo = htmlspecialchars($_POST['gmo']);
    $animals = htmlspecialchars($_POST['animals']);
    $comment = htmlspecialchars($_POST['comment']);
 
if ($name == null)
{ 
echo "733";
echo "name is null";
}
elseif($bcod == 0)
{
echo "733";
echo "bcod is null";
}

else
{
    $res = $mysqli->prepare("INSERT INTO main (barcode, name, companyproizvod, veganstatus, vegetarianstatus, GMO, Testinanimals,Publika) values(?, ?, ?, ?, ?, ?, ?, ?);");
printf("0");
$res->bind_param('ssssssss', $bcod, $name, $companyname, $veganstatus, $vegetstatus, $gmo, $animals, $comment);
$res->execute();
 
    $row = $res->fetch();
}

    mysqli_close($mysqli);
?>