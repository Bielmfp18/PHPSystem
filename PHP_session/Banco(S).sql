CREATE TABLE usuarios(
id INT NOT NULL AUTO_INCREMENT,
usuario VARCHAR(50) NOT NULL,
senha VARCHAR(50) NOT NULL,
PRIMARY KEY (id)

);


INSERT INTO usuarios (usuario, senha) VALUES ('admin', '123456');