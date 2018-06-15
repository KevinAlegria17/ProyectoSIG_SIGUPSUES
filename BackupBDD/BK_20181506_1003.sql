-- MySQL dump 10.16  Distrib 10.1.22-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: bd_sigupsues
-- ------------------------------------------------------
-- Server version	10.1.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `carnet` varchar(7) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `lugar_trabajo` varchar(100) DEFAULT NULL,
  `telefono_trabajo` varchar(100) DEFAULT NULL,
  `ingresadoPor` varchar(255) DEFAULT NULL,
  `modificadoPor` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES ('AA13014','juan','pedro','col pal','22232323','juanpedro@gmail.com','trabajo','34343434','coordinadorsistemas@gmail.com',NULL,'2018-03-21 18:06:37','2018-03-21 18:06:37'),('AA13331','alumno 1 industrail','hai','jhjhhj','44444444','coreo@gmail.com','kljljlkj','77777777','coordinadorindustrial@gmail.com',NULL,'2018-03-22 21:26:02','2018-03-22 21:26:02'),('PP10100','Pedro','Portualo','col','23232323','pedro@gmail.com','hola','44444444','coordinadorsistemas@gmail.com',NULL,'2018-03-22 19:51:42','2018-03-22 19:51:42');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beneficiario`
--

DROP TABLE IF EXISTS `beneficiario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beneficiario` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `dui` varchar(10) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `organizacion` varchar(255) DEFAULT NULL,
  `telefono_organizacion` varchar(255) DEFAULT NULL,
  `correo_organizacion` varchar(255) DEFAULT NULL,
  `direccion_organizacion` varchar(255) DEFAULT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beneficiario`
--

