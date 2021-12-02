CREATE TABLE IF NOT EXISTS usuario(
	id_u int not null AUTO_INCREMENT,
    nombre varchar(30) not null,
    apellido varchar(30) not null,
    dni int(8) not null unique,
    correo varchar(100) not null,
    tipo_usuario varchar(100),
    cargo varchar(200),
    PRIMARY KEY(id_u)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS leche(
    id_leche int not null AUTO_INCREMENT,
    viscosidad int,
    grasa int,
    proteina int,
    temperatura int,
    tipo varchar(200),
    dni_l int(8),
    notas_l varchar(255),
    fecha_l date,
    PRIMARY KEY(id_leche)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS fermento(
    id_fermento int not null AUTO_INCREMENT,
    peso int,
    tipo varchar(200),
    dni_f int(8),
    fecha_f date,
    notas_f varchar(255),
    PRIMARY KEY(id_fermento)
)ENGINE=InnoDB;
