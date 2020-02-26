<!--Modal para fazer login-->
<div class="modal fade in" id="Fazer-Login" tabindex="-1" role="dialog" aria-labelledby="Cadastro-Player" style="margin-top:10%">
    <form action="#" method="post" class="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-labelledb="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="ModalCadastro">Fazer Login</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="EmailUsuario">E-Mail</label>
                            <input type="text" id="EmailUsuario" name="EmailUsuario" class="form-control" placeholder="exemplo@email.com.br">
                        </div>
                        <div class="col-md-6">
                            <label for="SenhaUsuario">Senha</label>
                            <input type="password" id="SenhaUsuario" name="SenhaUsuario" class="form-control" placeholder="******">
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-xl btn-danger" data-dismiss="modal">Canelar</button>
                    <button type="submit" class="btn btn-xl btn-success" name="FazerLogin">Login</button>
                </div>
            </div>
        </div>
    </form>
</div>
