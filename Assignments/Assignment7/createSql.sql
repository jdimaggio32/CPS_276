
CREATE DATABASE IF NOT EXISTS assignment;

USE assignment;


CREATE TABLE orders (
    id int NOT NULL AUTO_INCREMENT,
    file_name string NOT NULL,
    file_path string NOT NULL,
    PRIMARY KEY (id),
   ) ENGINE = InnoDB;

INSERT INTO orders(file_name, file_path)
VALUES("$fileName", "$filePath")
