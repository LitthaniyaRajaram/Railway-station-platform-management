<?php
$db = new SQLite3('database.db');

$db->exec("CREATE TABLE IF NOT EXISTS trains_queue (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    train_name TEXT,
    train_no TEXT,
    status TEXT DEFAULT 'waiting',
    platform INTEGER,
    arrival_time DATETIME DEFAULT CURRENT_TIMESTAMP
)");

$db->exec("CREATE TABLE IF NOT EXISTS platforms (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    platform_no INTEGER,
    is_free INTEGER DEFAULT 1
)");

$count = $db->querySingle("SELECT COUNT(*) FROM platforms");

if($count == 0){
    for($i=1; $i<=4; $i++){
        $db->exec("INSERT INTO platforms (platform_no, is_free) VALUES ($i,1)");
    }
}

echo "✅ Database Ready";
?>