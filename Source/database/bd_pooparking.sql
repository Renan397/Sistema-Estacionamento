create database bd_pooparking;
use bd_pooparking;

create table tb_agenda_veiculos (
id_cli int not null primary key auto_increment,
nome_cli varchar(120),
telefone_cli char(11),
veiculo_cli varchar(120),
placa_veiculo_cli char(7) unique,
data_entrada_veiculo_cli date,
hora_entrada_veiculo_cli time
);

create table tb_agenda_pagamento (
id_cli int not null primary key auto_increment,
nome_cli varchar(120),
placa_veiculo_cli char(7),
hora_entrada_veiculo_cli time,
hora_saida_veiculo_cli time,
pagamento_total decimal(5,2)
);

#Modelo de insert
insert into tb_agenda_veiculos (nome_cli, telefone_cli, veiculo_cli, placa_veiculo_cli, data_entrada_veiculo_cli, hora_entrada_veiculo_cli) 
values ("Nome", "Telefone", "Carro", "Placa", 20210821, 123500);

#Modelo de delete
delete from tb_agenda_veiculos where placa_veiculo_cli = "ABC1234";

#Modelo de select
select *from tb_agenda_veiculos;