LOCK TABLES `beneficiario` WRITE;
/*!40000 ALTER TABLE `beneficiario` DISABLE KEYS */;
INSERT INTO `beneficiario` VALUES (1,'Iker','Casillas','12345678-0','ik@algo.com','2201223','Real Madrid','2222222','coo@cc.com','col miramonte',217,1,'2018-03-21 17:42:12','2018-03-21 17:42:12'),(2,'Oliver','Kann','12345678-9','ok@algo.com','2201223','Bayern','2222222','coo@cc.com','col miramonte',217,1,'2018-03-21 17:42:12','2018-03-21 17:42:12'),(3,'Ronaldo','Nazario','12345678-4','rn@algo.com','2201223','Brasil','2222222','coo@cc.com','col miramonte',217,1,'2018-03-21 17:42:12','2018-03-21 17:42:12');
/*!40000 ALTER TABLE `beneficiario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `accion` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_bitacora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id` int(11) DEFAULT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'DIS','Disponible','2018-03-21 17:42:12','2018-03-21 17:42:12'),(2,'ECS','En curso','2018-03-21 17:42:12','2018-03-21 17:42:12'),(3,'ABN','Abandonado','2018-03-21 17:42:12','2018-03-21 17:42:12'),(4,'FIN','Finalizado','2018-03-21 17:42:12','2018-03-21 17:42:12');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expediente_servicio_socials`
--

DROP TABLE IF EXISTS `expediente_servicio_socials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expediente_servicio_socials` (
  `id` int(11) DEFAULT NULL,
  `expediente_alumno_id` int(11) DEFAULT NULL,
  `servicio_social_id` int(11) DEFAULT NULL,
  `horas_ganadas` int(11) DEFAULT NULL,
  `estado_ss_estudiante` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expediente_servicio_socials`
--

LOCK TABLES `expediente_servicio_socials` WRITE;
/*!40000 ALTER TABLE `expediente_servicio_socials` DISABLE KEYS */;
INSERT INTO `expediente_servicio_socials` VALUES (1,1,1,500,4,'2018-03-21 18:10:45','2018-03-21 18:10:45'),(2,2,1,300,2,'2018-03-22 19:52:02','2018-03-22 19:52:02'),(3,3,5,444,2,'2018-03-22 21:26:23','2018-03-22 21:26:23');
/*!40000 ALTER TABLE `expediente_servicio_socials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expedientes`
--

DROP TABLE IF EXISTS `expedientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expedientes` (
  `id` int(11) DEFAULT NULL,
  `alumno_escuela_id` int(11) DEFAULT NULL,
  `fecha_apertura` datetime DEFAULT NULL,
  `fecha_cierre` datetime DEFAULT NULL,
  `observaciones` text,
  `totalHoras` int(11) DEFAULT NULL,
  `totalMontos` int(11) DEFAULT NULL,
  `estado_expediente_id` int(11) DEFAULT NULL,
  `certificado` tinyint(1) DEFAULT NULL,
  `ingresadoPor` varchar(255) DEFAULT NULL,
  `modificadoPor` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expedientes`
--

LOCK TABLES `expedientes` WRITE;
/*!40000 ALTER TABLE `expedientes` DISABLE KEYS */;
INSERT INTO `expedientes` VALUES (1,1,NULL,'2018-03-22 00:00:00','Ninguna',500,NULL,3,0,NULL,NULL,'2018-03-21 18:06:37','2018-03-22 21:26:23'),(2,2,NULL,NULL,'Ninguna',300,NULL,2,0,NULL,NULL,'2018-03-22 19:51:43','2018-03-22 19:52:02'),(3,3,NULL,NULL,'Ninguna',444,NULL,2,0,NULL,NULL,'2018-03-22 21:26:02','2018-03-22 21:26:23');
/*!40000 ALTER TABLE `expedientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `id_Usuario` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `accion` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (8,1,'Roberto','roberto75@gmail.com','Inicio Sesion','2018-06-14 10:21:39'),(9,1,'Roberto','roberto75@gmail.com','Finalizo Sesion','2018-06-14 10:22:04'),(10,1,'Roberto','roberto75@gmail.com','Inicio Sesion','2018-06-14 10:23:31'),(11,1,'Roberto','roberto75@gmail.com','Inicio Sesion','2018-06-14 11:09:21'),(12,1,'Roberto','roberto75@gmail.com','Inicio Sesion','2018-06-14 13:56:25');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio_social`
--

DROP TABLE IF EXISTS `servicio_social`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio_social` (
  `id` int(11) DEFAULT NULL,
  `escuela_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `tutor_id` int(11) DEFAULT NULL,
  `beneficiario_id` int(11) DEFAULT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `beneficiarios_directos` int(11) DEFAULT NULL,
  `beneficiarios_indirectos` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `horas_totales` int(11) DEFAULT NULL,
  `numero_estudiantes` int(11) DEFAULT NULL,
  `modalidad_id` int(11) DEFAULT NULL,
  `ingresadoPor` varchar(255) DEFAULT NULL,
  `modificadoPor` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio_social`
--

LOCK TABLES `servicio_social` WRITE;
/*!40000 ALTER TABLE `servicio_social` DISABLE KEYS */;
INSERT INTO `servicio_social` VALUES (1,1,'proyecto 1','descripcion 1',2,2,1,'2018-03-21 00:00:00','2018-03-22 00:00:00',2000,20,20,2,600,4,1,'coordinadorsistemas@gmail.com','coordinadorsistemas@gmail.com','2018-03-21 18:10:17','2018-03-22 03:16:51'),(2,1,'proeycto 2','proeycto 2',2,1,26,'2018-03-21 00:00:00','2018-03-22 00:00:00',1000,100,100,2,600,5,2,'coordinadorsistemas@gmail.com','coordinadorsistemas@gmail.com','2018-03-22 03:14:02','2018-03-22 03:17:10'),(3,1,'proyecto 3','proyecto 3',3,3,30,'2018-03-21 00:00:00','2018-03-22 00:00:00',5000,500,500,3,700,6,1,'coordinadorsistemas@gmail.com','coordinadorsistemas@gmail.com','2018-03-22 03:15:22','2018-03-22 03:17:27'),(4,1,'proyecto 4','proyecto 4',1,2,29,'2018-03-21 00:00:00','2018-03-22 00:00:00',9000,90,90,2,900,9,1,'coordinadorsistemas@gmail.com','coordinadorsistemas@gmail.com','2018-03-22 03:20:13','2018-03-22 03:20:32'),(5,3,'proyecto 1 industrial','proyecto 1 industrial',2,3,13,'2018-03-21 00:00:00','2018-03-22 00:00:00',500,5000,500,2,500,5,1,'coordinadorindustrial@gmail.com','coordinadorindustrial@gmail.com','2018-03-22 03:32:29','2018-03-22 03:36:41');
/*!40000 ALTER TABLE `servicio_social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Roberto','roberto75@gmail.com','$2y$10$/suq6mJTj2wFiteSdwDKYuUbbAEEdGMdvlg3PC.nv1yNO1KSKPLI2','RVGNC87wElo84uNTfm5tgU85XXT0eosUaw0zk9v8NddlXRAPIOoNmOQnB4pt','2018-05-12 04:25:06','2018-05-12 04:25:06');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-15 10:03:13
