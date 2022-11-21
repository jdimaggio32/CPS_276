
CREATE DATABASE IF NOT EXISTS aData;

USE aData;

CREATE TABLE Notes
(
  theTime       timestamp       NOT NULL,
  note          char(50)        NOT NULL,
 
  PRIMARY KEY (theTime)
) ENGINE=InnoDB;



