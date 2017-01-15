<?php

require_once("db/database.php");

$schema = "CREATE SCHEMA IF NOT EXISTS pains";

$teacher = "CREATE TABLE IF NOT EXISTS teacher
(
    tid INT NOT NULL AUTO_INCREMENT,
    tname VARCHAR(30),
    tcnic VARCHAR(20),
    address VARCHAR(50),
    phone VARCHAR(20),
    email VARCHAR(30) unique,
    password VARCHAR(128),
    PRIMARY KEY(tid)
);"

$class = "CREATE TABLE IF NOT EXISTS class 
(
    cid INT NOT NULL AUTO_INCREMENT,
    cname VARCHAR(30),
    csection varchar(10),
    croom varchar(10),
    clevel varchar(10),
    tid INT,
    PRIMARY KEY(cid),
    FOREIGN KEY(tid) REFERENCES teacher(tid)
);"

$student = "CREATE TABLE IF NOT EXISTS student 
(
    sid INT NOT NULL AUTO_INCREMENT,
    sname VARCHAR(30),
    father_name VARCHAR(30),
    rollnum VARCHAR(20),
    phone VARCHAR(20),
    cid INT,
    PRIMARY KEY(sid),
    FOREIGN KEY(cid) REFERENCES class(cid)
);"

$attendance = "CREATE TABLE IF NOT EXISTS attendance 
(
    aid INT NOT NULL AUTO_INCREMENT,
    day VARCHAR(10),
    present BOOLEAN,
    sid INT,
    PRIMARY KEY(aid),
    FOREIGN KEY(sid) REFERENCES student(sid)
);"

$courses = "CREATE TABLE IF NOT EXISTS courses 
(
    courseid INT NOT NULL AUTO_INCREMENT,
    coursename VARCHAR(30),
    tid INT,
    cid INT,
    coursetype VARCHAR(10),
    PRIMARY KEY(courseid),
    FOREIGN KEY(tid) REFERENCES teacher(tid),
    FOREIGN KEY(cid) REFERENCES class(cid)
);"

$reports = "CREATE TABLE IF NOT EXISTS reports
(
    sname VARCHAR(30),
    date VARCHAR(30),
    phone VARCHAR(20),
    aid INT,
    mid INT,
    FOREIGN KEY(sname) REFERENCES student(sname),
    FOREIGN KEY(phone) REFERENCES student(phone),
    FOREIGN KEY(aid) REFERENCES attendance(aid),
    FOREIGN KEY(mid) REFERENCES marks(mid)
);"

$marks = "CREATE TABLE IF NOT EXISTS marks 
(
    mid INT NOT NULL AUTO_INCREMENT,
    courseid INT,
    sid INT,
    marks_type VARCHAR(20),
    marks_obtained INT,
    total_marks INT,
    PRIMARY KEY(mid),
    FOREIGN KEY(sid) REFERENCES student(sid),
    FOREIGN KEY(courseid) REFERENCES courses(courseid)
);"

if(db->store($schema) < 0)
{
    die("Invalid schema");
}

if(db->store($teacher) < 0)
{
    die("Invalid teacher");
}

if(db->store($class) < 0)
{
    die("Invalid class");
}
    
if(db->store($student) < 0)
{
    die("Invalid student");
}

if(db->store($attendance) < 0)
{
    die("Invalid attendance");
}

if(db->store($courses) < 0)
{
    die("Invalid courses");
}

if(db->store(reports) < 0)
{
    die("Invalid reports");
}

if(db->store($marks) < 0)
{
    die("Invalid marks");
}

?>