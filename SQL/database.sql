use movie_rental;

drop table Movie;
drop table User;

create table Movie (
	Movie_ID int primary key auto_increment,
    Title varchar(50),
    Genre varchar(50),
    Price float,
    Cover varchar(50),
    Duration varchar(10)
);

insert into Movie (Title, Genre, Price, Cover, Duration) values ('Once', 'Drama,Musical,Romance', '0.99', 'Once.jpg', '1h 25min');
insert into Movie (Title, Genre, Price, Cover, Duration) values ('The Shawshank Redemption', 'Crime,Drama', '0.99', 'The_Shawshank_Redemption.jpg', '2h 22min');
insert into Movie (Title, Genre, Price, Cover, Duration) values ('The Godfather', 'Crime,Drama', '0.99', 'The_Godfather.jpg', '2h 55min');
insert into Movie (Title, Genre, Price, Cover, Duration) values ('The Godfather: Part II', 'Crime,Drama', '0.99', 'The_Godfather:PartII.jpg', '2h 22min');
insert into Movie (Title, Genre, Price, Cover, Duration) values ('The Dark Knight', 'Action,Crime,Drama', '0.99', 'The_Dark_Knight.jpg', '2h 32min');
insert into Movie (Title, Genre, Price, Cover, Duration) values ('Pulp Fiction', 'Crime,Drama', '0.99', 'Pulp_Fiction.jpg', '2h 34min');

select * from Movie;