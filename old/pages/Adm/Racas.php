<?php
    $QueryBuscarTodasRaca = "SELECT * FROM tb_racas";
    $ExeQrBuscarTodasRaca = mysqli_query($connection, $QueryBuscarTodasRaca);
    $ResQrBuscarTodasRaca = mysqli_num_rows($ExeQrBuscarTodasRaca);

?>
<div class="col-md-6 col-md-push-3">
    <table class="table table-hover">
        <tr style="background-color:#666">
            <td>Id</td>
            <td>Classe</td>
            <td class="text-center">Visualizar</td>
            <td class="text-center">Editar</td>
        </tr>
        <?php
    if($ResQrBuscarTodasRaca > 0){
        foreach($ExeQrBuscarTodasRaca as $ResRaca):
            ?>
        <tr>
            <td style="background-color:#666"><?php echo $ResRaca['id_raca']?></td>
            <td><?php echo $ResRaca['nome_raca']?></td>
            <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#VisualizarRaca<?php echo $ResRaca['id_raca']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
            </td>
            <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#EditarRaca<?php echo $ResRaca['id_raca']?>"><i class="glyphicon glyphicon-pencil"></i></a>
            </td>
        </tr>
        <?php
        include 'parts/Modals/EditarRaca.php';
        include 'parts/Modals/VisualizarRaca.php';
        endforeach;
    }
?>
    </table>
</div>