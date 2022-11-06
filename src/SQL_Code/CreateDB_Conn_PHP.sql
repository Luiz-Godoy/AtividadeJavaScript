create database conexaophp;

use conexaophp;

create table clima_tempo (
	id int not null auto_increment primary key,
    temperatura int(5),
    umidade int(5)
);

insert into clima_tempo (temperatura, umidade) values
(10, 100);

select * from clima_tempo;