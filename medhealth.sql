CREATE TABLE IF NOT EXISTS usuario(
	id_u int not null AUTO_INCREMENT,
    nombre varchar(30) not null,
    apellido varchar(30) not null,
    dni int(8) not null unique,
    password varchar(100) not null,
    correo varchar(100) not null,
    edad int,
    sexo varchar(30),
    f_nacimiento date,
    n_s_social int,
    PRIMARY KEY(id_u)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS u_direccion(
    id_direccion int not null AUTO_INCREMENT,
    calle_numero varchar(255),
    localidad varchar(50),
    codigo_postal int(4),
    provincia varchar(50),
    dni_dir int(8),
    PRIMARY KEY(id_direccion)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS diario_paciente(
    id_diario int not null AUTO_INCREMENT,
    tipo_enfermedad varchar(255) not null,
    notas varchar(255),
    dni_d int(8),
    PRIMARY KEY(id_diario)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS consulta(
    id_con int not null AUTO_INCREMENT,
    fecha date,
    motivo varchar(255),
    especialidad varchar(100),
    id_diario1 int,
    PRIMARY KEY(id_con),
    FOREIGN KEY(id_diario1) REFERENCES diario_paciente(id_diario)
)ENGINE=InnoDB;