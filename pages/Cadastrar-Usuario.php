<?php

 "Nome: ".$NomeJogador = $_POST['NomePlayer'];
 "<br>";
 "Email: ".$EmailJogador = $_POST['EmailUsuario'];
 "<br>";
 "Senha: ".$SenhaJogador = $_POST['SenhaUsuario'];
 "<br>";

$QueryCadastrarUsuario = "
    INSERT INTO tb_usuarios(nome_usuario,email_usuario,senha_usuario)
    VALUES('$NomeJogador','$EmailJogador','$SenhaJogador')
";

$ExeQrCadastrarUsuario = mysqli_query($connection, $QueryCadastrarUsuario);

if($ExeQrCadastrarUsuario){
    include 'pages/Logar-Usuario.php';
}