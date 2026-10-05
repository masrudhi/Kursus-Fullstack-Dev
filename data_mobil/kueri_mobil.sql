create table mobil (
    rank int primary key,
    merek_mobil text,
    model_mobil text,
    harga int,
    jumlah_penjualan int,
    gambar text
);

insert into mobil values
(1, 'Toyota',       'Toyota Camry', 25000, 300, 'mobil1.jpg'),
(2, 'Honda',        'Honda Civic', 22000, 280, 'mobil2.jpg'),
(3, 'Ford',         'Ford F-150', 35000, 260, 'mobil3.jpg'),
(4, 'Chevrolet',    'Chevrolet Silverado', 38000, 240, 'mobil4.jpg'),
(5, 'Volkswagen',   'Volkswagen Golf', 24000, 220, 'mobil5.jpg');