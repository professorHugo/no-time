<?php
//Inserir o capítulo da história
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

//Ler os capítulos da história
$QueryBuscarHistorias = "SELECT * FROM tb_capitulos_historia WHERE ativo = 1";
$ExeQrBuscarHistorias = mysqli_query($connection, $QueryBuscarHistorias);
?>


<!--Inserir plano de fundo na classe background-historia-->
<div class="background-historia">
    <div class="com-xs-10 col-md-10">
        <h2>Tema base: Futurístico - Cyberpunk</h2>
    </div>
    <div class="col-xs-2 col-md-2">
        <h2>
            <i class="glyphicon glyphicon-plus" title="Adicionar Capítulo" data-toggle="modal" data-target="#InserirCapitulo"></i>
        </h2>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="col-xs-12 col md-8">
        <?php
        foreach($ExeQrBuscarHistorias as $Capitulos):
        ?>
        <h3>Capítulo <?php echo $Capitulos['id_capitulo']." - ".$Capitulos['titulo_capitulo']?></h3>
        <div style="text-indent: 50px" class="text-justify">
            <?php echo $Capitulos['texto_capitulo']?>
        </div>
        <?php
        endforeach;
        ?>
    </div>
</div>


<!-- Modal Inserir Capítulo -->
<div class="modal fade" id="InserirCapitulo" tabindex="-1" role="dialog" aria-labelledby="InserirCapitulo">
    <form action="#" method="post">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Inserir Capítulo</h4>
                </div>
                <div class="modal-body">
                    <label for="TituloCapitulo">Título: </label>
                    <input type="text" name="TituloCapitulo" id="TituloCapitulo" class="form-control">
                    <label for="TextoCapitulo">Texto</label>
                    <textarea class="form-control" name="TextoCapitulo" cols="30" rows="10" id="TextoCapitulo"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" name="SalvarCapitulo">Salvar Capítulo</button>
                </div>
            </div>
        </div>
    </form>
</div>
