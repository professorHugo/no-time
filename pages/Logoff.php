<!-- Modal Logged in-->
<div class="modal fade in text-muted" id="modalLoggedIn" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top:15%">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Usuário Desconectado</h4>
            </div>
            <div class="modal-body">
                <div>
                    <div class="col-md-12 col-md-push-1 text-center" style="padding-left: 0;padding-right: 0">
                        <img src="img/ajax-loader.gif" class="img-responsive" width="50%" style="margin:0 auto;">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-10 col-md-push-1 text-center" style="margin-top: 30px">
                        Desconectando o usuário...<br>
                        Id do Usuário: <?php echo $_SESSION['Login']['id_usuario'] ?><br>
                        Nome: <?php echo lmWord($_SESSION['Login']['nome_usuario'], 15) ?> desconectado com sucesso...
                        <?php session_destroy() ?>
                    </div>
                    <div class="clearfix"></div>
                    <meta http-equiv="refresh" content="2;index.php">
                </div>
            </div>
        </div>
    </div>
</div>