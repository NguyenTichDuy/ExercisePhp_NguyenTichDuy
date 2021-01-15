DROP DATABASE IF EXISTS `Shop`;
CREATE DATABASE `Shop`;
USE `Shop`;

DROP TABLE IF EXISTS `Product`;
DROP TABLE IF EXISTS `Category`;
DROP TABLE IF EXISTS `product_category`;
DROP TABLE IF EXISTS `CartItems`;
DROP TABLE IF EXISTS `Cart`;

CREATE TABLE `Category` (
  `idCategory` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY(`idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `Product` (
  `idProduct` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255),
  PRIMARY KEY (idProduct)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `product_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idCategory` bigint(20) unsigned NOT NULL,
  `idProduct` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`, `idCategory`, `idProduct`),
  FOREIGN KEY (`idCategory`) REFERENCES Category(idCategory),
  FOREIGN KEY (`idProduct`) REFERENCES Product(idProduct)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `Cart` (
  `idCart` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `createDate` DATE NOT NULL,
  PRIMARY KEY (`idCart`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `CartItems` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idCart` bigint(20) unsigned NOT NULL,
  `idProduct` bigint(20) unsigned NOT NULL,
  `size` varchar(20),
  `quality` bigint(20) unsigned NOT NULL,
  `price` numeric(20) unsigned NOT NULL,
  PRIMARY KEY (`id`, `idCart`, `idProduct`),
  FOREIGN KEY (`idCart`) REFERENCES Cart(idCart),
  FOREIGN KEY (`idProduct`) REFERENCES Product(idProduct)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `Category` (title) VALUES ('Thời trang nam'),('Thời trang nữ');
INSERT INTO `Product` (name, color) VALUES ('Áo len nam cổ lọ FAVITI mẫu mới nhất 2020', 'red'),('Áo khoác kaki mantle Hàn Quốc', 'blue');
INSERT INTO `Cart` (createDate) VALUES ('2020-12-3'), ('2020-11-2');
INSERT INTO `product_category` (idCategory, idProduct) VALUES (1,1);
INSERT INTO `CartItems` (idCart, idProduct, size, quality, price) VALUES (1,1,'M', 12, 120000), (2,2,'S', 33, 220000);