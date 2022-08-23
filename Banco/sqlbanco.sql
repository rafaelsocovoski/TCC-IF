
CREATE TABLE pergunta (
                id_pergunta INTEGER NOT NULL,
                texto_pergunta VARCHAR NOT NULL,
                materia VARCHAR(32) NOT NULL,
                alternativa_correta CHAR NOT NULL,
                CONSTRAINT pergunta_pk PRIMARY KEY (id_pergunta)
);


CREATE TABLE alternativa (
                letra_alternativa CHAR NOT NULL,
                id_pergunta INTEGER NOT NULL,
                texto_alternativa VARCHAR NOT NULL,
                CONSTRAINT alternativa_pk PRIMARY KEY (letra_alternativa, id_pergunta)
);


CREATE TABLE aluno (
                email_aluno VARCHAR(50) NOT NULL,
                nome_aluno VARCHAR(60) NOT NULL,
                senha_aluno VARCHAR(60) NOT NULL,
                CONSTRAINT id_aluno_pk PRIMARY KEY (email_aluno)
);


CREATE TABLE partida (
                id_partida INTEGER NOT NULL,
                email_aluno VARCHAR(50) NOT NULL,
                pontos INTEGER DEFAULT 0 NOT NULL,
                CONSTRAINT partida_pk PRIMARY KEY (id_partida)
);


CREATE TABLE partida_alternativa (
                id_partida INTEGER NOT NULL,
                id_pergunta INTEGER NOT NULL,
                alternativa_marcada CHAR NOT NULL,
                CONSTRAINT partida_alternativa_pk PRIMARY KEY (id_partida, id_pergunta)
);


CREATE TABLE professor (
                email_professor VARCHAR(50) NOT NULL,
                nome_professor VARCHAR(60) NOT NULL,
                senha_professor VARCHAR(32) NOT NULL,
                CONSTRAINT professor_pk PRIMARY KEY (email_professor)
);


CREATE TABLE turma (
                id_turma INTEGER NOT NULL,
                email_professor VARCHAR(50) NOT NULL,
                nome_turma VARCHAR(60) NOT NULL,
                CONSTRAINT turma_pk PRIMARY KEY (id_turma)
);


CREATE TABLE aluno_turma (
                id_turma INTEGER NOT NULL,
                email_aluno VARCHAR(50) NOT NULL,
                CONSTRAINT aluno_turma_pk PRIMARY KEY (id_turma, email_aluno)
);


ALTER TABLE alternativa ADD CONSTRAINT pergunta_alternativa_fk
FOREIGN KEY (id_pergunta)
REFERENCES pergunta (id_pergunta)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE partida_alternativa ADD CONSTRAINT pergunta_partida_alternativa_fk
FOREIGN KEY (id_pergunta)
REFERENCES pergunta (id_pergunta)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE aluno_turma ADD CONSTRAINT aluno_aluno_turma_fk
FOREIGN KEY (email_aluno)
REFERENCES aluno (email_aluno)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE partida ADD CONSTRAINT aluno_partida_fk
FOREIGN KEY (email_aluno)
REFERENCES aluno (email_aluno)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE partida_alternativa ADD CONSTRAINT partida_partida_alternativa_fk
FOREIGN KEY (id_partida)
REFERENCES partida (id_partida)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE turma ADD CONSTRAINT professor_turma_fk
FOREIGN KEY (email_professor)
REFERENCES professor (email_professor)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE aluno_turma ADD CONSTRAINT turma_aluno_turma_fk
FOREIGN KEY (id_turma)
REFERENCES turma (id_turma)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;
