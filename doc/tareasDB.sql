DROP DATABASE TareasDB;
CREATE SCHEMA TareasDB;
USE TareasDB;

CREATE TABLE Tarea (
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(45) NOT NULL,
  descripcion VARCHAR(120) NOT NULL,
  PRIMARY KEY (id));
