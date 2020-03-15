<?php

if(isset($_GET['ID'])){
    require '../../configurations/config.php';
    $IdHabilidade = $_GET['ID'];
    
    $QueryBuscarDadosHabilidade2 = "
        SELECT * FROM tb_lista_habilidades WHERE id_habilidade = $IdHabilidade
    ";
    $ExeQrBuscarDadosHAbilidade2 = mysqli_query($connection, $QueryBuscarDadosHabilidade2);
    $ResQrBuscarDadosHabilidade2 = mysqli_num_rows($ExeQrBuscarDadosHAbilidade2);
    
    ?>
<div class="col-md-12"></div>
<div class="col-md-12">
    <table class="table table-striped">
        <tr>
            <td>Dificuldade</td>
            <td>Dano</td>
            <td>Descrição</td>
        </tr>
        <?php
        while($DadosHabilidade2 = mysqli_fetch_assoc($ExeQrBuscarDadosHAbilidade2)){
            ?>
        <tr>
            <td>
                <?php echo $DadosHabilidade2['dif_habilidade'];?>
            </td>
            <td>
                <?php echo $DadosHabilidade2['dano_habilidade'];?>
            </td>
            <td>
                <?php echo $DadosHabilidade2['descricao_habilidade'];?>
            </td>
        </tr>
        <?php
        }
    ?>
    </table>
</div>


<?php    
}
