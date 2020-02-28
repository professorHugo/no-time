<!--Modal para visualizar a classe-->
<div class="modal fade in" id="VisualizarSkill<?php echo $ResSkills['id_habilidade']?>" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="Modal-Editar-Classe">
                    Classe: <?php 
                    $Classe = $ResSkills['classe_hab'];
                    $QueryPesquisa = "SELECT * FROM tb_classes WHERE id_classe = $Classe";
                    $ExeQrPesquisa = mysqli_query($connection, $QueryPesquisa);
                    foreach($ExeQrPesquisa as $ClasseR):
                        echo $ClasseR['nome_classe'];
                    endforeach;                    
                    ?>
                </h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    Visualizando a Habilidade:
                    <?php 
                    echo $ResSkills['habilidade']." | ID: ".$ResSkills['id_habilidade']
                    ?>
                </div>
                <div class="col-md-6">
                   <?php 
                    
                    
                    ?>
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
