<?php

	include_once("conf/conexao.php");

	
	$html = "";
	
	$result = "SELECT * FROM DUNCADASTROS where gera_pdf='0'";
	$resultado = mysqli_query($conn, $result);
	
	
	while($row_resultado = mysqli_fetch_assoc($resultado)){
		
			
		//$html .= "<center><img id='imagem' src='img/Imagem.jpg' alt='some text' width=500 height=50></center>";
				
		$html .= "<table border='1' width='100%' style='border-collapse: collapse;'>
        <tr>
            <th colspan=2><center>Dados de Acesso</center></th>
        </tr>
        <tr>
            <td><b>Nome:</b></td>
            <td>".$row_resultado['NOME'] ."</td>
        </tr>
        <tr>
            <td><b>Contrato:</b></td>
            <td>".$row_resultado['TIPOCONTRATO'] ."</td>
        </tr>
        <tr>
            <td><b>Empresa:</b></td>
            <td>".$row_resultado['EMPRESA'] ."</td>
		</tr>
		<tr>
            <td><b>Setor:</b></td>
            <td>".$row_resultado['SETOR'] ."</td>
		</tr>
		<tr>
            <td><b>Cargo:</b></td>
            <td>".$row_resultado['CARGO'] ."</td>
        </tr>
		<tr>
            <td><b>Acessos Solicitados:</b></td>
            <td>".$row_resultado['ACESSOS'] ."</td>
        </tr>
        <tr>
            <td><b>Grupos de Email:</b></td>
            <td>".$row_resultado['GRUPOEMAIL'] ."</td>
        </tr>
        <tr>
            <td><b>Computador novo:</b></td>
            <td>".$row_resultado['PCNOVO'] ."</td>
        </tr>
		<tr>
            <td><b>Data de Solicitação:</b></td>
            <td>".$row_resultado['DTSOLICITACAO'] ."</td>
        </tr>
        
		</table>";
		$html .= "<div style='page-break-after: always'></div>";

		
		 $gerou = "UPDATE DUNCADASTROS SET gera_pdf = '1'";
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


//$dompdf->stream("PDF/document.pdf", array("Attachment" => false));
//echo exec('whoami'); 
file_put_contents('PDF/document.pdf', $dompdf->output());

require_once("envioemail.php");

?>
