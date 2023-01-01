create table if not exists proyecto.usuarios_pass(
    id int auto_increment primary key,
    usuario varchar(20) not null,
    password varchar(64) not null
);

INSERT INTO proyecto.usuarios_pass (usuario,password) VALUES ("david","1234");
INSERT INTO proyecto.usuarios_pass (usuario,password) VALUES ("1234",sha2('1234',256));
INSERT INTO proyecto.usuarios_pass (usuario,password) VALUES ("gestor",sha2('pass',256));

create table if not exists proyecto.tiendas(
    id int auto_increment primary key,
    nombre varchar(100) not null,
    tlf varchar(13) null
);

INSERT INTO proyecto.tiendas (nombre,tlf) VALUES ("Tienda1","1234");
INSERT INTO proyecto.tiendas (nombre,tlf) VALUES ("Tienda2","5678");
