-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ferreteria
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id_cliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2015_11_07_044531_create_sucursal_table',1),('2015_11_07_044612_create_usuario_table',1),('2015_11_07_044643_create_ordentrabajo_table',1),('2015_11_07_044654_create_producto_table',1),('2015_11_07_044707_create_cliente_table',1),('2015_11_07_044723_create_venta_table',1),('2015_11_07_044831_create_productoventa_table',1),('2015_11_07_044848_create_ordencompra_table',1),('2015_11_07_044912_create_ordencompraproducto_table',1),('2015_11_07_044926_create_perno_table',1),('2015_11_07_044944_create_ordentrabajoperno_table',1),('2015_11_07_045030_create_ordencompraperno_table',1),('2015_11_12_024059_create_sucursalesusers_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenescompra`
--

DROP TABLE IF EXISTS `ordenescompra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordenescompra` (
  `id_oc` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_solicitud` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `id_cliente` int(10) unsigned NOT NULL,
  `id_sucursal` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_oc`),
  KEY `ordenescompra_id_cliente_foreign` (`id_cliente`),
  KEY `ordenescompra_id_sucursal_foreign` (`id_sucursal`),
  CONSTRAINT `ordenescompra_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  CONSTRAINT `ordenescompra_id_sucursal_foreign` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id_sucursal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenescompra`
--

LOCK TABLES `ordenescompra` WRITE;
/*!40000 ALTER TABLE `ordenescompra` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordenescompra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenescompraperno`
--

