<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?url=Home">No time BRo - RPG</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px">
            <ul class="nav navbar-nav">
                <li <?php if(isset($_GET['url']) and $_GET['url'] == 'Home'){ echo 'class="active"';}?>><a href="?url=Home">Inicio</a></li>
                <li <?php if(isset($_GET['url']) and $_GET['url'] == 'Historia'){ echo 'class="active"';}?>><a href="?url=Historia">História</a></li>
                <?php
                if(isset($_SESSION['Login'])){
//                    <!-- Escudo do Mestre -->
//                    incluir tomada de decisão para
                    ?>
                <li <?php if(isset($_GET['url']) and $_GET['url'] == 'Escudo-Do-Mestre'){ echo 'class="active"';}?>><a href="?url=Escudo-Do-Mestre">Escudo do Mestre</a></li>
                    <?php
                }
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Informações <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?url=Racas">
                                Raças de Personagens
                            </a>
                        </li>
                        <li>
                            <a href="?url=Classes">
                                Classes
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Parte responsável pelas regras do jogo-->
                <li class="dropdown">
                    <?php 
                    if(isset($_SESSION['Login'])){
                    ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo lmWord($_SESSION['Login']['nome_usuario'], 8) ?><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Personagens</li>
                        <li>
                            <a href="?url=Todos-Os-Players">Todos os Personagens</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#Cadastro-Player">Criação do Personagem</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Outros</li>
                        <?php
                        //Se for administrador do sistema
                        if($_SESSION['Login']['nivel_usuario'] == 1){
                            ?>
                            <li>
                                <a href="?url=Administrar">
                                    Administrar Dados
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                        <li>
                            <a href="?url=Logoff">
                                Logoff
                            </a>
                        </li>
                    </ul>
                    <?php
                    }else{
                    ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Acesso<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Conta de usuário</li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#Criar-Conta">
                                Crie sua conta
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#Fazer-Login">
                                Login
                            </a>
                        </li>
                    </ul>
                    <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
