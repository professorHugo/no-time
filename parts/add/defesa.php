<?php
$QueryBuscarDef = "
    SELECT * FROM 
        tb_item_def
    WHERE 
    (id_item_def = $ResPlayers[def1_player] AND dano_item_def >= 1) 
    OR (id_item_def = $ResPlayers[def2_player] AND dano_item_def >= 1)
    OR (id_item_def = $ResPlayers[def3_player] AND dano_item_def >= 1)


";
$ExeQrBuscarDef = mysqli_query($connection, $QueryBuscarDef);
$ResQrBuscarDef = mysqli_num_rows($ExeQrBuscarDef);

if($ResQrBuscarDef > 0){
    ?>
<h4 class="text-center">Defesas</h4>
<hr>
<p style="font-size:12px">
    <?php
    while($DefPlayer = mysqli_fetch_assoc($ExeQrBuscarDef)){
        echo 
            $DefPlayer['descricao_item_def'] . 
            " | " . $DefPlayer['tipo_item_def'] . 
            " | Def: " . $DefPlayer['dano_item_def'];
        echo "<br>";
    }
    ?>
</p>
<?php
}
