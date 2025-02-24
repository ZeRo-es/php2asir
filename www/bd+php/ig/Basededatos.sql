SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `dbname`;
CREATE DATABASE `dbname` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbname`;

DROP TABLE IF EXISTS `postsig`;
CREATE TABLE `postsig` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `fecha` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `id_usuario` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `postsig_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuariosig` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tabla2`;
CREATE TABLE `tabla2` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `numero` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `tabla2` (`id`, `nombre`, `fecha`, `numero`) VALUES
(1,	'luis',	'2025-01-09',	2),
(7,	'juan',	'2025-01-26',	10);

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasenya` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `usuariosig`;
CREATE TABLE `usuariosig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fotoperfil` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'ROLE_USER',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `usuariosig` (`id`, `user`, `password`, `fotoperfil`, `role`) VALUES
(2,	'lautaro',	'123',	'fnaf.jpg',	'ROLE_ADMIN');