<?php
    $QueryBuscarTodasRaca = "SELECT * FROM tb_racas";
    $ExeQrBuscarTodasRaca = mysqli_query($connection, $QueryBuscarTodasRaca);
    $ResQrBuscarTodasRaca = mysqli_num_rows($ExeQrBuscarTodasRaca);

?>
<table class="table table-responsive">
    <tr style="background-color:#666">
        <td>Id</td>
        <td>Raça</td>
        <td>Descição</td>
        <td>Editar</td>
    </tr>
    <?php
    if($ResQrBuscarTodasRaca > 0){
        foreach($ExeQrBuscarTodasRaca as $ResRaca):
            ?>
    <tr style="background-color:#666">
        <td><?php echo $ResRaca['id_raca']?></td>
        <td><?php echo $ResRaca['nome_raca']?></td>
        <td><?php //echo $ResRaca['descricao_raca']?></td>
        <td>
            <a href="#" data-toggle="modal" data-target="#EditarRaca<?php echo $ResRaca['id_raca']?>"><i class="glyphicon glyphicon-pencil"></i></a>
        </td>
    </tr>
    <?php
        include 'parts/Modals/EditarRaca.php';
        endforeach;
    }
?>
</table>
