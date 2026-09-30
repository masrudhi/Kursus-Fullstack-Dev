<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Lagu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body><center>
<h3> Top 10 Lagu Populer Dunia </h3>
<div style="width: 30%;">
<form method="post" action="<?= base_url('Lagu/store') ?>">
  <?= csrf_field() ?>
    <br/><input name="no" class="form-control" placeholder="NO" required/>
    <br/><input name="judul" class="form-control" placeholder="JUDUL" required/> 
    <br/><input name="pencipta" class="form-control" placeholder="PENCIPTA" required/>
    <br/><input name="asal_negara" class="form-control" placeholder="ASAL NEGARA" required/>
    <br/><input name="tahun_rilis" class="form-control" placeholder="TAHUN RILIS" required/>
    <br/><input name="jumlah_terjual" class="form-control" placeholder="JUMLAH TERJUAL" required/> 
    <input type="submit" value="SIMPAN!" class="btn btn-warning btn-sm" />
</form> 
</div>
</center>
</body>
</html>
   

