<?php
if(isset($_GET['C'])){
    require '../../configurations/config.php';
    sleep(2);
    $ClasseEscolhida = $_GET['C'];
    
    $QueryBuscarHabilidades = "
        SELECT * FROM tb_lista_habilidades WHERE classe_hab = $ClasseEscolhida
    ";
    $ExeQrBuscarHabilidades = mysqli_query($connection, $QueryBuscarHabilidades);
    $ResQrBuscarHabilidades = mysqli_num_rows($ExeQrBuscarHabilidades);
    
    $QueryBuscarHabilidades2 = "
        SELECT * FROM tb_lista_habilidades WHERE classe_hab = $ClasseEscolhida
    ";
    $ExeQrBuscarHabilidades2 = mysqli_query($connection, $QueryBuscarHabilidades2);
    $ResQrBuscarHabilidades2 = mysqli_num_rows($ExeQrBuscarHabilidades2);
?>
<h3>Habilidades </h3>
<div class="col-md-12">
    <div class="col-md-12">
        <label for="habilidade1">Habilidade 1</label>
        <select name="habilidade1" id="habilidade1" class="form-control" onchange="mostrarDetalhesHabilidade1(this.value)">
            <?php
                    while($Habilidade1 = mysqli_fetch_assoc($ExeQrBuscarHabilidades)){
                        ?>
            <option value="<?php echo $Habilidade1['id_habilidade']?>">
                <?php echo $Habilidade1['habilidade']?>
            </option>
            <?php
                    }
                ?>
        </select>
    </div>
    <div class="col-md-12">
        <div id="DetalheHabilidade1">

        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="col-md-12">
        <label for="habilidade2">Habilidade 2</label>
        <select name="habilidade2" id="habilidade2" class="form-control" onchange="mostrarDetalhesHabilidade2(this.value)">
            <?php
                    while($Habilidade2 = mysqli_fetch_assoc($ExeQrBuscarHabilidades2)){
                        ?>
            <option value="<?php echo $Habilidade2['id_habilidade']?>">
                <?php echo $Habilidade2['habilidade']?>
            </option>
            <?php
                    }
                ?>
        </select>
    </div>
    <div class="col-md-12">
        <div id="DetalheHabilidade2">

        </div>
    </div>
</div>
<?php
}
?>
