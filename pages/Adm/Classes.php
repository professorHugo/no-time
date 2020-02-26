<?php
    $QueryBuscarTodasClasses = "SELECT * FROM tb_classes";
    $ExeQrBuscarTodasClasses = mysqli_query($connection, $QueryBuscarTodasClasses);
    $ResQrBuscarTodasClasses = mysqli_num_rows($ExeQrBuscarTodasClasses);

?>
<table class="table table-responsive">
    <tr style="background-color:#666">
        <td>Id</td>
        <td>Classe</td>
        <td>Atributo1</td>
        <td>Atributo2</td>
        <td>Atributo3</td>
        <td>Atributo4</td>
        <td>Habilidade1</td>
        <td>Habilidade2</td>
        <td>Habilidade3</td>
        <td>Habilidade4</td>
        <td>Habilidade5</td>
        <td>Editar</td>
    </tr>
    <?php
    if($ResQrBuscarTodasClasses > 0){
        foreach($ExeQrBuscarTodasClasses as $ResClasse):
            ?>
    <tr style="background-color:#666">
        <td><?php echo $ResClasse['id_classe']?></td>
        <td><?php echo $ResClasse['nome_classe']?></td>
        <td><?php echo $ResClasse['atr1']?></td>
        <td><?php echo $ResClasse['atr2']?></td>
        <td><?php echo $ResClasse['atr3']?></td>
        <td><?php echo $ResClasse['atr4']?></td>
        <td><?php echo $ResClasse['hab_c1']?></td>
        <td><?php echo $ResClasse['hab_c2']?></td>
        <td><?php echo $ResClasse['hab_c3']?></td>
        <td><?php echo $ResClasse['hab_c4']?></td>
        <td><?php echo $ResClasse['hab_c5']?></td>
        <td>
            <a href="#" data-toggle="modal" data-target="#EditarClasse<?php echo $ResClasse['id_classe']?>"><i class="glyphicon glyphicon-pencil"></i></a>
        </td>
    </tr>
    <?php
        include 'parts/Modals/EditarClasse.php';
        endforeach;
    }
?>
</table>
