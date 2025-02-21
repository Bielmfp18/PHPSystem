-- CREATE DATABASE IF NOT EXISTS bd_ti97;
-- USE sistema_logon

-- -- Cria tabela de usuários
-- CREATE TABLE IF NOT EXISTS usuarios (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     usuario VARCHAR(50) NOT NULL UNIQUE,
--     senha VARCHAR(255) NOT NULL,
--     criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );

CREATE DATABASE IF NOT EXISTS atividade;
USE atividade;

CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(80) NOT NULL,
    telefone CHAR(11) NOT NULL,
    data_nasc DATE NOT NULL 

);