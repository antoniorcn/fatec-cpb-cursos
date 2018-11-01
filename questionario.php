<html>

	<head>
		<link href="./css/bootstrap.min.css" rel="stylesheet"/>
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.js"></script>
	</head>

	<body>
		<?php
			session_start();
			if (isset($_SESSION['MENSAGEM'])) {
					echo $_SESSION['MENSAGEM'];
					unset($_SESSION['MENSAGEM']);
			}
		 ?>

		<form action="./questionarioController.php">
			<div class="container">
				<h2>Formulário para interesse em cursos de extensão na Fatec Carapicuíba</h2>
				<div class="form-group">
					<label for="txtNome">Nome:</label>
					<input id="txtNome" name="txtNome" type="text" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="txtEmail">Email:</label>
					<input id="txtEmail" name="txtEmail" type="text" class="form-control"/>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label for="txtTelefone">Telefone:</label>
						</div>
						<div class="col-md-4">
							<input id="txtTelefone" name="txtTelefone" type="text" class="form-control"/>
						</div>
						<div class="col-md-1 md-offset-1">
							<input class="form-check-input" type="radio"
							   name="txtTelefoneTipo" id="txtTelefoneTipo" value="fixo">
						</div>
						<div class="col-md-1">
							<label class="form-check-label" for="txtTelefoneTipo">Fixo</label>
						</div>
						<div class="col-md-1 md-offset-1">
							<input class="form-check-input" type="radio"
								 name="txtTelefoneTipo" id="txtTelefoneTipo" value="celular"/>
						</div>
						<div class="col-md-1">
							<label class="form-check-label" for="txtTelefoneTipo">Celular</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="txtEndereco">Endereço:</label>
					<input id="txtEndereco" name="txtEndereco" type="text" class="form-control"/>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-1">
							<label for="txtBairro">Bairro:</label>
						</div>
						<div class="col-md-3">
							<input id="txtBairro" name="txtBairro" type="text" class="form-control"/>
						</div>
						<div class="col-md-1">
							<label for="txtCidade">Cidade:</label>
						</div>
						<div class="col-md-4">
							<input id="txtCidade" name="txtCidade" type="text" class="form-control"/>
						</div>
						<div class="col-md-1">
							<label for="txtCEP">Cep:</label>
						</div>
						<div class="col-md-2">
							<input id="txtCEP" name="txtCEP" type="text" class="form-control"/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="txtEscolaridade">Escolaridade:</label>
						<select id="txtEscolaridade" name="txtEscolaridade" class="form-control">
						<option disabled selected></option>
						<option>Pós graduado</option>
						<option>Superior completo</option>
						<option>Ensino médio completo</option>
						<option>Fundamental completo</option>
						<option>Fundamental incompleto</option>
					</select>
				</div>

				<div class="form-group">
					<label for="txtInstituicao">Informe o nome da ultima instituição de ensino onde estudou:</label>
					<input id="txtInstituicao" name="txtInstituicao" type="text" class="form-control"/>
				</div>

				<div class="form-group">
					<label for="txtEmpresa">Se estiver trabalhando informe o nome da empresa onde trabalha:</label>
					<input id="txtEmpresa" name="txtEmpresa" type="text" class="form-control"/>
				</div>

				<div class="form-group">
					<label>Quais são suas áreas de interesse:</label>
					<div class="row">
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
								   name="txtArea[]" id="txtCarreira" value="carreira">
						</div>
						<div class="col-md-2">
							<label class="form-check-label" for="txtCarreira">Carreira Profissional</label>
						</div>
						<div class="col-md-2">
							<label class="form-check-label" for="txtCarreiraEspec">Especifique:</label>
						</div>
						<div class="col-md-6">
							<input id="txtCarreiraEspec" name="txtCarreiraEspec" type="text" class="form-control"/>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
							   name="txtArea[]" id="txtLogistica" value="logistica">
						</div>
						<div class="col-md-4">
							<label class="form-check-label" for="txtLogistica">Logistica:</label>
						</div>
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtComex" value="comex"/>
						</div>
						<div class="col-md-4">
							<label class="form-check-label" for="txtComex">Comercio Exterior:</label>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
							   name="txtArea[]" id="txtRH" value="rh">
						</div>
						<div class="col-md-4">
							<label class="form-check-label" for="txtRH">Recursos Humanos:</label>
						</div>
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtMarketing"  value="marketing"/>
						</div>
						<div class="col-md-4">
							<label class="form-check-label" for="txtMarketing">Marketing:</label>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
							   	name="txtArea[]" id="txtFin" value="financas">
						</div>
						<div class="col-md-10">
							<label class="form-check-label" for="txtFin">Financas:</label>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
							   name="txtArea[]" id="txtRedes" value="redes">
						</div>
						<div class="col-md-4">
							<label class="form-check-label" for="txtRedes">Redes de computadores:</label>
						</div>
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtDb"  value="db"/>
						</div>
						<div class="col-md-4">
							<label class="form-check-label" for="txtDb">Bancos de dados:</label>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
							   name="txtArea[]" id="txtProg" value="prog">
						</div>
						<div class="col-md-4">
							<label class="form-check-label" for="txtProg">Programação:</label>
						</div>
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
									name="txtArea[]" id="txtDscience"  value="dscience"/>
						</div>
						<div class="col-md-4">
							<label class="form-check-label" for="txtDscience">Data Science:</label>
						</div>
					</div>


					<div class="row">
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
									 name="txtArea[]" id="txtTecEmerg" value="tec_emerg">
						</div>
						<div class="col-md-2">
							<label class="form-check-label" for="txtTecEmerg">Tecnologias Emergentes</label>
						</div>
						<div class="col-md-2">
							<label class="form-check-label" for="txtTecEmergEspec">Especifique:</label>
						</div>
						<div class="col-md-6">
							<input id="txtTecEmergEspec" name="txtTecEmergEspec" type="text" class="form-control"/>
						</div>
					</div>


					<div class="row">
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
									 name="txtArea[]" id="txtAutom" value="autom">
						</div>
						<div class="col-md-2">
							<label class="form-check-label" for="txtAutom">Automação</label>
						</div>
						<div class="col-md-2">
							<label class="form-check-label" for="txtAutomEspec">Especifique:</label>
						</div>
						<div class="col-md-6">
							<input id="txtAutomEspec" name="txtAutomEspec" type="text" class="form-control"/>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
									 name="txtArea[]" id="txtRobot" value="robot">
						</div>
						<div class="col-md-2">
							<label class="form-check-label" for="txtRobot">Robótica/IoT</label>
						</div>
						<div class="col-md-2">
							<label class="form-check-label" for="txtRobotEspec">Especifique:</label>
						</div>
						<div class="col-md-6">
							<input id="txtRobotEspec" name="txtRobotEspec" type="text" class="form-control"/>
						</div>
					</div>

					<div class="row">
						<div class="col-md-1 offset-md-1">
							<input class="form-check-input" type="checkbox"
									 name="txtArea[]" id="txtOutros" value="outros">
						</div>
						<div class="col-md-2">
							<label class="form-check-label" for="txtOutros">Outros</label>
						</div>
						<div class="col-md-2">
							<label class="form-check-label" for="txtOutrosEpec">Especifique:</label>
						</div>
						<div class="col-md-6">
							<input id="txtOutrosEpec" name="txtOutrosEpec" type="text" class="form-control"/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Quais horários você tem disponibilidade para cursar, marque todos seus horários disponíveis:</label>
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
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="seg-manha">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="ter-manha">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="qua-manha">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="qui-manha">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="sex-manha">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="sab-manha">
								</td>
							</tr>

							<tr>
								<th>Tarde</th>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="seg-tarde">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="ter-tarde">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="qua-tarde">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="qui-tarde">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="sex-tarde">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="sab-tarde">
								</td>
							</tr>

							<tr>
								<th>Noite</th>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="seg-noite">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="ter-noite">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="qua-noite">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="qui-noite">
								</td>
								<td><input class="form-check-input" type="checkbox"
							   			name="txtHorario[]" id="txtHorario" value="sex-noite">
								</td>
								<td><label>Indisponível</label>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="form-group">
					<button type="submit" name="txtButton" value="submeter" class="btn btn-primary">Submeter</button>
				</div>
			</div>
		</form>
	</body>

</html>
