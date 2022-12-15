
CREATE TABLE `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `contacts` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--insert first contat

INSERT INTO contacts (id, name, address, city, state, phone, email, dob, contacts, age)
VALUES ('1','Sarah Minnis','123 The Street','Ypsilanti','MI','123.123.1234','sarah@wccnet.edu', '08/26/1999', 'textUpdates','19-30');