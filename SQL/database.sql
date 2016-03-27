use movie_rental;

drop table Movie;
drop table Customer;
drop table Comment;

create table Movie (
	Movie_ID int primary key auto_increment,
    Title varchar(50),
    Genre varchar(50),
    Price float,
    Cover varchar(50),
    Duration varchar(10)
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

insert into Movie (Title, Genre, Price, Cover, Duration) values ('Once', 'Drama,Musical,Romance', '0.99', 'Once.jpg', '1h 25min');
insert into Movie (Title, Genre, Price, Cover, Duration) values ('The Shawshank Redemption', 'Crime,Drama', '0.99', 'The_Shawshank_Redemption.jpg', '2h 22min');
insert into Movie (Title, Genre, Price, Cover, Duration) values ('The Godfather', 'Crime,Drama', '0.99', 'The_Godfather.jpg', '2h 55min');
insert into Movie (Title, Genre, Price, Cover, Duration) values ('The Godfather: Part II', 'Crime,Drama', '0.99', 'The_Godfather:PartII.jpg', '2h 22min');
insert into Movie (Title, Genre, Price, Cover, Duration) values ('The Dark Knight', 'Action,Crime,Drama', '0.99', 'The_Dark_Knight.jpg', '2h 32min');
insert into Movie (Title, Genre, Price, Cover, Duration) values ('Pulp Fiction', 'Crime,Drama', '0.99', 'Pulp_Fiction.jpg', '2h 34min');

insert into Customer (User_Name, Password, Email) values ('James', '123456', 'james@gmail.com');

insert into Comment (Movie_ID, Customer_ID, Star, Content) values (1, 1, 5, "Hello World!");

select * from Movie;

select * from Customer;