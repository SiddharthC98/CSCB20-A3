create database cscb20a3;
use cscb20a3;

CREATE TABLE `logininfo` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

insert into logininfo values
('chitales', 'hi','Student'),
('abbasatt', 'pw', 'Instructor');

CREATE TABLE `anonfeedback` (
  `q1` varchar(2000) DEFAULT NULL,
  `q2` varchar(2000) DEFAULT NULL,
  `q3` varchar(2000) DEFAULT NULL,
  `q4` varchar(2000) DEFAULT NULL,
  `FeedbackNum` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`FeedbackNum`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
  `total` decimal(10,0) DEFAULT NULL,
  FOREIGN KEY (`utorid`) references `logininfo`(`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table `marks`;

CREATE TABLE `remarkrequests` (
  `utorid` varchar(8) NOT NULL,
  `content` varchar(250) NOT NULL,
  `comments` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;