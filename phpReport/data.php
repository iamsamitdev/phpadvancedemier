<?php
require 'config/connect_mysql.php';

$sql = "SELECT amount FROM  fruitstock";
$query = mysqli_query($connect, $sql);

$json = [];

while ($data = mysqli_fetch_assoc($query)) {
    extract($data);
    $json[] = [(int)$amount];
}

/*
echo "<pre>";
print_r($json);
echo "</pre>";
*/
echo json_encode($json);
