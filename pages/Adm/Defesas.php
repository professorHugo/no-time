<?php
    $QueryBuscarTodasDef = "SELECT * FROM tb_item_def";
    $ExeQrBuscarTodasArmas = mysqli_query($connection, $QueryBuscarTodasDef);
    echo $ResQrBuscarTodasDef = mysqli_num_rows($ExeQrBuscarTodasArmas);

?>
<div class="col-md-6 col-md-push-3">
    <table class="table table-hover">
        <tr style="background-color:#666">
            <td>Id</td>
            <td>Tipo</td>
            <td>Arma</td>
            <td class="text-center">Visualizar</td>
            <td class="text-center">Editar</td>
        </tr>
        <?php
    if($ResQrBuscarTodasDef > 0){
        foreach($ExeQrBuscarTodasArmas as $ResDef):
            ?>
        <tr>
            <td style="background-color:#666"> <?php echo $ResDef['id_item_def']?> </td>
            <td><?php echo $ResDef['tipo_item_def']?></td>
            <td><?php echo $ResDef['descricao_item_def']?></td>
            <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#VisualizarDef<?php echo $ResDef['id_item_def']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
            </td>
            <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#EditarDef<?php echo $ResDef['id_item_def']?>"><i class="glyphicon glyphicon-pencil"></i></a>
            </td>
        </tr>
        <?php
        include 'parts/Modals/EditarDefesas.php';
        include 'parts/Modals/VisualizarDefesas.php';
        endforeach;
    }
?>
    </table>
</div>