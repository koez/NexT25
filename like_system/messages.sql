CREATE TABLE `messages` (
`msg_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
`message` varchar(200) NOT NULL,
`uid_fk` int(11) NOT NULL,
`like_count` int(11) DEFAULT NULL,
`created` int(11) DEFAULT NULL,
FOREIGN KEY (uid_fk) REFERENCES users(uid)
);