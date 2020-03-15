drop database if exists no_time;

CREATE DATABASE no_time DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

use no_time;

#TABELA DE TODAS AS HABILIDADES DE TODAS AS CLASSES
create table tb_lista_habilidades(
    id_habilidade int primary key auto_increment,
    habilidade varchar(255),
    dif_habilidade int,
    dano_habilidade int,
    descricao_habilidade varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;


INSERT INTO tb_lista_habilidades(
    habilidade, 
    dif_habilidade, 
    dano_habilidade, 
    descricao_habilidade
)
VALUES('Criar Arma Pequena',21,28,'Criar uma arma ao gosto do player, depende dos pontos de criação'),
('Criar Arma Média',22,29,'Criar uma arma ao gosto do player, depende dos pontos de criação'),
('Criar Bomba C4',23,31,'Criar uma bomba de explosão de médio alcance'),
('Criar Bomba de Nitrogênio Líquido',24,32,'Cria uma bomba de Nitrogênio Líquido, permite congelar (D2), oponente pode perder 2 rodadas (D2)'),
('Criar Arma Grande',25,33,'Criar arma a gosto do player'),
('Criar Bomba Termo Nuclear',30,40,'Cria uma bomba de explosão Termo Nuclear (precisa 3 rodadas para detonação)');

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
    atr1 int,
    atr2 int,
    atr3 int,
    atr4 int,
    hab_c1 int,
    hab_c2 int,
    hab_c3 int,
    hab_c4 int,
    hab_c5 int,
    FOREIGN KEY (atr1) REFERENCES tb_atributos(id_atributo),
    FOREIGN KEY (atr2) REFERENCES tb_atributos(id_atributo),
    FOREIGN KEY (atr3) REFERENCES tb_atributos(id_atributo),
    FOREIGN KEY (atr4) REFERENCES tb_atributos(id_atributo),
    FOREIGN KEY (hab_c1) REFERENCES tb_habilidades(id_habilidade),
    FOREIGN KEY (hab_c2) REFERENCES tb_habilidades(id_habilidade),
    FOREIGN KEY (hab_c3) REFERENCES tb_habilidades(id_habilidade),
    FOREIGN KEY (hab_c4) REFERENCES tb_habilidades(id_habilidade),
    FOREIGN KEY (hab_c5) REFERENCES tb_habilidades(id_habilidade)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO tb_classes(
    nome_classe, atr1, atr2, atr3, atr4, hab_c1, hab_c2, hab_c3, hab_c4, hab_c5
)VALUES('Cientista', 1,2,3,4,1,2,3,4,5);

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
    descricao_item_arma,
    tipo_item_arma,
    dano_item_arma
)VALUES
("-","-",0),
("Faca de combate de Aço Inoxidável", "Proximidade", 1),
("Pistola .45 com munição de chumbo", "Disparo Curto", 2);

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

#TABELA DE PLAYERS#
CREATE TABLE tb_players(
    id_player int primary key auto_increment,
    nome_player varchar(255),
    personagem_player varchar(255),
    raca_player int,
    classe_player int,
    xp_player int,
    lv_player int,
    atk_player int,
    atr1_player int,
    atr2_player int,
    atr3_player int,
    atr4_player int,
    hab1_player int,
    hab2_player int,
    hab3_player int,
    hab4_player int,
    hab5_player int,
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
    FOREIGN KEY (raca_player) REFERENCES tb_racas(id_raca),
    FOREIGN KEY (classe_player) REFERENCES tb_classes(id_classe),
    FOREIGN KEY (hab1_player) REFERENCES tb_habilidades(id_habilidade),
    FOREIGN KEY (hab2_player) REFERENCES tb_habilidades(id_habilidade),
    FOREIGN KEY (hab3_player) REFERENCES tb_habilidades(id_habilidade),
    FOREIGN KEY (hab4_player) REFERENCES tb_habilidades(id_habilidade),
    FOREIGN KEY (hab5_player) REFERENCES tb_habilidades(id_habilidade),
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

INSERT INTO tb_players (id_player, nome_player, personagem_player, raca_player, classe_player, xp_player, lv_player, atk_player, atr1_player, atr2_player, atr3_player, atr4_player, hab1_player, hab2_player, hab3_player, hab4_player, hab5_player, arma1_player, arma2_player, arma3_player, arma4_player, arma5_player, def1_player, def2_player, def3_player, habilidade1, habilidade2, habilidade3, habilidade4, habilidade5, habilidade6, habilidade7, habilidade8, habilidade9) VALUES (NULL, 'Hugo', 'Ariosvaldo', '1', '1', '0', '1', '100', '1', '2', '3', '4', '1', '2', '3', '4', '5', '2', '3', '1', '1', '1', '1', NULL, NULL, '1', '2', '3', '4', '5', '6', NULL, NULL, NULL);