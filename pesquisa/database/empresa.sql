use empresa;
create table cadastro (id_cadastro int primary key auto_increment, nome varchar (100), pedido varchar (100), entrega date, preco int);
select * from cadastro;
truncate cadastro;

show tables