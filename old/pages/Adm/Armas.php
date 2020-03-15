<?php
    if(isset($_POST['ArmaFiltro'])){
        $FiltroArma = $_POST['ArmaFiltro'];
        $QueryBuscarTodasArmas = "SELECT * FROM tb_item_armas WHERE tipo_item_arma = '$FiltroArma'";
        $ExeQrBuscarTodasArmas = mysqli_query($connection, $QueryBuscarTodasArmas);
        $ResQrBuscarTodasArmas = mysqli_num_rows($ExeQrBuscarTodasArmas);
    }else{
        $QueryBuscarTodasArmas = "SELECT * FROM tb_item_armas";
        $ExeQrBuscarTodasArmas = mysqli_query($connection, $QueryBuscarTodasArmas);
        $ResQrBuscarTodasArmas = mysqli_num_rows($ExeQrBuscarTodasArmas);
    }

if(isset($_GET['Adicionar'])) {
    include 'pages/Adm/Extra/SalvarEquipamento.php';
}
    
?>
<div class="col-md-3">
    <div class="col-md-10">
        <a href="#" data-toggle="modal" data-target="#AdicionarEquipamento" class="form-control">
            <span class="glyphicon glyphicon-plus">Adicionar</span>
        </a>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-10" style="margin-top:10px;">
        <form action="?url=Administrar&T=Armas" method="post">
            <label for="ArmaFiltro">Escolha a classe para filtrar</label>
            <div class="col-md-7 form-group">
                <select name="ArmaFiltro" id="" class="form-control">
                    <option value="0" disabled selected>Filtro</option>
                    <?php
                    $QueryBuscarClassesFiltroA = "SELECT * FROM tb_item_armas";
                    $ExeQrBuscarClassesFiltroA = mysqli_query($connection, $QueryBuscarClassesFiltroA);
                    foreach($ExeQrBuscarClassesFiltroA as $FiltroClasseA):
                    ?>
                        <option value="<?php echo $FiltroClasseA['tipo_item_arma']?>">
                            <?php echo $FiltroClasseA['tipo_item_arma']?>
                        </option>
                        <?php
                    endforeach;
            
            ?>
                </select>
            </div>
            <div class="formgroup">
                <input type="submit" class="btn btn-success">
            </div>

        </form>
    </div>
</div>
<div class="col-md-8 col-md-push-1">
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
            <td><?php echo lmWord($ResArmas['tipo_item_arma'])?></td>
            <td><?php echo lmWord($ResArmas['descricao_item_arma'],16)?></td>
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
<?php include 'parts/Modals/Extra/AdicionarEquipamento.php';
