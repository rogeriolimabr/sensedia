CREATE DATABASE  IF NOT EXISTS `sensedia`;
USE `sensedia`;

DROP TABLE IF EXISTS `cidades`;

CREATE TABLE `cidades` (
  `CidadeId` int unsigned NOT NULL AUTO_INCREMENT,
  `CidadeDesc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CidadeId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `cidades` WRITE;
INSERT INTO `cidades` VALUES (1,'São Paulo'),(2,'Rio de Janeiro'),(3,'Salvador'),(4,'Pernambuco'),(5,'Lapa'),(6,'São Carlos'),(7,'Rondonópolis'),(8,'Bragança Paulista');
UNLOCK TABLES;

DROP TABLE IF EXISTS `pessoas`;

CREATE TABLE `pessoas` (
  `PessoaId` int unsigned NOT NULL AUTO_INCREMENT,
  `PrimeiroNome` varchar(255) DEFAULT NULL,
  `SegundoNome` varchar(255) DEFAULT NULL,
  `Endereco` varchar(255) DEFAULT NULL,
  `CidadeId` int unsigned DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `DataCadastro` datetime DEFAULT NULL,
  `Status` enum('1','2') DEFAULT NULL,
  PRIMARY KEY (`PessoaId`),
  KEY `cidade_idx` (`CidadeId`),
  CONSTRAINT `pessoa_cidade_fk` FOREIGN KEY (`CidadeId`) REFERENCES `cidades` (`CidadeId`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

