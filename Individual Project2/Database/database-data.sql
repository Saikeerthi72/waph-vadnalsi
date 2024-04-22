drop table if exists users;
create table users(
	username varchar(50) PRIMARY KEY,
	password varchar(100) NOT NULL,
	fullname varchar(100),
	email varchar(100),
	phone varchar(10));
INSERT INTO users(username,password, fullname, email, phone) VALUES ('Keerthi',md5('waph1'), 'Sai Keerthi Vadnala', 'Vadnalsi@mail.uc.edu', '156789');
INSERT INTO users(username,password, fullname, email, phone) VALUES ('Gani',md5('waph1'), 'Ganesh Gunthala', 'ganesh@gmail.com', '4453468');
INSERT INTO users(username,password, fullname, email, phone) VALUES ('Chano',md5('waph1'), 'Gayathri chandana', 'chano2@gmail.com', '98755' );
INSERT INTO users(username,password, fullname, email, phone) VALUES ('Ani', md5('waph1'), 'Anirudh da', 'anirudh@mail.uc.edu', '3456782';
INSERT INTO users(username,password, fullname, email, phone) VALUES ('Avi',md5('waph1'), 'Avinash', 'avinash@mail.uc.edu', '823456');
