<?php require_once 'configurations/config.php'; ?>
<?php
ob_start();
session_start();
//session_destroy();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>No time, BRo</title>
    <?php include_once 'parts/head.php'; ?>
</head>

<body>
    <div class="section">
        <?php include 'parts/Menu.php';?>
    </div>
    
    <h2 id="Background" class="section col-xs-10 col-xs-push-1">Status do Jogo: Criação</h2>

    <div class="section col-xs-10 col-xs-push-1 Background1">

        <?php
            //Cadastrar Usuário
            if(isset($_POST['CadastrarUsuario'])){
                include 'pages/Cadastrar-Usuario.php';
            }
            //Fazer Login através do Modal
            if(isset($_POST['FazerLogin'])){
                include 'pages/Logar-Usuario.php';
            }
            //Cadastrar Char
            if(isset($_POST['CadastrarPersonagem'])){
                include 'pages/CadastrarPersonagem.php';
            }
        
            
        
            if(isset($_GET['url'])){
                $Url = $_GET['url'];
                switch($Url){
                    case $Url: include "pages/" . $Url . ".php";break;
                    default: include "pages/Todos-Os-Personagens.php";break;
                }
            }else{
                include 'pages/Home.php';
            }
        ?>

    </div>
    <?php include 'parts/Modals/Criacao-Personagem.php';?>
    <?php include 'parts/Modals/Criar-Conta.php';?>
    <?php include 'parts/Modals/Fazer-Login.php';?>
</body>

</html>
<?php

?>