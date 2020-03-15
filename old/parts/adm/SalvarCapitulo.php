<?php
if(isset($_POST['SalvarCapitulo'])){
    $TituloCapitulo         = mysqli_real_escape_string($connection, $_POST['TituloCapitulo']);
    $TextoCapitulo          = mysqli_real_escape_string($connection, $_POST['TextoCapitulo']);
    $QueryInserirCapitulo   = "
        INSERT INTO tb_capitulos_historia(titulo_capitulo,texto_capitulo)
        VALUES('$TituloCapitulo','$TextoCapitulo')
    ";
    
    if(mysqli_query($connection, $QueryInserirCapitulo)){
?>
<script>alert("Capitulo <?php echo $TituloCapitulo ?> inserido")</script>
<meta http-equiv="refresh" content="0;?url=Historia">
<?php
    }else{
        ?>
<script>alert("erro ao inserir capitulo <?php echo $TituloCapitulo.mysqli_error($connection) ?>")</script>
<?php
    }
}