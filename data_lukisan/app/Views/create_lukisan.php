<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><center>
<div style="width:30%" class="mt-5">
    <h3>Tambah Data Lukisan</h3>
    <form method="post" action="<?= base_url('Lukisan/store') ?>">
        <br/><input name="lukisan" class="form-control" placeholder="LUKISAN" required/>
        <br/><input name="seniman" class="form-control" placeholder="SENIMAN" required/>
        <br/><input name="tahun_dibuat" type="number" class="form-control" placeholder="TAHUN DIBUAT" required/>
        <br/><input name="nilai_taksiran" type="number" step="any" class="form-control" placeholder="NILAI TAKSIRAN (JUTAAN USD)" required/>
        <br/><input type="submit" value="SAVE" class="btn btn-success btn-sm"/>
        <a href="<?= base_url('Lukisan') ?>" class="btn btn-secondary btn-sm">Back</a>
    </form>
</div>
</center>
</body>
</html>