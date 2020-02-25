<?php
if(isset($_GET['Player'])){
    $Player = $_GET['Player'];
    
    $QueryBuscarPlayers = "
SELECT 
	p.*,
	r.nome_raca,
	c.nome_classe,
	
	ta.descricao_item_arma,
	ta.tipo_item_arma,
	ta.dano_item_arma,
	
	ta1.descricao_item_arma,
	ta1.tipo_item_arma,
	ta1.dano_item_arma
FROM tb_players p

INNER JOIN tb_racas r
	ON p.raca_player = r.id_raca
	
INNER JOIN tb_classes c
	ON p.classe_player = c.id_classe

INNER JOIN tb_item_armas ta
	ON p.arma1_player = ta.id_item_arma
	
INNER JOIN tb_item_armas ta1
	ON p.arma2_player = ta1.id_item_arma
    
WHERE id_player = $Player
";

$ExeQrBuscarPlayers = mysqli_query($connection, $QueryBuscarPlayers);
$ResQrBuscarPlayers = mysqli_num_rows($ExeQrBuscarPlayers);

if( $ResQrBuscarPlayers > 0 ){
    while($ResPlayers = mysqli_fetch_assoc($ExeQrBuscarPlayers)){
        echo "<h1>Dados do jogador</h1>";
        echo "Identificação: ".$ResPlayers['id_player'];
        echo "<br>";
        echo "Nome do Jogador: ".$ResPlayers['nome_player'];
        echo "<br>";
        echo "Nome do Personagem: ".$ResPlayers['personagem_player'];
        echo "<br>";
        echo "Raça do Personagem: ".$ResPlayers['nome_raca'];
        echo "<br>";
        echo "Classe: ".$ResPlayers['nome_classe'];
        echo "<br>";
        echo "Pts de necessários para este level: " . $ResPlayers['xp_player'];
        echo "<br>";
        echo "Level Player: Lv" . $ResPlayers['lv_player'];
        echo "<br>";
        echo "Total de atributos: " . $ResPlayers['atk_player'];
        echo "<br>";
        echo "Total de Habilidade: " . $ResPlayers['hab_player'];
        
        echo "<h2>Atributos distribuidos</h2>";
        echo $ResPlayers['atr1_titulo'] . ": " . $ResPlayers['atr1_v'] . " | ";
        echo $ResPlayers['atr2_titulo'] . ": " . $ResPlayers['atr2_v'] . " | ";
        echo $ResPlayers['atr3_titulo'] . ": " . $ResPlayers['atr3_v'] . " | ";
        echo $ResPlayers['atr4_titulo'] . ": " . $ResPlayers['atr4_v'];
        
        
        echo "<h2>Habilidades da Classe</h2>";
        echo $ResPlayers['hab1_titulo'] . ": " . $ResPlayers['hab1_v'] . " | ";
        echo $ResPlayers['hab2_titulo'] . ": " . $ResPlayers['hab2_v'] . " | ";
        echo $ResPlayers['hab3_titulo'] . ": " . $ResPlayers['hab3_v'] . " | ";
        echo $ResPlayers['hab4_titulo'] . ": " . $ResPlayers['hab4_v'] . " | ";
        echo $ResPlayers['hab5_titulo'] . ": " . $ResPlayers['hab5_v'];
        
        include 'armas.php';
        
        include 'defesa.php';
        
        include 'habilidades.php';
    }
}
}
