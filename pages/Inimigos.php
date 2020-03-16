<div class="col-xs-12">
    <h3>Inimigos</h3>
    <?php
    $QueryBuscarInimigos = "
        SELECT 
            i.*,
            t.tipo_inimigo,
            r.nome_raca
            
        FROM tb_inimigos i
        INNER JOIN tb_tipo_inimigos t
            ON i.tipo_inimigo = t.id_tipo
        INNER JOIN tb_racas r
            ON i.raca_inimigo = r.id_raca    
    ";
    
    $ExeQrBuscarInimigos = mysqli_query($connection, $QueryBuscarInimigos);
    
    foreach($ExeQrBuscarInimigos as $ResInimigos):
    ?>
    <div class="col-xs-12 col-md-4" style="font-size:12px; margin-bottom: 30px">
        <div class="col-xs-8">
            <p>Nome: <?php echo $ResInimigos['nome_inimigo'];?></p>
            <p>Patente: <?php echo $ResInimigos['tipo_inimigo'];?></p>
            <p>Raça: <?php echo $ResInimigos['nome_raca'];?></p>
            <p>Combate: <?php echo $ResInimigos['tipo_combate'];?></p>
            <p>Armamento: <?php echo $ResInimigos['armas_inimigo'];?></p>
        </div>
        <div class="col-xs-4">
            <img src="img/Avatares/Inimigos/<?php echo $ResInimigos['id_inimigo'];?>.png" class="img-responsive" alt="" style="max-height: 150px; min-height:150px">
        </div>
        <hr>
    </div>
    
    <?php
    endforeach;
    ?>
</div>