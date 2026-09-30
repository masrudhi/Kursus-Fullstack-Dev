create table movie
	(rank int primary key,
	movie_title text,
	release_year int,
	worldwide_gross double,
	director text,
	genre text	);


insert into movie values
(1, 'Avatar',							2009,2.92, 'James Cameron','Science Fiction,Fantasy'),
(2, 'Avengers:Endgame',					2019,2.80, 'Anthony and Joe Russo','Superhero,Action'),
(3,	'Titanic',							1997,2.20, 'James Cameron','Romance,Drama'),
(4,	'Star Wars:The Force Awakens',		2015,2.07, 'J.J. Abrams','Science Fiction,Adventure'),
(5, 'Avengers:Infinity War',			2018,2.05, 'Anthony and Joe Russo','Superhero,Action'),
(6, 'Jurassic World',					2015,1.67, 'Colin Trevorrow','Science Fiction,Adventure'),
(7, 'The Lion King', 					2019,1.66, 'Jon Favreau','Musical,Drama,Adventure'),
(8, 'The Avengers',						2012,1.52, 'Joss Whedon','Superhero,Action'),
(9, 'Furious 7',						2015,1.52, 'James Wan','Action,Thriller');
