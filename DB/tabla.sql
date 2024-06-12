/* si la base de datos ya existe se elimina */
DROP SCHEMA IF EXISTS `horarios_profesores`;

/*Creacion de nuestra base de datos y ponemos la codificacion para los caracteres raros */
CREATE SCHEMA IF NOT EXISTS `horarios_profesores` default character set utf8 collate utf8_spanish2_ci;

USE `horarios_profesores`;

/*crear nuestra tabla*/

CREATE TABLE `ALUMNO`(
    `clv_mat` text not null,
    `materia` text not null,
    `profesor` int (10) not null,
    `grupo` text not null,
    `lu1` text not null,
    `lu2` text not null,
    `mar1` text not null,
    `mar2` text not null,
    `mie1` text not null,
    `mie2` text not null,
    `jue1` text not null,
    `jue2` text not null,
    `vie1` text not null,
    `vie2` text not null,
    

    
    `permisos` int (11) not null default '1' 
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
