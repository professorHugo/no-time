<div class="col-xs-12">
    <h3>Classes</h3>
    <hr>
    <?php
    $QueryBuscarDadosClasses = "SELECT * FROM tb_classes LIMIT 1,10";
    $ExeQrBuscarDadosClasses = mysqli_query($connection, $QueryBuscarDadosClasses);

    foreach($ExeQrBuscarDadosClasses as $ResDadosClasse):
    ?>
    <div class="col-xs-6 col-md-4 text-center" style="margin-bottom:50px">
        <div style="min-height: 100px">
            <img src="img/Avatares/Classes/<?php echo $ResDadosClasse['nome_classe']?>.png" class="img-responsive" style="max-height:100px; margin: 0 auto">
        </div>
        <button class="btn btn-default form-control" style="margin: 20% 0 0" data-toggle="modal" data-target="#VisualizarClasseGeral<?php echo $ResDadosClasse['id_classe']?>"><?php echo $ResDadosClasse['nome_classe']?></button>
    </div>
    <?php
    include 'parts/Modals/VisualizarClasseGeral.php';
    endforeach;
    ?>
</div>