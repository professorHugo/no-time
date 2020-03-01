<?php
if(isset($_GET['Player'])){
    $Player = $_GET['Player'];
    
    $QueryBuscarPlayers = "
    SELECT 
        p.*,
        r.nome_raca,
        c.nome_classe,
        j.nome_usuario,

        ta.descricao_item_arma,
        ta.tipo_item_arma,
        ta.dano_item_arma,

        ta1.descricao_item_arma,
        ta1.tipo_item_arma,
        ta1.dano_item_arma
        
    FROM tb_players p

    INNER JOIN tb_racas r
        ON p.raca_player = r.id_raca

    INNER JOIN tb_classes c
        ON p.classe_player = c.id_classe

    INNER JOIN tb_item_armas ta
        ON p.arma1_player = ta.id_item_arma

    INNER JOIN tb_item_armas ta1
        ON p.arma2_player = ta1.id_item_arma
        
    INNER JOIN tb_usuarios j
        ON p.nome_player = j.id_usuario

    WHERE id_player = $Player
    ";

$ExeQrBuscarPlayers = mysqli_query($connection, $QueryBuscarPlayers);
$ResQrBuscarPlayers = mysqli_num_rows($ExeQrBuscarPlayers);

if( $ResQrBuscarPlayers > 0 ){
    while($ResPlayers = mysqli_fetch_assoc($ExeQrBuscarPlayers)){
        ?>

<div class="col-xs-6 block-dados-personagem">
    <div class="col-xs-6">
        <h4 class="text-center">Dados do Jogador</h4>
        <hr>
        <p>Nome do Jogador: <?php echo $ResPlayers['nome_usuario']?></p>
        <p>Personagem: <?php echo $ResPlayers['personagem_player']?></p>
        <p>Raça: <?php echo $ResPlayers['nome_raca']?></p>
        <p>Classe: <?php echo $ResPlayers['nome_classe']?></p>
        <p>Level: <?php echo $ResPlayers['lv_player']?></p>
        <p>Pontos de xp: <?php echo $ResPlayers['xp_player']?></p>
        <p>Pontos de Habildiade: <?php echo $ResPlayers['hab_player']?></p>
    </div>
    <div class="col-xs-6">
        <?php include 'parts/add/armas.php';include 'parts/add/defesa.php';include 'parts/add/historia.php';?>
    </div>

</div>
<div class="col-xs-6 block-dados-personagem">
    <h4 class="text-center">Atributos e Habilidades</h4>
    <hr>
    <div class="col-xs-6">
        <p><?php echo $ResPlayers['atr1_titulo'] . ": " . $ResPlayers['atr1_v'];?></p>
        <p><?php echo $ResPlayers['atr2_titulo'] . ": " . $ResPlayers['atr2_v'];?></p>
        <p><?php echo $ResPlayers['atr3_titulo'] . ": " . $ResPlayers['atr3_v'];?></p>
        <p><?php echo $ResPlayers['atr4_titulo'] . ": " . $ResPlayers['atr4_v'];?></p>
    </div>
    <div class="col-xs-6">
        <p><?php echo $ResPlayers['hab1_titulo'] . ": " . $ResPlayers['hab1_v'];?></p>
        <p><?php echo $ResPlayers['hab2_titulo'] . ": " . $ResPlayers['hab2_v'];?></p>
        <p><?php echo $ResPlayers['hab3_titulo'] . ": " . $ResPlayers['hab3_v'];?></p>
        <p><?php echo $ResPlayers['hab4_titulo'] . ": " . $ResPlayers['hab4_v'];?></p>
        <p>Hab <?php echo $ResPlayers['hab5_titulo'] . ": " . $ResPlayers['hab5_v'];?></p>
    </div>
</div>
<div class="clearfix"></div>
<hr>
<div class="col-xs-12 block-dados-personagem" style="min-height: 20px;padding-top:20px">
    <?php        
        include 'parts/add/habilidades.php';
        ?>
</div>
<?php
    }
}
}
