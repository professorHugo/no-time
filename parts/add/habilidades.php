<?php
$QueryBuscarHabilidades = "
    SELECT * FROM 
        tb_lista_habilidades
    WHERE
           id_habilidade = $ResPlayers[habilidade1]
        OR id_habilidade = $ResPlayers[habilidade2]
        OR id_habilidade = $ResPlayers[habilidade3]
        OR id_habilidade = $ResPlayers[habilidade4]
        OR id_habilidade = $ResPlayers[habilidade5]
        OR id_habilidade = $ResPlayers[habilidade6]
        OR id_habilidade = $ResPlayers[habilidade7]
        OR id_habilidade = $ResPlayers[habilidade8]
        OR id_habilidade = $ResPlayers[habilidade9]
    LIMIT 1,10
    ";

$ExeQrBuscarHabilidades = mysqli_query($connection, $QueryBuscarHabilidades);
$ResQrBuscarHabilidades = mysqli_num_rows($ExeQrBuscarHabilidades);

if($ResQrBuscarHabilidades > 0){
    ?>
<h3>Habilidades do persoagem</h4>

    <?php
    while($HabilidadesPlayer = mysqli_fetch_assoc($ExeQrBuscarHabilidades)){
        ?>
    <div class="col-xs-12 col-md-6" style="margin-bottom:15px">

        <div class="col-xs-12 col-md-6"><span class="lead"><?php echo $HabilidadesPlayer['habilidade']?></span></div>
        <div class="col-xs-12 col-md-6">
            <a class="btn btn-default btn-xs" href="#" data-toggle="modal" data-target="#DetalhesHabilidade<?php echo $HabilidadesPlayer['id_habilidade']?>">
                <i class="glyphicon glyphicon-eye-open"></i> Ver detalhes
            </a>
        </div>
    </div>
    <div class="clearf"></div>
    <!--Modal para exibição detalhada das habilidades-->
    <div class="modal fade in text-muted" id="DetalhesHabilidade<?php echo $HabilidadesPlayer['id_habilidade']?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="margin-top:15%">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Detalhes da Habilidae</h4>
                </div>
                <div class="modal-body">
                    <p class="lead">Hábilidade: <?php echo $HabilidadesPlayer['habilidade']?></p>
                    <p class="lead">Dificuldade: <?php echo $HabilidadesPlayer['dif_habilidade']?></p>
                    <p class="lead">
                        <?php echo $HabilidadesPlayer['descricao_habilidade']?>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


    <?php
    }
    ?>
    <?php
}
