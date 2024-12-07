CREATE DATABASE tienda_online;

USE tienda_online;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(10, 2),
    imagen VARCHAR(255),
    stock INT
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100),
    contraseña VARCHAR(255)
);

CREATE TABLE pedidos (
    
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10, 2),
    
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

ALTER TABLE `pedidos` ADD `Perfumes` VARCHAR(15) NOT NULL AUTO_INCREMENT , ADD PRIMARY KEY (`Perfumes `);