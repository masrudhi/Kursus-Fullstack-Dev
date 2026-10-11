<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body><center>
<div style="width:30%">
<form method="post" action="<?= base_url('Landmark/updateSimpan') ?>">
<br/>NO
<br/><input class="form-control" readonly name="no" value="<?= $landmark_Edit->no ?>"/>
<br/>KOTA
<br/><input class="form-control" required name="kota" value="<?= $landmark_Edit->kota ?>"/>
<br/>NEGARA
<br/><input class="form-control" required name="negara" value="<?= $landmark_Edit->negara ?>"/>
<br/>LANDMARK
<br/><input class="form-control" required name="landmark" value="<?= $landmark_Edit->landmark ?>"/>
<br/>POPULASI (JUTA)
<br/><input class="form-control" required name="populasi" value="<?= $landmark_Edit->populasi ?>"/>
<br/><input type="submit" value="SAVE" class="btn btn-success btn-sm"/>
</form>
</div>
</center>
</body>
</html>