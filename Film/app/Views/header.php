<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Film Populer</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <style>
        body {
            margin: 0; 
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        
        .topnav {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
            border-bottom: 2px solid #c5a059; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .topnav-inner {
            display: flex;
            gap: 8px;
            padding: 10px 15px;
            overflow: auto;
            white-space: pre-wrap;
        }

        .topnav-inner::-webkit-scrollbar {
            display: none;
        }

        .topnav a {
            color: #e0e0e0;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 12px;
            transition: color 0.2s ease;
        }

        .topnav a:hover {
            color: #c5a059; 
            text-decoration: none;
        }

        
        .footer {
            background: linear-gradient(135deg, #2d2d2d, #1a1a1a);
            border-top: 2px solid #c5a059;
            margin: 50px 0 0 0;
            color: #cccccc;
            padding: 30px 10%;
        }

        .footer strong {
            color: #ffffff;
        }
    </style>
</head>
<body>

    
    <img src="<?= base_url('gambar/banner.jpg') ?>" width="100%" alt="Banner Film" />  

    
    <nav class="topnav">
        <div class="topnav-inner">
            <a href="<?= base_url('home') ?>">Home</a>
            <a href="<?= base_url('action') ?>">Action</a>
            <a href="<?= base_url('comedy') ?>">Comedy</a>
            <a href="<?= base_url('science_fiction') ?>">Science Fiction</a>
            <a href="<?= base_url('horror') ?>">Horor</a>   

        </div>
    </nav>

