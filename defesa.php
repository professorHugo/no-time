<?php
echo "<h2>Defesa: </h2>";
        
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
    while($DefPlayer = mysqli_fetch_assoc($ExeQrBuscarDef)){
        echo 
            "Arma: " . $DefPlayer['descricao_item_def'] . 
            " | Tipo: " . $DefPlayer['tipo_item_def'] . 
            " | Dano: " . $DefPlayer['dano_item_def'];
        echo "<br>";
    }
}