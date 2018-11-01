	<?php
		$db = new PDO('mysql:host=localhost;dbname=quitanda;charset=utf8', 'root', '');

		$nome = $_REQUEST['txtNome'];
		$email = $_REQUEST['txtEmail'];
		$telefone = $_REQUEST['txtTelefone'];
		$telefonetipo = $_REQUEST['txtTelefoneTipo'];
		$endereco = $_REQUEST['txtEndereco'];
		$bairro = $_REQUEST['txtBairro'];
		$cidade = $_REQUEST['txtCidade'];
		$cep = $_REQUEST['txtCEP'];
		$escolaridade = $_REQUEST['txtEscolaridade'];
		$instituicao = $_REQUEST['txtInstituicao'];
		$empresa = $_REQUEST['txtEmpresa'];
		$area = $_REQUEST['txtArea[]'];
		$carreiraespec = $_REQUEST['txtCarreiraEspec'];
		$tecemergespec =  $_REQUEST['txtTecEmergEspec'];
		$automespec =  $_REQUEST['txtAutomEspec'];
		$robotespec =  $_REQUEST['txtRobotEspec'];
		$outrosepec =  $_REQUEST['txtOutrosEpec'];
		$horario =  $_REQUEST['txtHorario[]'];


		if (isset($areas)) {
			foreach($areas as $area) {
			}
		}
		/*
		session_start();
		if ($button == "submeter") {
			$qtd = $_REQUEST['txtQtd'];
			$metrica = $_REQUEST['txtMetrica'];
			$preco = $_REQUEST['txtPreco'];
			$vitaminas = $_REQUEST['txtVitaminas'];
			$org = $_REQUEST['txtOrganico'];

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
