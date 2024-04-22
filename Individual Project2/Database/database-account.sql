create database if not exists  waph_individual;
create user 'keerthi'@'localhost'IDENTIFIED BY 'waph1';
GRANT ALL ON waph_individual.* TO 'keerthi'@'localhost';
