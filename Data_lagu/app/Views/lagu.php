<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lagu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body><center>
  <h3> Top 10 Lagu Populer Dunia</h3>
  <a href="<?= base_url('Lagu/add') ?> ">Tambah Data</a>
  <form method="post" action="<?=base_url('lagu') ?>">
  <input name="pencarian" value="<?=esc($pencarian ?? '') ?>" placeholder="ketik Kata kunci...."/> 
  <input type="submit" name="cari" value="CARI!" class="btn btn-warning btn-sm " />
  <br/>
  <select name="urutan">
  <option>--Urutkan Berdasarkan--
  <option value="no_asc">NO (Up)
  <option value="no_desc">NO (Down)

  <option value="judul_asc">Judul (A->Z)
  <option value="judul_desc">Judul (Z->A)

  <option value="pencipta_asc">Pencipta (A->Z)
  <option value="pencipta_desc">Pencipta (Z->A)

  <option value="asal_negara_asc">Asal Negara (A->Z)
  <option value="asal_negara_desc">Asal Negara (Z->A)

  <option value="tahun_rilis_asc">Tahun Rilis (Up)
  <option value="tahun_rilis_desc">Tahun Rilis (Down)

  <option value="jumlah_terjual_asc">Jumlah Terjual (Up)
  <option value="jumlah_terjual_desc">Jumlah Terjual (Down)
</select>
<input type="submit" name="urutkan" value="URUTAN" class="btn btn-info btn-sm" />
</form>
 <table class="table table-hover">
 <tr>
    <td>NO<td>JUDUL<td>PENCIPTA<td> ASAL NEGARA<td> TAHUN RILIS <td>JUMLAH TERJUAL (JUTA KEPING)
  </tr>
  <tbody>
    <?php foreach ($lagu as $kolom): ?>
    <tr>
       <td><?=esc($kolom['no']) ?>
       <td><?=esc($kolom['judul']) ?>
       <td><?=esc($kolom['pencipta']) ?>
       <td><?=esc($kolom['asal_negara']) ?>
       <td><?=esc($kolom['tahun_rilis']) ?> 
       <td><?=esc($kolom['jumlah_terjual']) ?> 
    </tr>
    <?php endforeach; ?>

  </tbody>  
  </table> 
  </center>
  </body>
  </html>  