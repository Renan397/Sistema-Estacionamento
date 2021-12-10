create database bd_pooparking;
use bd_pooparking;

create table tb_agenda_veiculos (
id_cli int not null primary key auto_increment,
nome_cli varchar(120),
telefone_cli char(11),
veiculo_cli varchar(120),
placa_veiculo_cli char(7),
data_entrada_veiculo_cli date,
hora_entrada_veiculo_cli time,
hora_saida_veiculo_cli time
);
