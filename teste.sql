CREATE DATABASE IF NOT EXISTS ballers;
USE ballers;
CREATE TABLE IF NOT EXISTS atualizacoes(
	id int not null auto_increment primary key,
    titulo varchar(30) not null,
    descricao varchar(200) not null,
    data_atualizacao date
);

CREATE TABLE IF NOT EXISTS programas(
	id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(30) NOT NULL,
    link_foto VARCHAR(100) NOT NULL,
	link_direcionamento VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS treinos (
    id INT AUTO_INCREMENT PRIMARY KEY,                
    nome VARCHAR(255) NOT NULL,                        
    descricao TEXT NOT NULL,                          
    duracao VARCHAR(50) NOT NULL,                     
    link_video_treino VARCHAR(255) NOT NULL,           
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  
    categoria VARCHAR(100) NOT NULL,                
    caminho_treino_url VARCHAR(255) NOT NULL        
);


CREATE TABLE IF NOT EXISTS exercicios (
    id INT AUTO_INCREMENT PRIMARY KEY,        
    nome VARCHAR(50) NOT NULL,                
    repeticoes VARCHAR(50) NOT NULL,         
    link VARCHAR(50) NOT NULL,                
    treino_id INT NOT NULL,
    foreign key (treino_id) references treinos(id)
)


// inserindo treinos

INSERT INTO treinos (id, nome, descricao, duracao, link_video_treino, data_criacao, categoria, caminho_treino_url) 
VALUES 
(1, 'Treino de drible - 1', 'Treine seu drible na quadra.', '30 min', '-Tk5_a83rjg', '2024-08-24', 'drible', 'treino_drible_1'),
(2, 'Arremesso - média distância', 'Melhore seu arremesso no perímetro', '40 min', 'PqSasSwtGR4', '2024-08-24', 'arremesso', 'media_distancia_1'),
(3, 'Treino de inferiores', 'Carga: moderada', '~1 hora e 20 minutos', 'W-jkyAlyAdc', '2024-08-24', 'academia', 'treino_academia_inferiores'),
(4, 'Treino de superiores', 'Carga: Moderada', '~1 hora e 20 minutos', 'vT-QcEQC1M4', '2024-08-24', 'academia', 'treino_academia_superiores'),
(5, 'Rotina de condicionamento', 'Melhore seu físico.', '30 min', 'QJx_5rRR8_w', '2024-08-24', 'condicionamento', 'rotina_condicionamento'),
(6, 'Drible com bolinha', 'Treino de drible com bolinha de tênis.', '15 min', 'voJcUTLz7sE', '2024-08-30', 'drible', 'drible_com_bolinha_1');


// inserindo atualizacoes
INSERT INTO atualizacoes (titulo,descricao) VALUES ("Atualização 1.0","Adicionado treinos de academia.;Design inicial.");
INSERT INTO atualizacoes (titulo,descricao) VALUES ("Atualização 1.1","Melhorando o design.;Aprimoramento da experiência.");
INSERT INTO atualizacoes (titulo,descricao) VALUES ("Atualização 1.2","Treino de drible adicionado.");

// inserindo programas
INSERT INTO programas (titulo, link_foto, link_direcionamento) VALUES ("Academia","academia.gif","academia");
INSERT INTO programas (titulo, link_foto, link_direcionamento) VALUES ("Arremesso","arremesso.gif","arremesso");
INSERT INTO programas (titulo, link_foto, link_direcionamento) VALUES ("Condicionamento","condicionamento.gif","condicionamento");
INSERT INTO programas (titulo, link_foto, link_direcionamento) VALUES ("Drible","drible.gif","drible");

// inserindo exercicios
INSERT INTO exercicios (id, nome, repeticoes, link, treino_id) VALUES
(1, 'Alongamento | Mobilidade', '10 - 15 minuto', 'O8UkFIBhSi0', 4),
(2, 'Bíceps triáde', '1x3 min (Ouça a explicação)', 'T_pVdfzngyw', 4),
(3, 'Supino com halteres', '4x8 repetições', 'ZV6GAB__vkE', 4),
(4, 'Remada unilateral', '3x8 repetições', 'JLgkueCanew', 4),
(5, 'Elevação lateral', '3x12 repetições', 'Zpc8YpHtikQ', 4),
(6, 'Tríceps na polia', '2x1 minuto', '4xk3Ri1uroM', 4),
(7, 'Supino inclinado com halteres', '3x10 repetições', 'y35m-0gcJOI', 4),
(8, 'Desenvolvimento de ombros', '3x10 repetições', 'JgTsQF3XllI', 4),
(9, 'Puxada no cabo', '3x8 repetições', 'SkB7rea_rqE', 4),
(10, 'Flexão de braço', '50 repetições (x séries)', 'a6sOSx69A5E', 4),
(11, 'Isometria em flexão', '2 séries indo até a falha', 'uV2XOCfgRoc', 4),
(12, 'Flexão de braço', '50 repetições (x séries)', 'kV4gIXCFgL4', 5),
(13, 'Agachamento', '50 repetições (x séries)', 'GXe89NaE9Ss', 5),
(14, 'Abdominal', '50 repetições (x séries)', '-xZ8j6UzMo8', 5),
(15, 'Prancha', '2x1 minuto', 'A0mh0MMuzV0', 5),
(16, 'Molde com 1 mão', '2x10 acertos (cada mão)', 'fdyMXCpIu0o', 2),
(17, 'Flow de arremesso', '2x10 acertos (mão dominante)', 'wCSFkDgrexI', 2),
(18, 'Stiff unilateral e arremesso', '2x5 acertos (cada perna)', 'Y13L26prd6g', 2),
(19, 'Lance livre', '2x10 acertos (mão dominante)', 'rZS4MmTqhOE', 2),
(20, 'Cardio + arremesso 1', '2 séries de 60 segundos', 'wWU5AWjNoC0', 2),
(21, 'Cardio + arremesso 2', '2 séries de 60 segundos', 'omf6E9-5vgU', 2),
(22, 'Drible alto, médio e baixo', '2x40 segundos', 'UYrIc2L055I', 1),
(23, 'Drible em V', '2x30 segundos', 'nrdSioRWwDg', 1),
(24, 'Entre as pernas', '2x30 segundos', 'IgxolYZ1qEI', 1),
(25, 'Drible e raquetada', '2x30 segundos', 'uGA9PLsRQ_Y', 1),
(26, 'Crossover e parada', '2x30 segundos', 'dl25vgAKfiw', 1),
(27, 'Drible e troca', '2x30 segundos', 'eu7rFgdTSDk', 1),
(28, 'Pernada e troca', '2x30 segundos', 'TUN1hokc0dk', 1),
(29, 'Mecânica de pernada', 'meia quadra (ida e volta)', 'DZg3hXABQFY', 1),
(30, 'Mecânica de raquetada', 'meia quadra (ida e volta)', '6hbt4DWoX10', 1),
(31, 'Mecânica de pernada invertida', 'meia quadra (ida e volta)', 'cQ0_U__FwGk', 1),
(32, 'Alongamento | Mobilidade', '10 - 15 minutos', 'N8zjV5Ux6hs', 3),
(33, 'Stiff', '3x12 repetições', 'pxjMPUX-6eQ', 3),
(34, 'Agachamento búlgaro', '3x12 repetições', '4SwnIjFCP7U', 3),
(35, 'Subida na caixa', '3x10 repetições', '_funBh9tz-s', 3),
(36, 'Panturrilha no step', '3x12 repetições', '4Xv0KRc7r7c', 3),
(37, 'Agachamento explosivo', '3x8 repetições', 'I2IJH_aZ5o4', 3),
(38, 'Avanço com halteres', '3x10 repetições', 'j3plo0PDxgs', 3),
(39, 'Drible alto, médio e baixo', '3x5 Repetições (cada altura)', '5jLf2ea3aIg', 6),
(40, 'Solta e pega', '3x10 Repetições (cada mão)', 'DBeK6D1YFuE', 6),
(41, 'Drible simultâneo com bolinha', '3x10 Repetições (cada mão)', 'X85sbf4HpJY', 6),
(42, 'Pernada e apara bolinha.', '3x10 Repetições (cada mão)', 'wLpRWnqGGDI', 6),
(43, 'Cross, pernada e apara bolinha', '3x10 Repetições (cada mão)', 'EpjytiTc2pg', 6),
(44, 'Raquetada e apara bolinha', '3x10 Repetições (cada mão)', 'oU0ADTezCXc', 6),
(45, 'Tudo junto', '3x10 Repetições (cada mão)', 'ZdsINlw21js', 6),
(46, 'Drible e bolinha na parede', '3x10 Repetições (cada mão)', 'B6e_atwhhDs', 6);
