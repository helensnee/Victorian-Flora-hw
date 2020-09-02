DROP TABLE IF EXISTS `#__helloworld`;

CREATE TABLE `#__helloworld` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`greeting` VARCHAR(25) NOT NULL,
	`email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
    `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	`dat` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`num` int(11) NOT NULL DEFAULT '0' COMMENT 'Count of password resets since lastResetTime',
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__helloworld` (`greeting`,`email`, `secret`, `dat`, `num`) VALUES
('Hello World!', 'helensnee@lifesites.com.au', 'triXie3568', '2020-07-27 11:44:09', '0'),
('Goodbye World!', 'helensnee@gmail.com', 'Trixie3568', '2020-07-27 11:44:09', '0');
