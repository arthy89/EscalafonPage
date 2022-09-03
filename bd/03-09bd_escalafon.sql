/*
 Navicat Premium Data Transfer

 Source Server         : Escalafon
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : bd_escalafon

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 03/09/2022 18:52:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comunicado
-- ----------------------------
DROP TABLE IF EXISTS `comunicado`;
CREATE TABLE `comunicado`  (
  `com_id` int NOT NULL AUTO_INCREMENT,
  `com_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `com_cont` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `com_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `ico_id` int NULL DEFAULT NULL,
  `usu_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`com_id`) USING BTREE,
  INDEX `ico_id_fk1`(`ico_id` ASC) USING BTREE,
  INDEX `usu_id_fk2`(`usu_id` ASC) USING BTREE,
  CONSTRAINT `ico_id_fk1` FOREIGN KEY (`ico_id`) REFERENCES `icono` (`ico_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `usu_id_fk2` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of comunicado
-- ----------------------------

-- ----------------------------
-- Table structure for icono
-- ----------------------------
DROP TABLE IF EXISTS `icono`;
CREATE TABLE `icono`  (
  `ico_id` int NOT NULL AUTO_INCREMENT,
  `ico_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `ico_svg` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ico_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of icono
-- ----------------------------

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol`  (
  `rol_id` int NOT NULL AUTO_INCREMENT,
  `rol_nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`rol_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO `rol` VALUES (1, 'Administrador');
INSERT INTO `rol` VALUES (2, 'Jefe de Área');
INSERT INTO `rol` VALUES (3, 'Técnico');
INSERT INTO `rol` VALUES (4, 'Practicante');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `usu_id` int NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_apaterno` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_amaterno` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_contrasena` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_detalle` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `rol_id` int NULL DEFAULT NULL,
  `usu_direccion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_log` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`usu_id`) USING BTREE,
  INDEX `rol_id_fk1`(`rol_id` ASC) USING BTREE,
  CONSTRAINT `rol_id_fk1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Arhyel Philippe', 'Ramos', 'Flores', '$2y$12$3IqMNkcLM5x6sYwWxmwjjuJxbmYlW30KE3awNxkjziVBPLqK3RUEC', 'arhyel@mail.com', 'controlador/usuario/foto/1.png', 'Practicante de Sistemas', 4, 'Jr. Ingaricona 129', 'arhyel');
INSERT INTO `usuarios` VALUES (2, 'Alan Max', 'Fernandez', 'Candia', '$2y$12$3IqMNkcLM5x6sYwWxmwjjuJxbmYlW30KE3awNxkjziVBPLqK3RUEC', 'alan@mail.com', 'controlador/usuario/foto/4.png', NULL, 1, NULL, 'alan');
INSERT INTO `usuarios` VALUES (3, 'Elba María', 'Romero', 'Ortiz', '$2y$12$3IqMNkcLM5x6sYwWxmwjjuJxbmYlW30KE3awNxkjziVBPLqK3RUEC', 'elba@mail.com', 'controlador/usuario/foto/7.png', NULL, 1, NULL, 'elba');
INSERT INTO `usuarios` VALUES (4, 'persona1', 'p1', 'p1', '$2y$12$TaPOK2p5vZ/nyalCzMs6euR5FIe3lEPrsw6K1EvITkvx51IX5h8xa', 'pu@mail.com', 'controlador/usuario/foto/IMG30820221925471.PNG', 'sin detalle ', 4, 'jr drep', 'persona1');
INSERT INTO `usuarios` VALUES (14, 'shdf', 'hsgdc', 'nsdhc', '$2y$12$y/kPsZbAmqEHWyQFuEjrJuBvpTJ1cUUU4rq3TA5vWisRmhlIK4t3e', 'nvsdvcs@gmail.com', 'controlador/usuario/foto/IMG31820221232931.jpeg', 'sda', 4, 'jr sdjhfgsjerf', 'qwer');

-- ----------------------------
-- View structure for view_listar_usuario
-- ----------------------------
DROP VIEW IF EXISTS `view_listar_usuario`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_listar_usuario` AS SELECT
	usuarios.usu_id, 
	usuarios.usu_nombre, 
	usuarios.usu_apaterno, 
	usuarios.usu_amaterno, 
	usuarios.usu_contrasena, 
	usuarios.usu_email, 
	usuarios.usu_foto, 
	usuarios.usu_detalle, 
	usuarios.rol_id, 
	usuarios.usu_direccion, 
	rol.rol_nombre,
	usu_log
FROM
	usuarios
	INNER JOIN
	rol
	ON 
		usuarios.rol_id = rol.rol_id ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_ROL
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_ROL`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_ROL`()
SELECT * FROM rol
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_USUARIO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_USUARIO`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_USUARIO`()
SELECT
	usuarios.usu_id, 
	usuarios.usu_nombre, 
	usuarios.usu_apaterno, 
	usuarios.usu_amaterno, 
	usuarios.usu_email, 
	usuarios.usu_foto, 
	usuarios.usu_detalle, 
	usuarios.usu_direccion, 
	rol.rol_nombre
FROM
	usuarios
	INNER JOIN
	rol
	ON 
		usuarios.rol_id = rol.rol_id
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_MODIFICAR_CONTRA
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_MODIFICAR_CONTRA`;
delimiter ;;
CREATE PROCEDURE `SP_MODIFICAR_CONTRA`(IN ID INT, IN CONTRA VARCHAR(255))
UPDATE usuarios SET
usu_contrasena=CONTRA 
WHERE usu_id=ID
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_MODIFICAR_FOTO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_MODIFICAR_FOTO`;
delimiter ;;
CREATE PROCEDURE `SP_MODIFICAR_FOTO`(IN ID INT, IN RUTA VARCHAR(255))
BEGIN
UPDATE usuarios SET 
 usu_foto=RUTA
WHERE usu_id = ID;
SELECT 1;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_MODIFICAR_USUARIO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_MODIFICAR_USUARIO`;
delimiter ;;
CREATE PROCEDURE `SP_MODIFICAR_USUARIO`(IN ID INT, IN USUARIO VARCHAR(255), IN APATERNO VARCHAR(255), IN AMATERNO VARCHAR(255), IN EMAIL VARCHAR(255), IN DETALLE VARCHAR(255), IN DIRECCION VARCHAR(255), IN ROL INT)
BEGIN
UPDATE usuarios SET 
 usu_nombre=USUARIO,
 usu_apaterno=APATERNO,
 usu_amaterno=AMATERNO,
 usu_email=EMAIL,
 usu_detalle=DETALLE,
 usu_direccion=DIRECCION,
 rol_id=ROL
WHERE usu_id = ID;
SELECT 1;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_REGISTRAR_USUARIO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REGISTRAR_USUARIO`;
delimiter ;;
CREATE PROCEDURE `SP_REGISTRAR_USUARIO`(IN USULOG VARCHAR(255), IN NOMBRE VARCHAR(255), IN PATERNO VARCHAR(255), IN MATERNO VARCHAR(255), IN EMAIL VARCHAR(255), IN ROL INT, IN CONTRASENA VARCHAR(255), IN DETALLE VARCHAR(255), IN DIRECCION VARCHAR(255), IN RUTA VARCHAR(255))
BEGIN
DECLARE CANTIDAD INT;
SET @CANTIDAD:=(SELECT COUNT(*) FROM usuarios WHERE usu_email = BINARY EMAIL);
IF @CANTIDAD = 0 THEN
	INSERT INTO
	usuarios(usu_nombre,usu_apaterno,usu_amaterno,usu_email,usu_contrasena,usu_foto,usu_detalle,usu_direccion,rol_id,usu_log)
	VALUES
	(NOMBRE,PATERNO,MATERNO,EMAIL,CONTRASENA,RUTA,DETALLE,DIRECCION,ROL,USULOG);
	SELECT 1;
ELSE
	SELECT 2;
END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_VERIFICAR_USUARIO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_VERIFICAR_USUARIO`;
delimiter ;;
CREATE PROCEDURE `SP_VERIFICAR_USUARIO`(IN USUARIO VARCHAR ( 250 ))
SELECT
	usuarios.usu_id, 
	usuarios.usu_email, 
	usuarios.usu_contrasena, 
	usuarios.usu_nombre, 
	usuarios.usu_apaterno, 
	usuarios.usu_amaterno, 
	usuarios.rol_id, 
	usuarios.usu_direccion, 
	usuarios.usu_foto, 
	usuarios.usu_detalle, 
	rol.rol_nombre,
	usuarios.usu_log
FROM
	usuarios
	INNER JOIN
	rol
	ON 
		usuarios.rol_id = rol.rol_id
WHERE usu_log = BINARY USUARIO
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
