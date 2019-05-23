<?php
require 'config/connect_mysql.php';

$sql = "SELECT * FROM tbl_provinces";
$query = mysqli_query($connect, $sql);

$data_province = array();

while ($data = mysqli_fetch_assoc($query)) {
    $data_province[] = $data;
}

/*
echo "<pre>";
print_r($data_province);
echo "</pre>";
*/

echo json_encode($data_province);
