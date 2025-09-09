create database restaurantephp;


use restaurantephp;

create table users(
	id int auto_increment primary key,
	name VARCHAR(60) not null,
	lastname VARCHAR(60) not null,
	email VARCHAR(100) not null unique,
	rol ENUM('s', 'a', 'i', 'd' ) default 'd',#Supervisor, administrador, inventario, dummy
	password VARCHAR(60) not null,
	identification VARCHAR(11) not null unique
)

insert into users(name, lastname, email, rol, password, identification) values ('admin', 'admin', 'nocorreo@correo.com', 'a', 'administrator', '1');

select * from users;