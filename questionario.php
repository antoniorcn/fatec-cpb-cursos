<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/cep.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>		
		<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>	
	</head>

	<body>
		<div class="contact1">
			<?php
				session_start();
				
				$db = new PDO('mysql:host=localhost;dbname=fatec_cursos;charset=utf8', 'fatec', 'fRcgOYqNefSNv5qQruLL');

				if (isset($_SESSION['MENSAGEM'])) {
						$msg = $_SESSION['MENSAGEM'];
			?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong><?=$msg?></strong>
					<a href="javascript: window.history.go(-1);">clique aqui para retornar à página com os dados do questionário</a>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php 
				unset($_SESSION['MENSAGEM']);
				} 
			?>			
			<div class="container-contact1">
				<form action="./questionarioController.php" class="validate-form">
					<span class="contact1-form-title">
						Formulário para interesse em cursos de extensão na Fatec Carapicuíba
					</span>
					<div class="wrap-input1 validate-input" data-validate = "O nome completo deve ser informado">
						<input id="txtNome" name="txtNome" type="text" class="input1" placeholder="Nome Completo" validation="not_empty"/>
						<span class="shadow-input1"></span>
					</div>
					<div class="wrap-input1 validate-input" data-validate = "Informe um email valido">
						<input id="txtEmail" name="txtEmail" type="text" class="input1" placeholder="Email" validation="email"/>
						<span class="shadow-input1"></span>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<div class="wrap-input1 validate-input" data-validate = "Informe um numero de telefone para contato">
									<input id="txtTelefone" name="txtTelefone" type="text" class="input1" placeholder="Telefone" validation="not_empty"/>
									<span class="shadow-input1"></span>
								</div>
							</div>
							<div class="col-md-3">
								<label class="radio-container">    Fixo
									<input type="radio" name="txtTelefoneTipo" id="txtTelefoneTipo" value="fixo">
									<span class="radiomark"></span>
								</label>
							</div>
							<div class="col-md-3">
								<label class="radio-container">   Celular
									<input type="radio" name="txtTelefoneTipo" id="txtTelefoneTipo" value="celular"/>
									<span class="radiomark"></span>
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-8">
								<div class="wrap-input1 validate-input" data-validate = "Informe seu endereço completo">
									<input id="txtEndereco" name="txtEndereco" type="text" class="input1" placeholder="Endereço" validation="not_empty"/>
									<span class="shadow-input1"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="wrap-input1 validate-input" data-validate = "Informe o nome do seu bairro">
									<input id="txtBairro" name="txtBairro" type="text" class="input1" placeholder="Bairro" validation="not_empty"/>
									<span class="shadow-input1"></span>
								</div>		
							</div>				
						</div>
					</div>			
					<div class="form-group">
						<div class="row">
							<div class="col-md-5">
								<div class="wrap-input1 validate-input" data-validate = "Informe o nome da sua cidade">
									<input id="txtCidade" name="txtCidade" type="text" class="input1"  placeholder="Cidade" validation="not_empty"/>
									<span class="shadow-input1"></span>
								</div>		
							</div>
							<div class="col-md-2">
								<div class="wrap-input1 validate-input" data-validate = "Informe o seu CEP">								
									<input id="txtCEP" name="txtCEP" type="text" class="input1"  placeholder="CEP"/>
									<span class="shadow-input1"></span>
								</div>		
							</div>
							<div class="col-md-1">
								<button type="button" id="txtButtonCEP" class="btn" aria-hidden="true"><i class="fa fa-search"></i></button>	
							</div>							
							<div class="col-md-4">							
								<div class="wrap-input1 validate-input" data-validate = "Informe o estado onde mora">
									<select id="txtEstado" name="txtEstado" class="input1">
										<option value="sp" selected>São Paulo</option>
										<option value="ac">Acre</option>
										<option value="al">Alagoas</option>
										<option value="ap">Amapá</option>
										<option value="am">Amazonas</option>
										<option value="ba">Bahia</option>
										<option value="ce">Ceará</option>
										<option value="df">Distrito Federal</option>
										<option value="es">Espírito Santo</option>
										<option value="go">Goiás</option>
										<option value="ma">Maranhão</option>
										<option value="mt">Mato Grosso</option>
										<option value="ms">Mato Grosso do Sul</option>
										<option value="mg">Minas Gerais</option>
										<option value="pa">Pará</option>
										<option value="pb">Paraíba</option>
										<option value="pr">Paraná</option>
										<option value="pe">Pernambuco</option>
										<option value="pi">Piauí</option>
										<option value="rj">Rio de Janeiro</option>
										<option value="rn">Rio Grande do Norte</option>
										<option value="rs">Rio Grande do Sul</option>
										<option value="ro">Rondônia</option>
										<option value="rr">Roraima</option>
										<option value="sc">Santa Catarina</option>
										<option value="se">Sergipe</option>
										<option value="to">Tocantins</option>
									</select>
									<span class="shadow-input1"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="wrap-input1 validate-input" data-validate = "Informe sua escolaridade">
						<select id="txtEscolaridade" name="txtEscolaridade" class="input1">
							<option disabled selected>Escolaridade</option>
							<option value="pos_graduacao">Pós graduação</option>
							<option value="superior">Ensino Superior</option>
							<option value="medio">Ensino médio</option>
							<option value="fundamental">Fundamental</option>
							<option value="sem_escolaridade">Sem escolaridade</option>
						</select>
						<span class="shadow-input1"></span>
					</div>

					<div class="wrap-input1 validate-input" data-validate = "Informe o nome da ultima instituição de ensino onde estudou">
						<input id="txtInstituicao" name="txtInstituicao" type="text" class="input1" placeholder="Nome da ultima instituição de ensino onde estudou"/>
						<span class="shadow-input1"></span>
					</div>

					<div class="wrap-input1" data-validate = "Informe o nome da ultima instituição de ensino onde estudou">
						<input id="txtEmpresa" name="txtEmpresa" type="text" class="input1" placeholder="Se estiver trabalhando informe o nome da empresa onde trabalha"/>
						<span class="shadow-input1"></span>
					</div>

					<div class="form-group">
						<span class="contact1-form-title">
						Quais são os cursos ou áreas de interesse, marque todos aqueles que você pretende cursar
						</span>

						<?php
							// Verifica as respostas das perguntas e adiciona-as no banco de dados;
							$categoria = "";
							$categoria_changed = false;
							$sql = "SELECT p.*";
							$sql = $sql . "FROM ";
							$sql = $sql . "categorias as c inner join perguntas as p ";
							$sql = $sql . "on p.categoria = c.texto ";
							// $sql = $sql . "WHERE 1 ";
							$sql = $sql . "ORDER BY c.indice, p.indice";
							$stmt = $db->prepare($sql);
							$stmt->execute();
							$result = $stmt->rowCount();
							$new_row = true;
							$count = 0;
							$flush_text = false;
							$text_all = "";
							$texto = "";
							$lista = array();
							forEach( $stmt as $row ) { 
								array_push($lista, $row);
							} 
							// for ($i = 0; $i < count($lista); $i++) { 
							// 	$row = $lista[$i];
							//	echo "<span class=\"contact1-form-title\" style=\"margin-top:40px; margin-bottom:0px;\">" . $row['categoria'] . " - " . $row['texto'] . "</span>\n";
							// }

							for ($i = 0; $i < count($lista) - 1; $i++) {
								$row = $lista[$i];
								$proximo_registro = $lista[$i + 1];
								$registro_especialista = $row['espec_precisa'];
								$ultimo_registro = ($i == (count($lista) - 1));
								$proximo_registro_especialista = $proximo_registro['espec_precisa'];
								$ultima_coluna = ($count >= 1);
								$categoria_changed = strcasecmp($row['categoria'], $categoria);

								$texto = $texto . "<div class=\"col-lg-6\">\n";
								$texto = $texto . "		<label class=\"check-container  my-tooltip\">" . $row['texto'];
								$texto = $texto . "			<input type=\"checkbox\" name=\"txtArea[]\" id=\"" . $row['valor'] . "\"";
								$texto = $texto . " 			value=\"" . $row['valor'] . "\"/>\n";
								$texto = $texto . "			<span class=\"checkmark\"></span>\n";
								$texto = $texto . "			<span class=\"my-tooltiptext\">" . $row['descricao'] . "</span>\n";
								$texto = $texto . "		</label>\n";
								$texto = $texto . "</div>\n";
								$count++;

								if ($registro_especialista) { 
									$texto = $texto . "<div class=\"col-lg-6\">\n";
									$texto = $texto . "		<div class=\"wrap-input1\" data-validate = \"" . $row['espec_texto'] . "\">\n";
									$texto = $texto . "				<input id=" . $row['espec_variable'] . "\" name=\"" . $row['espec_variable'];
									$texto = $texto . "\" type=\"text\" class=\"input1\" placeholder=\"Especifique\"/>\n";
									$texto = $texto . "					<span class=\"shadow-input1\"></span>\n";
									$texto = $texto . "		</div>\n";
									$texto = $texto . "	</div>\n";
								}
								
								if (	$ultimo_registro
										|| $registro_especialista
										|| $proximo_registro_especialista
										|| $ultima_coluna
										|| $categoria_changed) {
									$text_all = $text_all . "<label>UR: $ultimo_registro - RE: $registro_especialista - PR: $proximo_registro_especialista - UC: $ultima_coluna - CC: $categoria_changed  - CAA: $categoria - CAN: ".$row['categoria']." TXT:" . $row['texto'] . "</label>";
									if ($categoria_changed) {
										// $text_all = $text_all . "<span class=\"contact1-form-title\" style=\"margin-top:40px; margin-bottom:0px;\">" . $row['categoria'] . " - " . $row['texto'] . "</span>\n";										
										// $text_all = $text_all  . "<div class=\"row\" style=\"margin-top:30px; margin-bottom:0px;\">\n";
										// $text_all = $text_all  . "	<div class=\"col-lg-12\">\n";
										// $texto = $texto . "		<span class=\"contact1-form-title\">$categoria</span>";
										$text_all = $text_all  . "			<span class=\"contact1-form-title\" style=\"margin-top:40px; margin-bottom:0px;\">" . $row['categoria'] . "</span>\n";
										// $categoria = $row['categoria'];
										// $text_all = $text_all  . "	</div>\n";
										// $text_all = $text_all  . "</div>\n";
									}											
									$text_all = $text_all . "<div class=\"row\">\n";
									$text_all = $text_all . $texto;
									$text_all = $text_all . "</div>\n";
									$texto = "";
									$count = 0;
								}
//								if ($categoria_changed) {
//									$categoria = $row['categoria'];
//								}
							}
							echo $text_all; 
						?>

					<div class="form-group">
						<span class="contact1-form-title">
						Quais horários você tem disponibilidade para cursar, marque todos seus horários disponíveis
						</span>
						<table class="table">
							<thead>
								<tr>
									<th>Horários Dias da Semana</th>
									<th>Segunda-feira</th>
									<th>Terça-feira</th>
									<th>Quarta-feira</th>
									<th>Quinta-feira</th>
									<th>Sexta-feira</th>
									<th>Sábado</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Manhã</th>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="seg-manha">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="ter-manha">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="qua-manha">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="qui-manha">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="sex-manha">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="sab-manha">
											<span class="checkmark"></span>										
										</label>
									</td>
								</tr>

								<tr>
									<th>Tarde</th>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="seg-tarde">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="ter-tarde">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="qua-tarde">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="qui-tarde">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="sex-tarde">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="sab-tarde">
											<span class="checkmark"></span>										
										</label>
									</td>
								</tr>

								<tr>
									<th>Noite</th>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="seg-noite">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="ter-noite">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="qua-noite">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="qui-noite">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label class="check-container" placeholder="Teste de Placeholder">
											<input class="form-check-input" type="checkbox"
											name="txtHorario[]" id="txtHorario" value="sex-noite">
											<span class="checkmark"></span>										
										</label>
									</td>
									<td><label>Indisponível</label>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="container-contact1-form-btn">
						<button type="submit" name="txtButton" value="submeter" class="contact1-form-btn" aria-hidden="true">Submeter</button>
					</div>
				</form>					
			</div>
		</div>

	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	</body>

</html>
