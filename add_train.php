<?php
$db = new SQLite3("database.db");

$name = $_POST['train_name'] ?? '';
$no   = $_POST['train_no'] ?? '';

if($name && $no){
    $stmt = $db->prepare("INSERT INTO trains_queue (train_name, train_no, status) VALUES (?, ?, 'waiting')");
    $stmt->bindValue(1, $name);
    $stmt->bindValue(2, $no);
    $stmt->execute();
}
?>