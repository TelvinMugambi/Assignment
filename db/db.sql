DROP DATABASE IF EXISTS `assignment_II`;
CREATE DATABASE IF NOT EXISTS `assignment_II`;
use`assignment_II`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users`(
    userid bigint(10) AUTO_INCREMENT,
    name varchar(50) not null default '',
    email varchar(60) not null default '',
    password varchar(60) not null default '',
    country varchar (70) not null default '',
    PRIMARY KEY (`userid`),
    UNIQUE KEY (`email`)
);