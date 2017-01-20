<?php

Function  __ListarParroquias(){

$host = 'localhost';
$base = 'Diplomado';
$usuario = 'root';
$password ='123456';
try{
	$conn = new PDO('mysql:host='.$host.';dbname='.$base.'', $usuario, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");
}catch(PDOException $e){
	echo "ERROR: " . $e->getMessage();
}
 $sql = $conn->prepare('SELECT * FROM parroquias');
    $sql->execute();
    $resultado = $sql->fetchAll();
    foreach ($resultado as $row) {
        echo "<option value='".$row['id_parroquia']."'>".$row['parroquia']."</option>";
    }
  }
