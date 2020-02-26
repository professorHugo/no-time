<h3>Administração dos componentes</h3>

<?php 
    if(isset($_GET['T'])){
        $ItemADM = $_GET['T'];
    }
    if(isset($_GET['Editar'])){
        include 'pages/Adm/Editar-Classe.php';
    }
?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-2 chamada-item">
        <a href="?url=Administrar&T=Classes">
            <h3 <?php if(isset($ItemADM) && $ItemADM == "Classes"){ echo 'class="Adm-Ativo"';}?>>Classes</h3>
            <img src="img/Layout/holograma.png" class="img-responsive" alt="">
        </a>
    </div>
    <div class="col-md-2 chamada-item">
        <a href="?url=Administrar&T=Racas">
            <h3 <?php if(isset($ItemADM) && $ItemADM == "Racas"){ echo 'class="Adm-Ativo"';}?>>Raças</h3>
            <img src="img/Layout/holograma.png" class="img-responsive" alt="">
        </a>
    </div>
    <div class="col-md-2 chamada-item">
        <a href="?url=Administrar&T=Armas">
            <h3 <?php if(isset($ItemADM) && $ItemADM == "Armas"){ echo 'class="Adm-Ativo"';}?>>Armas</h3>
            <img src="img/Layout/holograma.png" class="img-responsive" alt="">
        </a>
    </div>
    <div class="col-md-2 chamada-item">
        <a href="?url=Administrar&T=Defesas">
            <h3 <?php if(isset($ItemADM) && $ItemADM == "Defesas"){ echo 'class="Adm-Ativo"';}?>>Defesas</h3>
            <img src="img/Layout/holograma.png" class="img-responsive" alt="">
        </a>
    </div>
    <div class="col-md-2 chamada-item">
        <a href="?url=Administrar&T=Skills">
            <h3 <?php if(isset($ItemADM) && $ItemADM == "Skills"){ echo 'class="Adm-Ativo"';}?>>Skills</h3>
            <img src="img/Layout/holograma.png" class="img-responsive" alt="">
        </a>
    </div>
    <div class="col-md-1"></div>
</div>
<?php
    if(isset($_GET['T'])){
        $UrlAdm = $_GET['T'];
        switch($UrlAdm){
            case $UrlAdm: include 'pages/Adm/'.$UrlAdm.'.php';break;
            default: include 'pages/Adm/Vazio.php';
        }
    }