create table games
(rank int primary key,
game text,
platform text,
year int,
genre text,
publisher text,
na_sales double,
eu_sales double,
jp_sales double,
other_sales double);

INSERT INTO games
   
VALUES
    (2056, 'N-Strike Elite', 'Wii', 2009, 'Shooter', 'Electronic Arts',
     0.93, 0.00, 0.00, 0.07),

    (2057, 'Ford Racing Two', 'PS2', 2003, 'Racing', 'Empire Interactive',
     0.49, 0.38, 0.00, 0.13),

    (2058, 'Breath of Fire III', 'PS', 1997, 'RPG', 'Capcom',
     0.29, 0.19, 0.46, 0.07),

    (2059, 'PES 2009', 'X360', 2008, 'Sports', 'Konami',
     0.13, 0.76, 0.03, 0.09),

    (2060, 'Dead or Alive 2', 'PS2', 2000, 'Fighting', 'Tecmo Koei',
     0.30, 0.24, 0.38, 0.08),

    (2062, 'Excite Bike 64', 'N64', 2000, 'Racing', 'Nintendo',
     0.65, 0.15, 0.19, 0.01),

    (2063, 'Open Tournament Golf', 'NES', 1991, 'Sports', 'Nintendo',
     0.41, 0.10, 0.47, 0.02),

    (2064, 'Game & Watch Gallery', 'GB', 1997, 'Misc', 'Nintendo',
     0.63, 0.25, 0.09, 0.03),

    (2069, 'PES 2007', 'X360', 2006, 'Sports', 'Konami',
     0.08, 0.90, 0.02, 0.00),

    (2070, 'Road & Track Presents: The Need for Speed', 'PS', 1995, 'Racing', 'Electronic Arts',
     0.56, 0.38, 0.00, 0.07);





