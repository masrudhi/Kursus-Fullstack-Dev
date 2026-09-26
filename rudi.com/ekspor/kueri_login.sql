create table login 
    (
    username varchar(20) primary key,
    password varchar (20));
    insert into login values
    ('admin','admin123'),('rudi','rudi123');

    create table ekspor
        (no int primary key,
            jenis_komoditas text,
            tujuan_negara text,
            milyar_usd int);
    insert into ekspor values
    (1, 'Minyak kelapa sawit (CPO) & turunannya', 'India', 32),
    (2, 'Batu bara', 'Tiongkok', 28),
    (3, 'Nikel & produk turunannya', 'Tiongkok', 20),
    (4, 'Besi dan baja', 'Tiongkok', 18),
    (5, 'Gas alam cair (LNG)', 'Jepang', 14),
    (6, 'Karet & produk karet', 'Amerika Serikat', 8),
    (7, 'Produk elektronik & mesin', 'Amerika Serikat', 12),
    (8, 'Tekstil & pakaian jadi', 'Amerika Serikat', 10),
    (9, 'Produk perikanan (udang dan tuna)', 'Jepang', 6);
