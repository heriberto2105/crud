<?php 
try {
  # ConexiÃ³n a MySQL
  $conn = new PDO("mysql:host=localhost;dbname=escuela", "root", "");
  $conn->exec("set names utf8");
//echo "conec Existoso";
}
catch(PDOException $e) {
//echo "error";
    echo $e->getMessage();
}


?>