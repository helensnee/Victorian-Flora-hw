DROP TABLE IF EXISTS `#__helloworld`;

CREATE TABLE `#__helloworld` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`greeting` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__helloworld` (`greeting`) VALUES
('Hello World!'),
('Goodbye World!'),
('HW#3'),
('HW#4'),
('HW#5'),
('HW#6'),
('HW#7'),
('HW#8'),
('HW#9'),
('HW#10'),
('HW#11'),
('HW#12'),
('HW#13'),
('HW#14'),
('HW#15'),
('HW#16'),
('HW#17'),
('HW#18'),
('HW#19'),
('HW#20'),
('HW#21'),
('HW#22'),
('HW#23'),
('HW#24'),
('HW#25'),
('HW#26'),
('HW#27'),
('HW#28'),
('HW#29'),
('HW#30');