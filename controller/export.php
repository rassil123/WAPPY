<?php

// Include Database connection
include("../libraries/dbConfig_export.php");
// Include SimpleXLSXGen library
include("../libraries/SimpleXLSXGen.php");

$employees = [
  ['iduser', 'username', 'useremail']
];

$id = 0;
$sql = "SELECT * FROM user";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
  foreach ($res as $row) {
    $id++;
    $employees = array_merge($employees, array(array($id, $row['username'], $row['useremail'])));
  }
}

$xlsx = SimpleXLSXGen::fromArray($employees);
$xlsx->downloadAs('Members'.date('_Y_m_d').'.xlsx'); // This will download the file to your local system

// $xlsx->saveAs('employees.xlsx'); // This will save the file to your server

echo "<pre>";
print_r($employees);
