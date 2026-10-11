CREATE TABLE data_lukisan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    lukisan VARCHAR(100),
    seniman VARCHAR(100),
    tahun_dibuat INT,
    nilai_taksiran DOUBLE
);

INSERT INTO data_lukisan VALUES
(1,'Mona Lisa', 'Leonardo da Vinci', 1503, 860),
(2,'Starry Night', 'Vincent van Gogh', 1889, 100),
(3,'The Last Supper', 'Leonardo da Vinci', 1498, 450),
(4,'The Scream', 'Edvard Munch', 1893, 120),
(5,'Guernica', 'Pablo Picasso', 1937, 200),
(6,'Girl with a Pearl Earring', 'Johannes Vermeer', 1665, 80),
(7,'The Persistence of Memory', 'Salvador Dalí', 1931, 150),
(8,'The Birth of Venus', 'Sandro Botticelli', 1486, 200),
(9,'The Night Watch', 'Rembrandt', 1642, 500),
(10,'Water Lilies', 'Claude Monet', 1906, 300);