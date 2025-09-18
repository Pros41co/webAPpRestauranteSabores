create database restaurantephp;


use restaurantephp;


create table roles (
	id int auto_increment primary key,
	rol_name VARCHAR(20) not null unique
);

drop table if exists users;
create table users(
	id int auto_increment primary key,
	name VARCHAR(60) not null,
	lastname VARCHAR(60) not null,
	username VARCHAR(60) not null unique,
	email VARCHAR(100) not null unique,
	id_rol int not null, #Supervisor, administrador, inventario, dummy
	password VARCHAR(255) not null,
	identification VARCHAR(11) not null unique,
	foreign key (id_rol) references roles(id)
)

insert into users(name, lastname, username, email, id_rol, password, identification) values ('admin', 'admin', 'admin', 'nocorreo@correo.com', 2, '$2a$12$lgWRYDr5nILZxRMphvixV.9nfl7xqoTjd79DeRAkayCvt/aO/.GJe', '1');


select rol_name, COUNT(*) as count from users left join roles on users.id_rol = roles.id group by id_rol;

insert into roles(rol_name) values ("Supervisor"), ("Administrador"), ("Inventario"), ("Dummy");


SELECT users.id, name, lastname, username, email, rol_name FROM users LEFT JOIN roles ON users.id_rol = roles.id;
select * from roles;
select * from users;
