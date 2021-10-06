create database chacara;
use chacara;

drop table solicitacao;

create table solicitacao(
	id int not null auto_increment primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    matricula decimal(20) not null,
    cargo_id int not null,
    unique(nome,email)
);

insert into cargo(nome) values('Almoxarife');
insert into cargo(nome) values('Ajudante Operacional');
insert into cargo(nome) values('Encarregado');
insert into cargo(nome) values('Ajudante de Almoxarifado');



drop table cargo;

create table cargo(
	id int not null auto_increment primary key,
    nome varchar(50) not null
);

drop table categorias;

create table categorias(
	id int not null auto_increment primary key,
    nome varchar(200) not null,
    ativo varchar(1) not null
);

insert into categorias(nome)
values("EPI/EPC");

select * from categorias;

create table produto(
	id int primary key auto_increment,
	categoria_id int not null,
	nome varchar(255) not null,
	preço decimal(10, 2) not null,
	marca varchar(100) not null,
	qtd_estoque decimal(10,3)not null default 0.0
);



insert into produto(categoria_id, nome, preço, marca, qtd_estoque) values(1, 'oculos',5.50,'Rayban',50);

select * from produto;

drop table nota_fiscal;

create table nota_fiscal(
	id bigint primary key auto_increment,
    produto varchar(100) not null,
    quantidade decimal(5) not null,
    loc_envio varchar(200) not null
);

insert into nota_fiscal(produto,quantidade,loc_envio)values('oculos transparente',50,'Lucas do Rio Verde');


select * from cargo;
select * from produto;
select * from nota_fiscal;


insert into solicitacao(nome,email,matricula,cargo_id) values('Jucicleber','clebersanto@ghy',1328,1);



