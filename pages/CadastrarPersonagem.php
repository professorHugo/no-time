<?php
include 'parts/components/VariaveisCadastroPersonagem.php';


#Query para cadastro
    $QueryCadastrarPersonagem = "
    INSERT INTO tb_players
    (
        nome_player,
        personagem_player,
        raca_player,
        classe_player,
        xp_player,
        lv_player,
        atk_player, 
        hab_player,
        atr1_titulo, 
        atr2_titulo, 
        atr3_titulo, 
        atr4_titulo, 
        atr1_v, 
        atr2_v, 
        atr3_v, 
        atr4_v, 
        hab1_titulo, 
        hab2_titulo, 
        hab3_titulo, 
        hab4_titulo, 
        hab5_titulo, 
        hab1_v, 
        hab2_v, 
        hab3_v, 
        hab4_v, 
        hab5_v, 
        arma1_player, 
        arma2_player,
        arma3_player,
        arma4_player,
        arma5_player,
        def1_player,
        def2_player,
        def3_player,
        habilidade1, 
        habilidade2,
        habilidade3,
        habilidade4,
        habilidade5,
        habilidade6,
        habilidade7,
        habilidade8,
        habilidade9
    )
    VALUES(
        '$IdPlayer',    
        '$NomePersonagem',    
        '$RacaPersonagem',    
        '$ClassePersonagem',    
        '$XPPersonagem',    
        '$LvPersonagem',    
        '$AtkPersonagem',    
        '$HabPersonagem',    
        '$Atr1Titulo',    
        '$Atr2Titulo',    
        '$Atr3Titulo',    
        '$Atr4Titulo',    
        '$Atr1Valor',    
        '$Atr2Valor',    
        '$Atr3Valor',    
        '$Atr4Valor',    
        '$Hab1Titulo',    
        '$Hab2Titulo',    
        '$Hab3Titulo',    
        '$Hab4Titulo',    
        '$Hab5Titulo',    
        '$Hab1Valor',    
        '$Hab2Valor',    
        '$Hab3Valor',    
        '$Hab4Valor',    
        '$Hab5Valor',    
        '$Arma1',    
        '$Arma2',
        1,
        1,
        1,
        '$Def',
        1,
        1,
        '$Habilidade1',    
        '$Habilidade2',
        1,
        1,
        1,
        1,
        1,
        1,
        1
    )
";
    $ExeQrCadastrarPersonagem = mysqli_query($connection, $QueryCadastrarPersonagem);
    
    if($ExeQrCadastrarPersonagem){
        echo "Cadastrado";
    }else{
        echo "Não cadastrado" . mysql_error();
    }
