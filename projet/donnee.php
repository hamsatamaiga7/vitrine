<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=numeric_history", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  
}

$response = $conn->query('SELECT * FROM `personnages` WHERE 1');
$response->execute();

$data = $response->fetchAll(PDO::FETCH_ASSOC);
return $data
?>