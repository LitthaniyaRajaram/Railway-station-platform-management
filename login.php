<?php
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users 
WHERE username='$username' AND password='$password'";

$result = $db->query($sql);

if ($result && $result->fetchArray()) {
    echo "success";
} else {
    echo "error";
}
?>