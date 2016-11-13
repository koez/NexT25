CREATE TABLE IF NOT EXISTS 'project'(
	`id` int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`userid_fk` int NOT NULL,
	`title` varchar(20) NOT NULL,
	`video` blob NOT NULL,
	`idea` varchar(25) NOT NULL,
	`thumbs_up` smallint(5) NOT NULL,
	`thumbs_down` smallint(5) NOT NULL,
	`likes` int NOT NULL,
	`commentid_fk` text NOT NULL,
	`created` datetime NOT NULL
	FOREIGN KEY(userid_fk) REFERENCES user
	FOREIGN KEY(commentid_fk) REFERENCES comment
) ENGINE=InnoDB DEFAULT CHARSET=utf8_unicode_ci AUTO_INCREMENT=1;