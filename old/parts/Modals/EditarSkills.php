<!--Modal para cadastro do aluno novo-->
<div class="modal fade in" id="EditarSkill<?php echo $ResSkills['id_habilidade']?>" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">
    <form action="index.php?url=Administrar&T=Skills&EditarSkills" method="post" class="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="Modal-Editar-Classe">
                        Editando a Habilidade:
                        <?php 
                        echo $ResSkills['habilidade']." | ID: ".$ResSkills['id_habilidade']
                        ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="SkillEditar" value="<?php echo $ResSkills['id_habilidade']?>">

                    <div class="col-md-12">
                        <label for="NomeSkill">Nome da Habilidade</label>
                        <input type="text" class="form-control" name="NomeSkill" id="NomeSkill" value="<?php echo $ResSkills['habilidade']?>">

                    </div>
                    <div class="clearfix"></div>
                    <p class="lead">Detalhes</p>
                    <div class="col-md-4">
                        <label for="ClasseSkill">Classe</label>
                        <select name="ClasseSkill" id="ClasseSkill" class="form-control">
                        <?php
                        $QueryPesquisa = "
                            SELECT * FROM tb_classes
                        ";
                        $ExeQrPesquisa = mysqli_query($connection, $QueryPesquisa);
                        foreach($ExeQrPesquisa as $ResSkillClasse):
                        ?>
                        <option value="<?php echo $ResSkillClasse['id_classe']?>">
                            <?php echo $ResSkillClasse['nome_classe']?>
                        </option>
                        <?php
                         endforeach;
                         ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="DanoSkill">Dificuldade</label>
                        <input type="text" class="form-control" name="DanoSkill" id="DanoSkill" value="<?php echo $ResSkills['dano_habilidade']?>">
                    </div>
                    <div class="col-md-4">
                        <label for="DifSkill">Dano</label>
                        <input type="text" class="form-control" name="DifSkill" id="DifSkill" value="<?php echo $ResSkills['dif_habilidade']?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <label for="DescSkill">Descrição da Habilidade</label>
                        <textarea class="form-control" name="DescSkill" id="DescSkill" value=""><?php echo $ResSkills['descricao_habilidade']?></textarea>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <!--Footer-->
                <div class="modal-footer">
                    <div class="col-md-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="AceitoMudarSkill" id="AceitoMudarSkill" value="1">
                                Sei que ao salvar os dados declarados aqui vão alterar as informações armazenadas no sistema
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Canelar</button>
                        <button type="submit" class="btn btn-xl btn-success" name="EditarSkill"><i></i> Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
