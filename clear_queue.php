<?php
$db = new SQLite3("database.db");
$db->exec("DELETE FROM trains_queue");
?>