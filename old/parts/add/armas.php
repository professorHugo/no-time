<?php

#Buscar as armas conforme quantidade
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
    ?>

<h4 class="text-center">Armas</h4>
<hr>
<p style="font-size:12px">
    <?php
    while($ArmasPlayer = mysqli_fetch_assoc($ExeQrBuscarArmas)){
        echo 
           lmWord($ArmasPlayer['descricao_item_arma'],16)." | " .$ArmasPlayer['tipo_item_arma']." | Dano: " . $ArmasPlayer['dano_item_arma'];
        echo "<br>";
    }
    ?>
</p>
<div class="clearfix" style="margin-bottom:25px"></div>

<?php
}
