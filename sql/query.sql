USE db_api_rest_one;

CREATE TABLE tb_user (
	idUser INTEGER AUTO_INCREMENT NOT NULL,
	nameUser CHAR(50),
	emailUser CHAR(50) UNIQUE KEY,
	passwordUser CHAR(50),
	PRIMARY KEY (idUser)
);

INSERT INTO tb_user (nameUser, emailUser, passwordUser)  VALUES ('teste01', 'teste01@teste.com', 'teste1234');

SELECT * FROM tb_user;


CREATE TABLE tb_cliente (
	idCliente INTEGER AUTO_INCREMENT NOT NULL,
	nomeCliente CHAR(50),
	cpfCliente CHAR(11),
	enderecoCliente CHAR(30),
	PRIMARY KEY (idCliente)
);

INSERT INTO tb_cliente (nomeCliente, cpfCliente, enderecoCliente)  VALUES ('teste01', '11111111111', 'Rua B');

SELECT * FROM tb_cliente;


CREATE TABLE tb_produto (
	idProduto INTEGER AUTO_INCREMENT NOT NULL,
	nomeProduto CHAR(50),
	precoProduto DECIMAL(3, 2),
	PRIMARY KEY (idProduto)
);