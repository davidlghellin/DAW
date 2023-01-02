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
INSERT INTO proyecto.tiendas (nombre,tlf) VALUES ("Tienda3","5678");

create table if not exists proyecto.productos(
    id int auto_increment primary key,
    nombre varchar(200) not null,
    nombre_corto varchar(50) unique not null,
    descripcion text null,
    pvp decimal(10, 2) not null,
    familia varchar(6) not null
);

INSERT INTO proyecto.productos (nombre,nombre_corto,descripcion,pvp,familia) 
                            VALUES ("PlayStation PS5 825GB","PS5_825GB","Carrefour.esGamingConsolasPlaystation 5 Estándar 825GB con God Of War Ragnarok (Digital) + 2º Mando Dualsense blanco con FIFA 23 (Digital) + The Last of Us Parte I
Playstation 5 Estándar 825GB con God Of War Ragnarok (Digital) + 2º Mando Dualsense blanco con FIFA 23 (Digital) + The Last of Us Parte I",823.95,"01");
INSERT INTO proyecto.productos (nombre,nombre_corto,descripcion,pvp,familia) 
                            VALUES ("PlayStation PS4 SLIM","PS4_S","Sony PS4 PlayStation 4 Slim 1TB Chasis F",379,"01");
INSERT INTO proyecto.productos (nombre,nombre_corto,descripcion,pvp,familia) 
                            VALUES ("PlayStation PS4 PRO","PS4_P","Sony PlayStation 4 Pro 1TB",439,"01");
INSERT INTO proyecto.productos (nombre,nombre_corto,descripcion,pvp,familia) 
                            VALUES ("PlayStation PS4 SLIM F","PS4_S_F","Sony PlayStation 4 Slim (Chasis F) 500GB",324.99,"01");
INSERT INTO proyecto.productos (nombre,nombre_corto,descripcion,pvp,familia) 
                            VALUES ("Xbox Series X 1TB","Xbox_X ","Xbox Series X 1TB,Tipo consola:Fija Plataforma:Xbox Nº de mandos incluidos:1",499,"01");
