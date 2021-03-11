CREATE TABLE `accounts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `accountnumber` varchar(255) NOT NULL DEFAULT '',
  `balance` int(11) NOT NULL DEFAULT 0,
  `person_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `people` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL DEFAULT '',
  `lastname` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` float NOT NULL,
  `account_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `accounts` (`id`, `accountnumber`, `balance`, `person_id`)
VALUES
	(1,'1234-56,789,012-3',13370,1),
	(2,'2345-67,890,123-4',5000,2),
	(3,'1234-56,789,012-4',8000,1);

INSERT INTO `people` (`id`, `firstname`, `lastname`)
VALUES
	(1,'Johan','Nordström'),
	(2,'Pelle','Persson');

INSERT INTO `transactions` (`id`, `date`, `description`, `amount`, `account_id`)
VALUES
	(1,'2021-02-13','McVegan & Co',49,1),
	(2,'2021-02-14','PS5',4995,1),
	(3,'2021-02-20','Ebbas Café',99,1),
	(4,'2021-02-25','Fika e gott',500,3),
	(5,'2021-02-13','Blommor',150,2),
	(6,'2021-02-14','The Herbivore, Lund',800,2);
