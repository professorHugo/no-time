<?php
//Inserir o capítulo da história
include 'parts/adm/SalvarCapitulo.php';
include 'parts/adm/EditarCapitulo.php';

//Ler os capítulos da história
include 'parts/adm/LerCapitulos.php';

?>


<div class="background-historia">
    <div class="com-xs-9 col-md-9">
        <h3 class="pull-left">Tema base: Cyberpunk</h3>
<?php
if(isset($_SESSION['Login'])){
    if($_SESSION['Login']['nivel_usuario'] == 1){
        ?>
        <h3 class="pull-left" style="margin-left: 8%">
            <i class="glyphicon glyphicon-plus" title="Adicionar Capítulo" data-toggle="modal" data-target="#InserirCapitulo"></i>
        </h3>
        <?php
    }
}
?>
        
    </div>
    <div class="clearfix"></div>
    <hr>
    <?php
    foreach($ExeQrBuscarHistorias as $Capitulos):
    ?>
    <div class="col-xs-12 col-md-6">

        <h3>
            <?php
            if($Capitulos['id_capitulo'] < 2){
                echo "Introdução: ".$Capitulos['titulo_capitulo'];
            }
            if($Capitulos['id_capitulo'] >= 2){
                echo "Capítulo ";
                echo $Capitulos['id_capitulo'] - 1 ." - ".$Capitulos['titulo_capitulo'];
            }
        ?>
        </h3>
        <div style="text-indent: 50px" class="text-justify">
            <?php echo lmWord($Capitulos['texto_capitulo'],280)?>...<br><br>
            <button class="btn btn-default btn-sm" style="color:#111" data-toggle="modal" data-target="#LerHistoria<?php echo $Capitulos['id_capitulo']?>">Ler tudo</button>
        <?php
        if(isset($_SESSION['Login'])){
            if($_SESSION['Login']['nivel_usuario'] == 1){
        ?>
            <button class="btn btn-danger btn-sm pull-right" style="margin-right:5%" data-toggle="modal" data-target="#EditarHistoria<?php echo $Capitulos['id_capitulo']?>">Editar História</button>

            <?php
            }
        }
        ?>
        </div>
        <hr>

    </div>

    
    <?php
    include 'parts/adm/ModalsCapitulos.php';
    endforeach;
    ?>
</div>
<?php include 'parts/adm/ModalInserirCapitulos.php'?>