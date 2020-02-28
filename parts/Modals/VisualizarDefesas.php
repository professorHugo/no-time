<!--Modal para visualizar a classe-->
<div class="modal fade in" id="VisualizarDef<?php echo $ResDef['id_item_def']?>" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="Modal-Editar-Classe">
                    Item de Defesa: <?php
                    echo $ResDef['descricao_item_def']." | ID: ".$ResDef['id_item_def']
                    ?>
                </h4>
            </div>
            <div class="modal-body">
                <div class="col-md-6">
                    <p class="lead">Atributos</p>
                    <p>
                        <label for="Atr1">Tipo</label>: <?php echo $ResDef['tipo_item_def']?>
                    </p>
                </div>
                <div class="col-md-6">
                   
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <!--Footer-->
            <div class="modal-footer">

                <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Fechar</button>

            </div>
        </div>
    </div>
</div>
