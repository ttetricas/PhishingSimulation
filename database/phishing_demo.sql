CREATE DATABASE phishing_demo;

USE phishing_demo;

CREATE TABLE logins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    senha VARCHAR(255),
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);