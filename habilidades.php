<?php
echo "<h2>Habilidades</h2>";
$QueryBuscarHabilidades = "
    SELECT * FROM 
        tb_lista_habilidades
    WHERE
           id_habilidade = $ResPlayers[habilidade1]
        OR id_habilidade = $ResPlayers[habilidade2]
        OR id_habilidade = $ResPlayers[habilidade3]
        OR id_habilidade = $ResPlayers[habilidade4]
        OR id_habilidade = $ResPlayers[habilidade5]
        OR id_habilidade = $ResPlayers[habilidade6]
        OR id_habilidade = $ResPlayers[habilidade7]
        OR id_habilidade = $ResPlayers[habilidade8]
        OR id_habilidade = $ResPlayers[habilidade9]
    ";

$ExeQrBuscarHabilidades = mysqli_query($connection, $QueryBuscarHabilidades);
$ResQrBuscarHabilidades = mysqli_num_rows($ExeQrBuscarHabilidades);

if($ResQrBuscarHabilidades > 0){
    ?>
    <table border="1" width="100%">
        <tr>
            <td>Id</td>
            <td>Habilidade</td>
            <td>Dificuldade</td>
            <td>Dano/Precisão</td>
            <td>Descrição</td>
        </tr>
    <?php
    while($HabilidadesPlayer = mysqli_fetch_assoc($ExeQrBuscarHabilidades)){
        ?>
        
        <tr>
            <td><?php echo $HabilidadesPlayer['id_habilidade'] ?></td>
            <td><?php echo $HabilidadesPlayer['habilidade']?></td>
            <td><?php echo $HabilidadesPlayer['dif_habilidade']?></td>
            <td><?php echo $HabilidadesPlayer['dano_habilidade']?></td>
            <td><?php echo $HabilidadesPlayer['descricao_habilidade']?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
}

