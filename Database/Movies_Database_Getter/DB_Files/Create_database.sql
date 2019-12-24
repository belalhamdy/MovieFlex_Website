CREATE DATABASE MoviesDB;

USE MoviesDB;

CREATE TABLE `LoginDatas` (
  `userID` int NOT NULL,
  `username` varchar(30) PRIMARY KEY,
  `password` varchar(256) NOT NULL
);

CREATE TABLE `Users` (
  `userID` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `photoPath` varchar(255),
  `email` varchar(30) NOT NULL,
  `age` int NOT NULL,
  `gender` int NOT NULL
);

CREATE TABLE `Movies` (
  `movieID` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `posterPath` varchar(255) NOT NULL,
  `genre` int NOT NULL,
  `votesCount` int NOT NULL,
  `isAdult` int NOT NULL,
  `overview` longtext NOT NULL,
  `releaseDate` datetime NOT NULL
);

CREATE TABLE `FavoriteMovies` (
  `userID` int NOT NULL,
  `movieID` int NOT NULL,
   PRIMARY KEY (userID, movieID)
);

CREATE TABLE `Comments` (
  `userID` int NOT NULL,
  `movieID` int NOT NULL,
  `content` varchar(255) NOT NULL
);

ALTER TABLE `LoginDatas` ADD FOREIGN KEY (`userID`) REFERENCES `Users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `FavoriteMovies` ADD FOREIGN KEY (`userID`) REFERENCES `Users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `FavoriteMovies` ADD FOREIGN KEY (`movieID`) REFERENCES `Movies` (`movieID`)ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `Comments` ADD FOREIGN KEY (`userID`) REFERENCES `Users` (`userID`)ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `Comments` ADD FOREIGN KEY (`movieID`) REFERENCES `Movies` (`movieID`)ON DELETE CASCADE ON UPDATE CASCADE;
