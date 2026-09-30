<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body><center>
<h3> Top 10 Movie Populer Dunia </h3>
<div style="width: 30%;">
<form method="post" action="<?= base_url('Movie/store') ?>">
  <?= csrf_field() ?>
    <br/><input name="rank" class="form-control" placeholder="rank" required/>
    <br/><input name="movie_title" class="form-control" placeholder="movie title" required/> 
    <br/><input name="release_year" class="form-control" placeholder="release year" required/>
    <br/><input name="worldwide_gross" class="form-control" placeholder="worldwide gross billion" required/>
    <br/><input name="director" class="form-control" placeholder="director" required/>
    <br/><input name="genre" class="form-control" placeholder="genre" required/> 
    <input type="submit" value="SIMPAN!" class="btn btn-warning btn-sm" />
</form> 
</div>
</center>
</body>
</html>
   

