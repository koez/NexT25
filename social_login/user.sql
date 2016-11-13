CREATE TABLE users
(
id INT PRIMARY KEY AUTO_INCREMENT,
email VARCHAR(70), 
oauth_uid VARCHAR(200),
oauth_provider VARCHAR(200),
username VARCHAR(100), 
twitter_oauth_token VARCHAR(200), 
twitter_oauth_token_secret VARCHAR(200) 
);