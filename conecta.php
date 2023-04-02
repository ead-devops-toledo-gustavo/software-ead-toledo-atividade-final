<?php /* 5 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toledo_db"; //criado no phpMyAdmin // http://localhost/dashboard/ // http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=toledo_db&table=usuarios

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected successfully"; // comentar sempre que for para produção / fiz o teste para a atividade 03 e deu certo.
} catch(PDOException $e) {
   //echo "Connection failed: " . $e->getMessage(); // comentar sempre que for para produção / fiz o teste para a atividade 03 e deu certo.
}
?>