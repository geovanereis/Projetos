<?php

	include_once("conf/conexao.php");

	
	$html = "";
	
	$result = "SELECT * FROM form_ouvidoria where gera_pdf='0'";
	$resultado = mysqli_query($conn, $result);
	
	
	while($row_resultado = mysqli_fetch_assoc($resultado)){
		$html .= "<header><img id='imagem' style='position: absolute;' src='img/logo.png' alt='some text' width=115 height=50></header>";
		$html .= "<header><h2><center><div id='texto' style='margin-top: -30px' >Relatorio de Ouvidoria Interna</div></center></h2></header>";
		$html .= "<br><br><br><br><br><br><b>Nome:</b><br><br> Resposta:<i>" .$row_resultado['NOME'] ."</i><br><br>";
		$html .= "<br><b>Contato:</b><br><br> Resposta:<i>" .$row_resultado['CONTATO'] ."</i><br>";
		$html .= "<br><b>Empresa:</b><br><br> Resposta:<i>" .$row_resultado['EMPRESA'] ."</i><br>";
		$html .= "<b>Data do Ocorrido:</b><br><br> Resposta:<i> " .$row_resultado['DTOCORRIDO'] ."</i><br><br>";
		$html .= "<b>Solicitação:</b><br><br> Resposta:<i> " .$row_resultado['SOLICITACAO'] ."</i><br><br>";
		$html .= "<b>Relato:</label></b><br><br> Resposta:<i> " .$row_resultado['RELATO'] ."</i><br><br><br><br><br<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
		$html .= "<div id='rrodape'><b>Data do registro:</b><i> " .$row_resultado['DATA'] . "</i></div><hr>";
		$html .= "<div style='page-break-after: always'></div>";
		//$html .= "<center><img id='imagem' src='img/Imagem.jpg' alt='some text' width=500 height=50></center>";
		

//
		
		$gerou = "UPDATE form_ouvidoria SET gera_pdf = '1'";
		mysqli_query($conn, $gerou);
	};

// include autoloader
require_once 'dompdf/autoload.inc.php';

// referenciando o namespace do dompdf
	


use Dompdf\Dompdf;

// instanciando o dompdf

$dompdf = new Dompdf();

//lendo o arquivo HTML correspondente

//$html = file_get_contents('modelo.pjg');

//inserindo o HTML que queremos converter

//<img id="imagem" style="position: absolute;" src="img/logo.png" alt="some text" width=115 height=50>
$dompdf->loadHtml( '
<body>
<style>
div#rodape{
    height: 200px;
    position: absolute; top: 1900px; left: -10px; bottom: 0px font-size: x-small;
    width: 150%;
    padding: 0px;
    margin: 0px 0px 0px 0px;
    position: absolute;
    top: 2000px;
    right: 0px;
    bottom: 10px;}
</style>
'. $html .'');


//Definindo o tipo de fonte padrão

$dompdf->set_option('defaultFont', 'Times New Roman’');

// Definindo o papel e a orientação

$dompdf->setPaper('A4', 'portrait');

// Renderizando o HTML como PDF

$dompdf->render();

// Enviando o PDF para o browser

$today = date("d.m.y H:i:s");


//$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
//echo exec('whoami'); 
file_put_contents('PDF/document.pdf', $dompdf->output());

?>
