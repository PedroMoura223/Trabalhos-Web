<?php 
	include 'connection/connection.php';

session_start();

include '../model/read.php';
	//Inserção de dados na tabela DADOS_COMPRA;

	$conta = $_POST['conta'];

		$nome = $_POST['nome'];

			$sobrenome = $_POST['sobrenome'];

				$senha= $_POST['senha'];

					$endereco= $_POST['endereco'];

						$usuario = $_POST['usuario'];

							$pais = $_POST['pais'];

								$estado = $_POST['estado'];

									$codigo_postal = $_POST['codigo_postal'];

											$nome_do_titular = $_POST['nome_do_titular'];

												$n_cartao = $_POST['n_cartao'];

													$expiracao = $_POST['expiracao'];

														$cvv = $_POST['cvv'];

															


			try{
				$queryC= "INSERT INTO dados_compra(

					nome,
					sobrenome,
					usuario,
					senha,
					endereco,
					pais,
					estado,
					codigo_postal,
					nome_do_titular,
					n_cartao,
					expiracao,
					cvv
					

						)VALUES(

								'$nome',
								'$sobrenome',
								'$usuario',
								'$senha',
								'$endereco',
								'$pais',
								'$estado',
								'$codigo_postal',
								'$nome_do_titular',
								'$n_cartao',
								'$expiracao',
								'$cvv')";

				$stmt = $conn -> prepare($queryC);

			}catch(SQLException $e){
				
					echo $e->getMessage();

			}

			if($stmt -> execute()){

			$sql = "UPDATE user SET tipo_conta='$conta' WHERE id='$id'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	
			$_SESSION['conta'] = $conta;
				
					
						
							
		echo "<script>
					alert('Atualizado Com Sucesso!');
					window.location.href='../index.php';
				</script>";
				}else{

					echo "Não deu certo :("; 

				}




 ?>