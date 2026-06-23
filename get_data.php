<?php
$db = new SQLite3("database.db");

$result = $db->query("SELECT * FROM trains_queue ORDER BY id ASC");

$data = [];

while($row = $result->fetchArray(SQLITE3_ASSOC)){
    $data[] = $row;
}

/* ✅ PLATFORM STATUS LOGIC */
$platforms = [
    1 => "Free",
    2 => "Free",
    3 => "Free"
];

foreach($data as $train){
    if($train['status'] == 'assigned'){
        $platforms[$train['platform_no']] = "Occupied by ".$train['train_name'];
    }
}

echo json_encode([
    "trains" => $data,
    "platforms" => $platforms
]);
?>