<?php

if(isset($_GET['ID'])){
    require '../../configurations/config.php';
    $IdHabilidade = $_GET['ID'];
    
    $QueryBuscarDadosHabilidade1 = "
        SELECT * FROM tb_lista_habilidades WHERE id_habilidade = $IdHabilidade
    ";
    $ExeQrBuscarDadosHAbilidade1 = mysqli_query($connection, $QueryBuscarDadosHabilidade1);
    $ResQrBuscarDadosHabilidade1 = mysqli_num_rows($ExeQrBuscarDadosHAbilidade1);
    
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
        while($DadosHabilidade1 = mysqli_fetch_assoc($ExeQrBuscarDadosHAbilidade1)){
            ?>
        <tr>
            <td>
                <?php echo $DadosHabilidade1['dif_habilidade'];?>
            </td>
            <td>
                <?php echo $DadosHabilidade1['dano_habilidade'];?>
            </td>
            <td>
                <?php echo $DadosHabilidade1['descricao_habilidade'];?>
            </td>
        </tr>
        <?php
        }
    ?>
    </table>
</div>


<?php    
}
