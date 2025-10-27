CREATE DATABASE intranet_chat;
USE intranet_chat;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin','user') DEFAULT 'user'
);

CREATE TABLE contactos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  telefono VARCHAR(30),
  email VARCHAR(100),
  direccion VARCHAR(200),
  latitud VARCHAR(50),
  longitud VARCHAR(50)
);

INSERT INTO users (username, password, role)
VALUES ('admin', MD5('CoNiskYSaTIlGriSterSTo'), 'admin');
