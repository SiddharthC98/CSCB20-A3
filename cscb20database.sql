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
	q1 TEXT,
    q2 TEXT,
    q3 TEXT,
    q4 TEXT
    );
drop table anonFeedback;

insert into anonFeedback(q1,q2,q3,q4) values 
	("hi", "makes fun of the goddess’s enthusiastic drinking. Ceres splashes her drink at the boy who metamorphoses into a creature with a 'body starred with many coloured spots', in other words, a spotted newt. The reason for the difference in punishments between Homer and Ovid’s poems can be attributed to the main theme of their respective collection of poems. The Homeric Hymns chooses to focus more on the worship of the Olympic gods and explain the rituals associated with them whereas Ovid is more fixed on the metamorphoses aspect of mythology.", "hi2", "h3i");
    