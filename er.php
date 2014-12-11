<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $bcod = htmlspecialchars($_POST['bcod']);
    $comment = htmlspecialchars($_POST['comment']);
    $res = $mysqli->query("UPDATE `main` SET `comment` = '$comment' WHERE `barcode` = '$bcod';");
printf("0");
    $row = $res->fetch_assoc();
    mysql_close(mysqli);
    ?>