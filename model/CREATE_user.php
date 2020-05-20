<?php 
	session_start();
 	include 'connection/connection.php';

	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	// try{
	// 	$queryC= "INSERT INTO user(email,usuario,senha,tipo_conta) VALUES('$email','$usuario','$senha','free') ";

	// 	$stmt = $conn -> prepare($queryC);

	// }catch(SQLException $e){
				
	// 	echo $e->getMessage();

	// }

	// if($stmt -> execute()){
	// 	echo "<script>alert('Mensagem');</script>";
	// 	header("Location: ../index.php");
	// }else{

	// 	echo "<script>alert 'Não deu certo :('</script>"; 

	// }

	try {
		$busca = "SELECT * FROM user WHERE usuario = '$usuario' AND senha = '$senha' ";
		$result = $conn->prepare($busca);
		$result->execute();
		$rows = $result->rowCount();

		if ($rows != 0) {
			echo "<script>
					alert('Usuário já existente! Tente outro nome de usuário.');
					window.location.href='../index.php';
				</script>";
			unset($_SESSION['usuario']);
			unset($_SESSION['conta']);
		} else {
			$insert = "INSERT INTO user(email,usuario,senha,tipo_conta) VALUES('$email','$usuario','$senha','Altere o Nível Da Sua Conta!') ";
			$stmt = $conn->prepare($insert);
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			$stmt->execute();
			

			$conta = $result['tipo_conta'];

			$_SESSION['usuario'] = $usuario;
			$_SESSION['conta'] = $conta;

			echo "<script>
					alert('Cadastrado com sucesso!');
					window.location.href='../index.php';
				</script>";
		}
	} catch (SQLException $e) {
		echo $e->getMessage();
	}
 ?>