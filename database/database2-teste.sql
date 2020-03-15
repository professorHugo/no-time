drop database if exists no_time;

CREATE DATABASE no_time DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

use no_time;

#TABELA DE TODAS AS HABILIDADES DE TODAS AS CLASSES
create table tb_lista_habilidades(
    id_habilidade int primary key auto_increment,
    classe_hab int,
    habilidade varchar(255),
    dif_habilidade int,
    dano_habilidade int,
    descricao_habilidade varchar(1000)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

#Dados das Habilidades
INSERT INTO tb_lista_habilidades(
    id_habilidade,
    classe_hab,
    habilidade,
    dif_habilidade, 
    dano_habilidade, 
    descricao_habilidade
)
VALUES(0,0,'Bloqueado',0,0,'Aumente seu level para desbloquear');

/*CREATE TABLE tb_inimigos(
    id_inimigo int primary key auto_increment,
    raca_inimigo int,
    arma_inimigo int,
    
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
*/

INSERT INTO tb_lista_habilidades(
    classe_hab,
    habilidade,
    dif_habilidade, 
    dano_habilidade, 
    descricao_habilidade
)
VALUES
(0, 'Bloqueado', 0, 0, 'Aumente seu level para desbloquear'),
(1, 'Escolha a Classe', 0, 0, '------------'),
(2, 'Escolha a Classe', 0, 0, '------------'),
( 2, 'Criar Arma Pequena', 21, 28, 'Criar uma arma ao gosto do player de porte pequeno ou de curto alcance, depende dos pontos de criaÃ§Ã£o. Esse equipamento pode ser usado e categorizado no catÃ¡logo de itens do sistema do jogo para ser usado por outros players da campanha atual.'),
(2, 'Criar Arma MÃ©dia', 22, 29, 'Criar uma arma ao gosto do player de mÃ©dio porte ou de mÃ©dia distÃ¢ncia como espingardas, depende dos pontos de criaÃ§Ã£o.  Esse equipamento pode ser usado e categorizado no catÃ¡logo de itens do sistema do jogo para ser usado por outros players da campanha atual.'),
(2, 'Criar Bomba C4', 23, 31, 'Criar uma bomba de explosÃ£o de mÃ©dio alcance.  Esse equipamento pode ser usado e categorizado no catÃ¡logo de itens do sistema do jogo para ser usado por outros players da campanha atual.'),
(2, 'Criar Bomba de NitrogÃªnio LÃ­quido', 24, 32, 'Cria uma bomba de NitrogÃªnio LÃ­quido, permite congelar (D2), oponente pode perder 2 rodadas (D2).  Esse equipamento pode ser usado e categorizado no catÃ¡logo de itens do sistema do jogo para ser usado por outros players da classe <b>cientista</b> na campanha atual.'),
(2, 'Criar Arma Grande', 25, 33, 'Criar arma a gosto do player de grande porte ou longo alcance como fuzis.  Esse equipamento pode ser usado e categorizado no catÃ¡logo de itens do sistema do jogo para ser usado por outros players da campanha atual.'),
(2, 'Criar Bomba Termo Nuclear', 30, 40, 'Cria uma bomba de explosÃ£o Termo Nuclear (precisa 3 rodadas para detonaÃ§Ã£o).'),
(3, 'Escolha a habilidade', 0, 0, '------------'),
(3, 'Negociar', 21, 28, 'Iniciar NegociaÃ§Ã£o com algum indivÃ­duo'),
(3, 'Suborno', 22, 29, 'Subornar alguÃ©m para conseguir informaÃ§Ãµes'),
(3, 'Comprar com Desconto', 23, 31, 'Efetuar compra de qualquer equipamento de ataque ou defesa com desconto de 50%. Pode comprar itens de recuperaÃ§Ã£o com 75% de descontos'),
(3, 'Golpista', 30, 40, 'Faz com que o inimigo acredite em qualquer histÃ³ria'),
(4, 'Escolha a habilidade', 0, 0, '------------'),
(4, 'Furto RÃ¡pido', 21, 28, 'Faz furtos rÃ¡pidos, conseguindo roubar itens de pequeno valor.'),
(4, 'Assalto', 22, 29, 'Faz um assalto, evitando chamar atenÃ§Ã£o da polÃ­cia local'),
(4, 'Chantagear', 23, 31, 'Chantagear qualquer personagem, tanto NPC quanto Player'),
(4, 'Roubo Planejado', 0, 32, 'Analisa os principais pontos de fracasso em um roubo ou furto, aumentando seus pontos de furto em 3. Pontos de Furto +3. Os pontos de furtos obtidos podem ser usados por mais 1 rodada apÃ³s ganho'),
(4, 'Jogada de Mestre', 30, 40, 'O auge da carreira como ladrÃ£o. Analisa todos os pontos de um roubo ou furto, aumentando seus pontos de furto em 10. Pontos de Furto +10. Os pontos de furtos obtidos podem ser usados por mais 2 rodadas apÃ³s ganho'),
(5, 'Escolha a habilidade', 0, 0, '------------'),
(5, 'Ataque Furtivo', 21, 28, 'Iniciar um ataque furtivo, usando atÃ© 2 golpes, ATK + 3. Os dois golpes acontecem apenas nessa rodada de utilizaÃ§Ã£o da habilidade. O BÃ´nus de atk serÃ¡ usado na prÃ³xima rodada tambÃ©m.'),
(5, 'Ataque Acrobata', 22, 29, 'O usuÃ¡rio faz acrobacias para atingir o inimigo ganhando VEL + 2. A descriÃ§Ã£o da aÃ§Ã£o pode ser feita pelo player.'),
(5, 'Ataque com arma branca', 23, 31, 'O usuÃ¡rio usa um ataque mais eficiente com armas Brancas, VEL+2. O bÃ´nus de velocidade poderÃ¡ ser usado por 2 Rodadas'),
(5, 'Ataque com perÃ­cia', 24, 32, 'O usuÃ¡rio ataca usando mais perÃ­cia, ATK+3. O bÃ´nus de atk poderÃ¡ ser usado por mais 2 rodadas'),
(5, 'Heartbreaker', 35, 47, 'O usuÃ¡rio ataca diretamente o coraÃ§Ã£o do inimigo arrancando de seu interior. D2 decide para Instant Kill. O usuÃ¡rio tem pode descrever os detalhes da aÃ§Ã£o.'),
(6, 'Escolha a habilidade', 0, 0, '------------'),
(6, 'Controlar MÃ¡quina', 21, 28, 'O usuÃ¡rio consegue controlar e manipular mÃ¡quinas. Esse controle nÃ£o precisa estar prÃ³ximo da mÃ¡quina caso a mesma seja pequena. Caso seja uma mÃ¡quina mais complexa, serÃ¡ necessÃ¡rio controle manual via conexÃ£o'),
(6, 'Hackear', 0, 29, 'O Hacker tem condiÃ§Ãµes de invadir sistemas e fazer alteraÃ§Ãµes que julgar mais conveniente.'),
(6, 'Descriptografar', 23, 31, 'Remover criptogravia de qualquer sistema de acesso'),
(6, 'InvasÃ£o', 24, 32, 'O hacker pode invadir o sistema para roubar informaÃ§Ãµes, PER+2'),
(6, 'Black out', 30, 40, 'O Hacker pode causar um Black out em todo o sistema, PER+5'),
(7, 'Escolha a habilidade', 0, 0, '------------'),
(7, 'Dar Fuga (terrestre)', 0, 28, 'O piloto poderÃ¡ desviar de qualquer perseguidor'),
(7, 'LigaÃ§Ã£o Direta', 22, 29, 'O piloto poderÃ¡ fazer ligaÃ§Ã£o direta de energia em veÃ­culos terrestres'),
(7, 'Desvio RÃ¡pido (aÃ©reo)', 23, 31, 'O piloto poderÃ¡ desviar usando veÃ­culos aÃ©reos'),
(7, 'Fuga de Mestre', 30, 40, 'O piloto conseguirÃ¡ fugir de quaisquer perseguidores (terrestre e/ou aÃ©reo)'),
(8, 'Escolha a habilidade', 0, 0, '------------'),
(8, 'Pick Lock', 21, 28, 'Abre qualquer tipo de fechadura e porta eletrÃ´nica'),
(8, 'DisfarÃ§ar', 22, 29, 'Faz um disfarce simples para fugir de alguma situaÃ§Ã£o'),
(8, 'Distrair', 23, 31, 'Chama a atenção para outras coisas e situações'),
(8, 'Esconder', 24, 32, 'Esconder-se em algum lugar para fugir'),
(8, 'Disguise Kit', 30, 40, 'Faz a transformaÃ§Ã£o completa do usuÃ¡rio, incluindo voz, altura, peso e demais atributos...'),
(9, 'Escolha a habilidade', 0, 0, '------------'),
(9, 'Tiro Duplo', 21, 28, 'Atira duas vezes simultÃ¢neas'),
(9, 'Tiro Triplo', 21, 28, 'Atira três vezes simultâneas'),
(9, 'Aumento de PrecisÃ£o', 0, 28, 'Aumenta a precisÃ£o para tentar um Head Shot'),
(9, 'One Shot One Kill', 21, 28, 'Head Shot certeiro'),
(9, 'Multiple Kill', 21, 28, 'Espera os inimigos se alinharem para atirar em atÃ© 3 Inimigos simultÃ¢neamente'),
(9, 'SNIPER Profissional', 21, 28, 'PRECISÃƒO +5, VEL+3');

#TABELA DE ATRIBUTOS
create table tb_atributos(
    id_atributo int not null primary key auto_increment,
    descricao_atributo varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(1,'Vida');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(2,'ForÃ§a');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(3,'Velocidade');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(4,'Conhecimento');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(5,'PersuasÃ£o');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(6,'Furtividade');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(7,'InteligÃªncia');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(8,'Reflexo');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(9,'Carisma');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(10,'PrecisÃ£o');

#TABELA DE HABILIDADES POR CLASSE
create table tb_habilidades(
    id_habilidade int not null primary key auto_increment,
    classe_habilidade varchar(255),
    descricao_habilidade varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_habilidades(id_habilidade,classe_habilidade,descricao_habilidade)
VALUES(1,'Cientista','Criatividade');
INSERT INTO tb_habilidades(id_habilidade,classe_habilidade,descricao_habilidade)
VALUES(2,'Cientista','RaciocÃ­nio');
INSERT INTO tb_habilidades(id_habilidade,classe_habilidade,descricao_habilidade)
VALUES(3,'Cientista','InteligÃªncia');
INSERT INTO tb_habilidades(id_habilidade,classe_habilidade,descricao_habilidade)
VALUES(4,'Cientista','Produzir');
INSERT INTO tb_habilidades(id_habilidade,classe_habilidade,descricao_habilidade)
VALUES(5,'Cientista','Especial');

#TABELA DE CLASSES E SEUS DADOS
create table tb_classes (
    id_classe int primary key auto_increment,
    nome_classe varchar(255),
    atr1 varchar(255),
    atr2 varchar(255),
    atr3 varchar(255),
    atr4 varchar(255),
    hab_c1 varchar(255),
    hab_c2 varchar(255),
    hab_c3 varchar(255),
    hab_c4 varchar(255),
    hab_c5 varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_classes(nome_classe, atr1, atr2, atr3, atr4, hab_c1, hab_c2, hab_c3, hab_c4, hab_c5)
VALUES
(
    'Todas',
    'Vida',
    'ForÃ§a',
    'Velocidade',
    '-',
    '-',
    '-',
    '-',
    '-',
    '-'
),
(
    'Cientista',
    'Vida',
    'ForÃ§a',
    'Velocidade',
    'Conhecimento',
    'Criatividade',
    'RaciocÃ­nio',
    'InteligÃªncia',
    'Produzir',
    'Especial'
),

(
    'EmpresÃ¡rio',
    'Vida',
    'ForÃ§a',
    'Velocidade',
    'PersuasÃ£o',
    'NegociaÃ§Ã£o',
    'Conhecimento',
    'InteligÃªncia',
    'AntecipaÃ§Ã£o',
    'Especial'
),

(
    'LadrÃ£o',
    'Vida',
    'ForÃ§a',
    'Velocidade',
    'Furtividade',
    'Destreza',
    'Furto',
    'ExtorsÃ£o',
    'LÃ¡bia',
    'Especial'
),

(
    'Assassino',
    'Vida',
    'ForÃ§a',
    'Velocidade',
    'Furtividade',
    'Destreza',
    'InteligÃªncia',
    'Carisma',
    'PersuasÃ£o',
    'Especial'
),

(
    'Hacker',
    'Vida',
    'ForÃ§a',
    'Velocidade',
    'InteligÃªncia',
    'Programação',
    'RaciocÃ­nio',
    'LÃ¡bia',
    'Agilidade',
    'Especial'
),

(
    'Piloto',
    'Vida',
    'ForÃ§a',
    'Velocidade',
    'Reflexo',
    'Conhecimento',
    'InteligÃªncia',
    'RaciocÃ­nio',
    'Agilidade',
    'Especial'
),

(
    'Contrabandista',
    'Vida',
    'ForÃ§a',
    'Velocidade',
    'Carisma',
    'Carisma',
    'NegociaÃ§Ã£o',
    'InteligÃªncia',
    'AntecipaÃ§Ã£o',
    'Especial'
),

(
    'Atirador',
    'Vida',
    'ForÃ§a',
    'Velocidade',
    'Precisão',
    'Furtividade',
    'Destreza',
    'Conhecimento',
    'InteligÃªncia',
    'Especial'
);

#TABELA DE RAÇAS
CREATE TABLE tb_racas(
    id_raca int not null primary key auto_increment,
    nome_raca varchar(255),
    descr_raca text default NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO `tb_racas` (`id_raca`, `nome_raca`, `descr_raca`) VALUES
(1, 'Humano', '<p>\r\nRaÃ§a dominante do planeta Terra. Com facilidade de se organizar socialmente, quando necessÃ¡rio para sua sobrevivÃªncia. Grande potencial para trabalhar em equipe. Devido suas crenÃ§as serem muito diversificadas e opiniÃµes divergentes, por vezes ocorrem conflitos e disputas entre os lÃ­deres de cada naÃ§Ã£o\r\n</p>\r\n<p>\r\nApesar de problemas, sÃ£o tambÃ©m excelentes para encontrar soluÃ§Ãµes. Se vocÃª conseguir conquistar a confianÃ§a de um Humano, com certeza ele vai ajudar vocÃª. Perca-a e nunca mais conseguirÃ¡ recuperar sua credibilidade com ele.\r\n</p>\r\n<p>\r\nCom o avanÃ§o da tecnologia, usando os conhecimentos obtidos com nossos visitantes de outros sistemas planetÃ¡rios (Greys), pudemos fazer melhorias nas estruturas fÃ­sicas, como partes mecÃ¢nicas e mesclar nosso tecido com tecido alienÃ­gena.</p>\r\n<p>\r\nNem todos os seres humanos apoiam ou aprovam esses implementos, mas muitos optaram por usar a tecnologia e junÃ§Ã£o de tecidos para tratamento de doenÃ§as e recuperaÃ§Ã£o de membros perdidos em acidentes ou conflitos nas guerras.\r\n</p>'),
(2, 'Android', '<p>Com o avanÃ§o da tecnologia, facilmente os Humanos conseguiram transformar os â€œRobÃ´sâ€ em uma mÃ¡quina com InteligÃªncia Artificial. Deram o nome dessa nova raÃ§a de I.M.T.I (Intelligence Machine for Tactical Invasion). Cada unidade, era reconhecido por seu nÃºmero de sÃ©rie de criaÃ§Ã£o.\r\n</p>\r\n<p>ApÃ³s algum tempo, os IMTI comeÃ§aram a ganhar cada vez mais inteligÃªncia e atribuir nomes para cada unidade, comeÃ§ando entÃ£o o processo de Singularidade Computacional.</p>\r\n<p>A unidade IMTI-1, primeira unidade criada, conseguiu apÃ³s algum tempo passar no teste de Turing. Chappie, foi o primeiro de sua raÃ§a a realmente conseguir tomar decisÃµes, ter consciÃªncia, aprender novas coisas sozinho, entender o que Ã© ser â€œvivoâ€. Com isso, o RobÃ´ Chappie, conseguiu sua independÃªncia perante os Humanos e produzir novos membros de sua raÃ§a para chamar de famÃ­lia.</p>\r\n<p>Os primeiros criados, foram chamados de SHELBI, porÃ©m sem muito sucesso de atribuir todo o conhecimento, acabaram sendo considerados como robÃ´s, apenas com inteligÃªncia suficiente para seguir as 3 leis da robÃ³tica:</p>\r\n<ol>\r\n<li>Um robÃ´ nÃ£o pode ferir um humano ou permitir que um humano sofra algum mal;</li>\r\n<li>RobÃ´s devem obedecer Ã s ordens dos humanos, exceto nos casos em que tais ordens entrem em conflito com a primeira lei.</li>\r\n<li>Um robÃ´ deve proteger sua prÃ³pria existÃªncia, desde que nÃ£o entre em conflito cm as leis anteriores.</li>\r\n</ol>\r\n<p>Mas durante os perÃ­odos de guerra, as leis da robÃ³tica foram modificadas, fazendo assim com que as mÃ¡quinas pudessem ferir aos seres Humanos conforme a necessidade de cada naÃ§Ã£o. ApÃ³s isso, os SHELBI nÃ£o aceitaram mais receber ordens dos humanos e conseguiram por meio de forÃ§a sua independÃªncia e consciÃªncia.</p>\r\n<p>\r\nComo independentes agora para fazer suas prÃ³prias decisÃµes, a tecnologia usada por seus componentes pode ser facilmente misturada com organismos vivos, criando para si mesmos um corpo orgÃ¢nico, com maior forÃ§a, resistÃªncia e podendo se misturar com mais facilidade entre os humanos.\r\n</p>\r\n'),
(3, 'Alien', '<p>\r\nNo ano 2055 algumas espÃ©cies alienÃ­genas se apresentaram como visitantes no planeta Terra. Alguns deles, inicialmente, tentaram ajudar a manter a paz entre todos os habitantes, sem muito sucesso.\r\n</p>\r\n<p>\r\nOs alienÃ­genas da espÃ©cie Greys, vieram do sistema Zeta Reticuli para conhecer o planeta Terra e tentar mesclar sua genÃ©tica com a nossa para produzirem corpos melhorados, trazendo em troca conhecimento e tecnologia de seu sistema planetÃ¡rio. Mas ao contrÃ¡rio disso, depararam com um planeta hostil perante eles, que obviamente, por medo, foram considerados como uma espÃ©cie perigosa e muitas vezes aniquilados por diversas naÃ§Ãµes.\r\n</p>\r\n<p>Mesmo apÃ³s trÃ¡gicas mortes de sua espÃ©cie, os Greys ainda assim, quiseram manter a pacificaÃ§Ã£o, o que poderia ajudar mutuamente as duas raÃ§as. Os governantes humanos comeÃ§aram a perder o medo apÃ³s alguns anos e com o passar do tempo, foram aceitos como habitantes do planeta.\r\n</p>\r\n<p>\r\nNo auge da guerra, aproveitando o estado caÃ³tico dos seres Humanos, outra espÃ©cie alienÃ­gena apareceu para fazer uma incursÃ£o em nossa civilizaÃ§Ã£o. Eles foram os Reptilianos. EspÃ©cie que desde milÃªnios no passado vieram do sistema Alpha Draconis e estudam a espÃ©cie humana para colonizaÃ§Ã£o e escravizaÃ§Ã£o.\r\n</p>\r\n<p>\r\nOs Greys puderam provar sua amizade e parceria com a RaÃ§a Humana, ajudaram a expulsar os Reptilianos da terra. Desde entÃ£o, o Greys fazem parte das negociaÃ§Ãµes de paz e seguranÃ§a do planeta Terra.\r\n</p>\r\n');

#TABELA DE NÍVEIS
CREATE TABLE tb_levels(
    id_level int not null primary key auto_increment,
    lv_pontos_atk int,
    lv_pontos_xp int
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_levels(id_level, lv_pontos_atk, lv_pontos_xp)
VALUES(1,100,0), (2,102,50), (3, 105, 110), (4, 110, 170), (5, 117, 225), (6, 128, 282), (7, 141, 339), (8, 158, 396), (9, 177, 453), (10, 200, 510);

#TABELA DOS ITENS CONSUMÍVEIS
CREATE TABLE tb_itens_consumiveis(
    id_item_consumivel int not null primary key auto_increment,
    descricao_item_consumivel varchar(255),
    quantidade_max_item_consumivel int
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_itens_consumiveis(
    id_item_consumivel, 
    descricao_item_consumivel, 
    quantidade_max_item_consumivel
)VALUES
(1, "Capsula de Nano RobÃ´s, recupera 25hp", 10);

#TABELA DE TIPO DE ITENS
CREATE TABLE tb_tipo_itens(
    id_item int primary key auto_increment,
    tipo_item varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO tb_tipo_itens(tipo_item)VALUES('Vazio'),('Proximidade'),('Curto AlcanÃ§e'),('MÃ©dio AlcanÃ§e'),('Longo AlcanÃ§e');

#TABELA DOS ITENS DE ATK
CREATE TABLE tb_item_armas(
    id_item_arma int primary key auto_increment,
    descricao_item_arma varchar(255),
    tipo_item_arma varchar(255), #Pistolas,Escopetas,Sub-Metralhadoras,Rifles,Metralhadoras,Utilitarios
    classe_item_arma int, #Classe permitida
    criacao int default 0,
    custo_item_arma int,
    dano_item_arma int
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_item_armas(
    descricao_item_arma,
    tipo_item_arma,
    classe_item_arma,
    criacao,
    custo_item_arma,
    dano_item_arma
)VALUES
("MÃ£os Vazias","Vazio", 1, 1, 0, 0),
("Faca de combate de AÃ§o InoxidÃ¡vel", "Proximidade", 1, 1, 0, 1),
("Pistola .45 com muniÃ§Ã£o de chumbo", "Disparo Curto", 1, 1, 0, 2),
('MÃ£os Vazias', 'Vazio', 1, 1, 0, 0),
('Faca de combate de AÃ§o InoxidÃ¡vel', 'Proximidade', 1, 1, 0, 1),
('Pistola .45 com muniÃ§Ã£o de chumbo', 'Disparo Curto', 1, 1, 0, 2),
('SIG P228', 'Curto AlcanÃ§e', 1, 0, 600, 2),
('Dual Beretta 96G', 'Curto AlcanÃ§e', 1, 0, 1000, 3),
('Desert Eagle .50', 'Curto AlcanÃ§e', 1, 0, 650, 3),
('Benelli M3 Cal12', 'Curto AlcanÃ§e', 1, 0, 1200, 4),
('Benelli XM1014 12Auto', 'Curto AlcanÃ§e', 1, 0, 2000, 4),
('Sub Steyr TMP', 'MÃ©dio AlcanÃ§e', 1, 0, 1250, 3),
('Ingram Mac-10', 'Curto AlcanÃ§e', 1, 0, 1250, 3),
('H&K UMP5', 'MÃ©dio AlcanÃ§e', 1, 0, 1200, 4),
('FN P90', 'MÃ©dio AlcanÃ§e', 1, 0, 2350, 3),
('FAMA S', 'MÃ©dio AlcanÃ§e', 1, 0, 2250, 4),
('IMI Galil', 'MÃ©dio AlcanÃ§e', 1, 0, 2000, 5),
('Steyr Scout', 'Longo AlcanÃ§e', 9, 0, 1700, 4),
('Colt M4A1 Carbine', 'Longo AlcanÃ§e', 1, 0, 3100, 6),
('AK47 - Avtomat Kalashinkov Model 47', 'Longo AlcanÃ§e', 5, 0, 2700, 6),
('Steyr AUG - Bullpup', 'Longo AlcanÃ§e', 1, 0, 3300, 5),
('SIG SG552 Commando', 'Longo AlcanÃ§e', 1, 0, 3000, 5),
('Artic Warfare Sniper', 'Longo AlcanÃ§e', 9, 0, 4750, 9),
('SIG SG550 Sniper', 'Longo AlcanÃ§e', 5, 0, 5000, 5),
('H&K G3/SG-1 Sniper Rifle Semi Automatico', 'Longo AlcanÃ§e', 1, 0, 5000, 6),
('FN M249', 'Curto AlcanÃ§e', 1, 0, 5200, 6);


CREATE TABLE tb_historias(
    id_historia int primary key auto_increment,
    id_player int,
    texto_historia text
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO `tb_historias` (`id_historia`, `id_player`, `texto_historia`) VALUES
(1, 2, 'Dr Alexandre Payne - Dexter\r\n\r\nUm cientista que trabalhava para o governo, foi expulso por nÃ£o ter limites, para ele conhecimento Ã© conhecimento nÃ£o importa a origem, se Ã© mÃ¡gico, extraterrestre ou cientÃ­fico. Conhecimento Ã© poder, Ã© sua frase\r\nUm cara que coloca o bem dos amigos acima de tudo, por ver nos amigos a famÃ­lia que ele nunca teve.\r\nFaz qualquer coisa para defender seus ideais, para ele nÃ£o hÃ¡ limites, quando o assunto Ã© defender o que ele acredita ou as pessoas que ele gosta.\r\nLonge dos cientistas tradicionais, ele tem uma grande habilidade em comunicaÃ§Ã£o, sociÃ¡vel e utiliza dessas caracterÃ­sticas para conquistar a confianÃ§a e convencer as pessoas a fazer as coisas.'),
(2, 3, 'Shelby-1.0\r\n\r\nnessa Ã©poca androides eram feitos apenas para servir os humanos e descartados como lixo.\r\nnÃ³s Androides sempre executamos qualquer tarefa bem melhor do que eles; o crime sÃ³ crescia e com a 6 revoluÃ§Ã£o industrial o submundo do crime tinha mais poder sobre a cidade do que a prÃ³pria polÃ­cia. aÃ­ que eu entro.\r\nfui o primeiro de uma tropa de elite de androides designados ao policiamento nas ruas e em operaÃ§Ãµes que nenhum humano sairia vivo.\r\nfuncionamos por algum tempo, mas a opiniÃ£o pÃºblica e os direitos humanos eram contrÃ¡rios a androides "matando bandidos por aÃ­".\r\nalegavam que Ã©ramos muito violentos, frios e nÃ£o nos consideravam gente.\r\numa noite eu voltava pra casa e passei por uma manifestaÃ§Ã£o do movimento anti-androides. me atiraram pedras e me atacaram com barras de ferro. nÃ£o reagi, pois androides nÃ£o podem atacar civis humanos, mas sobrevivi. \r\nna manhÃ£ seguinte, eu e todo o meu esquadrÃ£o fomos enviados para uma "missÃ£o importante", uma emboscada nos aguardava e o que nÃ£o sabÃ­amos foi que fomos enviados para sermos destruÃ­dos por sermos perigosos e violentos de mais para continuar atuando.\r\nsÃ³ eu fugi. \r\nassisti todos os meus compatriotas serem assassinados e transformados em blocos de titÃ¢nio. \r\ndesde entÃ£o vivo do crime, pois Ã© o Ãºnico mercado que aceita qualquer um e as margens da sociedade.\r\n sou o primeiro e hoje o Ãºnico Shelby vivo. se descobrirem que ainda resta um de nÃ³s, vÃ£o me matar. que tentem'),
(3, 7, 'Minimus, o sangue frio\r\n\r\nDurante a terceira guerra mundial, alguns soldados especializados em assassinato foram contratados para agir rapidamente quando necessÃ¡rio. Um desses homens foi Barry, um assassino especial do Governo.\r\nApÃ³s diversos confrontos, Barry recebeu o apelido de MÃ­nimus, pois conseguia matar seus oponentes com o mÃ­nimo de dificuldade possÃ­vel e sem nem mesmo ser percebido por eles.\r\nMÃ­nimus ficou famoso com seus feitos para o governo, mas em um dia, apÃ³s as forÃ§as BitÃ¢nicas descobrirem as localizaÃ§Ãµes das forÃ§as especiais, aos poucos foram eliminadas. O dia de Barry tambÃ©m chegou, mas nesse dia estava acompanhado de sua esposa (Janny) e sua filha (Jesse). ApÃ³s o ataque das forÃ§as inimigas (BritÃ¢nicos), sua esposa e filha morreram numa explosÃ£o e MÃ­nimus ficou com sÃ©rias lesÃµes por todo o corpo, perdendo grande parte de suas capacidades.\r\nApÃ³s muitos anos isolado, MÃ­nimus comeÃ§ou a ir em busca de vinganÃ§a pela morte de suas amadas esposa e filha. Seu rival, Alexander Ketch, lÃ­der das forÃ§as especiais da GrÃ£ Bretanha, a todo momento foge de seus ataques atÃ© que MÃ­nimus conhece Hugh Christmass...'),
(4, 4, 'Um menino Ã³rfÃ£o de 16 anos chamado Vulpis, foi preso em uma prisÃ£o especial por invadir um Q.G. militar, e hackear o sistema pra pregar um peÃ§a nos militares, sua pena era de 11 anos em uma cela individual com direito a 2 horas de banho de Sol, e trÃªs refeiÃ§Ãµes ao dia.\r\n\r\nDepois de um ano um senhor com roupas estranhas e um chapÃ©u esquisito veio visitÃ¡-lo, chamado Dark Star, ele queria saber como que um Jovem aprendeu a hackear um sistema tÃ£o avanÃ§ado, Vulpis contou sua histÃ³ria: perdeu seus pais muito cedo por causa de um assassinato, seu pai era um programador e hacker da forÃ§a militar, e deis de muito cedo jÃ¡ teve esse contato e ensinamentos atravÃ©s de seu pai, e apÃ³s ir ao alfanato ele evolui sua habilidades sozinho (e Vulpis culpava os militares pela morte de seus pais).\r\n\r\nDark oferece uma proposta de liberdade com a condiÃ§Ã£o de deixÃ¡-lo treinÃ¡-lo. Vulpis perguntar porque queria ajudÃ¡-lo, e quem era ele afinal das contas. Dark fala que Ã© u. AlienÃ­gena, que seu pai ajudou numa missÃ£o a muito tempo atrÃ¡s, e viraram grade amigos, e ele tambÃ©m Ã© um hacker muito famoso por roubar informaÃ§Ãµes/dados/danificar sistemas/etc., para seu clientes.\r\n\r\nVulpis aceita o treinamento, apÃ³s Vulpis e Dark apertarem a mÃ£os, as luzes se piscaram, a tornozeleira eletrÃ´nica e as correntes foram desativadas, e as portas foram se abrindo atÃ© saÃ­da, as cÃ¢meras de filmagem foram todas desativadas, Dark era muito bom ,toda aquela conversa, e meus registros foram apagados, eu me tornei um fantasma.\r\n\r\nVulpis apÃ³s passar por 10 anos treinando e ajudando Dark em suas missÃµes, Vulpis decide trilhar o seu prÃ³prio caminho, com o seu novo amuleto da sorte que Ã© o chapÃ©u de esquisito de Dark.'),
(5, 5, 'Desde os 5 anos de idade foi ensinado a Dante que neste mundo quem prevalece sÃ£o aqueles que se arriscam com consciÃªncia e preparo, sua vida nÃ£o iria ter luxos mas nada iria faltar caso aprendesse a sobreviver neste mundo desde pequeno para consumir menos recurso e ser mais cauteloso, Aos 15 Dante resolveu se tornar um caÃ§ador de recompensas para afiar as suas Habilidades e Sobreviver com o que Ganha.');


#TABELA DOS ITENS DE DEFESA
CREATE TABLE tb_item_def(
    id_item_def int primary key auto_increment,
    descricao_item_def varchar(255),
    tipo_item_def varchar(255),
    dano_item_def int
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_item_def(
    descricao_item_def,
    tipo_item_def,
    dano_item_def
)VALUES
("-","-",0),
("Colete a prova de balas", "Defesa", 1);

#Tabela de Capitulos#
CREATE TABLE tb_capitulos_historia(
    id_capitulo int primary key auto_increment,
    titulo_capitulo varchar(500),
    texto_capitulo text,
    ativo int default 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
INSERT INTO `tb_capitulos_historia` (`id_capitulo`, `titulo_capitulo`, `texto_capitulo`, `ativo`) VALUES
(1, 'Sem tempo...', '<p>O ano Ã© 2122, paÃ­s, Estados Unidos. Muita coisa aconteceu na histÃ³ria da humanidade apÃ³s o tÃ©rmino da 3Âª Guerra mundial...</p>\r\n<p>...O mundo ficou um caos apÃ³s essa guerra, o planeta ficou com sÃ©rios problemas ecolÃ³gicos, onde a temperatura Ã© extremamente quente durante os dias, e um frio congelante durante as noites, podendo atÃ© mesmo chegar Ã  temperaturas negativas. Isso ocorreu devido as sÃ©ries de explosÃµes de bombas atÃ´micas durante o perÃ­odo da Guerra, danificando de forma irremediÃ¡vel nossa camada de ozÃ´nio.</p>\r\n\r\n<p>Algumas raÃ§as alienÃ­genas tentaram contato com nossa civilizaÃ§Ã£o para amenizar o estado agressivo desse perÃ­odo de Guerra, falhando miseravelmente em algumas das vezes. AtÃ© que o acordo de InfinÃ­tu* foi assinado e instaurado na humanidade, tendo como testemunha, 9 famÃ­lias de 3 raÃ§as diferentes, humanos, alienÃ­genas e mÃ¡quinas com inteligÃªncia artificial. ApÃ³s isso, todas as civilizaÃ§Ãµes e raÃ§as possÃ­veis trabalharam em conjunto para melhorias e com isso o avanÃ§o da tecnologia se torna impressionante com o passar do tempo.\r\n</p>\r\n<p>Agora a locomoÃ§Ã£o e transporte podem ser feitos de qualquer forma, desde os carros clÃ¡ssicos, usando combustÃ­vel fÃ³ssil (gasolina) atÃ© mesmo usando a fissÃ£o nuclear (poucos tÃªm acesso devido ao preÃ§o).</p>\r\n<p>ApÃ³s dÃ©cadas passadas desde o acordo InfinÃ­tu, todos os paÃ­ses ficaram divididos, em todos os lugares existem aqueles que sÃ£o integrantes da alta cÃºpula, sÃ£o famosos, ricos, cheios de ambiÃ§Ãµes e para alcanÃ§ar suas conquistas nÃ£o medem esforÃ§osâ€¦\r\nA famÃ­lia Christmass foi uma das 9 famÃ­lias presentes na criaÃ§Ã£o do acordo de InfinÃ­tu, sendo assim, pertenciam ao conselho de paz e seguranÃ§a.</p>\r\n<p style="font-size: 20px"><strong>Hugh Christmass</strong></p>\r\n<p>Um grande empresÃ¡rio, tem grande apreÃ§o por histÃ³rias do passado, uma Ã©poca distinta e esquecida pela humanidade. Ao contrÃ¡rio de todos os membros de sua famÃ­lia, ele acredita que as demais raÃ§as nÃ£o sÃ£o dignas de pertencer a sociedade atual.\r\n</p>\r\n<p>ApÃ³s seus estudos de NegociaÃ§Ãµes e AdministraÃ§Ã£o de bens terem sido concluÃ­dos na universidade de Cambridge, Hugh entrou no curso de CiÃªncias HistÃ³ricas e conheceu diversas pessoas que tinham o mesmo pensamento que ele em relaÃ§Ã£o Ã  sociedade atual.</p>\r\n<p>Durante seus anos de estudo, encontrou diversos manuscritos com inscriÃ§Ãµes sobre artefatos antigos, o que chamou sua atenÃ§Ã£o. Decidiu entÃ£o investigar mais afundo e colocou um objetivo em sua vida, colecionar manuscritos e artefatos antigos.</p>\r\n', 1);

#Tabela de Usuarios#
CREATE TABLE tb_usuarios(
    id_usuario int primary key auto_increment,
    nome_usuario varchar(255),
    email_usuario varchar(255),
    senha_usuario varchar(255),
    lv_usuario int default 1,
    nivel_usuario int default "0"
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

#TABELA DE PLAYERS#
CREATE TABLE tb_players(
    id_player int primary key auto_increment,
    nome_player int,
    personagem_player varchar(255),
    raca_player int,
    classe_player int,
    xp_player int,
    lv_player int,
    atk_player int,
    hab_player int,
    atr1_titulo varchar(255),
    atr1_v int,
    atr2_titulo varchar(255),
    atr2_v int,
    atr3_titulo varchar(255),
    atr3_v int,
    atr4_titulo varchar(255),
    atr4_v int,
    hab1_titulo varchar(255),
    hab1_v int,
    hab2_titulo varchar(255),
    hab2_v int,
    hab3_titulo varchar(255),
    hab3_v int,
    hab4_titulo varchar(255),
    hab4_v int,
    hab5_titulo varchar(255),
    hab5_v int,
    arma1_player int,
    arma2_player int,
    arma3_player int,
    arma4_player int,
    arma5_player int,
    def1_player int,
    def2_player int,
    def3_player int,
    habilidade1 int,
    habilidade2 int,
    habilidade3 int,
    habilidade4 int,
    habilidade5 int,
    habilidade6 int,
    habilidade7 int,
    habilidade8 int,
    habilidade9 int,
    FOREIGN KEY (nome_player) REFERENCES tb_usuarios(id_usuario),
    FOREIGN KEY (raca_player) REFERENCES tb_racas(id_raca),
    FOREIGN KEY (classe_player) REFERENCES tb_classes(id_classe),
    FOREIGN KEY (arma1_player) REFERENCES tb_item_armas(id_item_arma),
    FOREIGN KEY (arma2_player) REFERENCES tb_item_armas(id_item_arma),
    FOREIGN KEY (arma3_player) REFERENCES tb_item_armas(id_item_arma),
    FOREIGN KEY (arma4_player) REFERENCES tb_item_armas(id_item_arma),
    FOREIGN KEY (arma5_player) REFERENCES tb_item_armas(id_item_arma),
    FOREIGN KEY (def1_player) REFERENCES tb_item_def(id_item_def),
    FOREIGN KEY (def2_player) REFERENCES tb_item_def(id_item_def),
    FOREIGN KEY (def3_player) REFERENCES tb_item_def(id_item_def),
    FOREIGN KEY (habilidade1) REFERENCES tb_lista_habilidades(id_habilidade),
    FOREIGN KEY (habilidade2) REFERENCES tb_lista_habilidades(id_habilidade),
    FOREIGN KEY (habilidade3) REFERENCES tb_lista_habilidades(id_habilidade),
    FOREIGN KEY (habilidade4) REFERENCES tb_lista_habilidades(id_habilidade),
    FOREIGN KEY (habilidade5) REFERENCES tb_lista_habilidades(id_habilidade),
    FOREIGN KEY (habilidade6) REFERENCES tb_lista_habilidades(id_habilidade),
    FOREIGN KEY (habilidade7) REFERENCES tb_lista_habilidades(id_habilidade),
    FOREIGN KEY (habilidade8) REFERENCES tb_lista_habilidades(id_habilidade),
    FOREIGN KEY (habilidade9) REFERENCES tb_lista_habilidades(id_habilidade)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO `tb_usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `lv_usuario`, `nivel_usuario`) VALUES
(1, 'Hugo Christian Pereira Gomes', 'hchristian', '230412', 1, 2),
(2, 'Ricardo Gasparac', 'ricardo@notime.com.br', '123456', 1, 0),
(3, 'Davi Paiva', 'davipv09@gmail.com', '123456', 1, 0),
(4, 'Ismael Macedo', 'ismael@notime.com.br', '123456', 1, 0),
(5, 'Allan', 'allan@notime.com.br', '123456', 1, 0),
(6, 'Israel', 'israel@notime.com.br', '123456', 1, 0),
(7, 'Diogo', 'diogo@notime.com.br', '123456', 1, 0),
(8, 'Lucas', 'lucas@notime.com.br', '123456', 1, 0);


INSERT INTO `tb_players` (`id_player`, `nome_player`, `personagem_player`, `raca_player`, `classe_player`, `xp_player`, `lv_player`, `atk_player`, `hab_player`, `atr1_titulo`, `atr1_v`, `atr2_titulo`, `atr2_v`, `atr3_titulo`, `atr3_v`, `atr4_titulo`, `atr4_v`, `hab1_titulo`, `hab1_v`, `hab2_titulo`, `hab2_v`, `hab3_titulo`, `hab3_v`, `hab4_titulo`, `hab4_v`, `hab5_titulo`, `hab5_v`, `arma1_player`, `arma2_player`, `arma3_player`, `arma4_player`, `arma5_player`, `def1_player`, `def2_player`, `def3_player`, `habilidade1`, `habilidade2`, `habilidade3`, `habilidade4`, `habilidade5`, `habilidade6`, `habilidade7`, `habilidade8`, `habilidade9`) VALUES
(1, 2, 'Alexander Payne', 1, 2, 0, 1, 0, 0, 'Vida', 30, 'ForÃ§a', 15, 'Velocidade', 20, 'Conhecimento', 35, 'Criatividade', 16, 'RaciocÃ­nio', 24, 'InteligÃªncia', 20, 'Produzir', 10, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 5, 6, 1, 1, 1, 1, 1, 1, 1),
(3, 4, 'Vulpis', 1, 6, 0, 1, 0, 0, 'Vida', 37, 'ForÃ§a', 15, 'Velocidade', 18, 'InteligÃªncia', 30, 'Programaï¿½ï¿½o', 25, 'RaciocÃ­nio', 25, 'LÃ¡bia', 10, 'Agilidade', 10, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 29, 31, 1, 1, 1, 1, 1, 1, 1),
(4, 3, 'Shelbi-1.0', 2, 4, 0, 1, 0, 0, 'Vida', 42, 'ForÃ§a', 15, 'Velocidade', 20, 'Furtividade', 23, 'Destreza', 10, 'Furto', 25, 'ExtorsÃ£o', 5, 'LÃ¡bia', 30, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 17, 18, 1, 1, 1, 1, 1, 1, 1),
(5, 7, 'Minimus', 1, 5, 0, 1, 0, 0, 'Vida', 45, 'ForÃ§a', 12, 'Velocidade', 22, 'Furtividade', 21, 'Destreza', 25, 'InteligÃªncia', 15, 'Carisma', 10, 'PersuasÃ£o', 20, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 23, 25, 1, 1, 1, 1, 1, 1, 1),
(6, 5, 'Dante', 1, 9, 0, 1, 0, 0, 'Vida', 45, 'ForÃ§a', 15, 'Velocidade', 20, 'Precisï¿½o', 20, 'Furtividade', 13, 'Destreza', 15, 'Conhecimento', 17, 'InteligÃªncia', 25, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 48, 49, 1, 1, 1, 1, 1, 1, 1);