?>
<table class="table table-bordered table-responsive">
    <tr>
        <td>Jogador</td>
        <td colspan="5">ID: <?php echo $IdPlayer?> - <?php echo $NomePlayer?></td>
    </tr>
    <tr>
        <td>Nome do Personagem</td>
        <td colspan="5"><?php echo $NomePersonagem?></td>
    </tr>
    <tr>
        <td>Raça do Personagem</td>
        <td colspan="5"><?php echo $RacaPersonagem = $_POST['Raca']?></td>
    </tr>
    <tr>
        <td>Classe do Personagem</td>
        <td colspan="5"><?php echo $ClassePersonagem = $_POST['ClassePersonagem']?></td>
    </tr>
    <tr>
        <td>XP do Personagem</td>
        <td colspan="5"><?php echo $XPPersonagem = 0?></td>
    </tr>
    <tr>
        <td>Lv do Personagem</td>
        <td colspan="5"><?php echo $LvPersonagem = 1?></td>
    </tr>
    <tr>
        <td>Pts de Atributo Restante</td>
        <td colspan="5"><?php echo $AtkPersonagem = $_POST['AtkRestante']?></td>
    </tr>
    <tr>
        <td>Atributos aplicados</td>
        <td><?php echo $Atr1Titulo . " : " . $Atr1Valor?></td>
        <td><?php echo $Atr2Titulo . " : " . $Atr2Valor?></td>
        <td><?php echo $Atr3Titulo . " : " . $Atr3Valor?></td>
        <td><?php echo $Atr4Titulo . " : " . $Atr4Valor?></td>
        <td>-</td>
    </tr>
    <tr>
        <td>Pts de Habilidade restante:</td>
        <td colspan="5"><?php echo $HabPersonagem = $_POST['HabilidadeRestante']?></td>
    </tr>
    <tr>
        <td>Atributos aplicados</td>
        <td><?php echo $Hab1Titulo . " : " . $Hab1Valor ?> </td>
        <td><?php echo $Hab2Titulo . " : " . $Hab2Valor ?> </td>
        <td><?php echo $Hab3Titulo . " : " . $Hab3Valor ?> </td>
        <td><?php echo $Hab4Titulo . " : " . $Hab4Valor ?> </td>
        <td><?php echo "<b>".$Hab5Titulo . "</b> : " . $Hab5Valor ?> </td>
    </tr>
    <tr>
        <td>Equipamento de ataque</td>
        <td colspan="5">
            <table class="table-responsive" border="1" width="100%">
                <tr>
                    <td colspan="2">
                        <?php
                            $QueryBuscarInfoArmas1 = "
                                SELECT * FROM tb_item_armas WHERE id_item_arma = $Arma1
                            ";
                            $ExeQrBuscarInfoArmas1 = mysqli_query($connection, $QueryBuscarInfoArmas1);
                            while($Arma1_E = mysqli_fetch_assoc($ExeQrBuscarInfoArmas1)){
                                ?>
                                Identificação: <?php echo $Arma1_E['id_item_arma'];?> |
                                Descrição: <?php echo $Arma1_E['descricao_item_arma'];?> | 
                                Tipo: <?php echo $Arma1_E['tipo_item_arma'];?> | 
                                Dano: <?php echo $Arma1_E['dano_item_arma'];?>
                                <?php
                            }
                        ?>
                    </td>
                    <td colspan="2">
                        <?php
                            $QueryBuscarInfoArmas2 = "
                                SELECT * FROM tb_item_armas WHERE id_item_arma = $Arma2
                            ";
                            $QueryBuscarInfoArmas2 = mysqli_query($connection, $QueryBuscarInfoArmas2);
                            while($Arma2_E = mysqli_fetch_assoc($QueryBuscarInfoArmas2)){
                                ?>
                                Identificação: <?php echo $Arma2_E['id_item_arma'];?> |
                                Descrição: <?php echo $Arma2_E['descricao_item_arma'];?> | 
                                Tipo: <?php echo $Arma2_E['tipo_item_arma'];?> | 
                                Dano: <?php echo $Arma2_E['dano_item_arma'];?>
                                <?php
                            }
                        ?>
                    </td>
                </tr>
            </table>            
        </td>
    </tr>
    <tr>
        <td>Equipamento de defesa</td>
        <td colspan="5">
            <table class="table-responsive" width="100%">
                <tr>
                    <td colspan="5">
                        <?php
                            $QueryBuscarInfoDef = "
                                SELECT * FROM tb_item_def WHERE id_item_def = $_POST[def1_player]
                            ";
                            $ExeQrBuscarInfoDef = mysqli_query($connection, $QueryBuscarInfoDef);
                            while($Def = mysqli_fetch_assoc($ExeQrBuscarInfoDef)){
                                ?>
                                Identificação: <?php echo $Def['id_item_def'];?> |
                                Descrição: <?php echo $Def['descricao_item_def'];?> | 
                                Tipo: <?php echo $Def['tipo_item_def'];?> | 
                                Dano: <?php echo $Def['dano_item_def'];?>
                                <?php
                            }
                        ?>
                    </td>
                </tr>
            </table>            
        </td>
    </tr>
    <tr>
        <td>Técnicas Escolhidas</td>
        <td colspan="5">
            <table class="table-responsive" border="1" width="100%">
                <tr>
                    <td>
                        Habilidade 1: <?php echo $Habilidade1?> - 
                        <?php
                            $QueryBuscarHabDesc1 = "
                                SELECT * FROM tb_lista_habilidades WHERE id_habilidade = $Habilidade1
                            ";
                            $ExeQrBuscarHabDesc1 = mysqli_query($connection, $QueryBuscarHabDesc1);
                            foreach($ExeQrBuscarHabDesc1 as $Hab1):
                            ?>
                            Descrição: <?php echo $Hab1['habilidade']?> <br> 
                            Dificuldade: <?php echo $Hab1['dif_habilidade']?> <br>
                            Dano da Habilidade: <?php echo $Hab1['dano_habilidade']?> <br>
                            Descrição:<?php echo $Hab1['descricao_habilidade']?>
                            <?php
                            endforeach;
                        ?>
                    </td>
                    <td>
                        Habilidade 2: <?php echo $Habilidade2?>
                        <?php
                            $QueryBuscarHabDesc2 = "
                                SELECT * FROM tb_lista_habilidades WHERE id_habilidade = $Habilidade2
                            ";
                            $ExeQrBuscarHabDesc2 = mysqli_query($connection, $QueryBuscarHabDesc2);
                            foreach($ExeQrBuscarHabDesc2 as $Hab2):
                            ?>
                            Descrição: <?php echo $Hab2['habilidade']?> <br> 
                            Dificuldade: <?php echo $Hab2['dif_habilidade']?> <br>
                            Dano da Habilidade: <?php echo $Hab2['dano_habilidade']?> <br>
                            Descrição:<?php echo $Hab2['descricao_habilidade']?>
                            <?php
                            endforeach;
                        ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>