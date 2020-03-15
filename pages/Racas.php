<div class="xs-12" style="padding-left:1%">
    <h3>Raças</h3>
    <hr>
    
    <?php
    $QueryBuscarDadosRacas = "SELECT * FROM tb_racas";
    $ExeQrBuscarDadosRacas = mysqli_query($connection, $QueryBuscarDadosRacas);
    foreach($ExeQrBuscarDadosRacas as $ResDadosRaca):
    ?>
    <div class="col-xs-12 col-md-4" style="margin-bottom: 50px">
        <p class="lead text-center"><u><?php echo $ResDadosRaca['nome_raca']?></u></p>
        <div class="text-justify">
            <?php echo $ResDadosRaca['descr_raca']?>
        </div>
    </div>
    <?php
    endforeach;
    ?>
    
</div>