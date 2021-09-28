CREATE TABLE IF NOT EXISTS usuario(
	id_u int not null AUTO_INCREMENT,
    nombre varchar(30) not null,
    apellido varchar(30) not null,
    dni int(8) not null unique,
    password varchar(100) not null,
    correo varchar(100) not null,
    edad int,
    sexo varchar(30),
    PRIMARY KEY(id_u)
)ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS vacuna(
    id_v int not null AUTO_INCREMENT,
    nombre_v varchar(100) not null,
    fecha_aplicada date,
    descripcion_v varchar(255),
    PRIMARY KEY(id_v)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS usuario_vacuna(
    id_u1 int,
    id_v1 int,
    FOREIGN KEY(id_u1) REFERENCES usuario(id_u),
    FOREIGN KEY(id_v1) REFERENCES vacuna(id_v)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS medico(
    id_medico int not null AUTO_INCREMENT,
    nombre_m varchar(30) not null,
    apellido_m varchar(30) not null,
    especialidad varchar(255) not null,
    cargo varchar(255),
    telefono int,
    dni_m int(8),
    PRIMARY KEY(id_medico)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS h_medica(
    id_h int not null AUTO_INCREMENT,
    fecha_entrada date not null,
    fecha_salida date not null,
    comentario varchar(255),
    dni_h int(8),
    PRIMARY KEY(id_h)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS diario_paciente(
    id_diario int not null AUTO_INCREMENT,
    fecha_visita date not null,
    motivo_visita varchar(255) not null,
    tipo_enfermedad varchar(255) not null,
    tratamiento varchar(255),
    diagnostico varchar(255),
    dni_d int(8),
    PRIMARY KEY(id_diario)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS enfermedad(
    id_e int not null AUTO_INCREMENT,
    tipo_e varchar(200) not null,
    e_especifico varchar(200) not null,
    e_descripcion varchar(255),
    dni_e int(8),
    PRIMARY KEY(id_e)
)ENGINE=InnoDB;