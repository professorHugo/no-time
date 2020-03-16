<?php
include 'parts/components/VariaveisCadastroPersonagem.php';


#Query para cadastro
    $QueryCadastrarPersonagem = "
        INSERT INTO tb_players (nome_player,personagem_player,raca_player,classe_player,xp_player,lv_player,atk_player,hab_player,atr1_titulo,atr2_titulo,atr3_titulo,atr4_titulo,atr1_v,atr2_v,atr3_v,atr4_v,hab1_titulo,hab2_titulo,hab3_titulo,hab4_titulo,hab5_titulo,hab1_v,hab2_v,hab3_v,hab4_v,hab5_v,arma1_player,arma2_player,arma3_player,arma4_player,arma5_player,def1_player,def2_player,def3_player,habilidade1,habilidade2,habilidade3,habilidade4,habilidade5,habilidade6,habilidade7,habilidade8,habilidade9)
        VALUES('$IdPlayer','$NomePersonagem','$RacaPersonagem','$ClassePersonagem','$XPPersonagem','$LvPersonagem','$AtkPersonagem','$HabPersonagem','$Atr1Titulo','$Atr2Titulo','$Atr3Titulo','$Atr4Titulo','$Atr1Valor','$Atr2Valor','$Atr3Valor','$Atr4Valor','$Hab1Titulo','$Hab2Titulo','$Hab3Titulo','$Hab4Titulo','$Hab5Titulo','$Hab1Valor','$Hab2Valor','$Hab3Valor','$Hab4Valor','$Hab5Valor','$Arma1','$Arma2',1,1,1,'$Def',1,1,'$Habilidade1','$Habilidade2',1,1,1,1,1,1,1)
    ";
    $ExeQrCadastrarPersonagem = mysqli_query($connection, $QueryCadastrarPersonagem);
    
    if($ExeQrCadastrarPersonagem){
        echo "Cadastrado";
        ?>
        <meta http-equiv="refresh" content="0;?url=Todos-Os-Personagens">
<!--        Criar modal de personagem-->
        <?php
    }else{
        echo "Não cadastrado" . mysql_error();
    }
?>