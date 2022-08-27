<?php

$servername = "192.168.56.4";
$database = "mysql";
$username = "root";
$password = "admin#1234";
$charset = "utf8mb4";

try {

$dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connection Okay";

return $pdo;

}

catch (PDOException $e)

{
echo "Connection failed: ". $e->getMessage();
}

?>
