
CREATE TABLE `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50),
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

