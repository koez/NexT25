CREATE TABLE `message_like` (
`like_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
`msg_id_fk` int(11),
`uid_fk` int(11) NOT NULL,
`created` int(11) NOT NULL,
FOREIGN KEY (uid_fk) REFERENCES users(uid),
FOREIGN KEY (msg_id_fk) REFERENCES messages(msg_id)
);