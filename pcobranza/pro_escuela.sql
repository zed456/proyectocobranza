-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pro_escuela
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(8) NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido_P` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido_M` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (45678001,'sebas2319','Sebastian','Aburto','Corona');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `matricula_alu` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_P` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_M` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `genero` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `inicio_escolar` date NOT NULL,
  `sección` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `grado` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`matricula_alu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES ('19307061','Sebastian ','Aburto ','Lopez','Masculino','2016-06-15','Prescolar','2'),('19307062','Jose','Aburto','Perez','Masculino','2022-03-02','Primaria','3'),('19307063','Rafael','Aburto ','KK','Masculino','2016-06-15','Prescolar','3'),('19307064','Brayan','L','O','Masculino','2017-05-15','Secundaria','2'),('19307065','Luffy','Zamarreno','Teta','Masculino','2016-06-15','Secundaria','3');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caja`
--

DROP TABLE IF EXISTS `caja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caja` (
  `id_cajero` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido_P` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido_M` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Genero` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Teléfono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_cajero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caja`
--

LOCK TABLES `caja` WRITE;
/*!40000 ALTER TABLE `caja` DISABLE KEYS */;
INSERT INTO `caja` VALUES ('23231','admin','Ramon','Gabriel','Galeana','Masculino','7551141565'),('23232','Sedas23#','Sebastian','Aburto ','Corona','Masculino','5618661003');
/*!40000 ALTER TABLE `caja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datos_enfermeria`
--

DROP TABLE IF EXISTS `datos_enfermeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datos_enfermeria` (
  `id_datos` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `enfermedades` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `observaciones` varchar(10000) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_datos`),
  KEY `id` (`id`),
  CONSTRAINT `datos_enfermeria_ibfk_1` FOREIGN KEY (`id`) REFERENCES `vinculacion_enalu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_enfermeria`
--

LOCK TABLES `datos_enfermeria` WRITE;
/*!40000 ALTER TABLE `datos_enfermeria` DISABLE KEYS */;
INSERT INTO `datos_enfermeria` VALUES (19,8,1.84,1.74,'S\r\nD\r\nF\r\nT','Mucho','2022-05-19'),(20,9,145,1.79,'dddddd','Como crreees\r\n','2022-05-19'),(21,8,1.84,1.74,'iiiiiiiio','pppppp','2022-05-21'),(22,9,185,1.75,'uyuyu','ogofof','2022-05-27'),(24,13,198,1.82,'Dolor de cabeza','Dice que comenso despues de recreo cuando comio una torta','2022-05-20'),(27,7,198,1.45,'f','f','2022-05-23');
/*!40000 ALTER TABLE `datos_enfermeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enfermero`
--

DROP TABLE IF EXISTS `enfermero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enfermero` (
  `id_enfermero` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido_P` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido_M` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Genero` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Teléfono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_enfermero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enfermero`
--

LOCK TABLES `enfermero` WRITE;
/*!40000 ALTER TABLE `enfermero` DISABLE KEYS */;
INSERT INTO `enfermero` VALUES ('123','dedos123','Marcos','Raro','Lop','Masculino','7551123425'),('124','sebastian2319A%','Daniel','Lopez','Corona','Masculino','7551136598'),('125','sebastian2319Q^','Sebastian','Aburto','Corona','Masculino','5618661003');
/*!40000 ALTER TABLE `enfermero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fechas_pagos`
--

DROP TABLE IF EXISTS `fechas_pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fechas_pagos` (
  `id_fecha` int(11) NOT NULL AUTO_INCREMENT,
  `Mes` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_inip` date NOT NULL,
  `fecha_finp` date NOT NULL,
  PRIMARY KEY (`id_fecha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fechas_pagos`
--

LOCK TABLES `fechas_pagos` WRITE;
/*!40000 ALTER TABLE `fechas_pagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `fechas_pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referencias`
--

DROP TABLE IF EXISTS `referencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referencias` (
  `id_pago` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `id_tarjeta` varchar(19) COLLATE utf8_spanish2_ci NOT NULL,
  `Pago` float NOT NULL,
  `id_tutor` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `matricula_alu` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `id_fecha` int(11) NOT NULL,
  `id_cajero` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_pago`),
  KEY `id_tarjeta` (`id_tarjeta`),
  KEY `id_tutor` (`id_tutor`),
  KEY `matricula_alu` (`matricula_alu`),
  KEY `id_fecha` (`id_fecha`),
  KEY `id_cajero` (`id_cajero`),
  CONSTRAINT `referencias_ibfk_1` FOREIGN KEY (`id_cajero`) REFERENCES `caja` (`id_cajero`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `referencias_ibfk_3` FOREIGN KEY (`id_tutor`) REFERENCES `tutor` (`id_tutor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `referencias_ibfk_4` FOREIGN KEY (`matricula_alu`) REFERENCES `alumnos` (`matricula_alu`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `referencias_ibfk_5` FOREIGN KEY (`id_fecha`) REFERENCES `fechas_pagos` (`id_fecha`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referencias`
--

LOCK TABLES `referencias` WRITE;
/*!40000 ALTER TABLE `referencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `referencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor` (
  `id_tutor` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido_P` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido_M` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Genero` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Teléfono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `matricula_alu` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_tutor`),
  KEY `matricula_alu` (`matricula_alu`),
  CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`matricula_alu`) REFERENCES `alumnos` (`matricula_alu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor`
--

LOCK TABLES `tutor` WRITE;
/*!40000 ALTER TABLE `tutor` DISABLE KEYS */;
INSERT INTO `tutor` VALUES ('78986','sebas2319','Jose Manuel','Lopez','Galeana','Masculino','7551141112','19307061'),('78992','Ss$ebastian2319','Yeimi','Gomez','Kar','Femenino','7551169878','19307063'),('78999','Ss$ebastian2319','Sebastian','Aburto Corona','ttt','Masculino','5618661003','19307062');
/*!40000 ALTER TABLE `tutor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vinculacion_enalu`
--

DROP TABLE IF EXISTS `vinculacion_enalu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vinculacion_enalu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_alu` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `id_enfermero` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_enfermero` (`id_enfermero`),
  KEY `matricula_alu` (`matricula_alu`),
  CONSTRAINT `vinculacion_enalu_ibfk_1` FOREIGN KEY (`matricula_alu`) REFERENCES `alumnos` (`matricula_alu`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `vinculacion_enalu_ibfk_2` FOREIGN KEY (`id_enfermero`) REFERENCES `enfermero` (`id_enfermero`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vinculacion_enalu`
--

LOCK TABLES `vinculacion_enalu` WRITE;
/*!40000 ALTER TABLE `vinculacion_enalu` DISABLE KEYS */;
INSERT INTO `vinculacion_enalu` VALUES (7,'19307062','125'),(8,'19307061','123'),(9,'19307063','123'),(11,'19307064','124'),(13,'19307065','124');
/*!40000 ALTER TABLE `vinculacion_enalu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-26 12:50:52
