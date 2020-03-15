<?php
    if(isset($_POST['AceitoMudarClasse'])){
        $IdClasse   = $_POST['ClasseEditar'];
        $NomeClasse = $_POST['NomeClasse'];

        $Atr1       = $_POST['Atr1'];
        $Atr2       = $_POST['Atr2'];
        $Atr3       = $_POST['Atr3'];
        $Atr4       = $_POST['Atr4'];

        $Hab1       = $_POST['Hab1'];
        $Hab2       = $_POST['Hab2'];
        $Hab3       = $_POST['Hab3'];
        $Hab4       = $_POST['Hab4'];
        $Hab5       = 'Especial';
        $Descricao  = $_POST['Descricao'];


        $QueryEditarClasse = "
            UPDATE 
                tb_classes 
            SET 
                nome_classe = '$NomeClasse',
                atr1 = '$Atr1',
                atr2 = '$Atr2',
                atr3 = '$Atr3',
                atr4 = '$Atr4',
                hab_c1 = '$Hab1',
                hab_c2 = '$Hab2',
                hab_c3 = '$Hab3',
                hab_c4 = '$Hab4',
                hab_c5 = '$Hab5',
                descr_classe = '$Descricao'
            WHERE id_classe = $IdClasse
        ";

        if(mysqli_query($connection, $QueryEditarClasse)){
            echo "Editado com sucesso!<br>Inserir Modal";
        }else{
            echo "Erro".mysqli_error($connection);
        }   
    }else{
        echo "Você precisa aceitar os termos";
    }
    