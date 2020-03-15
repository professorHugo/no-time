<?php
if(isset($_SESSION['Login'])){
    if($_SESSION['Login']['nivel_usuario'] > 1){
    echo $QueryBuscarHistorias = "SELECT * FROM tb_capitulos_historia";
    $ExeQrBuscarHistorias = mysqli_query($connection, $QueryBuscarHistorias);
}else{
    $QueryBuscarHistorias = "SELECT * FROM tb_capitulos_historia WHERE ativo = 1 LIMIT 0,100";
    $ExeQrBuscarHistorias = mysqli_query($connection, $QueryBuscarHistorias);
    }
}else{
    echo $QueryBuscarHistorias = "SELECT * FROM tb_capitulos_historia WHERE ativo = 1 LIMIT 0,100";
    $ExeQrBuscarHistorias = mysqli_query($connection, $QueryBuscarHistorias);
}