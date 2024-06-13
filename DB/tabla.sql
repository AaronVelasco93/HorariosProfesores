/* si la base de datos ya existe se elimina */
DROP SCHEMA IF EXISTS `horarios_profesores`;

/*Creacion de nuestra base de datos y ponemos la codificacion para los caracteres raros */
CREATE SCHEMA IF NOT EXISTS `horarios_profesores` default character set utf8 collate utf8_spanish2_ci;

USE `horarios_profesores`;

/*crear nuestra tabla*/

CREATE TABLE `horarios`(
    `numero` int (10) not null,
    `clv_mat` text not null,
    `materia` text not null,
    `profesor` text not null,
    `grupo` text not null,
    `lu1` text null,
    `lu2` text null,
    `mar1` text null,
    `mar2` text null,
    `mie1` text null,
    `mie2` text null,
    `jue1` text null,
    `jue2` text null,
    `vie1` text null,
    `vie2` text null,
    `sab1` text null,
    `sab2` text null,
    `salon` text null,
    `cupo` text not null,
    `rfc` text not null,
    `correo` text not null    
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
alter table `horarios`
    add primary key (`numero`);