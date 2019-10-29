CREATE DATABASE dbProgramium DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `users` (
  `id` int PRIMARY KEY,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) UNIQUE NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `ocupation` varchar(255) NOT NULL,
  `isProfessor` int NOT NULL,
  `city` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
);

CREATE TABLE `admin` (
  `id` int PRIMARY KEY,
  `username` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL
);
