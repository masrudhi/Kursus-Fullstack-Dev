<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body><center>
<div style="width:30%">
<form method="post" action="<?= base_url('Landmark/store') ?>">
<br/><input name="no" class="form-control" placeholder="NO" required/>
<br/><input name="kota" class="form-control" placeholder="KOTA" required/>
<br/><input name="negara" class="form-control" placeholder="NEGARA" required/>
<br/><input name="landmark" class="form-control" placeholder="LANDMARK" required/>
<br/><input name="populasi" class="form-control" placeholder="POPULASI (JUTA)" required/>
<br/><input type="submit" value="SAVE" class="btn btn-success btn-sm"/>
</form>
</div>
</center>
</body>
</html>