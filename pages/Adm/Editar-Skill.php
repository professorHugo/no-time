<?php
//    if(isset($_POST['AceitoMudarSkill'])){
        $IdSkill        = $_POST['SkillEditar'];
        $ClasseSkill    = $_POST['ClasseSkill'];

        $NomeSkill      = $_POST['NomeSkill'];
        $DifSkill       = $_POST['DifSkill'];
        $DanoSkill      = $_POST['DanoSkill'];
        $DescSkill      = $_POST['DescSkill'];


        $QueryEditarClasse = "
            UPDATE 
                tb_lista_habilidades 
            SET 
                classe_hab = '$ClasseSkill',
                habilidade = '$NomeSkill',
                dif_habilidade = '$DifSkill',
                dano_habilidade = '$DanoSkill',
                descricao_habilidade = '$DescSkill'
            WHERE id_habilidade = $IdSkill
        ";

        if(mysqli_query($connection, $QueryEditarClasse)){
            echo "Editado com sucesso!<br>Inserir Modal";
        }else{
            echo "Erro".mysqli_error($connection);
        }   
//    }else{
//        echo "Você precisa aceitar os termos";
//    }
//    