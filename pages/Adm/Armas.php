<?php
    $QueryBuscarTodasArmas = "SELECT * FROM tb_item_armas";
    $ExeQrBuscarTodasArmas = mysqli_query($connection, $QueryBuscarTodasArmas);
    echo $ResQrBuscarTodasArmas = mysqli_num_rows($ExeQrBuscarTodasArmas);

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
    if($ResQrBuscarTodasArmas > 0){
        foreach($ExeQrBuscarTodasArmas as $ResArmas):
            ?>
        <tr>
            <td style="background-color:#666"> <?php echo $ResArmas['id_item_arma']?> </td>
            <td><?php echo $ResArmas['tipo_item_arma']?></td>
            <td><?php echo $ResArmas['descricao_item_arma']?></td>
            <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#VisualizarArma<?php echo $ResArmas['id_item_arma']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
            </td>
            <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#EditarArma<?php echo $ResArmas['id_item_arma']?>"><i class="glyphicon glyphicon-pencil"></i></a>
            </td>
        </tr>
        <?php
        include 'parts/Modals/EditarArmas.php';
        include 'parts/Modals/VisualizarArmas.php';
        endforeach;
    }
?>
    </table>
</div>