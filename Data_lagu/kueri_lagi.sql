CREATE TABLE lagu (
    no INT PRIMARY KEY,
    judul text,
    pencipta text,
    asal_negara text,
    tahun_rilis INT,
    jumlah_terjual int);

INSERT INTO lagu VALUES
(1, 'Smells Like Teen Spirit',      'Kurt Cobain',      'Amerika',  1991, '10 juta'),
(2, 'I Will Always Love You',       'Whitney Houston',  'Amerika',  1992, '20 juta'),
(3, 'Wannabe',                      'Spice Girls',      'Inggris',  1996, '7 juta'),
(4, 'Black or White',               'Michael Jackson',  'Amerika',  1991, '11 juta'),
(5, 'Un-Break My Heart',            'Diane Warren',     'Amerika',  1996, '10 juta'),
(6, 'I Want it That Way',           'Max Martin',       'Amerika',  1999, '12 juta'),
(7, 'Nothing Compares 2 U',         'Prince',           'Amerika',  1990, '6 juta'),
(8, 'Baby One More Time',           'Max Martin',       'Amerika',  1998, '10 juta'),
(9, 'Bailamos',                     'Paul Barry',       'Spanyol',  1998, '5 juta'),
(10, 'Du Hast',                     'Rammstein',        'Jerman',   1997, '7 juta');
