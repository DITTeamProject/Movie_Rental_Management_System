create database movie_rental;
use movie_rental;

show tables;

drop table Movie;
drop table Customer;
drop table Comment;
drop table Transaction;

create table Movie (
	Movie_ID int primary key auto_increment,
    Title varchar(50),
    Genre varchar(50),
    Price float,
    Cover varchar(50),
    Duration varchar(10),
    URL varchar(100)
);

create table Customer (
	User_ID int primary key auto_increment,
	User_Name varchar(50),
	Password varchar(50),
	Email varchar(50)
);

create table Comment (
	Comment_ID int primary key auto_increment,
	Movie_ID int references Movie(Movie_ID),
	Customer_ID int references Customer(User_ID),
	Star int,
	content varchar(200)
);

create table Transaction (
	Transaction_ID int primary key auto_increment,
	Movie_ID int references Movie(Movie_ID),
	Customer_ID int references Customer(User_ID),
	Rental_Date timestamp not null default now(),
    Return_Date timestamp not null,
	Cost float
);

insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('Once', 'Drama, Musical, Romance.', '0.99', 'Once.jpg', '1h 25min', 'http://www.youtube.com/embed/j6slEoCqDD8');
insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('The Shawshank Redemption', 'Crime, Drama.', '0.99', 'The_Shawshank_Redemption.jpg', '2h 22min', 'http://www.youtube.com/embed/6hB3S9bIaco');
insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('The Godfather', 'Crime, Drama.', '0.99', 'The_Godfather.jpg', '2h 55min', 'http://www.youtube.com/embed/sY1S34973zA');
insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('The Godfather: Part II', 'Crime, Drama.', '0.99', 'The_Godfather_PartII.jpg', '2h 22min', 'http://www.youtube.com/embed/qJr92K_hKl0');
insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('The Dark Knight', 'Action, Crime, Drama.', '0.99', 'The_Dark_Knight.jpg', '2h 32min', 'http://www.youtube.com/embed/EXeTwQWrcwY');
insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('Pulp Fiction', 'Crime, Drama.', '0.99', 'Pulp_Fiction.jpg', '2h 34min', 'http://www.youtube.com/embed/ewlwcEBTvcg');

insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('Donnie Darko', 'Drama, Sci-Fi, Thriller.', '1.50', 'Donnie_Darko.jpg', '1h 53min', 'http://www.youtube.com/embed/ZZyBaFYFySk');
insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('Interstellar', 'Adventure, Drama, Sci-Fi.', '0.99', 'Interstellar.jpg', '2h 49min', 'http://www.youtube.com/embed/zSWdZVtXT7E');
insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('Trainspotting', 'Drama.', '0.99', 'Trainspotting.jpg', '1h 34min', 'http://www.youtube.com/embed/8LuxOYIpu-I');
insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('American History X', 'Crime, Drama.', '0.99', 'American_History_X.jpg', '1h 59min', 'http://www.youtube.com/embed/JsPW6Fj3BUI');
insert into Movie (Title, Genre, Price, Cover, Duration, URL) values ('The Departed', 'Crima, Drama, Thriller.', '0.99', 'The_Departed.jpg', '2h 31min', 'http://www.youtube.com/embed/auYbpnEwBBg');


SELECT * FROM Movie;

insert into Customer (User_Name, Password, Email) values ('James', '123456', 'jamesxu182@gmail.com');

insert into Comment (Movie_ID, Customer_ID, Star, Content) values (1, 1, 5, "Hello World!");

insert into Transaction (Movie_ID, Customer_ID, Return_Date, Cost) values (1, 1, now(), 1.99);
insert into Transaction (Movie_ID, Customer_ID, Return_Date, Cost) values (1, 1, date_add(now(), INTERVAL 31 DAY), 1.99);

select * from Movie;
select * from Transaction;
select * from Customer;

select * from Transaction where Movie_ID = 1 and Customer_id = 2;

delete from Transaction;

delete from Movie;
drop table Movie;

select * from Movie;