<?php
    if(!isset($_POST['CadastrarUsuario'])){
        "Email: ".$EmailJogador = $_POST['EmailUsuario'];
        "<br>";
        "Senha: ".$SenhaJogador = $_POST['SenhaUsuario'];
"<br>";
    }
    $QueryLogin = "
        SELECT * FROM tb_usuarios WHERE email_usuario = '$EmailJogador'
    ";
    $ExeQrLogin = mysqli_query($connection, $QueryLogin);
    $ResQrLogin = mysqli_num_rows($ExeQrLogin);

    
    if($ResQrLogin > 0){
        while($DadosUsuario = mysqli_fetch_assoc($ExeQrLogin)){
            $_SESSION['Login'] = $DadosUsuario;                        
            include 'parts/Modals/Modal-Fixo-Login.php';
        }
    }