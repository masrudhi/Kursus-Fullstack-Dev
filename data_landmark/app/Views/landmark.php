<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body><center>
 <p align="right">
  <a href="<?= base_url('Login/index') ?> ">Log Out</a>
  </p>
<a href="<?= base_url('Landmark/add') ?>">Add Data</a>
<form method="post" action="<?= base_url('Landmark') ?>">
<input name="pencarian" value="<?= esc($pencarian ?? '') ?>" placeholder="Keyword..."/>
<input type="submit" value="Search" class="btn btn-primary btn-sm"/>
<br/><br/>
<select name="urutan">
<option>--Sort By--
<option value="no_asc">No (Up)
<option value="no_desc">No (Down)
<option value="kota_asc">Kota (A->Z)
<option value="kota_desc">Kota (Z->A)
<option value="negara_asc">Negara (A->Z)
<option value="negara_desc">Negara (Z->A)
<option value="landmark_asc">Landmark (A->Z)
<option value="landmark_desc">Landmark (Z->A)
<option value="populasi_asc">Populasi (Up)
<option value="populasi_desc">Populasi (Down)
</select>
<input type="submit" value="Sort" class="btn btn-warning btn-sm"/>
</form>

<table class="table table-hover">
<tr>
    <td>NO
    <td>KOTA
    <td>NEGARA
    <td>LANDMARK
    <td>POPULASI (JUTA)
    <td>ACTION
</tr>
<tbody>
<?php foreach($landmark as $kolom): ?>
<tr>
    <td><?= esc($kolom['no']) ?>
    <td><?= esc($kolom['kota']) ?>
    <td><?= esc($kolom['negara']) ?>
    <td><?= esc($kolom['landmark']) ?>
    <td><?= esc($kolom['populasi']) ?>
    <td>
    <a href="<?= base_url('Landmark/update/'.$kolom['no']) ?>">Update</a>
    <a href="<?= base_url('Landmark/delete/'.$kolom['no']) ?>">Delete</a>
    
</tr>
<?php endforeach; ?>
</tbody>
</table>
<div class="d-flex justify-content-center mt-5"> <?= $pager->links() ?> 
</center></body></html>