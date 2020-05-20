<?php 

session_start();

include 'connection/connection.php';

	
	
	include '../model/read.php';

	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$conta = $_POST['conta'];

	$idaux = $id;



	if ($conta != "Altere o Nível Da Sua Conta!") {
		echo "<script>
					alert('Percebemos que você gostaria de fazer um UPGRADE em sua conta, estamos lhe redirecionando para a tela de vendas de VIP!');
					window.location.href='../view/planos.php';
				</script>";
		}

	//$sql = "UPDATE FROM user, dados_compra USING user INNER JOIN dados_compra WHERE user.id = dados_compra.id AND user.usuario = '$user'";
	$sql = "UPDATE user SET email='$email', usuario='$usuario', senha='$senha' WHERE id='$id'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	$_SESSION['usuario'] = $usuario;
			$_SESSION['conta'] = $conta;
				$_SESSION['usuario'] = $usuario;
					$_SESSION['conta'] = $conta;
						$_SESSION['id'] = $id;
							
		echo "<script>
					alert('Atualizado Com Sucesso!');
					window.location.href='../index.php';
				</script>";

 ?>