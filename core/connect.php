<?php
$ip_sv = "103.78.0.121";
$dbname_sv = "nro";
$user_sv = "ahwuocdz";
$pass_sv = "123456";

// GMT +7
date_default_timezone_set('Asia/Ho_Chi_Minh');

try {
    // Create connection
    $dsn = "mysql:host=$ip_sv;dbname=$dbname_sv;charset=utf8mb4";
    $conn = new PDO($dsn, $user_sv, $pass_sv);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed");
}
?>
