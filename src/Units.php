<?php

$servername = 'localhost';
$username = 'php';
$password = 'P@$$w0rd';
$dbname = 'code_challenge';

$connection = new mysqli($servername, $username, $password, $dbname);

if($connection->connect_error){
    die('Connection failed: ' . $connection->connect_error);
}

$sql = 'SELECT length, volume, mass, time, currency FROM Test';
$result = $connection->query($sql);

$file = fopen('php://temp', 'wt');
$first = true;

while($row = $result->fetch_assoc()){
    if($first){
        fputcsv($file, array_keys($row));
        $first = false;
    }
    fputcsv($file, $row);
}

$connection->close();

$size = ftell($file);
rewind($file);

header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Length: $size");
header("Content-type: text/x-csv");
header("Content-type: text/csv");
header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=export.csv");

fpassthru($file);
?>