DROP TABLE IF EXISTS `ordenescompraperno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordenescompraperno` (
  `id_perno` int(10) unsigned NOT NULL,
  `id_oc` int(10) unsigned NOT NULL,
  `cantidad_ordencompra` int(11) NOT NULL,
  KEY `ordenescompraperno_id_perno_foreign` (`id_perno`),
  KEY `ordenescompraperno_id_oc_foreign` (`id_oc`),
  CONSTRAINT `ordenescompraperno_id_oc_foreign` FOREIGN KEY (`id_oc`) REFERENCES `ordenescompra` (`id_oc`) ON DELETE CASCADE,
  CONSTRAINT `ordenescompraperno_id_perno_foreign` FOREIGN KEY (`id_perno`) REFERENCES `pernos` (`id_perno`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenescompraperno`
--

LOCK TABLES `ordenescompraperno` WRITE;
/*!40000 ALTER TABLE `ordenescompraperno` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordenescompraperno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenescompraproducto`
--

DROP TABLE IF EXISTS `ordenescompraproducto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordenescompraproducto` (
  `id_producto` int(10) unsigned NOT NULL,
  `id_oc` int(10) unsigned NOT NULL,
  `cantidad_ordencompra` int(11) NOT NULL,
  KEY `ordenescompraproducto_id_producto_foreign` (`id_producto`),
  KEY `ordenescompraproducto_id_oc_foreign` (`id_oc`),
  CONSTRAINT `ordenescompraproducto_id_oc_foreign` FOREIGN KEY (`id_oc`) REFERENCES `ordenescompra` (`id_oc`) ON DELETE CASCADE,
  CONSTRAINT `ordenescompraproducto_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenescompraproducto`
--

LOCK TABLES `ordenescompraproducto` WRITE;
/*!40000 ALTER TABLE `ordenescompraproducto` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordenescompraproducto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenestrabajo`
--

DROP TABLE IF EXISTS `ordenestrabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordenestrabajo` (
  `id_ot` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_incio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  PRIMARY KEY (`id_ot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenestrabajo`
--

LOCK TABLES `ordenestrabajo` WRITE;
/*!40000 ALTER TABLE `ordenestrabajo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordenestrabajo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenestrabajoperno`
--

DROP TABLE IF EXISTS `ordenestrabajoperno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordenestrabajoperno` (
  `id_perno` int(10) unsigned NOT NULL,
  `id_ot` int(10) unsigned NOT NULL,
  `cantidad_ordentrabajo` int(11) NOT NULL,
  KEY `ordenestrabajoperno_id_perno_foreign` (`id_perno`),
  KEY `ordenestrabajoperno_id_ot_foreign` (`id_ot`),
  CONSTRAINT `ordenestrabajoperno_id_ot_foreign` FOREIGN KEY (`id_ot`) REFERENCES `ordenestrabajo` (`id_ot`) ON DELETE CASCADE,
  CONSTRAINT `ordenestrabajoperno_id_perno_foreign` FOREIGN KEY (`id_perno`) REFERENCES `pernos` (`id_perno`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenestrabajoperno`
--

LOCK TABLES `ordenestrabajoperno` WRITE;
/*!40000 ALTER TABLE `ordenestrabajoperno` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordenestrabajoperno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pernos`
--

DROP TABLE IF EXISTS `pernos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pernos` (
  `id_perno` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_perno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pernos`
--

LOCK TABLES `pernos` WRITE;
/*!40000 ALTER TABLE `pernos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pernos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id_producto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `inventario` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'martillo','herramienta',5000.00,12),(2,'alicate','herramienta',2500.00,50),(3,'destornillador rojo','herramienta',1500.00,23);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productosventa`
--

DROP TABLE IF EXISTS `productosventa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productosventa` (
  `cod_venta` int(10) unsigned NOT NULL,
  `id_producto` int(10) unsigned NOT NULL,
  `cantidad_venta` int(11) NOT NULL,
  KEY `productosventa_cod_venta_foreign` (`cod_venta`),
  KEY `productosventa_id_producto_foreign` (`id_producto`),
  CONSTRAINT `productosventa_cod_venta_foreign` FOREIGN KEY (`cod_venta`) REFERENCES `ventas` (`cod_venta`),
  CONSTRAINT `productosventa_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productosventa`
--

LOCK TABLES `productosventa` WRITE;
/*!40000 ALTER TABLE `productosventa` DISABLE KEYS */;
/*!40000 ALTER TABLE `productosventa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursales`
--

DROP TABLE IF EXISTS `sucursales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sucursales` (
  `id_sucursal` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_sucursal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursales`
--

LOCK TABLES `sucursales` WRITE;
/*!40000 ALTER TABLE `sucursales` DISABLE KEYS */;
/*!40000 ALTER TABLE `sucursales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursalesuser`
--

DROP TABLE IF EXISTS `sucursalesuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sucursalesuser` (
  `id` int(10) unsigned NOT NULL,
  `id_sucursal` int(10) unsigned NOT NULL,
  KEY `sucursalesuser_id_foreign` (`id`),
  KEY `sucursalesuser_id_sucursal_foreign` (`id_sucursal`),
  CONSTRAINT `sucursalesuser_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sucursalesuser_id_sucursal_foreign` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id_sucursal`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursalesuser`
--

LOCK TABLES `sucursalesuser` WRITE;
/*!40000 ALTER TABLE `sucursalesuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `sucursalesuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `rol` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'natalia','natalia@natalia.cl','$2y$10$BNpqHedD9kZBHbyyKEIOd.eDrjVDPc4cgMYMFQh/OLDzZLWtw0Srq',1,'7oxNCKA7RqVgstrwdOpAZCh5MiiFW9Fljw6rkGFcZgOsFGRAr9mQ2K9Q5fIz','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'nicolas','nicolas@nicolas.cl','$2y$10$c87Mm1eprcFfBqkpiChnVe6S9V66wlQpn2xh5pnqhYy4pQ/zxjQVW',0,'4eojyHSyVdL2IUo5joCgFlkWOa7xRhJxIwRiAg3fnxob0LmmcWO1aec51OFm','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventas` (
  `cod_venta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `monto_total` double(8,2) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cod_venta`),
  KEY `ventas_id_cliente_foreign` (`id_cliente`),
  CONSTRAINT `ventas_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-23 16:16:28
