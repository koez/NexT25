CREATE TABLE 'comment'(
	`commentId` int(50) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`email` varchar(255) NOT NULL,
	`message` text
);