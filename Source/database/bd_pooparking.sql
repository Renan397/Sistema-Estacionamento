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

#Modelo de insert
insert into tb_agenda_veiculos (nome_cli, telefone_cli, veiculo_cli, placa_veiculo_cli, data_entrada_veiculo_cli, hora_entrada_veiculo_cli) 
values ("Renan", "11962470654", "Ford KA Branco Lamaçento", "ABC1234", 20210821, 123500);

#Modelo de update
update tb_agenda_veiculos set hora_saida_veiculo_cli = 184000 where placa_veiculo_cli = "ABC1234";

#Modelo de delete
delete from tb_agenda_veiculos where id_cli = 1;

#Modelo de select
select *from tb_agenda_veiculos;