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
    descricao_habilidade varchar(255)
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
(1,'Criar Arma Pequena',21,28,'Criar uma arma ao gosto do player, depende dos pontos de criação'),
(1,'Criar Arma Média',22,29,'Criar uma arma ao gosto do player, depende dos pontos de criação'),
(1,'Criar Bomba C4',23,31,'Criar uma bomba de explosão de médio alcance'),
(1,'Criar Bomba de Nitrogênio Líquido',24,32,'Cria uma bomba de Nitrogênio Líquido, permite congelar (D2), oponente pode perder 2 rodadas (D2)'),
(1,'Criar Arma Grande',25,33,'Criar arma a gosto do player'),
(1,'Criar Bomba Termo Nuclear',30,40,'Cria uma bomba de explosão Termo Nuclear (precisa 3 rodadas para detonação)'),
(2,'Negociar', 21,28,'Iniciar negociação com algum indivíduo'),
(2,'Suborno', 22,29,'Subornar alguém para conseguir informações'),
(2,'Comprar com Desconto', 23,31,'Efetuar compra de qualquer coisa com descontos'),
(2,'Golpista', 30,40,'Faz com que o inimigo acredite em qualquer história'),
(3,'Furto Rápido', 21,28,'Tentar furtar itens de pequeno valor'),
(3,'Assalto', 22,29,'Faz um assalto, tentando não chamar a atenção'),
(3,'Chantagear', 23,31,'Chantagear qualquer personagem, tanto NPC quanto Player'),
(3,'Roubo Planejado', 24,32,'Pontos de Furto +3'),
(3,'Jogada de Mestre', 30,40,'Pontos de Furto +10'),
(4,'Ataque Furtivo', 21,28,'Iniciar um ataque furtivo, usando até 2 golpes, ATK + 3'),
(4,'Ataque Acrobata', 22,29,'O usuário faz acrobacias para atingir o inimigo ganhando VEL + 2'),
(4,'Ataque com arma branca', 23,31,'O usuário usa um ataque mais eficiente com armas Brancas, VEL+2 2Rodadas'),
(4,'Ataque com perícia', 24,32,'O usuário ataca usando mais perícia, ATK+3 2Rodadas'),
(4,'Destruidor de Corações', 35,47,'O usuário ataca diretamente o coração do inimigo arrancando de seu interior (instant kill)'),
(5,'Controlar Máquina', 21,28,'O usuário pode controlar quaisquer tipos de máquinas'),
(5,'Hackear', 22,29,'O usuário pode invadir qualquer sistema de tecnologia'),
(5,'Descriptografar', 23,31,'Remover criptogravia de qualquer sistema de acesso'),
(5,'Invasão', 24,32,'O hacker pode invadir o sistema para roubar informações, PER+2'),
(5,'Black out', 30,40,'O Hacker pode causar um Black out em todo o sistema, PER+5'),
(6,'Dar Fuga (terrestre)', 21,28,'O piloto poderá desviar de qualquer perseguidor'),
(6,'Ligação Direta', 22,29,'O piloto poderá fazer ligação direta de energia em veículos terrestres'),
(6,'Desvio Rápido (aéreo)', 23,31,'O piloto poderá desviar usando veículos aéreos'),
(6,'Fuga de Mestre', 30,40,'O piloto conseguirá fugir de quaisquer perseguidores (terrestre e/ou aéreo)'),
(7,'Pick Lock', 21,28,'Abre qualquer tipo de fechadura e porta eletrônica'),
(7,'Disfarçar', 22,29,'Faz um disfarce simples para fugir de alguma situação'),
(7,'Distrair', 23,31,'Chama a atenção para outras coisas e situações'),
(7,'Esconder', 24,32,'Esconder-se em algum lugar para fugir'),
(7,'Disguise Kit', 30,40,'Faz a transformação completa do usuário, incluindo voz, altura, peso e demais atributos...'),
(8,'Tiro Duplo', 21,28,'Atira duas vezes simultâneas'),
(8,'Tiro Triplo', 21,28,'Atira três vezes simultâneas'),
(8,'Aumento de Precisão', 21,28,'Aumenta a precisão para tentar um Head Shot'),
(8,'One Shot One Kill', 21,28,'Head Shot certeiro'),
(8,'Multiple Kill', 21,28,'Espera os inimigos se alinharem para atirar em até 3 Inimigos simultâneamente'),
(8,'SNIPER Profissional', 21,28,'PRECIS+5, VEL+3')
;

