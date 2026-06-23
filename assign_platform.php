<?php
$db = new SQLite3("database.db");

/* CHECK FREE PLATFORM */
for($p = 1; $p <= 3; $p++){

    $check = $db->querySingle("SELECT COUNT(*) FROM trains_queue 
                              WHERE platform_no = $p AND status = 'assigned'");

    if($check == 0){

        /* GET FIRST WAITING TRAIN (QUEUE LOGIC FIFO) */
        $train = $db->query("SELECT id FROM trains_queue 
                             WHERE status='waiting' 
                             ORDER BY id ASC LIMIT 1")->fetchArray();

        if($train){
            $id = $train['id'];

            $db->exec("UPDATE trains_queue 
                       SET status='assigned', platform_no=$p 
                       WHERE id=$id");

            echo "Assigned";
            exit;
        }
    }
}

/* ❌ IF NO PLATFORM FREE */
echo "FULL";
?>