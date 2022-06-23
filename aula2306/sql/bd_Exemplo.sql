DROP DATABASE IF EXISTS bd_exemplo;

create database bd_exemplo;

use bd_exemplo;

create table tbFornecedores(
codForn int  auto_increment,
nomeForn varchar(100),
primary key(codForn));


create table tbProdutos(
codProd int not null auto_increment,
descProd varchar(100),
quantidade decimal(9,2),
valorProd decimal(9,2),
dataEntrProd datetime,
horaEntrProd time,
codForn int not null,
primary key(codProd),
foreign key(codForn)references tbFornecedores(codForn));

CREATE TABLE Pessoa (

    nome CHAR(30),
    sobrenome CHAR(30),
    idade INT
    
    );

desc tbProdutos;
desc tbFornecedores;

insert into tbFornecedores(nomeForn)values('Bananas S/A');
insert into tbFornecedores(nomeForn)values('Alimentos LTDA');

insert into tbProdutos(descProd,quantidade,valorProd,
dataEntrProd,horaEntrProd,codForn)values('Banana Nanica',
50.00,6.00,'2021/06/03','21:45:05',2);

insert into tbProdutos(descProd,quantidade,valorProd,
dataEntrProd,horaEntrProd,codForn)values('Maca',
80.00,8.00,'2021/06/03','21:45:05',1);


select * from tbFornecedores;
select * from tbProdutos;

