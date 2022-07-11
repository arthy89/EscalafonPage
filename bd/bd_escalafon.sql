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

 Date: 11/07/2022 08:02:56
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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO `rol` VALUES (1, 'Administrador');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `usu_id` int NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_contrasena` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_detalle` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `rol_id` int NULL DEFAULT NULL,
  `usu_apaterno` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_amaterno` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `usu_direccion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`usu_id`) USING BTREE,
  INDEX `rol_id_fk1`(`rol_id` ASC) USING BTREE,
  CONSTRAINT `rol_id_fk1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Arhyel', '$2y$12$3IqMNkcLM5x6sYwWxmwjjuJxbmYlW30KE3awNxkjziVBPLqK3RUEC', 'arhyel@mail.com', NULL, NULL, 1, 'Ramos', 'Flores', NULL);
INSERT INTO `usuarios` VALUES (2, 'Alan Max', '$2y$12$3IqMNkcLM5x6sYwWxmwjjuJxbmYlW30KE3awNxkjziVBPLqK3RUEC', 'alan@mail.com', NULL, NULL, 1, 'Fernandez', 'Candia', NULL);

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
	rol.rol_nombre
FROM
	usuarios
	INNER JOIN
	rol
	ON 
		usuarios.rol_id = rol.rol_id
WHERE usu_email = BINARY USUARIO
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
