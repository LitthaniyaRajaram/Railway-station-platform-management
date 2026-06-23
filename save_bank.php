<?php
include "db.php";

$name = $_POST['accountName'];
$number = $_POST['accountNumber'];
$ifsc = $_POST['ifsc'];

$db->exec("INSERT INTO bank (accountName, accountNumber, ifsc) 
VALUES ('$name', '$number', '$ifsc')");

echo "Bank account saved successfully!";
?>