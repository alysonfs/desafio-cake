DROP TABLE IF EXISTS pedidos_produtos CASCADE ;
DROP TABLE IF EXISTS pedidos CASCADE;
DROP TABLE IF EXISTS produtos CASCADE;
DROP TABLE IF EXISTS clientes CASCADE;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,    
    created DATETIME,
    modified DATETIME    
) CHARSET=utf8mb4;

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,        
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY user_key (cliente_id) REFERENCES clientes(id)
) CHARSET=utf8mb4;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco NUMERIC NOT NULL DEFAULT 0,
    desconto DECIMAL(4,3) DEFAULT 0.000,
    created DATETIME,
    modified DATETIME    
) CHARSET=utf8mb4;

CREATE TABLE pedidos_produtos (
	id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT NOT NULL,
    produto_id INT NOT NULL,
    qtd NUMERIC NOT NULL,
	created DATETIME,
    modified DATETIME,
    FOREIGN KEY pedido_key (pedido_id) REFERENCES pedidos(id),
    FOREIGN KEY produto_key (produto_id) REFERENCES produtos(id)
) CHARSET=utf8mb4;

INSERT INTO produtos (nome, preco, desconto) VALUES
('Mouse', 35, 0.02),
('Monitor 23"', 2300, 0.05),
('Mouse PAd', 45, 0.1)
;