create table vendas(
	id_venda int auto_increment primary key,
	produto varchar (250),
	quantidade int,
	preco float,
	id_cliente int,
	constraint fk_id_cliente
	foreign key (id_cliente)
	references clientes(id)
)

select * from vendas