#TABELA DE ATRIBUTOS
create table tb_atributos(
    id_atributo int not null primary key auto_increment,
    descricao_atributo varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(1,'Vida');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(2,'Força');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(3,'Velocidade');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(4,'Conhecimento');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(5,'Persuasão');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(6,'Furtividade');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(7,'Inteligência');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(8,'Reflexo');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(9,'Carisma');
INSERT INTO tb_atributos(id_atributo,descricao_atributo)VALUES(10,'Precisão');

#TABELA DE HABILIDADES POR CLASSE
create table tb_habilidades(
    id_habilidade int not null primary key auto_increment,
    classe_habilidade varchar(255),
    descricao_habilidade varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_habilidades(id_habilidade,classe_habilidade,descricao_habilidade)
VALUES(1,'Cientista','Criatividade');
INSERT INTO tb_habilidades(id_habilidade,classe_habilidade,descricao_habilidade)
VALUES(2,'Cientista','Raciocínio');
INSERT INTO tb_habilidades(id_habilidade,classe_habilidade,descricao_habilidade)
VALUES(3,'Cientista','Inteligência');
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
VALUES(
    'Cientista',
    'Vida',
    'Força',
    'Velocidade',
    'Conhecimento',
    'Criatividade',
    'Raciocínio',
    'Inteligencia',
    'Produzir',
    'Especial'
),

(
    'Empresário',
    'Vida',
    'Força',
    'Velocidade',
    'Persuasão',
    'Negociação',
    'Conhecimento',
    'Inteligência',
    'Antecipação',
    'Especial'
),

(
    'Ladrão',
    'Vida',
    'Força',
    'Velocidade',
    'Furtividade',
    'Destreza',
    'Furto',
    'Extorsão',
    'Lábia',
    'Especial'
),

(
    'Assassino',
    'Vida',
    'Força',
    'Velocidade',
    'Furtividade',
    'Destreza',
    'Inteligência',
    'Carisma',
    'Persuasão',
    'Especial'
),

(
    'Hacker',
    'Vida',
    'Força',
    'Velocidade',
    'Inteligência',
    'Programação',
    'Raciocínio',
    'Lábia',
    'Agilidade',
    'Especial'
),

(
    'Piloto',
    'Vida',
    'Força',
    'Velocidade',
    'Reflexo',
    'Conhecimento',
    'Inteligência',
    'Raciocínio',
    'Agilidade',
    'Especial'
),

(
    'Contrabandista',
    'Vida',
    'Força',
    'Velocidade',
    'Carisma',
    'Carisma',
    'Negociação',
    'Inteligência',
    'Antecipação',
    'Especial'
),

(
    'Atirador',
    'Vida',
    'Força',
    'Velocidade',
    'Precisão',
    'Furtividade',
    'Destreza',
    'Conhecimento',
    'Inteligência',
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
(1, "Capsula de Nano Robôs, recupera 25hp", 10);

#TABELA DOS ITENS DE ATK
CREATE TABLE tb_item_armas(
    id_item_arma int primary key auto_increment,
    descricao_item_arma varchar(255),
    tipo_item_arma varchar(255),
    dano_item_arma int
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_item_armas(
    id_item_arma,
    descricao_item_arma,
    tipo_item_arma,
    dano_item_arma
)VALUES
(999,"-","-",0),
(1,"Faca de combate de Aço Inoxidável", "Proximidade", 1),
(2,"Pistola .45 com munição de chumbo", "Disparo Curto", 2);


#TABELA DOS ITENS DE DEFESA
CREATE TABLE tb_item_def(
    id_item_def int primary key auto_increment,
    descricao_item_def varchar(255),
    tipo_item_def varchar(255),
    dano_item_def int
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_item_def(
    id_item_def,
    descricao_item_def,
    tipo_item_def,
    dano_item_def
)VALUES
(999,"-","-",0),
(1,"Colete a prova de balas", "Defesa", 1);

#Tabela de Usuarios#

CREATE TABLE tb_usuarios(
    id_usuario int primary key auto_increment,
    nome_usuario varchar(255),
    email_usuario varchar(255),
    senha_usuario varchar(255),
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