DROP TABLE IF EXISTS clubes;
CREATE TABLE clubes (
id INTEGER NOT NULL UNIQUE,
nome VARCHAR(30) NOT NULL UNIQUE,
PRIMARY KEY (id)
);
INSERT INTO clubes VALUES (1, 'Internacional'), (2, 'Palmeiras'), (3, 'Fluminense'), (4, 'Corinthians'), (5, 'Flamengo'), (6, 'Athletico-PR'), (7, 'América-MG'), (8, 'Atlético-MG'), (9, 'São Paulo'), (10, 'Fortaleza'), (11, 'Botafogo'), (12, 'Santos'), (13, 'Goiás'), (14, 'Bragantino'), (15, 'Coritiba'), (16, 'Cuiabá'), (17, 'Atlético-GO'), (18, 'Ceará'), (19, 'Avaí'), (20, 'Juventude');

DROP TABLE IF EXISTS escudos;
CREATE TABLE escudos (
id_clube INTEGER NOT NULL UNIQUE,
img NOT NULL UNIQUE,
PRIMARY KEY(id_clube),
FOREIGN KEY (id_clube) REFERENCES clubes(id)
);
INSERT INTO escudos VALUES (1, './img/escudos/brasileiro/Internacional.svg'), (2, './img/escudos/brasileiro/Palmeiras.svg'), (3, './img/escudos/brasileiro/Fluminense.svg'), (4, './img/escudos/brasileiro/Corinthians.svg'), (5, './img/escudos/brasileiro/Flamengo.svg'), (6, './img/escudos/brasileiro/Athletico_Paranaense.svg'), (7, './img/escudos/brasileiro/América-MG.svg'), (8, './img/escudos/brasileiro/Atlético-MG.svg'), (9, './img/escudos/brasileiro/São Paulo.svg'), (10, './img/escudos/brasileiro/Fortaleza.svg'), (11, './img/escudos/brasileiro/Botafogo.svg'), (12, './img/escudos/brasileiro/Santos.svg'), (13, './img/escudos/brasileiro/Goiás.svg'), (14, './img/escudos/brasileiro/Bragantino.svg'), (15, './img/escudos/brasileiro/Coritiba.svg'), (16, './img/escudos/brasileiro/Cuiabá.svg'), (17, './img/escudos/brasileiro/Atlético-GO.svg'), (18, './img/escudos/brasileiro/Ceará.svg'), (19, './img/escudos/brasileiro/Avaí.svg'), (20, './img/escudos/brasileiro/Juventude.svg');

DROP TABLE IF EXISTS campeonato;
CREATE TABLE campeonato (
  id INTEGER NOT NULL UNIQUE,
  nome VARCHAR(30) NOT NULL UNIQUE,
  PRIMARY KEY(id)
);
INSERT INTO campeonato VALUES (1, 'Brasileirão'), (2, 'LaLiga');

DROP TABLE IF EXISTS campeonato_clubes;
CREATE TABLE campeonato_clubes (
  id_clube INTEGER NOT NULL,
  id_campeonato INTEGER NOT NULL,
  PRIMARY KEY(id_clube, id_campeonato),
  FOREIGN KEY(id_clube) REFERENCES clubes(id),
  FOREIGN KEY(id_campeonato) REFERENCES campeonato(id)
);
INSERT INTO campeonato_clubes VALUES (1, 1), (2, 1), (3, 1), (4, 1), (5, 1), (6, 1), (7, 1), (8, 1), (9, 1), (10, 1), (11, 1), (12, 1), (13, 1), (14, 1), (15, 1), (16, 1), (17, 1), (18, 1), (19, 1), (20, 1);

SELECT * FROM campeonato;
SELECT * FROM clubes;
SELECT * FROM campeonato_clubes;
SELECT * FROM escudos;