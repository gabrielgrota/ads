<!-- Código para rodar no SQL/Banco de dados antes de abrir o site -->

DROP DATABASE IF EXISTS cadastros;
CREATE DATABASE cadastros;
USE cadastros;
CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome varchar(255)  NOT NULL,
  usuario varchar(45) not null,
  email varchar(255)  NOT NULL,
  senha varchar(32) NOT NULL);


USE cadastros;
CREATE TABLE IF NOT EXISTS cardapio (
  id INT AUTO_INCREMENT PRIMARY KEY,
  item varchar(255)  NOT NULL,
  preco varchar(45) not null,
  produto varchar(255)  NOT NULL);


INSERT INTO cardapio (item, preco, produto) VALUES ('Calabresa', 28.00, 'PIZZA');
INSERT INTO cardapio (item, preco, produto) VALUES ('Frango Com Catupiry', 25.00, 'PIZZA');
INSERT INTO cardapio (item, preco, produto) VALUES ('Brócolis', 30.00, 'PIZZA');
INSERT INTO cardapio (item, preco, produto) VALUES ('Portuguesa', 35.00, 'PIZZA');
INSERT INTO cardapio (item, preco, produto) VALUES ('Mussarela', 20.00, 'PIZZA');
INSERT INTO cardapio (item, preco, produto) VALUES ('Marguerita', 30.00, 'PIZZA');
INSERT INTO cardapio (item, preco, produto) VALUES ('X-Burguer', 20.00, 'LANCHE');
INSERT INTO cardapio (item, preco, produto) VALUES ('X-Salad', 22.00, 'LANCHE');
INSERT INTO cardapio (item, preco, produto) VALUES ('X-Bacon', 25.00, 'LANCHE');
INSERT INTO cardapio (item, preco, produto) VALUES ('Duplo Bacon', 29.00, 'LANCHE');
INSERT INTO cardapio (item, preco, produto) VALUES ('Duplo Salad', 27.00, 'LANCHE');
INSERT INTO cardapio (item, preco, produto) VALUES ('Big Salad', 31.00, 'LANCHE');
INSERT INTO cardapio (item, preco, produto) VALUES ('Frango Com Catupiry', 12.00, 'PASTEL');
INSERT INTO cardapio (item, preco, produto) VALUES ('Carne', 12.00, 'PASTEL');
INSERT INTO cardapio (item, preco, produto) VALUES ('Queijo', 12.00, 'PASTEL');
INSERT INTO cardapio (item, preco, produto) VALUES ('Bauru', 12.00, 'PASTEL');
INSERT INTO cardapio (item, preco, produto) VALUES ('Calabresa', 10.00, 'PASTEL');
INSERT INTO cardapio (item, preco, produto) VALUES ('Frango com Cheddar', 14.00, 'PASTEL');