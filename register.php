<?php
include "db.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$username = $_POST['username'];
$password = $_POST['password'];

$db->exec("INSERT INTO users 
(fname, lname, email, phone, gender, dob, username, password)
VALUES 
('$fname', '$lname', '$email', '$phone', '$gender', '$dob', '$username', '$password')");

// ✅ ONLY CHANGE: alert + redirect
echo "<script>
alert('Account created successfully!');
window.location.href='login.html';
</script>";
?>