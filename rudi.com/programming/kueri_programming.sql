CREATE TABLE programming (
    rank INT PRIMARY KEY,
    language TEXT,
    most_use_case TEXT,
    year_average_salary INT,
    founder TEXT
);

INSERT INTO programming
VALUES
(1, 'Python', 		'Data Science', 			120000, 'Guido van Rossum'),
(2, 'JavaScript', 	'Web Development', 			110000, 'Brendan Eich'),
(3, 'Java', 		'Mobile App Development', 	105000, 'James Gosling'),
(4, 'C#', 			'Game Development', 		100000, 'Microsoft'),
(5, 'Go', 			'Web Development', 			130000, 'Google'),
(6, 'TypeScript', 	'Web Development', 			115000, 'Microsoft'),
(7, 'Ruby', 		'Web Development', 			110000, 'Yukihiro Matsumoto'),
(8, 'Kotlin', 		'Mobile App Development', 	114000, 'JetBrains'),
(9, 'Swift', 		'Mobile App Development', 	125000, 'Apple Inc.'),
(10, 'PHP', 		'Web Development', 			 95000, 'Rasmus Lerdorf');