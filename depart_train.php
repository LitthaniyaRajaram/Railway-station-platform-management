<?php
$db = new SQLite3("database.db");

$id = $_POST['id'] ?? 0;

if($id){
    $stmt = $db->prepare("UPDATE trains_queue SET status='departed' WHERE id=?");
    $stmt->bindValue(1, $id);
    $stmt->execute();
}
?>