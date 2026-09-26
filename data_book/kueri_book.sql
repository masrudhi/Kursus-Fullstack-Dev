create table book
	(book_id int primary key,
	title text,
	genre text,
	published_year int,
	first_name text,
	last_name text,
	nationality text,
	birth_year int,
	sold_million int);

	INSERT INTO book VALUES
(1, 'Pride and Prejudice', 				'Romance', 		1813, 'Jane', 	'Austen', 		'British', 	1775, 20),
(2, 'Adventures of Huckleberry Finn', 	'Adventure', 	1884, 'Mark', 	'Twain', 		'American', 1835, 20),
(3, 'Harry Potter', 					'Fantasy',		1997, 'J.K.', 	'Rowling', 		'British', 	1965, 120),
(4, 'The Old Man and the Sea', 			'Literature', 	1952, 'Ernest', 'Hemingway', 	'American', 1899, 10),
(5, '1984', 							'Dystopian', 	1949, 'George', 'Orwell', 		'British', 	1903, 30);