CREATE TABLE `logininfo` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8

CREATE TABLE `marks` (
  `utorid` varchar(8) NOT NULL,
  `quiz1` decimal(10,0) DEFAULT NULL,
  `quiz2` decimal(10,0) DEFAULT NULL,
  `quiz3` decimal(10,0) DEFAULT NULL,
  `assignment1` decimal(10,0) DEFAULT NULL,
  `assignment2` decimal(10,0) DEFAULT NULL,
  `assignment3` decimal(10,0) DEFAULT NULL,
  `midterm` decimal(10,0) DEFAULT NULL,
  `finalExam` decimal(10,0) DEFAULT NULL,
  `practical` decimal(10,0) DEFAULT NULL,
  `attendance` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE `users` (
  `firstName` varchar(120) NOT NULL,
  `lastName` varchar(120) NOT NULL,
  `utorid` varchar(8) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE `anonfeedback` (
  `q1` text,
  `q2` text,
  `q3` text,
  `q4` text,
  `FeedbackNum` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`FeedbackNum`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8
