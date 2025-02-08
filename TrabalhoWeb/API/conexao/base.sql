CREATE DATABASE  IF NOT EXISTS `matricula`;

USE `matricula`;

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(128) DEFAULT NULL,
  `senha` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `dadosPessoais`;

CREATE TABLE `dadosPessoais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) DEFAULT NULL,
  `cpf` varchar(512) DEFAULT NULL,
  `escolaridade` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `ra` varchar(128) DEFAULT NULL,
  `numero` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `grupoFamiliar`;

CREATE TABLE `grupoFamiliar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) DEFAULT NULL,
  `cpf` varchar(512) DEFAULT NULL,
  `parentesco` varchar(128) DEFAULT NULL,
  `numero` varchar(16) DEFAULT NULL,
  `idaluno` varchar(16) DEFAULT NULL,  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `endereco`;

CREATE TABLE `endereco` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cidade` varchar(128) DEFAULT NULL,
  `rua` varchar(512) DEFAULT NULL,
  `bairro` varchar(128) DEFAULT NULL,
  `numero` varchar(16) DEFAULT NULL,
  `idaluno` varchar(16) DEFAULT NULL,  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `renda`;

CREATE TABLE `renda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rendaFamiliar` varchar(32) DEFAULT NULL,
  `numeroPessoas` varchar(16) DEFAULT NULL,
  `idAluno` varchar(16) DEFAULT NULL,  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
