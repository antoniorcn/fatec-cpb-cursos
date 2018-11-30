	<?php

		function default_value($var, $defaultValue) {
			if (isset($_REQUEST[$var])) { 
				return $_REQUEST[$var];
			} else {
				return $defaultValue;
			}
		}

		$db = new PDO('mysql:host=localhost;dbname=questionarios;charset=utf8', 'root', '');

		$nome = default_value('txtNome', "");
		$email = default_value('txtEmail', "");
		$telefone = default_value('txtTelefone', "");
		$telefonetipo = default_value('txtTelefoneTipo', "");
		$endereco = default_value('txtEndereco', "");
		$bairro = default_value('txtBairro', "");
		$cidade = default_value('txtCidade', "");
		$cep = default_value('txtCEP', "");
		$escolaridade = default_value('txtEscolaridade', "");
		$instituicao = default_value('txtInstituicao', "");
		$empresa = default_value('txtEmpresa', "");
		$areas = default_value('txtArea', []);
		$carreiraespec = default_value('txtCarreiraEspec', "");
		$tecemergespec =  default_value('txtTecEmergEspec', "");
		$automespec =  default_value('txtAutomEspec', "");
		$robotespec =  default_value('txtRobotEspec', "");
		$outrosepec =  default_value('txtOutrosEpec', "");
		$horarios =  default_value('txtHorario', []);
		$button =   default_value('txtButton', "");


		if (isset($areas)) {
			foreach($areas as $area) {
				echo "Area: $area <br/>";
			}
		}

		if (isset($horarios)) {
			foreach($horarios as $horario) {
				echo "Horario: $horario <br/>";
			}
		}		
		session_start();
		if ($button == "submeter") {
			$sql = "INSERT INTO produtos (id, nome, metrica, quantidade, preco, vitaminas, organico) ";
			$sql = $sql . " VALUES (:id, :nome, :med, :qtd, :valor, :vitaminas, :org)";
			$stmt = $db->prepare($sql);
			$stmt->bindValue(':id', 0, PDO::PARAM_INT);
			$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
			$stmt->bindValue(':med', $metrica, PDO::PARAM_STR);
			$stmt->bindValue(':qtd', $qtd, PDO::PARAM_INT);
			$stmt->bindValue(':valor', $preco, PDO::PARAM_INT);
			$stmt->bindValue(':vitaminas', $vitaminas, PDO::PARAM_STR);
			$stmt->bindValue(':org', $org, PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->rowCount();
			$_SESSION['MENSAGEM'] = 'Registro inserido com sucesso';
		} else if ($button == "pesquisar") {
			$sql = "SELECT * FROM produtos WHERE nome like :nome";
			$stmt = $db->prepare($sql);
			$stmt->bindValue(':nome', '%' . $nome . '%', PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->rowCount();
			echo "Foram encontrados $result produtos";
			$listaProdutos = array();
			*/
			/* Escreve resultados até que não haja mais linhas na tabela usando while*/
			/* forEach( $stmt as $row ) {
				array_push($listaProdutos, $row);
			}
			$_SESSION['LISTA'] = $listaProdutos;
		}

		header('Location: ./produtos.php');
		*/
?>
