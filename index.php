<?php

 include("conf/conexao.php")
?> 

<!DOCTYPE html>
<meta charset="utf-8">
<head>
<title>Cadastro de Funcionario</title>

<link rel="icon" href="img/favicon_Dunorte.png" type="image/x-icon" />
<link href="script/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="script/bootstrap.min.js"></script>
<script src="script/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

   
</head>
<body>

	<form class="form-horizontal" action="salvar.php" class="cabecalho" method="post" >
			<div class="container">
				<fieldset>
					<div class="panel panel-primary" >
					    <div class="panel-heading" id="cabecalho">Cadastro de Funcionário</div>
					    
					    <div class="panel-body">
							<div class="form-group">

								<div class="col-md-11 control-label">
					        		<p class="help-block"><h11>*</h11> Campo Obrigatório </p>
								</div>
							</div>
						</div>

							<!-- Text input-->
							<div class="form-group">
					  			<label class="col-md-2 control-label" for="nome">Nome Completo: <h11>*</h11></label>  
					  				<div class="col-md-3">
					  					<input id="idnome" name="nnome" placeholder="" class="form-control input-md" required="" type="text">
					  				</div>

								<label class="col-md-2 control-label" for="radios">Contrato: <h11>*</h11></label>
				 					<div class="col-md-6"> 
								    	<label required="" class="radio-inline" for="radios-0" >
								      	<input name="ncontrato" id="idcontrato" value="Aprendiz" type="radio" required>
								      Aprendiz
								    </label> 
								    
								    <label class="radio-inline" for="radios-1">
								      <input name="ncontrato" id="idcontrato" value="Estagiario" type="radio">
								      Estagiario
								    </label>
								    
								    <label class="radio-inline" for="radios-2">
								      <input name="ncontrato" id="idcontrato" value="Experiencia" type="radio">
								      Experiência
								    </label>
								    
								    <label class="radio-inline" for="radios-3">
								      <input name="ncontrato" id="idcontrato" value="Efetivo" type="radio">
								      Efetivo
								    </label>
									<label class="radio-inline" for="radios-3">
								      <input name="ncontrato" id="idcontrato" value="Temporario" type="radio">
								      Temporario
								    </label>
								  </div>
							</div>

							<div class="form-group">
							  	<label class="col-md-2 control-label" for="selectempresa">Empresa: <h11>*</h11></label>
							  		<div class="col-md-2">
									    <select required="" id="idempresa" name="nempresa" class="form-control">
										    <option value=""></option>
											<option value="Empresa1">Empresa1</option>
									      	<option value="Empresa2">Empresa2</option>
									      	<option value="Empresa3">Empresa3</option>
									      	<option value="Empresa4">Empresa4</option>
										</select>
									</div>


							<div class="form-group">
							      <label class="col-md-2 control-label" for="setor">Setor: <h11>*</h11></label>
								   	<div class="col-md-2">
									    <select required="" id="idsetor" name="nsetor" class="form-control">
									      	<option value=""></option>
											<option value="Administrativo">Administrativo</option>  
										    <option value="Compras">Compras</option>
										    <option value="Vendas">Vendas</option>
										    <option value="Financeiro">Financeiro</option>
										    <option value="Credito">Credito</option>
										    <option value="Cobrança">Cobrança</option>
										    <option value="G&G">G&G</option>
										    <option value="Distribuicao">Distribuição</option>
										    <option value="Informatica">Informatica</option>
											<option value="Fiscal">Fiscal</option>
											<option value="Controle">Controle</option>
											<option value="Contabil">Contabil</option>
										</select>
									</div>

					        		<label class="col-md-1 control-label" for="setor">Cargo: <h11>*</h11></label>  
					    				<div class="col-md-2">
					      					<input id="idcargo" name="ncargo" placeholder="" class="form-control input-md" required="" type="text">
					    				</div>
							</div>

							<div class="form-group">
							  		<label class="col-md-2 control-label"  >Acessos a serem utilizados: <h11>*</h11></label>  

									  	<input type="checkbox" name="acesso[]" value="winthor">
									  	<label  id="acesso">Winthor</label>
									    
									    <input type="checkbox" name="acesso[]" value="senior">
									  	<label  id="acesso">Senior</label>
									    
									    <input type="checkbox" name="acesso[]" value="portal_polibras">
									  	<label  id="acesso">Polibras NET</label>
									    
									    <input type="checkbox" name="acesso[]" value="terminal">
									  	<label  id="acesso">Terminal(Acesso externo)</label>
									    
									    <input type="checkbox" name="acesso[]" value="impressao" >
									  	<label   id="acesso">Impressão</label>
										
										<input type="checkbox" name="acesso[]" value="email">
									  	<label  id="acesso">E-mail</label>
															

							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Grupo de Email:</label>  
									<div class="col-md-3">
					  					<input id="idgrupoemail" name="ngrupoemail" placeholder="" class="form-control input-md" type="text">
					  				</div>
								<label class="col-md-2 control-label" >Necessita de computador novo?</label>  
									<div class="col-md-3">
										<select required="" id="idpcnovo" name="npcnovo" class="form-control">
											<option value="Nao">Não</option>
											<option value="Sim">Sim</option>
										</select>
					  				</div>	  
							</div>

						<div class="form-group">
							<h1> Determinações Gerais</h1><br>
							<p>

							<font color="red">01.</font> O uso dos serviços da Rede devem ser exclusivamente para fins do interesse público, vedado o uso particular. O uso indevido sera comunicado ao superior hierarquico.<br>
							
							<font color="red">02.</font> A senha é pessoal e intransferível. Não deve ser divulgada a quem quer que seja. Nem o Centro de Informática tem autorizacao para conhecê-la. Habitue  trocá-la periodicamente. Faça o bloqueio da sua maquina ao se ausentar da sua sala e finalize a conexão ao encerrar seu acesso.<br>
							
							<font color="red">03.</font> Acessar a caixa postal de correio eletrônico, no mínimo, duas vezes ao dia. Elimine as mensagens já lidas caso use o WebMail (Zimbra).<br>
							
							<font color="red">04.</font> Declaro aceitar todas as determinações acima e as que vierem a ser divulgadas pelo Centro de Informática.
							</p><br>

							
						  <label class="col-md-5 control-label" align="center" ></label>
						  <div >

						  
						    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
						    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
						</div>
						
				</fieldset>
			</div>
		</div>
	</form>	