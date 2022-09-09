/*
 Navicat Premium Data Transfer

 Source Server         : Oficina
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : bd_escalafon

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 06/09/2022 08:35:12
*/
CREATE DATABASE bd_escalafon;
USE bd_escalafon;
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comunicado
-- ----------------------------
DROP TABLE IF EXISTS `comunicado`;
CREATE TABLE `comunicado`  (
  `com_id` int NOT NULL,
  `com_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `com_cont` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `com_tlink` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `com_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `com_f` date NULL DEFAULT NULL,
  `com_h` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `ico_id` int NULL DEFAULT NULL,
  `usu_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`com_id`) USING BTREE,
  INDEX `ico_id_fk1`(`ico_id` ASC) USING BTREE,
  INDEX `usu_id_fk2`(`usu_id` ASC) USING BTREE,
  CONSTRAINT `ico_id_fk1` FOREIGN KEY (`ico_id`) REFERENCES `icono` (`ico_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `usu_id_fk2` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of comunicado
-- ----------------------------
INSERT INTO `comunicado` VALUES (1, 'Capacitación', 'Capacitación para docentes guía informativa.', 'Video de referencia', 'https://www.youtube.com', '2022-09-06', '07:34', 32, 1);
INSERT INTO `comunicado` VALUES (2, 'Ubicación de beneficiarios', 'Conoce la ubicaciones de los beneficiarios de la nueva... ', 'Link', 'https://www.youtube.com', '2022-08-31', '06:35', 53, 2);
INSERT INTO `comunicado` VALUES (3, 'Resoluciones importantes', 'Resoluciones de ... que sirven para', 'aquí', 'https://www.youtube.com', '2022-09-16', '11:37', 28, 1);
INSERT INTO `comunicado` VALUES (4, 'Recomendaciones', 'Le recomendamos que considere las actualizaciones de su legajo con los siguientes detalles.', 'Enlace', 'https://www.youtube.com', '2022-09-24', '07:37', 9, 1);

-- ----------------------------
-- Table structure for icono
-- ----------------------------
DROP TABLE IF EXISTS `icono`;
CREATE TABLE `icono`  (
  `ico_id` int NOT NULL AUTO_INCREMENT,
  `ico_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `ico_svg` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ico_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of icono
-- ----------------------------
INSERT INTO `icono` VALUES (1, 'Edificio', 'building');
INSERT INTO `icono` VALUES (2, 'Etiqueta', 'tags');
INSERT INTO `icono` VALUES (3, 'DNI', 'address-card');
INSERT INTO `icono` VALUES (4, 'Pantalla', 'desktop');
INSERT INTO `icono` VALUES (5, 'Calendario', 'calendar-week');
INSERT INTO `icono` VALUES (6, 'Word', 'file-word');
INSERT INTO `icono` VALUES (7, 'Importar', 'file-import');
INSERT INTO `icono` VALUES (8, 'Trofeo', 'trophy');
INSERT INTO `icono` VALUES (9, 'PDF', 'file-pdf');
INSERT INTO `icono` VALUES (10, 'Cubo', 'cube');
INSERT INTO `icono` VALUES (11, 'Check', 'check-circle');
INSERT INTO `icono` VALUES (12, 'Calculadora', 'calculator');
INSERT INTO `icono` VALUES (13, 'Huella', 'fingerprint');
INSERT INTO `icono` VALUES (14, 'Regla', 'ruler');
INSERT INTO `icono` VALUES (15, 'Pergamino', 'scroll');
INSERT INTO `icono` VALUES (16, 'Monedas', 'coins');
INSERT INTO `icono` VALUES (17, 'Imagen', 'images');
INSERT INTO `icono` VALUES (18, 'Usuario', 'user');
INSERT INTO `icono` VALUES (19, 'Teléfono', 'phone');
INSERT INTO `icono` VALUES (20, 'Comentario', 'comment');
INSERT INTO `icono` VALUES (21, 'Música', 'music');
INSERT INTO `icono` VALUES (22, 'Corazón', 'heart');
INSERT INTO `icono` VALUES (23, 'Correo', 'envelope');
INSERT INTO `icono` VALUES (24, 'Estrella', 'star');
INSERT INTO `icono` VALUES (25, 'Cámara', 'camera');
INSERT INTO `icono` VALUES (26, 'Nube', 'cloud');
INSERT INTO `icono` VALUES (27, 'Calendario 2', 'calendar');
INSERT INTO `icono` VALUES (28, 'Archivo', 'file');
INSERT INTO `icono` VALUES (29, 'Campana', 'bell');
INSERT INTO `icono` VALUES (30, 'Clipboard', 'clipboard');
INSERT INTO `icono` VALUES (31, 'Regalo', 'gift');
INSERT INTO `icono` VALUES (32, 'Libro', 'book');
INSERT INTO `icono` VALUES (33, 'Video', 'video');
INSERT INTO `icono` VALUES (34, 'Folder abierto', 'folder-open');
INSERT INTO `icono` VALUES (35, 'Ojo', 'eye');
INSERT INTO `icono` VALUES (36, 'Like', 'thumbs-up');
INSERT INTO `icono` VALUES (37, 'Globo', 'globe');
INSERT INTO `icono` VALUES (38, 'Papel', 'paper-plane');
INSERT INTO `icono` VALUES (39, 'Usuarios', 'users');
INSERT INTO `icono` VALUES (40, 'Casa', 'home');
INSERT INTO `icono` VALUES (41, 'Graduado', 'user-graduate');
INSERT INTO `icono` VALUES (42, 'Mapa', 'map');
INSERT INTO `icono` VALUES (43, 'Pin', 'map-pin');
INSERT INTO `icono` VALUES (44, 'Gorro graduado', 'graduation-cap');
INSERT INTO `icono` VALUES (45, 'Sonrisa', 'grin');
INSERT INTO `icono` VALUES (46, 'Play', 'play-circle');
INSERT INTO `icono` VALUES (47, 'Bloquear', 'ban');
INSERT INTO `icono` VALUES (48, 'Arroba', 'at');
INSERT INTO `icono` VALUES (49, 'Lupa', 'search');
INSERT INTO `icono` VALUES (50, 'Descargar', 'download');
INSERT INTO `icono` VALUES (51, 'Clip', 'paperclip');
INSERT INTO `icono` VALUES (52, 'Dolar', 'dollar-sign');
INSERT INTO `icono` VALUES (53, 'Marca', 'map-marker-alt');

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
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Arhyel Philippe', 'Ramos', 'Flores', '$2y$12$wo5fn3.gkNHHvWSiQ3SiPud9UZGbhzcAw9w8HB650xyvwMWkKKAHm', 'arhyel@mail.com', 'controlador/usuario/foto/IMG4920221153155.png', 'Practicante Ing Sistemas', 4, 'Jr. Ingaricona 129', 'arhyel');
INSERT INTO `usuarios` VALUES (2, 'Alan Max', 'Fernandez', 'Candia', '$2y$12$3IqMNkcLM5x6sYwWxmwjjuJxbmYlW30KE3awNxkjziVBPLqK3RUEC', 'alan@mail.com', 'controlador/usuario/foto/4.png', 'Administrativo de Escalafón / DRE Puno / OAD./ Escafón', 1, 'Jr. Bustamante Dueñas 881 - Chanu chanu II - 2do piso', 'alan');
INSERT INTO `usuarios` VALUES (3, 'Elba María', 'Romero', 'Ortiz', '$2y$12$3IqMNkcLM5x6sYwWxmwjjuJxbmYlW30KE3awNxkjziVBPLqK3RUEC', 'elba@mail.com', 'controlador/usuario/foto/7.png', 'Administrativo de Escalafón / DRE Puno / OAD./ Escafón', 1, 'Jr. Bustamante Dueñas 881 - Chanu chanu II - 2do piso', 'elba');
INSERT INTO `usuarios` VALUES (4, 'persona1', 'p1', 'p1', '$2y$12$TaPOK2p5vZ/nyalCzMs6euR5FIe3lEPrsw6K1EvITkvx51IX5h8xa', 'pu@mail.com', 'controlador/usuario/foto/IMG30820221925471.PNG', 'sin detalle ', 4, 'jr drep', 'persona1');

-- ----------------------------
-- View structure for view_listar_comunicado
-- ----------------------------
DROP VIEW IF EXISTS `view_listar_comunicado`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_listar_comunicado` AS SELECT
	comunicado.com_id, 
	comunicado.com_title, 
	comunicado.com_cont, 
	comunicado.com_link,
	comunicado.com_tlink, 
	comunicado.com_f, 
	comunicado.com_h, 
	comunicado.ico_id, 
	comunicado.usu_id, 
	icono.ico_name, 
	icono.ico_svg, 
	usuarios.usu_nombre, 
	usuarios.usu_apaterno
FROM
	comunicado
	INNER JOIN
	icono
	ON 
		comunicado.ico_id = icono.ico_id
	INNER JOIN
	usuarios
	ON 
		comunicado.usu_id = usuarios.usu_id ;

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
		usuarios.rol_id = rol.rol_id ; ;

-- ----------------------------
-- Procedure structure for SP_ELIMINAR_USUARIO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_ELIMINAR_USUARIO`;
delimiter ;;
CREATE PROCEDURE `SP_ELIMINAR_USUARIO`(IN ID INT)
DELETE FROM usuarios
WHERE usu_id=ID
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_ROL
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_ROL`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_ROL`()
SELECT * FROM rol
;
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
;
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
;
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
;
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
