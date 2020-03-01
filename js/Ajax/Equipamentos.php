<?php
if(isset($_GET['C'])){
    require '../../configurations/config.php';
    $ClasseEscolhida = $_GET['C'];
    sleep(2);
    $QueryBuscarArmas1 = "SELECT * FROM tb_item_armas WHERE (classe_item_arma = 1 OR classe_item_arma = '$ClasseEscolhida') AND criacao = 1";
    $ExeQrBuscarArmas1 = mysqli_query($connection, $QueryBuscarArmas1);
    $ResQrBuscarArmas1 = mysqli_num_rows($ExeQrBuscarArmas1);
    
    $QueryBuscarArmas2 = "SELECT * FROM tb_item_armas WHERE (classe_item_arma = 1 OR classe_item_arma = '$ClasseEscolhida') AND criacao = 1";
    $ExeQrBuscarArmas2 = mysqli_query($connection, $QueryBuscarArmas2);
    $ResQrBuscarArmas2 = mysqli_num_rows($ExeQrBuscarArmas2);
    
    $QueryBuscarDef1 = "SELECT * FROM tb_item_def";
    $ExeQrBuscarDef1 = mysqli_query($connection, $QueryBuscarDef1);
    $ResQrBuscarDef1 = mysqli_num_rows($ExeQrBuscarDef1);
    
    $QueryBuscarDef2 = "SELECT * FROM tb_item_def";
    $ExeQrBuscarDef2 = mysqli_query($connection, $QueryBuscarDef2);
    $ResQrBuscarDef2 = mysqli_num_rows($ExeQrBuscarDef2);
?>


<h3>Equipamentos </h3>

<div class="col-md-6">
    <div class="col-md-12">
        <p class="lead">Armas</p>
        <div class="col-md-6">
            <label for="arma1_player">Arma 1</label>
            <select name="arma1_player" id="arma1_player" class="form-control">
                <?php
                    while($Arma1 = mysqli_fetch_assoc($ExeQrBuscarArmas1)){
                        ?>
                <option value="<?php echo $Arma1['id_item_arma']?>">
                    <?php echo $Arma1['descricao_item_arma']?>
<!--
                    <input type="hidden" name="nome_arma1" value="<?php echo $Arma1['descricao_item_arma']?>">
                    <input type="hidden" name="tipo_arma1" value="<?php echo $Arma1['tipo_item_arma']?>">
                    <input type="hidden" name="dano_arma1" value="<?php echo $Arma1['dano_item_arma']?>">
-->
                </option>
                <?php
                    }
                ?>
            </select>

        </div>
        <div class="col-md-6">
            <label for="arma2_player">Arma 2</label>
            <select name="arma2_player" id="arma2_player" class="form-control">
                <?php
                    while($Arma2 = mysqli_fetch_assoc($ExeQrBuscarArmas2)){
                        ?>
                <option value="<?php echo $Arma2['id_item_arma']?>">
                    <?php echo $Arma2['descricao_item_arma']?>
                </option>
<!--
                <input type="hidden" name="nome_arma2" value="<?php echo $Arma2['descricao_item_arma']?>">
                <input type="hidden" name="tipo_arma2" value="<?php echo $Arma2['tipo_item_arma']?>">
                <input type="hidden" name="dano_arma2" value="<?php echo $Arma2['dano_item_arma']?>">
-->
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="col-md-12">
        <p class="lead">Defesas</p>
        <div class="col-md-12">
            <label for="def1_player">Def 1</label>
            <select name="def1_player" id="def1_player" class="form-control">
                <?php
                    while($Def1 = mysqli_fetch_assoc($ExeQrBuscarDef1)){
                        ?>
                <option value="<?php echo $Def1['id_item_def']?>">
                    <?php echo $Def1['descricao_item_def']?>
                </option>
<!--
                <input type="hidden" name="nome_def" value="<?php echo $Def1['descricao_item_def']?>">
                <input type="hidden" name="tipo_def" value="<?php echo $Def1['tipo_item_def']?>">
                <input type="hidden" name="dano_def" value="<?php echo $Def1['dano_item_def']?>">
-->
                <?php
                    }
                ?>
            </select>
        </div>
    </div>
</div>

<?php
}
