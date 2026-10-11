<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><center>
<div style="width:30%" class="mt-5">
    <h3>Edit Data Lukisan</h3>
    <form method="post" action="<?= base_url('Lukisan/updateSimpan') ?>">
        <br/>ID
        <br/><input class="form-control" readonly name="id" value="<?= $lukisan_Edit->id ?>"/>
        <br/>LUKISAN
        <br/><input class="form-control" required name="lukisan" value="<?= $lukisan_Edit->lukisan ?>"/>
        <br/>SENIMAN
        <br/><input class="form-control" required name="seniman" value="<?= $lukisan_Edit->seniman ?>"/>
        <br/>TAHUN DIBUAT
        <br/><input class="form-control" type="number" required name="tahun_dibuat" value="<?= $lukisan_Edit->tahun_dibuat ?>"/>
        <br/>NILAI TAKSIRAN (JUTAAN USD)
        <br/><input class="form-control" type="number" step="any" required name="nilai_taksiran" value="<?= $lukisan_Edit->nilai_taksiran ?>"/>
        <br/><input type="submit" value="SAVE" class="btn btn-success btn-sm"/>
        <a href="<?= base_url('Lukisan') ?>" class="btn btn-secondary btn-sm">Back</a>
    </form>
</div>
</center>
</body>
</html>