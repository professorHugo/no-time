<!--Modal para visualizar a classe-->
<div class="modal fade in" id="VisualizarClasseGeral<?php echo $ResDadosClasse['id_classe']?>" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="Modal-Editar-Classe">
                    Classe: <?php echo $ResDadosClasse['nome_classe']?>
                </h4>
            </div>
            <div class="modal-body">
                <div class="col-xs-12">
                    
                <?php echo $ResDadosClasse['descr_classe']?>
                    
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