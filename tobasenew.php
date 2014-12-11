<?php
$mysqli = new mysqli("localhost", "LOGIN", "PASS", "BASE");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $meta = null;
    $bcod = htmlspecialchars($_POST['bcod']); 
    $name = htmlspecialchars($_POST['name']);
    $companyname = htmlspecialchars($_POST['companyname']);
    $veganstatus = htmlspecialchars($_POST['veganstatus']);
    $vegetstatus = htmlspecialchars($_POST['vegetstatus']);
    $gmo = htmlspecialchars($_POST['gmo']);
    $animals = htmlspecialchars($_POST['animals']);
    $comment = htmlspecialchars($_POST['comment']);
    $user_ip = get_client_ip(); 
    $user_client_app_identificator = htmlspecialchars($_POST['user_client_app_identificator']);
    $user_client_platform_type_index = htmlspecialchars($_POST['user_client_platform_type_index']);
    $report_latitude = htmlspecialchars($_POST['report_latitude']);
    $report_longitude = htmlspecialchars($_POST['report_longitude']);
    $user_client_app_version = htmlspecialchars($_POST['user_client_app_version']);

if ($user_client_app_identificator == null)
{ 
echo "733";
echo "user_client_app_identificator is null";
}
elseif ($user_client_platform_type_index == null)
{ 
echo "733";
echo "user_client_platform_type_index is null";
}
elseif ($user_client_app_version == null)
{ 
echo "733";
echo "user_client_app_version  is null";
}
elseif ($name == null)
{ 
echo "733";
echo "name is null";
}
elseif($bcod == null)
{
echo "733";
echo "bcod is null";
}
else
{
 $resF = $mysqli->prepare("INSERT INTO report_metadata (user_ip, user_client_app_identificator, user_client_platform_type_index, report_latitude, report_longitude,user_client_app_version) values(?, ?, ?, ?, ?, ?);");
$resF->bind_param('ssssss', $user_ip, $user_client_app_identificator, $user_client_platform_type_index, $report_latitude, $report_longitude,$user_client_app_version);
$resF->execute();
 $rowF = $resF->fetch();
$meta = $mysqli->insert_id;
}


if($meta == null)
{
echo "733";
echo "meta is null";
}


else
{
    $res = $mysqli->prepare("INSERT INTO main (barcode, name, companyproizvod, veganstatus, vegetarianstatus, GMO, Testinanimals,Publika,meta) values(?, ?, ?, ?, ?, ?, ?, ?,?);");
printf("0");
$res->bind_param('sssssssss', $bcod, $name, $companyname, $veganstatus, $vegetstatus, $gmo, $animals, $comment, $meta);
$res->execute();
 
    $row = $res->fetch();
}

    mysqli_close($mysqli);
function get_client_ip() 
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
?>