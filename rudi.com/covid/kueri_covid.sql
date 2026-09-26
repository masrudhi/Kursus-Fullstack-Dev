create table covid
	(rank int primary key,
		country text,
		continent text,
		cases_2020 int,
		precent_population double
		);
	insert into covid values
	(1, 'US', 'America', 20555204, 6.2),
	(2,'India', 'Asia', 10266674, 0.8),
	(3,'Brazil', 'America', 7619200, 3.6),
	(4,'Russia', 'Europe', 3105037, 2.1),
	(5,'France', 'Europe', 2806590, 4.2),
	(6,'UK', 	'Europe', 2599789, 3.9),
	(7,'Turkey', 'Asia', 2336605, 2.8),
	(8,'Italy', 'Europe', 2336279, 3.9),
	(9,'Spain', 'Europe', 2050360, 4.4);