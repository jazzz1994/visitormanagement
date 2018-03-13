-- create student table

CREATE TABLE student (
    id INT(10) AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    gender VARCHAR(1) NOT NULL,
    class_id VARCHAR(3) NOT NULL,
    dob DATE NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(subject_id) REFERENCES subject(id)
);

-- create parent table

CREATE TABLE parent (
    id INT(10) AUTO_INCREMENT NOT NULL,
    student_id INT(10) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    phone_no  VARCHAR(10) NOT NULL,
    address VARCHAR(30),
    email VARCHAR(20),
    PRIMARY KEY(id),
    FOREIGN KEY(student_id) REFERENCES student(id)
);

-- create subject table

CREATE TABLE subject (
    id INT(10) AUTO_INCREMENT NOT NULL,
    name VARCHAR(20) NOT NULL,
    PRIMARY KEY(id)
);


-- create teacher table

CREATE TABLE teacher (
    id INT(10) AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    gender VARCHAR(1) NOT NULL,
    class_id  VARCHAR(3) NOT NULL,
    subject_id INT(10) NOT NULL,
    email VARCHAR(20),
    PRIMARY KEY(id),
    FOREIGN KEY(subject_id) REFERENCES subject(id)
);


CREATE TABLE class{
   id INT(10) AUTO_INCREMENT NOT NULL,
   name VARCHAR(2) NOT NULL,
   subject_id INT NOT NULL,
   PRIMARY KEY (id),
   FOREIGN KEY (subject_id) REFERENCES class(id)
}
