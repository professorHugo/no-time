<?php
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
if($LinQrBuscarPlayers > 0){
    ?>
    <h2>Players Cadastrados: <?php echo $LinQrBuscarPlayers?></h2>
    <table class="table table-striped">
        <tr>
            <td>Id do Player</td>
            <td>Jogador</td>
            <td>Personagem</td>
            <td>Classe</td>
            <td>Level</td>
            <td>XP</td>
            <td>Próximo Lv</td>
            <td>Ver</td>
        </tr>
    <?php
    while($Players = mysqli_fetch_assoc($ExeQrBuscarPlayers)){
        ?>
        <tr>
            <td><?php echo $Players['id_player']?></td>
            <td><?php echo $Players['nome_player']?></td>
            <td><?php echo $Players['personagem_player']?></td>
            <td><?php echo $Players['nome_classe']?></td>
            <td><?php echo $Players['lv_player']?></td>
            <td><?php echo $Players['xp_player']?></td>
            <td><?php echo $Players['lv_pontos_xp']?></td>
            <td><a href="?Player=<?php echo $Players['id_player']?>">Ver</a></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
}else{
    echo "Ainda não tem players cadastrados";
}