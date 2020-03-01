<div class="col-xs-12 text-center" style="margin-top:10px">
    <button class="btn btn-md" style="color:#111" data-toggle="modal" data-target="#VerHistoria">Ver História</button>
</div>

<?php
    if(isset($_POST['AlterarHistória'])){
        
        $TextoHistoria = $_POST['HistoriaPersonagem'];
        
        $Personagem = $_POST['Personagem'];
        
        $QueryBuscarHistoria1 = "SELECT * FROM tb_historias WHERE id_player = $Personagem";
        $ExeQrBuscarHistoria1 = mysqli_query($connection, $QueryBuscarHistoria1);
        
        if(mysqli_num_rows($ExeQrBuscarHistoria1)>0){
            $QueryHistoria = "
            UPDATE
                tb_historias
            SET
                texto_historia = '$TextoHistoria'
            WHERE id_player = '$Personagem'
            ";
            if(mysqli_query($connection, $QueryHistoria)){
                echo "Editado com sucesso!<br>Inserir Modal";
            }else{
                echo "Erro".mysqli_error($connection);
            }
        }else{
            $QueryHistoria = "
            INSERT INTO tb_historias(id_player,texto_historia)
            VALUES('$Personagem','$TextoHistoria')
            ";
            if(mysqli_query($connection, $QueryHistoria)){
                echo "Inserido com sucesso!<br>Inserir Modal";
            }else{
                echo "Erro".mysqli_error($connection);
            }
        }
        
    }
?>

<!--Modal mostrar história do personagem-->
<div class="modal fade in" id="VerHistoria" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="">
    <form action="#" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="ModalCadastro">
                        <label for="HistoriaPersonagem">
                            História do Personagem: <?php echo $ResPlayers['personagem_player']?>
                        </label>
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="Personagem" value="<?php echo $ResPlayers['nome_player']?>">
                    <?php
                    $QueryBuscarHistoria = "SELECT * FROM tb_historias WHERE id_player = '$ResPlayers[nome_player]'";
                    $ExeQrBuscarHistoria = mysqli_query($connection, $QueryBuscarHistoria);
                    if(mysqli_num_rows($ExeQrBuscarHistoria) > 0){
                    foreach($ExeQrBuscarHistoria as $Historia):
                    ?>

                    <textarea name="HistoriaPersonagem" id="HistoriaPersonagem" cols="30" rows="10" class="form-control" placeholder="Escreva sua história aqui"><?php echo $Historia['texto_historia'];?></textarea>

                    <?php
                    endforeach;
                    }else{
                        ?>
                        <textarea name="HistoriaPersonagem" id="HistoriaPersonagem" cols="30" rows="10" class="form-control" placeholder="Escreva sua história aqui"></textarea>
                        <?php
                    }
                    ?>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <!--Footer-->
                <div class="modal-footer">
                    <div class="col-md-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="AceitoContrato" id="AceitoContrato" value="1">
                                Sei que ao salvar os dados declarados aqui vão alterar as informações armazenadas no sistema
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Canelar</button>
                        <button type="submit" class="btn btn-md btn-success" name="AlterarHistória">Salvar</button>
                    </div>


                </div>
            </div>
        </div>
    </form>
</div>
