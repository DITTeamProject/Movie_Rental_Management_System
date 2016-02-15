show databases;

create database movie_rental;
use movie_rental;

drop table Movie;

create table Movie (
	Movie_ID int primary key auto_increment,
    Title varchar(50),
    Genre varchar(50),
    Price float,
    Cover varchar(50)
);

create table User (
	User_ID int primary key auto_increment,
    User_Name varchar(20),
    Password varchar(50),
    Email varchar(50)
);

insert into Movie (Title, Genre, Price, Cover) values ('Once', 'Drama,Musical,Romance', '0.99', 'Once.jpg');

insert into User (User_Name, Password, Email) values ('james', '123456', 'james@gmail.com');
insert into User (User_Name, Password, Email) values ('alian', '123456', 'alian@gmail.com');

select * from Movie;

select * from User;

select * from User where User_Name = 'james';

delete from User;

 