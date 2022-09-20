/*
 Navicat Premium Data Transfer

 Source Server         : AMPPS
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : bd_escalafon

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 20/09/2022 08:38:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comunicado
-- ----------------------------
DROP TABLE IF EXISTS `comunicado`;
CREATE TABLE `comunicado`  (
  `com_id` int NOT NULL,
  `com_title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `com_cont` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `com_tlink` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `com_link` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `com_f` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `com_h` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `ico_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `ico_svg` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `usu_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`com_id`) USING BTREE,
  INDEX `ico_id_fk1`(`ico_name` ASC) USING BTREE,
  INDEX `usu_id_fk2`(`usu_id` ASC) USING BTREE,
  CONSTRAINT `usu_id_fk2` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of comunicado
-- ----------------------------
INSERT INTO `comunicado` VALUES (2, 'DNI modificado', 'DNI editado', 'Link Editado Nuevo', 'https://www.youtube.com/watch?v=Cl5Vkd4N03Q&amp;amp;list=RDCl5Vkd4N03Q&amp;amp;start_radio=1', '18 sept 2022', '10:51 PM', 'DNI', 'fa-address-card', 2);
INSERT INTO `comunicado` VALUES (3, 'Ubicación de beneficiarios', 'Conoce la ubicaciones de los beneficiarios de la nueva... ', 'Link', 'https://www.youtube.com/watch?v=K17df81RL9Y', '20 agos 2022', '06:35 AM', 'Edificio', 'fa-building', 2);
INSERT INTO `comunicado` VALUES (4, 'Capacitación', 'Capacitación para docentes guía informativa.', 'Video de referencia', 'https://www.youtube.com', '10 sept 2022', '11:50 PM', 'Edificio', 'fa-building', 4);
INSERT INTO `comunicado` VALUES (5, 'Recomendaciones 2', 'Le recomendamos que considere las actualizaciones de su legajo con los siguientes detalles.', 'Enlace', 'https://www.youtube.com', '3 sept 2022', '6:29 PM', 'Cámara', 'fa-camera', 2);
INSERT INTO `comunicado` VALUES (6, 'Nuevo', 'Xddddddddddd dddddddddd sdfhabskf', 'csakuhdfbka', 'https://www.instagram.com', '12 sept 2022', '11:24 PM', 'Folder abierto', 'fa-folder-open', 2);

-- ----------------------------
-- Table structure for formatos
-- ----------------------------
DROP TABLE IF EXISTS `formatos`;
CREATE TABLE `formatos`  (
  `for_id` int NOT NULL,
  `for_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `for_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `for_tlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `for_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `for_ico_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `for_ico_svg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `usu_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`for_id`) USING BTREE,
  INDEX `fufk`(`usu_id` ASC) USING BTREE,
  CONSTRAINT `fufk` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of formatos
-- ----------------------------

-- ----------------------------
-- Table structure for icono
-- ----------------------------
DROP TABLE IF EXISTS `icono`;
CREATE TABLE `icono`  (
  `ico_id` int NOT NULL AUTO_INCREMENT,
  `ico_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `ico_svg` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ico_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = DYNAMIC;

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
-- Table structure for imagenes
-- ----------------------------
DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes`  (
  `id_img` int NOT NULL,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `img_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `usu_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_img`) USING BTREE,
  INDEX `usufk`(`usu_id` ASC) USING BTREE,
  CONSTRAINT `usufk` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of imagenes
-- ----------------------------
INSERT INTO `imagenes` VALUES (1, 'img1', 'controlador/imgs/esca.png', 1);
INSERT INTO `imagenes` VALUES (2, 'img2', 'controlador/imgs/descripcion.png', 4);
INSERT INTO `imagenes` VALUES (3, 'img3', 'controlador/imgs/requisitos.png', 3);

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol`  (
  `rol_id` int NOT NULL AUTO_INCREMENT,
  `rol_nombre` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`rol_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = DYNAMIC;

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
  `usu_nombre` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `usu_apaterno` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `usu_amaterno` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `usu_contrasena` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `usu_email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `usu_foto` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `usu_detalle` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `rol_id` int NULL DEFAULT NULL,
  `usu_direccion` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  `usu_log` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`usu_id`) USING BTREE,
  INDEX `rol_id_fk1`(`rol_id` ASC) USING BTREE,
  CONSTRAINT `rol_id_fk1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Elba María', 'Romero', 'Ortiz', '$2y$12$3IqMNkcLM5x6sYwWxmwjjuJxbmYlW30KE3awNxkjziVBPLqK3RUEC', 'elba@mail.com', 'controlador/usuario/foto/7.png', 'Administrativo de Escalafón / DRE Puno / OAD./ Escafón', 1, 'Jr. Bustamante Dueñas 881 - Chanu chanu II - 2do piso', 'elba');
INSERT INTO `usuarios` VALUES (2, 'Alan Max', 'Fernandez', 'Candia', '$2y$12$3IqMNkcLM5x6sYwWxmwjjuJxbmYlW30KE3awNxkjziVBPLqK3RUEC', 'alan@mail.com', 'controlador/usuario/foto/4.png', 'Administrativo de Escalafón / DRE Puno / OAD./ Escafón', 1, 'Jr. Bustamante Dueñas 881 - Chanu chanu II - 2do piso', 'alan');
INSERT INTO `usuarios` VALUES (3, 'Arhyel Philippe', 'Ramos', 'Flores', '$2y$12$wo5fn3.gkNHHvWSiQ3SiPud9UZGbhzcAw9w8HB650xyvwMWkKKAHm', 'arhyel@mail.com', 'controlador/usuario/foto/IMG189202223535.png', 'Practicante Ing Sistemas', 4, 'Jr. Ingaricona 129', 'arhyel');
INSERT INTO `usuarios` VALUES (4, 'Vero', 'Para prueba', 'En la página Nueva', '$2y$12$FxDZZjW/lgMkCGFbhFtVdOYbfdbLbAbFXTjw/sbKwoTlX46EE9Xnm', 'pu2@mail.com', 'controlador/usuario/foto/IMG992022535221.png', 'CAS 2', 3, 'jr drep', 'persona1');

-- ----------------------------
-- View structure for view_listar_comunicado
-- ----------------------------
DROP VIEW IF EXISTS `view_listar_comunicado`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_listar_comunicado` AS select `comunicado`.`com_id` AS `com_id`,`comunicado`.`com_title` AS `com_title`,`comunicado`.`com_cont` AS `com_cont`,`comunicado`.`com_link` AS `com_link`,`comunicado`.`com_tlink` AS `com_tlink`,`comunicado`.`com_f` AS `com_f`,`comunicado`.`com_h` AS `com_h`,`comunicado`.`usu_id` AS `usu_id`,`usuarios`.`usu_nombre` AS `usu_nombre`,`usuarios`.`usu_apaterno` AS `usu_apaterno`,`comunicado`.`ico_name` AS `ico_name`,`comunicado`.`ico_svg` AS `ico_svg` from (`comunicado` join `usuarios` on((`comunicado`.`usu_id` = `usuarios`.`usu_id`)));

-- ----------------------------
-- View structure for view_listar_img
-- ----------------------------
DROP VIEW IF EXISTS `view_listar_img`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_listar_img` AS select `imagenes`.`id_img` AS `id_img`,`imagenes`.`img_name` AS `img_name`,`imagenes`.`img_file` AS `img_file`,`imagenes`.`usu_id` AS `usu_id`,`usuarios`.`usu_nombre` AS `usu_nombre`,`usuarios`.`usu_apaterno` AS `usu_apaterno` from (`imagenes` join `usuarios` on((`imagenes`.`usu_id` = `usuarios`.`usu_id`)));

-- ----------------------------
-- View structure for view_listar_usuario
-- ----------------------------
DROP VIEW IF EXISTS `view_listar_usuario`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_listar_usuario` AS select `usuarios`.`usu_id` AS `usu_id`,`usuarios`.`usu_nombre` AS `usu_nombre`,`usuarios`.`usu_apaterno` AS `usu_apaterno`,`usuarios`.`usu_amaterno` AS `usu_amaterno`,`usuarios`.`usu_contrasena` AS `usu_contrasena`,`usuarios`.`usu_email` AS `usu_email`,`usuarios`.`usu_foto` AS `usu_foto`,`usuarios`.`usu_detalle` AS `usu_detalle`,`usuarios`.`rol_id` AS `rol_id`,`usuarios`.`usu_direccion` AS `usu_direccion`,`rol`.`rol_nombre` AS `rol_nombre`,`usuarios`.`usu_log` AS `usu_log` from (`usuarios` join `rol` on((`usuarios`.`rol_id` = `rol`.`rol_id`)));

-- ----------------------------
-- Procedure structure for SP_ELIMINAR_COMUNICADO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_ELIMINAR_COMUNICADO`;
delimiter ;;
CREATE PROCEDURE `SP_ELIMINAR_COMUNICADO`(IN ID INT)
DELETE FROM comunicado
WHERE com_id=ID
;;
delimiter ;

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
-- Procedure structure for SP_LISTAR_COMUNICADO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_COMUNICADO`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_COMUNICADO`()
SELECT
	comunicado.com_id, 
	comunicado.com_title, 
	comunicado.com_cont, 
	comunicado.com_tlink, 
	comunicado.com_link, 
	comunicado.com_f, 
	comunicado.com_h, 
	comunicado.ico_svg
FROM
	comunicado
;;
delimiter ;

-- ----------------------------
-- Procedure structure for SP_LISTAR_ICO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_LISTAR_ICO`;
delimiter ;;
CREATE PROCEDURE `SP_LISTAR_ICO`()
SELECT * FROM icono
;;
delimiter ;

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
-- Procedure structure for SP_MODIFICAR_COMUNICADO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_MODIFICAR_COMUNICADO`;
delimiter ;;
CREATE PROCEDURE `SP_MODIFICAR_COMUNICADO`(IN IDA INT, IN IDN INT, IN TITULO VARCHAR(255), IN CONTENIDO VARCHAR(255), IN TLINK VARCHAR(255), IN LINK VARCHAR(255), IN FECHA VARCHAR(255), IN HORA VARCHAR(255), IN FNAME VARCHAR(255), IN FICO VARCHAR(255), IN IDUSU INT)
BEGIN

DECLARE CANTIDAD INT;
SET @CANTIDAD := (SELECT COUNT(*) FROM comunicado WHERE com_id=IDN);
IF (@CANTIDAD = 1  AND IDN = IDA) THEN
		UPDATE comunicado SET
		com_title=TITULO,
		com_cont=CONTENIDO,
		com_tlink=TLINK,
		com_link=LINK,
		com_f=FECHA,
		com_h=HORA,
		ico_name=FNAME,
		ico_svg=FICO,
		usu_id=IDUSU
		WHERE com_id=IDA;
		SELECT 1;
ELSE
	IF (@CANTIDAD = 1  AND IDN != IDA) THEN
		UPDATE comunicado SET 
		com_id=1000
		WHERE com_id=IDN;

		UPDATE comunicado SET 
		com_id=IDN,
		com_title=TITULO,
		com_cont=CONTENIDO,
		com_tlink=TLINK,
		com_link=LINK,
		com_f=FECHA,
		com_h=HORA,
		ico_name=FNAME,
		ico_svg=FICO,
		usu_id=IDUSU
		WHERE com_id=IDA;

		UPDATE comunicado SET 
		com_id=IDA
		WHERE com_id=1000;
		SELECT 1;
	ELSE
		SELECT 2;
	END IF;
END IF;

END
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
-- Procedure structure for SP_REGISTRAR_COMUNICADO
-- ----------------------------
DROP PROCEDURE IF EXISTS `SP_REGISTRAR_COMUNICADO`;
delimiter ;;
CREATE PROCEDURE `SP_REGISTRAR_COMUNICADO`(IN TITULO VARCHAR(255), IN CONTENIDO VARCHAR(255), IN TLINK VARCHAR(255), IN LINK VARCHAR(255), IN FECHA VARCHAR(255), IN HORA VARCHAR(255), IN FNAME VARCHAR(255), IN FICO VARCHAR(255), IN IDUSU INT)
BEGIN
SET @NID := (SELECT MAX(com_id) + 1 FROM comunicado);

INSERT INTO
comunicado(com_id,com_title,com_cont,com_link,com_tlink,com_f,com_h,ico_name,ico_svg,usu_id)
VALUES
(@NID,TITULO,CONTENIDO,LINK,TLINK,FECHA,HORA,FNAME,FICO,IDUSU);
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
