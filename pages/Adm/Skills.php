<?php
    if(isset($_POST['SkillFiltro'])){
        $Filtro = $_POST['SkillFiltro'];
        $QueryBuscarTodasSkills = "SELECT * FROM tb_lista_habilidades WHERE classe_hab = '$Filtro'";
        $ExeQrBuscarTodasSkills = mysqli_query($connection, $QueryBuscarTodasSkills);
        $ResQrBuscarTodasSkills = mysqli_num_rows($ExeQrBuscarTodasSkills);
        
    }else{
        $QueryBuscarTodasSkills = "SELECT * FROM tb_lista_habilidades";
        $ExeQrBuscarTodasSkills = mysqli_query($connection, $QueryBuscarTodasSkills);
        $ResQrBuscarTodasSkills = mysqli_num_rows($ExeQrBuscarTodasSkills);
    }
    

?>
<div class="col-md-3"  style="position:fixed; bottom: 5%">
    <form action="?url=Administrar&T=Skills" method="post">
       <label for="SkillFiltro">Escolha a classe para filtrar</label>
        <div class="col-md-7 form-group">
            <select name="SkillFiltro" id="SkillFiltro" class="form-control">
                <option value="0" disabled selected>Filtro</option>
                <?php
                $QueryBuscarClassesFiltro = "SELECT * FROM tb_classes";
                $ExeQrBuscarClassesFiltro = mysqli_query($connection, $QueryBuscarClassesFiltro);
                foreach($ExeQrBuscarClassesFiltro as $FiltroClasse):
                ?>
                <option value="<?php echo $FiltroClasse['id_classe']?>">
                    <?php echo $FiltroClasse['nome_classe']?>
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
<div class="col-md-6 col-md-push-3">
    <table class="table table-hover">
        <tr style="background-color:#666">
            <td>Id</td>
            <td>Classe</td>
            <td>Habilidade</td>
            <td class="text-center">Visualizar</td>
            <td class="text-center">Editar</td>
        </tr>
        <?php
    if($ResQrBuscarTodasSkills > 0){
        foreach($ExeQrBuscarTodasSkills as $ResSkills):
            ?>
        <tr>
            <td style="background-color:#666"> <?php echo $ResSkills['id_habilidade']?> </td>
            <td><?php echo $ResSkills['classe_hab']?></td>
            <td><?php echo $ResSkills['habilidade']?></td>
            <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#VisualizarSkill<?php echo $ResSkills['id_habilidade']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
            </td>
            <td class="text-center">
                <a href="#" data-toggle="modal" data-target="#EditarSkill<?php echo $ResSkills['id_habilidade']?>"><i class="glyphicon glyphicon-pencil"></i></a>
            </td>
        </tr>
        <?php
        include 'parts/Modals/EditarSkills.php';
        include 'parts/Modals/VisualizarSkills.php';
        endforeach;
    }
?>
    </table>
</div>
