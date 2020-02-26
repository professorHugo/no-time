<?php
    $QueryBuscarTodasClasses = "SELECT * FROM tb_classes";
    $ExeQrBuscarTodasClasses = mysqli_query($connection, $QueryBuscarTodasClasses);
    $ResQrBuscarTodasClasses = mysqli_num_rows($ExeQrBuscarTodasClasses);

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
    if($ResQrBuscarTodasClasses > 0){
        foreach($ExeQrBuscarTodasClasses as $ResClasse):
            ?>
        <tr>
            <td style="background-color:#666"><?php echo $ResClasse['id_classe']?></td>
            <td><?php echo $ResClasse['nome_classe']?></td>
            <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#VisualizarClasse<?php echo $ResClasse['id_classe']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
            </td>
            <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#EditarClasse<?php echo $ResClasse['id_classe']?>"><i class="glyphicon glyphicon-pencil"></i></a>
            </td>
        </tr>
        <?php
        include 'parts/Modals/EditarClasse.php';
        include 'parts/Modals/VisualizarClasse.php';
        endforeach;
    }
?>
    </table>
</div>
