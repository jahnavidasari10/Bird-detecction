SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Table structure for login
CREATE TABLE login (
    username VARCHAR(150),
    password VARCHAR(255)
);

INSERT INTO `login`(`username`, `password`) VALUES
 ('jahnavi','123'),
 ('uhana','123');

CREATE TABLE userinfo (
    id INT(255) NOT NULL ,
    user VARCHAR(255) NOT NULL,
    email VARCHAR(255)NOT NULL,
    mobile INT(255)NOT NULL,
    comments VARCHAR(255)NOT NULL
);

INSERT INTO `userinfo`(`id`, `user`, `email`, `mobile`, `comments`) VALUES 
('1','uhana','uhana@gmail.com','123456789','LIKE'),
('2','jahnavi','jahnavi@gmail.com','123456789','SHARE');

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

