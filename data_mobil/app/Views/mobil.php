<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> View Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body><center>
 <p align="right">
  <a href="<?= base_url('Login/index') ?> ">Log Out</a>
  </p>
  <a href="<?= base_url('Mobil/add') ?> ">Add Data</a>

  <form method="post" action="<?=base_url('Mobil') ?>">
  <input name="pencarian" value="<?=esc($pencarian ?? '') ?>" placeholder="keyword...."/> 
  <input type="submit" name="cari" value="Search" class="btn btn-warning btn-sm " />
  <br/>
  <select name="urutan">
  <option>--Urutkan Berdasarkan--
  <option value="rank_asc">rank (Up)
  <option value="rank_desc">rank (Down)

  <option value="merek_mobil_asc">merek_mobil (A->Z)
  <option value="merek_mobil_desc">merek_mobil (Z->A)

  <option value="model_mobil_asc">model_mobil (A->Z)
  <option value="model_mobil_desc">model_mobil (Z->A)

  <option value="harga_asc">harga (Up)
  <option value="harga_desc">harga (Down)

  <option value="jumlah_penjualan_asc">jumlah_penjualan (Up)
  <option value="jumlah_penjualan_desc">jumlah_penjualan (Down)
 
</select>
<input type="submit" name="urutkan" value="URUTAN" class="btn btn-info btn-sm" />
</form>
 <table class="table table-hover">
 <tr>
    <td>RANK<td>GAMBAR MOBIL<td>MEREK MOBIL<td>MODEL MOBIL<td>HARGA (RIBUAN USD)<td>JUMLAH PENJUALAN (RIBUAN UNIT)<td>ACTION
  </tr>
  <tbody>
    <?php foreach ($mobil as $kolom): ?>
    <tr>
       <td><?=esc($kolom['rank']) ?>
       <td><img src="<?=base_url('gambar/' .$kolom['gambar']) ?>"
        width="300" height="200"
        style="object-fit: cover;" />
       <td><?=esc($kolom['merek_mobil']) ?>
       <td><?=esc($kolom['model_mobil']) ?>
       <td><?=esc($kolom['harga']) ?>
       <td><?=esc($kolom['jumlah_penjualan']) ?>
       <td> 
       <a href="<?=base_url('Mobil/update/'.$kolom['rank']) ?> ">Update</a>
       <a href="<?=base_url('Mobil/delete/'.$kolom['rank']) ?>"
       onclick="return confirm ('yakin ingin menghapus data?') ">Delete</a>
       
    </tr>
    <?php endforeach; ?>

  </tbody>  
  </table> 
  </center>
  </body>
  </html>  