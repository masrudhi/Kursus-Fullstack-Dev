<html><head><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Create Mobil</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><center><div style="width:30%">
 <h2>Create Mobil</h2>	
<form method="post" action="<?=base_url('Mobil/store')?>" enctype="multipart/form-data">
<br/><input name="rank" class="form-control" placeholder="RANK" required/>
<br/><input name="merek_mobil" class="form-control" placeholder="MEREK MOBIL" required/>
<br/><input name="model_mobil" class="form-control" placeholder="MODEL MOBIL" required/>
<br/><input type="number" name="harga" class="form-control" placeholder="HARGA (RIBUAN USD)" required/>
<br/><input type="number" name="jumlah_penjualan" class="form-control" placeholder="JUMLAH PENJUALAN (RIBUAN UNIT)" required/>
<br/>GAMBAR MOBIL
<input type="file" name="gambar" class="form-control" accept="image/*" required/>
<br/><input type="submit" value="SAVE" class="btn btn-success btn-sm"/>
</form></div></center></body></html>