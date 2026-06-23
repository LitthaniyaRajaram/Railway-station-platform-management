<?php
include "db.php";

$name = $_POST['cardName'];
$number = $_POST['cardNumber'];
$expiry = $_POST['expiry'];

$db->exec("INSERT INTO cards (cardName, cardNumber, expiry) 
VALUES ('$name', '$number', '$expiry')");

echo "Card saved successfully!";
?>