CREATE TABLE `Envios` (
	`Id` int NOT NULL AUTO_INCREMENT,
	`Id_repartidor` int NOT NULL,
	`Id_estado` int NOT NULL,
	`Id_clientes` int NOT NULL,
	`Carga` varchar(255) NOT NULL,
	`Observaciones` varchar(255) NOT NULL,
	`Recibe` varchar(255) NOT NULL,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Repartidor` (
	`Id` int NOT NULL AUTO_INCREMENT,
	`Nombre` varchar(255) NOT NULL,
	`Id_valoraciones` int(255) NOT NULL,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Clientes` (
	`Id` int NOT NULL AUTO_INCREMENT,
	`Nombre` varchar(255) NOT NULL,
	`direccion_uno` varchar(255) NOT NULL,
	`direccion_dos` varchar(255) NOT NULL,
	`telefono` varchar(255) NOT NULL,
	`id_envios` int(255) NOT NULL,
	`Id_repartidor` int(255) NOT NULL,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Estado` (
	`id` int NOT NULL AUTO_INCREMENT,
	`estado` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Envios` ADD CONSTRAINT `Envios_fk0` FOREIGN KEY (`Id_repartidor`) REFERENCES `Repartidor`(`Id`);

ALTER TABLE `Envios` ADD CONSTRAINT `Envios_fk1` FOREIGN KEY (`Id_estado`) REFERENCES `Estado`(`id`);

ALTER TABLE `Envios` ADD CONSTRAINT `Envios_fk2` FOREIGN KEY (`Id_clientes`) REFERENCES `Clientes`(`Id`);

