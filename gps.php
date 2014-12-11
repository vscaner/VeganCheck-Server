<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $bcod = htmlspecialchars($_POST['bcod']); 
    $gps = htmlspecialchars($_POST['gps']);
	$date  = htmlspecialchars($_POST['date']);

if ($bcod != 0)
{
    $res = $mysqli->query("INSERT INTO gps (barcode, gps,date) values('$bcod', '$gps', '$date');");
printf("0");
    $row = $res->fetch_assoc();
}

else
{
echo "733";
echo "bcod is null";
}
    mysql_close(mysqli);
    ?>