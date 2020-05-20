<?php 

session_start();
include('../model/connection/connection.php');

try{
	
	$sql = ("SELECT * FROM user WHERE usuario = :user AND senha = :pass ");
	$stmt = $conn->prepare($sql);

	$user = ($_POST['usuario']);
	$pass = ($_POST['senha']);	

	$stmt->bindValue(":user", $user);
	$stmt->bindValue(":pass", $pass);

	$stmt->execute();

	$rows = $stmt->rowCount();

	 if($rows != 0){
	 	$result = $stmt->fetch();

	 	$conta = $result['tipo_conta'];

	 	$_SESSION['usuario'] = $user;
	 	$_SESSION['conta'] = $conta;
	 	header('location:../index.php');
	 } else {
	 	unset($_SESSION['usuario']);
	 	unset($_SESSION['conta']);
	 	header('location:../index.php');
	 }

} catch (PDOException $e){
	echo($e);
}

 ?>