<?php require_once 'configurations/config.php'; ?>
<?php
ob_start();
session_start();
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
        <div class="section col-md-10 col-md-push-1">
            <h1>Status do Jogo: Criação</h1>
            
            <?php 
                if(isset($_GET['url'])){
                    $Url = $_GET['url'];
                    switch($Url){
                        case $Url: include "pages/" . $Url . ".php";break;
                    }
                }else{
                    
                    include 'parts/MostrarPlayers.php';

                }  
            
            
            ?>
                        
        </div>
        <?php include 'parts/Modals/Criacao-Personagem.php';?>
    </body>
</html>
<?php

?>