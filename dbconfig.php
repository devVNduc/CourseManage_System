<?php
// DB credentials.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'coursemanagement');
//establish database connection
try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_PASS, DB_USER);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
