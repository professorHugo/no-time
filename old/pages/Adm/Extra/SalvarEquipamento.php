<?php
$DescricaoArma = $_POST['DescArma'];
$TipoArma = $_POST['TipoArma'];
$ClasseArma = $_POST['ClasseArma'];
$DanoArma = $_POST['DanoArma'];
$CustoArma = $_POST['CustoArma'];

$QueryInserirArma = "
    INSERT INTO tb_item_armas(descricao_item_arma,tipo_item_arma,classe_item_arma,dano_item_arma,custo_item_arma)
    VALUES('$DescricaoArma','$TipoArma','$ClasseArma','$DanoArma','$CustoArma')
";

$ExeQrInserirArma = mysqli_query($connection, $QueryInserirArma);

if($ExeQrInserirArma){
    ?>
    <script>alert("Arma cadastrada. Criar o Modal pra redirecionar automaticamente");</script>
    <?php
}else{
    echo "Erro".mysqli_error($connection);
}