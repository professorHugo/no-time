<?php
if(isset($_POST['EditarCapitulo'])){
    $Ativar            = $_POST['Ativar'];
    $CapituloEditar    = $_POST['CapituloEditar'];
    $TituloCapituloEdit= $_POST['TituloCapituloEdit'];
    $TextoCapituloEdit = $_POST['TextoCapituloEdit'];
    "<br>";
    $QueryEditarCapitulo = "UPDATE tb_capitulos_historia SET titulo_capitulo = '$TituloCapituloEdit' , texto_capitulo = '$TextoCapituloEdit' , ativo = '$Ativar' WHERE id_capitulo = '$CapituloEditar'";
    
    $ExeQrEditarCapitulo = mysqli_query($connection, $QueryEditarCapitulo);
}