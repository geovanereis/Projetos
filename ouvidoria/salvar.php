<?php

require_once("conf/conexao.php");
//require_once("gera_pdf.php");
//require_once("envioemail.php");

$nome  = $_POST['nome'];
$contato = $_POST["contato"];
$empresa  = $_POST['nomeempresa']; 
$dtocorrido = $_POST['dataocorrido']; 
$solicitacao  = $_POST['solicitacao'];
$relato  = $_POST['relato'];
//$data = 'now()';


//echo('".$empresa."','".$dtocorrido."','".$solicitacao."','".$relato."');

$insert = mysqli_query( $conn,"INSERT INTO form_ouvidoria (empresa,dtocorrido,solicitacao,relato,gera_pdf,nome,contato) VALUES ('".$empresa."','".$dtocorrido."','".$solicitacao."','".$relato."','0','".$nome."','".$contato."')");

if($insert){
         echo "<script>alert('ENVIADO COM SUCESSO!');</script>";

         header("refresh:0;/ouvidoria");
         require_once("gera_pdf.php");
         require_once("envioemail.php");
} 

else {

        echo ("<script>alert('OCORREU UM ERRO INTERNO, INFORMAR O DEPARTAMENTO DE TI');</script>");
        header("refresh:5;/ouvidoria");
}

?>

