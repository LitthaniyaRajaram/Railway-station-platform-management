<?php

/* ✅ CONNECT TO DATABASE */
$db = new SQLite3("database.db");

/* ✅ CHECK CONNECTION */
if (!$db) {
    die("Database connection failed");
}

/* ================= USERS TABLE ================= */
if($db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    fname TEXT,
    lname TEXT,
    email TEXT UNIQUE,
    phone TEXT,
    gender TEXT,
    dob TEXT,
    username TEXT UNIQUE,
    password TEXT
)")){
    echo "Users table ready <br>";
} else {
    echo "Error creating users table <br>";
}

/* ================= UPI TABLE ================= */
if($db->exec("CREATE TABLE IF NOT EXISTS upi (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    upiApp TEXT,
    upiId TEXT
)")){
    echo "UPI table ready <br>";
}

/* ================= CARD TABLE ================= */
if($db->exec("CREATE TABLE IF NOT EXISTS cards (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    cardName TEXT,
    cardNumber TEXT,
    expiry TEXT
)")){
    echo "Card table ready <br>";
}

/* ================= BANK TABLE ================= */
if($db->exec("CREATE TABLE IF NOT EXISTS bank (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    accountName TEXT,
    accountNumber TEXT,
    ifsc TEXT
)")){
    echo "Bank table ready <br>";
}

/* ================= TRAIN QUEUE TABLE ================= */
if($db->exec("CREATE TABLE IF NOT EXISTS trains_queue (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    train_name TEXT,
    train_no TEXT,
    status TEXT DEFAULT 'waiting',
    platform_no INTEGER DEFAULT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)")){
    echo "Train Queue table ready <br>";
} else {
    echo "Error creating trains_queue table <br>";
}

echo "<br>✅ ALL TABLES CREATED SUCCESSFULLY";

?>