create database db_Cuestionarios;
use db_Cuestionarios;

create table Trabajador(
nombre_Usuario varchar(200) not null,
password_Usuario varchar(300) not null,
tipo_Usuario varchar(300) not null,
nombres_Trabajador varchar(300) not null,
apellidoPat_Trabajador varchar(300) not null,
apellidoMat_Trabajador varchar(300) not null,
genero_Usuario varchar(200)not null,
estado_Civil varchar(100) not null,
escolaridad varchar(200) not null,
centro_Trabajo varchar(300) not null,
depto_area varchar(300) not null,
puesto_actividad varchar(300) not null,
antiguedad_anios bigint not null,
antiguedad_meses int not null,
experiencia_anios bigint not null,
experiencia_meses int not null,
tipo_Puesto varchar(200) not null,
tipo_Contratacion varchar(200) not null,
tipo_Personal varchar(200) not null,
tipo_Jornada varchar(100) not null,
rola_turnos varchar(100) not null,
fecha_yHoraRegistro datetime not null,
CONSTRAINT PK_nomUsu PRIMARY KEY (nombre_Usuario))
ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table CuestFRP(
id_CuestionarioFRP varchar(200) not null,
cat_AmbienteTrabajoFRP bigint not null,
cat_FactoresPropActivFRP bigint not null,
cat_OrganiTiempTrabFRP bigint not null,
cat_LiderazgoRelaTrabFRP bigint not null,
dom_CondicioAmbTrabFRP bigint not null,
dom_CargaTrabFRP bigint not null,
dom_FaltaControlTrabFRP bigint not null,
dom_JornaTrabFRP bigint not null,
dom_InterfeRelaTrabFamFRP bigint not null,
dom_LiderazgoFRP bigint not null,
dom_RelaTrabFRP bigint not null,
dom_ViolenciaFRP bigint not null,
calif_CatFRP bigint not null,
calif_DomFRP bigint not null,
CONSTRAINT PK_idCuesFRP PRIMARY KEY (id_CuestionarioFRP))
ENGINE=InnoDB DEFAULT CHARSET=utf8;



