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
    'ForÃ',
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
    nome_raca varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_racas(id_raca,nome_raca)
VALUES(1,'Humano'),(2,'Android'),(3,'Alien');

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
    tipo_item_arma varchar(255),
    classe_item_arma int,
    criacao int default 0,
    custo_item_arma int,
    dano_item_arma int
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

CREATE TABLE tb_historias(
    id_historia int primary key auto_increment,
    id_player int,
    texto_historia text
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO `tb_historias` (`id_historia`, `id_player`, `texto_historia`) VALUES
(1, 2, 'Dr Alexandre Payne - Dexter\r\n\r\nUm cientista que trabalhava para o governo, foi expulso por nÃ£o ter limites, para ele conhecimento Ã© conhecimento nÃ£o importa a origem, se Ã© mÃ¡gico, extraterrestre ou cientÃ­fico. Conhecimento Ã© poder, Ã© sua frase\r\nUm cara que coloca o bem dos amigos acima de tudo, por ver nos amigos a famÃ­lia que ele nunca teve.\r\nFaz qualquer coisa para defender seus ideais, para ele nÃ£o hÃ¡ limites, quando o assunto Ã© defender o que ele acredita ou as pessoas que ele gosta.\r\nLonge dos cientistas tradicionais, ele tem uma grande habilidade em comunicaÃ§Ã£o, sociÃ¡vel e utiliza dessas caracterÃ­sticas para conquistar a confianÃ§a e convencer as pessoas a fazer as coisas.'),
(2, 3, 'Shelby-1.0\r\n\r\nnessa Ã©poca androides eram feitos apenas para servir os humanos e descartados como lixo.\r\nnÃ³s Androides sempre executamos qualquer tarefa bem melhor do que eles; o crime sÃ³ crescia e com a 6 revoluÃ§Ã£o industrial o submundo do crime tinha mais poder sobre a cidade do que a prÃ³pria polÃ­cia. aÃ­ que eu entro.\r\nfui o primeiro de uma tropa de elite de androides designados ao policiamento nas ruas e em operaÃ§Ãµes que nenhum humano sairia vivo.\r\nfuncionamos por algum tempo, mas a opiniÃ£o pÃºblica e os direitos humanos eram contrÃ¡rios a androides "matando bandidos por aÃ­".\r\nalegavam que Ã©ramos muito violentos, frios e nÃ£o nos consideravam gente.\r\numa noite eu voltava pra casa e passei por uma manifestaÃ§Ã£o do movimento anti-androides. me atiraram pedras e me atacaram com barras de ferro. nÃ£o reagi, pois androides nÃ£o podem atacar civis humanos, mas sobrevivi. \r\nna manhÃ£ seguinte, eu e todo o meu esquadrÃ£o fomos enviados para uma "missÃ£o importante", uma emboscada nos aguardava e o que nÃ£o sabÃ­amos foi que fomos enviados para sermos destruÃ­dos por sermos perigosos e violentos de mais para continuar atuando.\r\nsÃ³ eu fugi. \r\nassisti todos os meus compatriotas serem assassinados e transformados em blocos de titÃ¢nio. \r\ndesde entÃ£o vivo do crime, pois Ã© o Ãºnico mercado que aceita qualquer um e as margens da sociedade.\r\n sou o primeiro e hoje o Ãºnico Shelby vivo. se descobrirem que ainda resta um de nÃ³s, vÃ£o me matar. que tentem'),
(3, 7, 'MINIMUS- O ASSASINO A PREÃ‡O FIXO\r\n\r\n\r\nMINIMUS UM CARA NÃƒO AMIGÃVEL \r\nDEVIDO AOS ACONTECIMENTOS \r\nEM SUA VIDA ACABOU SENDO A PESSOA MAIS FRIA E INSANA POSSÃVEL\r\n,DEVIDO AO DANO CAUSADO DA GUERRA QUE FEZ PERDER O SEU BEM MAIS PRECIOSO QUE ERAM SUA FILHA E SUA ESPOSA JANNY, \r\nVOLTOU ATRÃS DE VINGANÃ‡A POR TODO O DANO CAUSADO A VIDA DELE\r\nO SEU NOME REAL ERA BARRY,\r\n MAS FOI APELIDADO DE MINIMUS POIS ELE TINHA CAPACIDADE DE MATAR O SEU ALVO EM UM GOLPE OU COMO ESTAMOS ACOSTUMADOS A CHAMAR  O FAMOSO HIT KILL.\r\nO SEU TREINAMENTO VEIO ATRAVÃ‰S DE UM EX MILITAR DO EXÃ‰RCITO QUE SE CONSIENTIZOU COM O SOFRIMENTO DO HOMEM , \r\nE ASSIM  O AJUDOU A SE TORNAR O FAMOSO ASSASINO A PREÃ‡O FIXO,AGORA MINIMUS ESTÃ ATRÃS DE VINGANÃ‡A E SEM O MINIMO DE PIEDADE,\r\n A PARTE HUMANA DELE MORREU JUNTO COM SUA FAMÃLIA, O QUE  RESTOU FOI APENAS O Ã“DIO E SEDE  DE VINGANÃ‡A.\r\n');

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
('Espingarda Boito ReÃºna Standard Calibre 12', 'MÃ©dio AlcanÃ§e', 9, 0, 3200, 3),
('Rifle CBC 8122 Bolt Action Oxidada .22', 'Longo AlcanÃ§e', 9, 0, 2500, 4);


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
(1, 'Hugo Christian Pereira Gomes', 'hugo.allnet@gmail.com', '123456', 1, 1),
(2, 'Ricardo Gasparac', 'ricardo@notime.com.br', '123456', 1, 0),
(3, 'Davi Paiva', 'davipv09@gmail.com', '123456', 1, 0),
(4, 'Ismael Macedo', 'ismael@notime.com.br', '123456', 1, 0),
(5, 'Allan', 'allan@notime.com.br', '123456', 1, 0),
(6, 'Israel', 'israel@notime.com.br', '123456', 1, 0),
(7, 'Diogo', 'diogo@notime.com.br', '123456', 1, 0);


INSERT INTO `tb_players` (`id_player`, `nome_player`, `personagem_player`, `raca_player`, `classe_player`, `xp_player`, `lv_player`, `atk_player`, `hab_player`, `atr1_titulo`, `atr1_v`, `atr2_titulo`, `atr2_v`, `atr3_titulo`, `atr3_v`, `atr4_titulo`, `atr4_v`, `hab1_titulo`, `hab1_v`, `hab2_titulo`, `hab2_v`, `hab3_titulo`, `hab3_v`, `hab4_titulo`, `hab4_v`, `hab5_titulo`, `hab5_v`, `arma1_player`, `arma2_player`, `arma3_player`, `arma4_player`, `arma5_player`, `def1_player`, `def2_player`, `def3_player`, `habilidade1`, `habilidade2`, `habilidade3`, `habilidade4`, `habilidade5`, `habilidade6`, `habilidade7`, `habilidade8`, `habilidade9`) VALUES
(1, 2, 'Alexander Payne', 1, 2, 0, 1, 0, 0, 'Vida', 30, 'ForÃ§a', 15, 'Velocidade', 20, 'Conhecimento', 35, 'Criatividade', 16, 'RaciocÃ­nio', 24, 'InteligÃªncia', 20, 'Produzir', 10, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 5, 6, 1, 1, 1, 1, 1, 1, 1),
(2, 6, 'Androide 18', 2, 7, 0, 1, 0, 0, 'Vida', 40, 'ForÃ§a', 20, 'Velocidade', 20, 'Reflexo', 20, 'Conhecimento', 15, 'InteligÃªncia', 15, 'RaciocÃ­nio', 20, 'Agilidade', 20, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 35, 38, 1, 1, 1, 1, 1, 1, 1),
(3, 4, 'Vulpis', 1, 6, 0, 1, 0, 0, 'Vida', 37, 'ForÃ§a', 15, 'Velocidade', 18, 'InteligÃªncia', 30, 'Programaï¿½ï¿½o', 25, 'RaciocÃ­nio', 25, 'LÃ¡bia', 10, 'Agilidade', 10, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 29, 31, 1, 1, 1, 1, 1, 1, 1),
(4, 3, 'Shelbi-1.0', 2, 4, 0, 1, 0, 0, 'Vida', 42, 'ForÃ§a', 15, 'Velocidade', 20, 'Furtividade', 23, 'Destreza', 10, 'Furto', 25, 'ExtorsÃ£o', 5, 'LÃ¡bia', 30, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 17, 18, 1, 1, 1, 1, 1, 1, 1),
(5, 7, 'Minimus', 1, 5, 0, 1, 0, 0, 'Vida', 45, 'ForÃ§a', 12, 'Velocidade', 22, 'Furtividade', 21, 'Destreza', 25, 'InteligÃªncia', 15, 'Carisma', 10, 'PersuasÃ£o', 20, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 23, 25, 1, 1, 1, 1, 1, 1, 1),
(6, 5, 'Dante', 1, 9, 0, 1, 0, 0, 'Vida', 45, 'ForÃ§a', 15, 'Velocidade', 20, 'Precisï¿½o', 20, 'Furtividade', 13, 'Destreza', 15, 'Conhecimento', 17, 'InteligÃªncia', 25, 'Especial', 18, 2, 3, 1, 1, 1, 2, 1, 1, 48, 49, 1, 1, 1, 1, 1, 1, 1);