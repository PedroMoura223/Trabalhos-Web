<?php 

include 'connection/connection.php';

$user = $_SESSION['usuario'];

try {
	$busca = "SELECT * FROM user WHERE usuario = '$user'";
	$stmt = $conn->prepare($busca);
	$stmt->execute();
	$result = $stmt->fetch();

	$id = $result['id'];
	$email = $result['email'];
	$usuario = $result['usuario'];
	$senha = $result['senha'];
	$conta = $result['tipo_conta'];
} catch (Exception $e) {
	echo($e);
}

 ?>