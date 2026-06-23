<?php
include "db.php";

$app = $_POST['upiApp'];
$id = $_POST['upiId'];

$db->exec("INSERT INTO upi (upiApp, upiId) VALUES ('$app', '$id')");

echo "UPI saved successfully!";
?>