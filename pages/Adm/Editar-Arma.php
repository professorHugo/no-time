<?php
    if(isset($_POST['AceitoMudarArma'])){
        $IdArma   = $_POST['ArmaEditar'];
        "<br>";
        $NomeArma = $_POST['NomeArma'];
        "<br>";

        $TipoArma = $_POST['TipoArma'];
        "<br>";
        $ClasseArma = $_POST['ClasseArma1'];
        "<br>";

        $DanoArma = $_POST['DanoArma'];
        "<br>";


            $QueryEditarRaca = "
            UPDATE 
                tb_item_armas 
            SET 
                descricao_item_arma = '$NomeArma',
                tipo_item_arma = '$TipoArma',
                dano_item_arma = '$DanoArma',
                classe_item_arma = '$ClasseArma'
            WHERE id_item_arma = '$IdArma'
        ";
        echo "<br>";

        if(mysqli_query($connection, $QueryEditarRaca)){
            echo "Editado com sucesso!<br>Inserir Modal";
        }else{
            echo "Erro".mysqli_error($connection);
        }
    }else{
        ?>
        <script>alert('Você não aceitou para trocar a arma')</script>
        <?php
    }
    