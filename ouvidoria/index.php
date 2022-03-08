<?php

 include("conf/conexao.php")

 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
</head>
<body>

<form action="salvar.php" class="cabecalho" method="post" enctype="multipart/form-data">

	<img src="img/cabecalho.jpg" alt="some text" width=600 height=150><br>
		<center>

		<h3>ESTE É UM CANAL ABERTO PARA VOCÊ!</h3><br>

		<p align="justify">A nossa Ouvidoria é um canal exclusivo para interação com nossos colaboradores, clientes e parceiros. Por meio dela, recebemos e tratamos denúncias, críticas, sugestões ou elogios.
Caso você tenha testemunhado práticas e/ou condutas que estejam em desacordo com os nossos valores organizacionais e que infringem o nosso código de ética, poderá usar este canal para sua manifestação. 
As demandas recebidas são encaminhadas, monitoradas e respondidas com ética e confidencialidade.</p><br><br>

Sua manifestação é muito importante para nós!<br><br>

Obrigada<br><br>

<br><br></center>
		
		<div class="txtb">
			<h4> Identificação:</h4><br>
			<span>(A sua identificação não é obrigatória)</span><br>
			<label>Nome:</label>
			    <input type="text" name="nome" class="nome" placeholder="Digite seu nome" /> <br><br>
			<span>(Sugerimos deixar um contato: telefone ou e-mail)</span><br>
			<label>Contato:</label> 
				<input type="text" name="contato" class="contato" placeholder="Telefone ou E-mail" /><br><br><br><br>
		</div>


		<div class="txtb">
			<h4> Nome Empresa:</h4><br>
			<input type="radio" name="nomeempresa" value="Empresa1" required="" /> Empresa1 <br><br>
			<input type="radio" name="nomeempresa" value="Empresa2" required="" /> Empresa2 <br><br>
			<input type="radio" name="nomeempresa" value="Empresa3" required="" /> Empresa3 <br><br>
			<input type="radio" name="nomeempresa" value="Empresa4" required="" /> Empresa4 <br><br>
			<input type="radio" name="nomeempresa" value="Empresa5" required="" /> Empresa5 <br><br>
			<input type="radio" name="nomeempresa" value="Empresa6" required="" /> Empresa6 <br><br><br><br>
		</div>

		<div class="txtb">
			<h4> Qual a data do ocorrido?</h4><br>
			<input type="date" name="dataocorrido" class="data" required=""><br><br><br><br>
		</div>

		<div class="txtb">
			<h4> Qual a sua solicitação?</h4><br>
			
			<input type="radio" name="solicitacao" value="elogio" required="" /> ELOGIO <img src="icon/infor.png" width="14" height="14" ata-toggle="tooltip" data-placement="right" title="Elogie para a gente saber!"> <br><br>
			<input type="radio" name="solicitacao" value="critica" required="" /> CRÍTICA <img src="icon/infor.png" width="14" height="14" ata-toggle="tooltip" data-placement="right" title="Critique para a gente resolver!"> <br><br>
			<input type="radio" name="solicitacao" value="reclamacao" required="" /> RECLAMAÇÃO <img src="icon/infor.png" width="14" height="14" ata-toggle="tooltip" data-placement="right" title="Sugira para a gente melhorar!"> <br><br>
			<input type="radio" name="solicitacao" value="denuncia" required=""  /> DENÚNCIA <img src="icon/infor.png" width="14" height="14" ata-toggle="tooltip" data-placement="right" title="Denuncie para a gente apurar!"> <br><br>
			<p align="justify">Em caso de denúncias, o detalhamento de informações (fatos, pessoas envolvidas, evidências, etc.) é imprescindível para contribuir com o processo de investigação. </p><br><br>

		</div>

		Anexo: <input type="file" id="arquivo" name="arquivo" /></td><br><br><br><br>			

		<div>
			<h4> Deixe aqui o seu relato:</h4><br>
			<textarea placeholder="Seu texto aqui!" name="relato" required=""></textarea>
		</div><br><br>


		<center><input type="submit" class="logbtn" value="Enviar" required="" /></center><br><br>
		<!--<center><div class="g-recaptcha" data-sitekey="6Lcth9oUAAAAAHG-65fUvJClFITuYJJUsqjZl_xg"></div></center>-->

	</form>

</body>
</html>