create table CuestFRPEO(
id_CuestionarioFRPEO varchar(200) not null,
cat_AmbienteTrabajoFRPEO bigint not null,
cat_FactoresPropActivFRPEO bigint not null,
cat_OrganiTiempTrabFRPEO bigint not null,
cat_LiderazgoRelaTrabFRPEO bigint not null,
cat_EntornoOrganFRPEO bigint not null,
dom_CondicioAmbTrabFRPEO bigint not null,
dom_CargaTrabFRPEO bigint not null,
dom_FaltaControlTrabFRPEO bigint not null,
dom_JornaTrabFRPEO bigint not null,
dom_InterfeRelaTrabFamFRPEO bigint not null,
dom_LiderazgoFRPEO bigint not null,
dom_RelaTrabFRPEO bigint not null,
dom_ViolenciaFRPEO bigint not null,
dom_ReconocimientoDesempFRPEO bigint not null,
dom_InsuficientePertenenciaInestaFRPEO bigint not null,
calif_CatFRPEO bigint not null,
calif_DomFRPEO bigint not null,
CONSTRAINT PK_idCuesFRPEO PRIMARY KEY (id_CuestionarioFRPEO))
ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table CuestATS(
id_CuestionarioATS varchar(200) not null,
p1 varchar(4) not null,
p2 varchar(4) not null,
p3 varchar(4) not null,
p4 varchar(4) not null,
p5 varchar(4) not null,
p6 varchar(4) not null,
p7 varchar(4) not null,
p8 varchar(4) not null,
p9 varchar(4) not null,
p10 varchar(4) not null,
p11 varchar(4) not null,
p12 varchar(4) not null,
p13 varchar(4) not null,
p14 varchar(4) not null,
p15 varchar(4) not null,
p16 varchar(4) not null,
p17 varchar(4) not null,
p18 varchar(4) not null,
p19 varchar(4) not null,
p20 varchar(4) not null,
CONSTRAINT PK_idCuesATS PRIMARY KEY (id_CuestionarioATS))
ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table Empresa(
id_Empresa varchar(200) not null,
nombre_Empresa varchar(500) not null,
capacidad_Empresa bigint not null,
CONSTRAINT PK_idEmpresa PRIMARY KEY (id_Empresa))
ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table FRP_TRAB(
id_CuestionarioFRP1 varchar(200) not null,
nombre_Usuario1 varchar(200) not null,
fecha_yHoraAplicacionFRP datetime not null,
CONSTRAINT FK_idCuestFRP1 FOREIGN KEY (id_CuestionarioFRP1) REFERENCES CuestFRP(id_CuestionarioFRP)on delete cascade,
CONSTRAINT FK_nomUsu1 FOREIGN KEY (nombre_Usuario1) REFERENCES Trabajador (nombre_Usuario)on delete cascade)
ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table FRPEO_TRAB(
id_CuestionarioFRPEO1 varchar(200) not null,
nombre_Usuario2 varchar(200) not null,
fecha_yHoraAplicacionFRPEO datetime not null,
CONSTRAINT FK_idCuestFRPEO1 FOREIGN KEY (id_CuestionarioFRPEO1) REFERENCES CuestFRPEO(id_CuestionarioFRPEO)on delete cascade,
CONSTRAINT FK_nomUsu2 FOREIGN KEY (nombre_Usuario2) REFERENCES Trabajador (nombre_Usuario)on delete cascade)
ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table ATS_TRAB(
id_CuestionarioATS1 varchar(200) not null,
nombre_Usuario3 varchar(200) not null,
fecha_yHoraAplicacionATS datetime not null,
CONSTRAINT FK_idCuestATS1 FOREIGN KEY (id_CuestionarioATS1) REFERENCES CuestATS(id_CuestionarioATS)on delete cascade,
CONSTRAINT FK_nomUsu3 FOREIGN KEY (nombre_Usuario3) REFERENCES Trabajador (nombre_Usuario)on delete cascade)
ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table EMPRESA_TRAB(
id_Empresa1 varchar(200) not null,
nombre_Usuario4 varchar(200) not null,
CONSTRAINT FK_idEmpresa1 FOREIGN KEY (id_Empresa1) REFERENCES Empresa(id_Empresa)on delete cascade,
CONSTRAINT FK_nomUsu4 FOREIGN KEY (nombre_Usuario4) REFERENCES Trabajador (nombre_Usuario)on delete cascade)
ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Tablas Históricas

create table TrabajadorH(
nombre_Usuario varchar(200) not null,
password_Usuario varchar(300) not null,
tipo_Usuario varchar(300) not null,
nombres_Trabajador varchar(300) not null,
apellidoPat_Trabajador varchar(300) not null,
apellidoMat_Trabajador varchar(300) not null,
genero_Usuario varchar(200)not null,
estado_Civil varchar(100) not null,
escolaridad varchar(200) not null,
centro_Trabajo varchar(300) not null,
depto_area varchar(300) not null,
puesto_actividad varchar(300) not null,
antiguedad_anios bigint not null,
antiguedad_meses int not null,
experiencia_anios bigint not null,
experiencia_meses int not null,
tipo_Puesto varchar(200) not null,
tipo_Contratacion varchar(200) not null,
tipo_Personal varchar(200) not null,
tipo_Jornada varchar(100) not null,
rola_turnos varchar(100) not null,
fecha_yHoraRegistro datetime not null,
CONSTRAINT PK_nomUsuH PRIMARY KEY (nombre_Usuario))
ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table EmpresaH(
id_Empresa varchar(200) not null,
nombre_Empresa varchar(500) not null,
capacidad_Empresa bigint not null,
CONSTRAINT PK_idEmpresaH PRIMARY KEY (id_Empresa))
ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table EMPRESA_TRABH(
id_Empresa1 varchar(200) not null,
nombre_Usuario4 varchar(200) not null,
CONSTRAINT FK_idEmpresaH1 FOREIGN KEY (id_Empresa1) REFERENCES EmpresaH (id_Empresa)on delete cascade,
CONSTRAINT FK_nomUsuH4 FOREIGN KEY (nombre_Usuario4) REFERENCES TrabajadorH (nombre_Usuario)on delete cascade)
ENGINE=InnoDB DEFAULT CHARSET=utf8;