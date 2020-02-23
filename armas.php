<?php

#Buscar as armas conforme quantidade
echo "<h2>Armas: </h2>";
$QueryBuscarArmas = "
    SELECT * FROM 
        tb_item_armas 
    WHERE 
    (id_item_arma = $ResPlayers[arma1_player] AND dano_item_arma >= 1) 
    OR (id_item_arma = $ResPlayers[arma2_player] AND dano_item_arma > 0)
    OR (id_item_arma = $ResPlayers[arma3_player] AND dano_item_arma > 0)
    OR (id_item_arma = $ResPlayers[arma4_player] AND dano_item_arma > 0)
    OR (id_item_arma = $ResPlayers[arma5_player] AND dano_item_arma > 0)


";
$ExeQrBuscarArmas = mysqli_query($connection, $QueryBuscarArmas);
$ResQrBuscarArmas = mysqli_num_rows($ExeQrBuscarArmas);

if($ResQrBuscarArmas > 0){
    while($ArmasPlayer = mysqli_fetch_assoc($ExeQrBuscarArmas)){
        echo 
            "Arma: " . $ArmasPlayer['descricao_item_arma']." | Tipo: " .$ArmasPlayer['tipo_item_arma']." | Dano: " . $ArmasPlayer['dano_item_arma'];
        echo "<br>";
    }
}
