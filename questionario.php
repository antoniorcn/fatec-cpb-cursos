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
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>		
		<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>	
	</head>

	<body>
		<?php
			session_start();
			if (isset($_SESSION['MENSAGEM'])) {
					echo $_SESSION['MENSAGEM'];
					unset($_SESSION['MENSAGEM']);
			}
		 ?>
		<div class="contact1">
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
					<div class="wrap-input1 validate-input" data-validate = "Informe seu endereço completo">
						<input id="txtEndereco" name="txtEndereco" type="text" class="input1" placeholder="Endereço" validation="not_empty"/>
						<span class="shadow-input1"></span>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-5">
								<div class="wrap-input1 validate-input" data-validate = "Informe o nome do seu bairro">
									<input id="txtBairro" name="txtBairro" type="text" class="input1" placeholder="Bairro" validation="not_empty"/>
									<span class="shadow-input1"></span>
								</div>		
							</div>
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
						</div>
					</div>

					<div class="wrap-input1 validate-input" data-validate = "Informe sua escolaridade">
						<select id="txtEscolaridade" name="txtEscolaridade" class="input1">
							<option disabled selected>Escolaridade</option>
							<option>Pós graduado</option>
							<option>Superior completo</option>
							<option>Ensino médio completo</option>
							<option>Fundamental completo</option>
							<option>Fundamental incompleto</option>
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
						Quais são suas áreas de interesse
						</span>
						<div class="row">
							<div class="col-lg-6">
								<label class="check-container">Carreira Profissional
									<input type="checkbox"
										name="txtArea[]" id="txtCarreira" value="carreira">
									<span class="checkmark"></span>										
								</label>
							</div>
							<div class="col-lg-6">
								<div class="wrap-input1" data-validate = "Informe mais detalhes sobre a carreira profissional">
									<input id="txtCarreiraEspec" name="txtCarreiraEspec" type="text" class="input1" placeholder="Especifique"/>
									<span class="shadow-input1"></span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<label class="check-container">Logistica
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtLogistica" value="logistica">
									<span class="checkmark"></span>										
								</label>									
							</div>
							<div class="col-lg-6">
								<label class="check-container">Comércio Exterior
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtComex" value="comex"/>
									<span class="checkmark"></span>										
								</label>									
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<label class="check-container">Recursos Humanos
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtRH" value="rh">
									<span class="checkmark"></span>										
								</label>									
							</div>
							<div class="col-lg-6">
								<label class="check-container">Marketing
								<input class="form-check-input" type="checkbox"
										name="txtArea[]" id="txtMarketing"  value="marketing"/>
										<span class="checkmark"></span>										
								</label>									
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<label class="check-container">Finanças
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtFin" value="financas">
									<span class="checkmark"></span>										
								</label>									
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<label class="check-container">Redes de computadores
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtRedes" value="redes">
									<span class="checkmark"></span>										
								</label>									
							</div>
							<div class="col-lg-6">
								<label class="check-container">Banco de dados
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtDb"  value="db"/>
									<span class="checkmark"></span>										
								</label>									
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<label class="check-container">Programação
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtProg" value="prog">
									<span class="checkmark"></span>										
								</label>									
							</div>
							<div class="col-lg-6">
								<label class="check-container">Data Science
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtDscience"  value="dscience"/>
									<span class="checkmark"></span>										
								</label>									
							</div>
						</div>


						<div class="row">
							<div class="col-lg-6">
								<label class="check-container">Tecnologias Emergentes
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtTecEmerg" value="tec_emerg">
									<span class="checkmark"></span>										
								</label>									
							</div>
							<div class="col-lg-6">
								<div class="wrap-input1" data-validate = "Informe mais detalhes sobre as tecnologias emergentes">
									<input id="txtTecEmergEspec" name="txtTecEmergEspec" type="text" class="input1" placeholder="Especifique"/>
									<span class="shadow-input1"></span>								
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-lg-6">
								<label class="check-container">Automação
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtAutom" value="autom">
									<span class="checkmark"></span>										
								</label>									
							</div>
							<div class="col-lg-6">
								<div class="wrap-input1" data-validate = "Informe mais detalhes sobre que tipo de automação">
									<input id="txtAutomEspec" name="txtAutomEspec" type="text" class="input1" placeholder="Especifique"/>
									<span class="shadow-input1"></span>									
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<label class="check-container">Robótica/IoT
									<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtRobot" value="robot">
									<span class="checkmark"></span>										
								</label>									
							</div>
							<div class="col-lg-6">
								<div class="wrap-input1" data-validate = "Informe mais detalhes sobre quais cursos de Robótica e/ou IoT">
									<input id="txtRobotEspec" name="txtRobotEspec" type="text" class="input1" placeholder="Especifique"/>
									<span class="shadow-input1"></span>								
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<label class="check-container">Outros
								<input class="form-check-input" type="checkbox"
										name="txtArea[]" id="txtOutros" value="outros">
										<span class="checkmark"></span>										
								</label>									
							</div>
							<div class="col-lg-6">
								<div class="wrap-input1" data-validate = "Informe quais outros cursos">
									<input id="txtOutrosEpec" name="txtOutrosEpec" type="text" class="input1" placeholder="Informe quais outros cursos"/>
									<span class="shadow-input1"></span>								
								</div>	
							</div>
						</div>
					</div>

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
									<td><label class="check-container">
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
