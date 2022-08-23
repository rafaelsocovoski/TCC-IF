
CREATE TABLE pergunta (
                id INT AUTO_INCREMENT NOT NULL,
                texto TEXT NOT NULL,
                materia VARCHAR(32) NOT NULL,
                alternativa_correta CHAR NOT NULL,
                PRIMARY KEY (id)
);


CREATE TABLE alternativa (
                letra_alternativa CHAR NOT NULL,
                id_pergunta INT NOT NULL,
                texto TEXT NOT NULL,
                PRIMARY KEY (letra_alternativa, id_pergunta)
);


CREATE TABLE aluno (
                id INT AUTO_INCREMENT NOT NULL,
                email VARCHAR(50) NOT NULL,
                nome VARCHAR(60) NOT NULL,
                senha VARCHAR(60) NOT NULL,
                PRIMARY KEY (id)
);


CREATE TABLE partida (
                id INT AUTO_INCREMENT NOT NULL,
                pontos INT DEFAULT 0 NOT NULL,
                id_partida INT NOT NULL,
                PRIMARY KEY (id)
);


CREATE TABLE partida_alternativa (
                id_partida INT NOT NULL,
                id_pergunta INT NOT NULL,
                alternativa_marcada CHAR NOT NULL,
                PRIMARY KEY (id_partida, id_pergunta)
);


CREATE TABLE professor (
                id INT AUTO_INCREMENT NOT NULL,
                email VARCHAR(50) NOT NULL,
                nome VARCHAR(60) NOT NULL,
                senha VARCHAR(32) NOT NULL,
                PRIMARY KEY (id)
);


CREATE TABLE turma (
                id INT AUTO_INCREMENT NOT NULL,
                senha VARCHAR(60) NOT NULL,
                id_professor INT  NOT NULL,
                PRIMARY KEY (id)
);


CREATE TABLE aluno_turma (
                id_turma INT NOT NULL,
                id_aluno INT NOT NULL,
                PRIMARY KEY (id_turma, id_aluno)
);


ALTER TABLE alternativa ADD CONSTRAINT pergunta_alternativa_fk
FOREIGN KEY (id_pergunta)
REFERENCES pergunta (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE partida_alternativa ADD CONSTRAINT pergunta_partida_alternativa_fk
FOREIGN KEY (id_pergunta)
REFERENCES pergunta (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE aluno_turma ADD CONSTRAINT aluno_aluno_turma_fk
FOREIGN KEY (id_aluno)
REFERENCES aluno (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE partida ADD CONSTRAINT aluno_partida_fk
FOREIGN KEY (id_partida)
REFERENCES aluno (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE partida_alternativa ADD CONSTRAINT partida_partida_alternativa_fk
FOREIGN KEY (id_partida)
REFERENCES partida (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE turma ADD CONSTRAINT professor_turma_fk
FOREIGN KEY (id_professor)
REFERENCES professor (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE aluno_turma ADD CONSTRAINT turma_aluno_turma_fk
FOREIGN KEY (id_turma)
REFERENCES turma (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
