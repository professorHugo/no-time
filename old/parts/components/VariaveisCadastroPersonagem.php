<?php
#Variáveis para armazenamento no banco
$IdPlayer = $_SESSION['Login']['id_usuario'];
$NomePlayer = $_SESSION['Login']['nome_usuario'];
$NomePersonagem = $_POST['NomePersonagem'];
$RacaPersonagem = $_POST['Raca'];
$ClassePersonagem = $_POST['ClassePersonagem'];

$XPPersonagem = 0;
$LvPersonagem = 1;
$AtkPersonagem = $_POST['AtkRestante'];
$HabPersonagem = $_POST['HabilidadeRestante'];

#Atributos
$Atr1Titulo = $_POST['atr1'];
$Atr2Titulo = $_POST['atr2'];
$Atr3Titulo = $_POST['atr3'];
$Atr4Titulo = $_POST['atr4'];
$Atr1Valor = $_POST['atr1_v'];
$Atr2Valor = $_POST['atr2_v'];
$Atr3Valor = $_POST['atr3_v'];
$Atr4Valor = $_POST['atr4_v'];

#Habilidades da classe
$Hab1Titulo = $_POST['hab_c1t'];
$Hab2Titulo = $_POST['hab_c2t'];
$Hab3Titulo = $_POST['hab_c3t'];
$Hab4Titulo = $_POST['hab_c4t'];
$Hab5Titulo = "Especial";
$Hab1Valor = $_POST['hab_c1'];
$Hab2Valor = $_POST['hab_c2'];
$Hab3Valor = $_POST['hab_c3'];
$Hab4Valor = $_POST['hab_c4'];
$Hab5Valor = 18;

#Equipamentos
$Arma1 = $_POST['arma1_player'];
$Arma2 = $_POST['arma2_player'];
$Def = $_POST['def1_player'];

$Habilidade1 = $_POST['habilidade1'];
$Habilidade2 = $_POST['habilidade2'];