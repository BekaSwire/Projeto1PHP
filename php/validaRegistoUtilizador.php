<?php
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$morada = $_POST['morada'];
$morada2 = $_POST['morada2'];
$concelho = $_POST['concelho'];
$distrito = $_POST['distrito'];
$codigoPostal = $_POST['codPos'];
$diUser = $_POST['diUser'];
$dfUser = $_POST['dfUser'];
$check = $_POST['check'];

echo "O utilizador $nome $apelido com o 
$mail, residente $morada, $morada2,
concelho $concelho do distrito de 
$distrito $codigoPostal com data de 
começo $diUser e data de fim $dfUser 
registado: $check";

$file = fopen("../registo.txt","a+");
if(file_exists("../registo.txt")){
    $valor = "Nome: $nome $apelido\n
Email: $mail\n
Morada: $morada, $morada2\n
Concelho: $concelho\n
Distrito: $distrito\n
Código Postal: $codigoPostal\n
Data Início: $diUser\n
Data Fim: $dfUser\n
#########################################\n";
fwrite($file, $valor);
}else{
    echo "<script>alert('Erro ao criar ficheiro');</script>";
}
fclose($file);
?>