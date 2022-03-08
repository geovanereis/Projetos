<?php

require_once("conf/conexao.php");

//require_once("envioemail.php");

$nome  = $_POST['nnome'];
$contrato = $_POST["ncontrato"];
$empresa  = $_POST['nempresa']; 
$setor  = $_POST['nsetor'];
$cargo  = $_POST['ncargo'];
$acesso = $_POST['acesso'];
$comma_separated = implode(" , ", $acesso);
$grupoemail = $_POST['ngrupoemail'];
$pcnovo = $_POST['npcnovo'];


$assunto_nome = $nome;

//echo"('".$nome."','".$contrato."','".$empresa."','".$setor."','".$cargo."','".$comma_separated."')";


 $insert = mysqli_query( $conn,"INSERT INTO DUNCADASTROS (nome
                                                        ,tipocontrato
                                                        ,empresa
                                                        ,setor
                                                        ,cargo
                                                        ,acessos
                                                        ,gera_pdf
                                                        ,grupoemail
                                                        ,pcnovo) VALUES ('".$nome."','".$contrato."','".$empresa."','".$setor."','".$cargo."','".$comma_separated."','0','".$grupoemail."','".$pcnovo."')");


require_once("gerandopdf.php");

if($insert){
         echo "<script>alert('ENVIADO COM SUCESSO!');</script>";

         
} 

else {

        echo ("<script>alert('OCORREU UM ERRO INTERNO, INFORMAR O DEPARTAMENTO DE TI');</script>");
        header( "refresh:3;http://www.empresa.com.br" );
}

?>
