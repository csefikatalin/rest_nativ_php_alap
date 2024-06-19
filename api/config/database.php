php
<?php
$host = 'localhost';
$db_name = 'jatek_allas';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Connection Error: ' . $e->getMessage();
}
?>