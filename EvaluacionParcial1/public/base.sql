CREATE DATABASE IF NOT EXISTS gestion_clubes;

USE gestion_clubes;

CREATE TABLE IF NOT EXISTS Clubes (
    club_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    deporte VARCHAR(50) NOT NULL,
    ubicacion VARCHAR(100),
    fecha_fundacion DATE
);

CREATE TABLE IF NOT EXISTS Miembros (
    miembro_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefono VARCHAR(20)
);