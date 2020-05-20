<?php 

session_start();
include 'connection/connection.php';

$user = $_SESSION['usuario'];



try {
	// $sql = "DELETE FROM user WHERE usuario = '$user' LIMIT 1";
	$sql = "DELETE FROM user, dados_compra USING user INNER JOIN dados_compra WHERE user.id = dados_compra.id AND user.usuario = '$user'";
	//$sql = "DELETE FROM user WHERE id='$id'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	unset($_SESSION['usuario']);
	unset($_SESSION['conta']);

	header('location:../index.php');

} catch (Exception $e) {
	echo($e);
}

 ?>