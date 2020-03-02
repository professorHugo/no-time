<?php
$Player = $_SESSION['Login']['id_usuario'];
//Validação para administradores
if($_SESSION['Login']['nivel_usuario'] == 1){
    $QueryBuscarPlayers = "
    SELECT 
        p.*,
        r.nome_raca,
        c.nome_classe,
        xp.lv_pontos_xp

    FROM tb_players p

    INNER JOIN tb_racas r
        ON p.raca_player = r.id_raca

    INNER JOIN tb_classes c
        ON p.classe_player = c.id_classe

    INNER JOIN tb_levels xp
        ON p.lv_player = xp.id_level
    ";
    $ExeQrBuscarPlayers = mysqli_query($connection, $QueryBuscarPlayers);
    $LinQrBuscarPlayers = mysqli_num_rows($ExeQrBuscarPlayers);
}else{
    $QueryBuscarPlayers = "
    SELECT 
        p.*,
        r.nome_raca,
        c.nome_classe,
        xp.lv_pontos_xp

    FROM tb_players p

    INNER JOIN tb_racas r
        ON p.raca_player = r.id_raca

    INNER JOIN tb_classes c
        ON p.classe_player = c.id_classe

    INNER JOIN tb_levels xp
        ON p.lv_player = xp.id_level
    WHERE nome_player = '$Player' 
    ";
    $ExeQrBuscarPlayers = mysqli_query($connection, $QueryBuscarPlayers);
    $LinQrBuscarPlayers = mysqli_num_rows($ExeQrBuscarPlayers);
}


if($ExeQrBuscarPlayers){
    if($LinQrBuscarPlayers > 0){
    ?>
<h2 style="margin-left:1.5%">Players Cadastrados: <?php echo $LinQrBuscarPlayers?></h2>
<hr style="margin-left:1.5%">
<div style="margin-left:15px">
<?php
    while($Players = mysqli_fetch_assoc($ExeQrBuscarPlayers)){
?>
<div class="col-xs-12 col-md-3" style="margin-bottom: 25px;border-radius:10px">
    Identificação: <?php echo $Players['id_player']?> <br>
    Jogador: <?php echo lmWord($Players['nome_player'],18)?><br>
    Personagem: <?php echo lmWord($Players['personagem_player'],18)?> <br>
    Classe: <?php echo $Players['nome_classe'] ?> <br>
    Level: 1 <br>
    <a href="?url=MostrarPlayer&Player=<?php echo $Players['id_player']?>">
       <button class="btn btn-default btn-xs" style="width:100%;">
           <i class="glyphicon glyphicon-eye-open"></i>
       </button>
    </a>
</div>

<?php
}
?>
</div>
<?php
    }
}else{
    echo "Você ainda não tem personagens";
}
