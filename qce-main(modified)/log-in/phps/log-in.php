<?php
include "conn.php";
session_start(); 

$dbUserName = $_POST["username"];
$dbPassword = $_POST["password"];

$sql = "SELECT * FROM registration WHERE Username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $dbUserName);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    echo "User  found: " . $user['Username'] . "<br>";
    if ($dbPassword == $user['password']) {
        // Login successful
        echo "Password matches!";
        $_SESSION['username'] = $dbUserName; // Start session
        header("Location: ../../index.php");
        exit;
    } else {
        echo "Password does not match.";
    }
} else {
    echo "No user found with that username.";
}