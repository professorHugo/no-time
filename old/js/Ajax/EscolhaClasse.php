<?php
    require '../../configurations/config.php';
    sleep(2);
    $Classe = $_GET['C'];
    $QueryBuscarClasseEscolhida = "SELECT * FROM tb_classes WHERE id_classe = $Classe";
    $ExeQrBuscarClasseEscolhida = mysqli_query($connection, $QueryBuscarClasseEscolhida);
    $ResQrBuscarClasseEscolhida = mysqli_num_rows($ExeQrBuscarClasseEscolhida);
    
    while($DadosClasse = mysqli_fetch_assoc($ExeQrBuscarClasseEscolhida)){
?>
<h3>Dados da classe</h3>
<div class="col-md-6">
    <div class="col-md12">
        <p class="lead">
            Atributo Total: <span id="AtributosTotal" style="font-size:10pt">100</span>
            <input type="hidden" id="AtkRestante" name="AtkRestante">
        </p>
        <div class="col-md-6">
            <label for="atr1_v"><?php echo $DadosClasse['atr1']?>:</label>
            <input type="hidden" name="atr1" value="<?php echo $DadosClasse['atr1']?>">
            <input type="number" name="atr1_v" id="atr1_v" class="form-control" onkeyup="CalcularAtributos()" onchange="CalcularAtributos()" onblur="CalcularAtributos()" value="0">
            <label for="atr2_v"><?php echo $DadosClasse['atr2']?>:</label>
            <input type="hidden" name="atr2" value="<?php echo $DadosClasse['atr2']?>">
            <input type="number" name="atr2_v" id="atr2_v" class="form-control" onkeyup="CalcularAtributos()" onchange="CalcularAtributos()" onblur="CalcularAtributos()" value="0">
        </div>
        <div class="col-md-6">
            <label for="atr3_v"><?php echo $DadosClasse['atr3']?>:</label>
            <input type="hidden" name="atr3" value="<?php echo $DadosClasse['atr3']?>">
            <input type="number" name="atr3_v" id="atr3_v" class="form-control" onkeyup="CalcularAtributos()" onchange="CalcularAtributos()" onblur="CalcularAtributos()" value="0">
            <label for="atr4_v"><?php echo $DadosClasse['atr4']?>:</label>
            <input type="hidden" name="atr4" value="<?php echo $DadosClasse['atr4']?>">
            <input type="number" name="atr4_v" id="atr4_v" class="form-control" onkeyup="CalcularAtributos()" onchange="CalcularAtributos()" onblur="CalcularAtributos()" value="0">
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="col-md-12">
        <p class="lead">
            Pontos da Classe: <span id="HabilidadeTotal" style="font-size:10pt">70</span>
            <input type="hidden" id="HabilidadeRestante" name="HabilidadeRestante">
        </p>
        <div class="col-md-6">
            <label for="hab_c1"><?php echo $DadosClasse['hab_c1']?></label>
            <input type="hidden" name="hab_c1t" value="<?php echo $DadosClasse['hab_c1']?>">
            <input type="number" id="hab_c1" name="hab_c1" class="form-control" onkeyup="CalcularAtributosClasse()" onchange="CalcularAtributosClasse()" onblur="CalcularAtributosClasse()" value="0">
            
            <label for="hab_c2"><?php echo $DadosClasse['hab_c2']?></label>
            <input type="hidden" name="hab_c2t" value="<?php echo $DadosClasse['hab_c2']?>">
            <input type="number" id="hab_c2" name="hab_c2" class="form-control" onkeyup="CalcularAtributosClasseClasse()" onchange="CalcularAtributosClasse()" onblur="CalcularAtributosClasse()" value="0">
            
        </div>
        <div class="col-md-6">
            <label for="hab_c3"><?php echo $DadosClasse['hab_c3']?></label>
            <input type="hidden" name="hab_c3t" value="<?php echo $DadosClasse['hab_c3']?>">
            <input type="number" id="hab_c3" name="hab_c3" class="form-control" onkeyup="CalcularAtributosClasseClasse()" onchange="CalcularAtributosClasse()" onblur="CalcularAtributosClasse()" value="0">
            
            <label for="hab_c4"><?php echo $DadosClasse['hab_c4']?></label>
            <input type="hidden" name="hab_c4t" value="<?php echo $DadosClasse['hab_c4']?>">
            <input type="number" id="hab_c4" name="hab_c4" class="form-control" onkeyup="CalcularAtributosClasseClasse()" onchange="CalcularAtributosClasse()" onblur="CalcularAtributosClasse()" value="0">
        </div>
    </div>
</div>

<?php
    }
