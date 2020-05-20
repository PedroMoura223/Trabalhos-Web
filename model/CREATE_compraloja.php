<?php 
	include 'connection/connection.php';


	

	//Inserção de dados na tabela DADOS_COMPRA_LOJA;

	$aux = 1;


		$email = $_POST['email'];

					$endereco= $_POST['endereco'];

							$pais = $_POST['pais'];

								$estado = $_POST['estado'];

									$codigo_postal = $_POST['codigo_postal'];

											$nome_do_cartao = $_POST['nome_do_cartao'];

												$n_cartao = $_POST['n_cartao'];

													$expiracao = $_POST['expiracao'];

														$cvv = $_POST['cvv'];

														 

														
						
			try{
				$queryC= "INSERT INTO dados_compra_loja(

					email,
					endereco,
					pais,
					estado,
					codigo_postal,
					nome_do_cartao,
					n_cartao,
					expiracao,
					cvv

						)VALUES(

								'$email',
								'$endereco',
								'$pais',
								'$estado',
								'$codigo_postal',
								'$nome_do_cartao',
								'$n_cartao',
								'$expiracao',
								'$cvv')";

				$stmt = $conn -> prepare($queryC);

			}catch(SQLException $e){
				
					echo $e->getMessage();

			}

			if($stmt -> execute()){
					echo "<script>
					alert('Agradecemos Pela Compra!');
					window.location.href='../index.php';
				</script>";
				}else{

					echo "Não deu certo :("; 

				}



			

 ?>