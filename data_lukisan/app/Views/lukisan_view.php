<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body><center>
 <p align="right">
  <a href="<?= base_url('Login/index') ?> ">Log Out</a>
  </p>

<a href="<?= base_url('Lukisan/add') ?>" class="btn btn-primary btn-sm mb-3">Add Data</a>
    
    <form method="post" action="<?= base_url('Lukisan') ?>" class="mb-3">
        <input name="pencarian" value="<?= esc($pencarian ?? '') ?>" placeholder="Keyword..."/>
        <input type="submit" value="Search" class="btn btn-secondary btn-sm"/>
        <br/><br/>
        <select name="urutan">
            <option>--Sort By--
            <option value="lukisan_asc">Lukisan (A->Z)
            <option value="lukisan_desc">Lukisan (Z->A)
            <option value="seniman_asc">Seniman (A->Z)
            <option value="seniman_desc">Seniman (Z->A)
            <option value="tahun_asc">Tahun Dibuat (Up)
            <option value="tahun_desc">Tahun Dibuat (Down)
            <option value="nilai_asc">Nilai Taksiran (Up)
            <option value="nilai_desc">Nilai Taksiran (Down)
        </select>
        <input type="submit" value="Sort" class="btn btn-warning btn-sm"/>
    </form>

<table class="table table-hover">
        <tr>
            <td>ID
            <td>LUKISAN
            <td>SENIMAN
            <td>TAHUN DIBUAT
            <td>NILAI TAKSIRAN (JUTAAN USD)
            <td>ACTION
        </tr>
        <tbody>
        <?php foreach($lukisan as $kolom): ?>
        <tr>
            <td><?= esc($kolom['id']) ?>
            <td><?= esc($kolom['lukisan']) ?>
            <td><?= esc($kolom['seniman']) ?>
            <td><?= esc($kolom['tahun_dibuat']) ?>
            <td><?= esc($kolom['nilai_taksiran']) ?>
            <td>
                <a href="<?= base_url('Lukisan/update/'.$kolom['id']) ?>">Update</a>
                <a href="<?= base_url('Lukisan/delete/'.$kolom['id']) ?>" onclick="return confirm('Yakin hapus?')">Delete</a>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<div class="d-flex justify-content-center mt-5"> <?= $pager->links() ?> 
</center></body></html>