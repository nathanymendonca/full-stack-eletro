

-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: fseletro2
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `produto`
--
CREATE DATABASE fseletro;
USE fseletro;

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `data_inclusao` datetime DEFAULT NULL,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem_UNIQUE` (`imagem`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,NULL,'geladeira','Geladeira Frost Free Brastemp Side Inverse 540 litros',6389.00,5019.00,'imagens/geladeira%20brastemp%20frost%20free%20side%20inverse%20540%20litros.jpg'),(2,NULL,'geladeira','Geladeira Frost Free Brastemp branca 375 litros',2068.60,1910.90,'imagens/geladeira-brastemp-frost-free-branca-375-litros-.jpg'),(3,NULL,'geladeira','Geladeira e Refrigerador Samsung French Door Inox 501L Smart (wi-Fi) com FlexZone - 220v',16210.60,15710.90,'imagens/Geladeira%20eRefrigerador%20Samsung%20French%20Door%20Inox%20Look%20501L%20Smart%20(Wi-Fi)%20com%20FlexZone%20-%20220v.jpg'),(4,NULL,'fogao','Fogão 5 bocas Brastemp acendimento automático',4210.60,3595.90,'imagens/Fog%C3%A3o%205%20bocas%20Brastemp%20acendimento%20autom%C3%A1tico.jpg'),(5,NULL,'fogao','Cooktop Elétrico 4 Bocas Vitrocerâmico Safanelli Touch 220v',4210.60,3210.00,'imagens/Cooktop%20El%C3%A9trico%204%20Bocas%20Vitrocer%C3%A2mico%20Safanelli%20Touch%20220v.jpg'),(6,NULL,'microondas','Microondas Egg Cooker',6389.00,5019.00,'imagens/Egg%20Cooker%20Recipiente%20Fazer%20Ovos%20Cozidos%20Microondas%20c%20ovo.jpg'),(7,NULL,'microondas','Microondas Philco 21L',495.60,415.90,'imagens/Micro-ondas%20Philco%20Pmm24%2021l%20-%20Preto%20127v.jpg'),(8,NULL,'microondas','Microondas Philco 25L',595.60,475.90,'imagens/Microondas%20Philco%20Pme25bm%2025%20litros%20127v%201.jpg'),(9,NULL,'lavadora','Tanquinho e Lavadoura de roupas Colomarq semi-automática 10Kg',3375.60,3255.90,'imagens/Tanquinho%20e%20Lavadora%20De%20Roupas%20Semi-autom%C3%A1tica%20Colormaq%2010kg%20Lcs%20Prata%20tampa%20aberta.jpg'),(10,NULL,'lavadora','Lavadora de Roupas Philco Inverter 12KG',6389.00,5019.00,'imagens/Lavadora%20de%20Roupas%20Philco%20Inverter%2012KG.jpg'),(11,NULL,'lavalouca','Lava Louça Brastemp Compacta 8 Serviços Prata - 220V',2375.60,2255.90,'imagens/Lava%20Lou%C3%A7a%20Compacta%208%20Servi%C3%A7os%20Prata%20%20-%20220V%20Brastemp.jpg'),(12,NULL,'lavalouca','Lava Louça Brastemp 10 Serviços Inox 110V',2975.60,2755.90,'imagens/Lava%20Lou%C3%A7as%20Brastemp%2010%20Servi%C3%A7os%20Inox%20110V.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;


DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_do_cliente` varchar(100) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `nome_do_produto` varchar(255) NOT NULL,
  `valor_unitario` decimal(8,2) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_total` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `idproduto` (`idpedido`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET character_set_client = @saved_cs_client */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-22 18:52:15
