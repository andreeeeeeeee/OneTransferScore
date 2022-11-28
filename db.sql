DROP TABLE IF EXISTS clubes;
CREATE TABLE clubes (
id INTEGER NOT NULL UNIQUE,
nome VARCHAR(30) NOT NULL UNIQUE,
pontos INTEGER NOT NULL,
PRIMARY KEY (id)
);
INSERT INTO clubes VALUES (1, 'Internacional', 81), (2, 'Palmeiras', 73), (3, 'Fluminense', 70), (4, 'Corinthians', 65), (5, 'Flamengo',62), (6, 'Athletico-PR', 58), (7, 'Atlético-MG', 58), (8, 'Fortaleza', 55), (9, 'São Paulo', 54), (10, 'América-MG', 53), (11, 'Botafogo', 53), (12, 'Santos', 47), (13, 'Goiás', 46), (14, 'Bragantino', 44), (15, 'Coritiba', 42), (16, 'Cuiabá', 41), (17, 'Ceará', 37), (18, 'Atlético-GO', 36), (19, 'Avaí', 35), (20, 'Juventude', 22), (21, 'Barcelona', 37), (22,'Real Madrid', 35), (23, 'Real Sociedad', 26), (24, 'Athletic Bilbao', 24), (25, 'Atlético de Madrid', 24), (26, 'Real Betis', 24), (27, 'Osasuna', 23), (28, 'Rayo Vallecano', 22), (29, 'Villareal', 21), (30, 'Valencia', 19), (31, 'Real Mallorca', 19), (32, 'Real Valladolid', 17), (33, 'Girona', 16), (34, 'Almería', 16), (35, 'Getafe', 14), (36, 'Espanyol', 12), (37, 'Celta de Vigo', 12), (38, 'Sevilla', 11), (39, 'Cádiz', 11), (40, 'Elche', 4);

DROP TABLE IF EXISTS escudos;
CREATE TABLE escudos (
id_clube INTEGER NOT NULL UNIQUE,
img VARCHAR NOT NULL UNIQUE,
PRIMARY KEY(id_clube),
FOREIGN KEY (id_clube) REFERENCES clubes(id)
);
INSERT INTO escudos VALUES (1, './img/escudos/brasileiro/Internacional.svg'), (2, './img/escudos/brasileiro/Palmeiras.svg'), (3, './img/escudos/brasileiro/Fluminense.svg'), (4, './img/escudos/brasileiro/Corinthians.svg'), (5, './img/escudos/brasileiro/Flamengo.svg'), (6, './img/escudos/brasileiro/Athletico-PR.svg'), (7, './img/escudos/brasileiro/Atletico-MG.svg'), (8, './img/escudos/brasileiro/Fortaleza.svg'), (9, './img/escudos/brasileiro/Sao-Paulo.svg'), (10, './img/escudos/brasileiro/America-MG.svg'), (11, './img/escudos/brasileiro/Botafogo.svg'), (12, './img/escudos/brasileiro/Santos.svg'), (13, './img/escudos/brasileiro/Goias.png'), (14, './img/escudos/brasileiro/Bragantino.svg'), (15, './img/escudos/brasileiro/Coritiba.png'), (16, './img/escudos/brasileiro/Cuiaba.svg'), (17, './img/escudos/brasileiro/Ceara.svg'), (18, './img/escudos/brasileiro/Atletico-GO.svg'), (19, './img/escudos/brasileiro/Avai.png'), (20, './img/escudos/brasileiro/Juventude.svg'), (21, './img/escudos/espanhol/Barcelona.svg'), (22,'./img/escudos/espanhol/Real-Madrid.svg'), (23, './img/escudos/espanhol/Real-Sociedad.png'), (24, './img/escudos/espanhol/Athletic-Bilbao.png'), (25, './img/escudos/espanhol/Atletico-Madrid.png'), (26, './img/escudos/espanhol/Real-Betis.png'), (27, './img/escudos/espanhol/Osasuna.png'), (28, './img/escudos/espanhol/Rayo-Vallecano.png'), (29, './img/escudos/espanhol/Villareal.png'), (30, './img/escudos/espanhol/Valencia.png'), (31, './img/escudos/espanhol/Real-Mallorca.png'), (32, './img/escudos/espanhol/Real-Valladolid.png'), (33, './img/escudos/espanhol/Girona.png'), (34, './img/escudos/espanhol/Almeria.png'), (35, './img/escudos/espanhol/Getafe.png'), (36, './img/escudos/espanhol/Espanyol.png'), (37, './img/escudos/espanhol/Celta-de-Vigo'), (38, './img/escudos/espanhol/Sevilla.png'), (39, './img/escudos/espanhol/Cadiz.png'), (40, './img/escudos/espanhol/Elche.png');

DROP TABLE IF EXISTS campeonato;
CREATE TABLE campeonato (
  id INTEGER NOT NULL UNIQUE,
  nome VARCHAR(30) NOT NULL UNIQUE,
  img VARCHAR NOT NULL UNIQUE,
  PRIMARY KEY(id)
);
INSERT INTO campeonato VALUES (1, 'Brasileirão', './img/brasileirao.png'), (2, 'LaLiga', './img/laliga.png');

DROP TABLE IF EXISTS campeonato_clubes;
CREATE TABLE campeonato_clubes (
  id_clube INTEGER NOT NULL,
  id_campeonato INTEGER NOT NULL,
  PRIMARY KEY(id_clube, id_campeonato),
  FOREIGN KEY(id_clube) REFERENCES clubes(id),
  FOREIGN KEY(id_campeonato) REFERENCES campeonato(id)
);
INSERT INTO campeonato_clubes VALUES (1, 1), (2, 1), (3, 1), (4, 1), (5, 1), (6, 1), (7, 1), (8, 1), (9, 1), (10, 1), (11, 1), (12, 1), (13, 1), (14, 1), (15, 1), (16, 1), (17, 1), (18, 1), (19, 1), (20, 1), (21,2), (22,2), (23,2), (24,2), (25,2), (26,2), (27,2), (28,2), (29,2), (30,2), (30,2), (31,2), (32,2), (33,2), (34,2), (35,2), (36,2), (37,2), (38,2), (39,2), (40,2);

SELECT * FROM campeonato;
SELECT * FROM clubes;
SELECT * FROM campeonato_clubes;
SELECT * FROM escudos;