create database cscb20;
use cscb20;

create table users(
	firstName varchar(120) NOT NULL,
    lastName varchar(120) NOT NULL,
    utorid varchar(8) NOT NULL,
    email varchar(120) NOT NULL
    );
    
create table marks(
	id varchar(8) NOT NULL,
    quiz1 numeric,
    quiz2 numeric,
    quiz3 numeric,
    assignment1 numeric,
    assignment2 numeric,
    assignment3 numeric,
    midterm numeric,
    finalExam numeric,
    practical numeric,
    attendance numeric, #final Tutorial attendance mark
    total numeric
    );
    
create table anonFeedback(
	q1 varchar(500),
    q2 varchar(500),
    q3 varchar(500),
    q4 varchar(500)
    );

