<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Update Mobil</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><center><div style="width:30%">
<form method="post" action="<?=base_url('Mobil/updateSimpan') ?>" enctype="multipart/form-data">
<br/>RANK
<input class="form-control" readonly name="rank" value="<?=$mobil_Edit['rank'] ?>"/>
<br/>MEREK MOBIL
<input class="form-control" required name="merek_mobil" value="<?=$mobil_Edit['merek_mobil'] ?>"/>
<br/>MODEL MOBIL
<input class="form-control" required name="model_mobil" value="<?=$mobil_Edit['model_mobil'] ?>"/>
<br/>HARGA (RIBUAN USD)
<input type="number" class="form-control" required name="harga" value="<?=$mobil_Edit['harga'] ?>"/>
<br/>JUMLAH PENJUALAN (RIBUAN UNIT)
<input type="number" class="form-control" required name="jumlah_penjualan" value="<?=$mobil_Edit['jumlah_penjualan'] ?>"/>
<br/>GAMBAR LAMA
<br/>
<img src="<?=base_url('gambar/'.$mobil_Edit['gambar']) ?>" width="120"/>
<br/><br/>GANTI GAMBAR
<input type="file" name="gambar" class="form-control" accept="image/*"/>
<br/><input type="submit" value="SAVE" class="btn btn-success btn-sm"/>
</form></div></center></body></html>