CREATE TABLE usuarios(
id INT NOT NULL AUTO_INCREMENT,
email VARCHAR(50) NOT NULL,
senha VARCHAR(50) NOT NULL,
PRIMARY KEY (id)

);


INSERT INTO usuarios (email, senha) VALUES ('admin@teste.com', '123456');