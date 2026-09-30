<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body><center>
    <div style="width:30%">
    <form method="post" action="<?=base_url('Movie/updateSimpan') ?>">
     <br/>RANK
     <br/><input class="form-control" readonly name="rank" value="<?=$movie_edit->rank ?>" />
     <br/>MOVIE TITLE
     <br/><input class="form-control" name="movie_title" value="<?=$movie_edit->movie_title ?>" />
     <br/>RELEASE
     <br/><input class="form-control" name="release_year" value="<?=$movie_edit->release_year ?>">
     <br/>WORLDWIDE GROSS (BILLION USD)
     <br/><input class="form-control" name="worldwide_gross" value="<?=$movie_edit->worldwide_gross ?>" />
     <br/>DIRECTOR
     <br/><input class="form-control" name="director" value="<?=$movie_edit->director ?>" />
     <br/>GENRE
     <br/><input class="form-control" name="genre" value="<?=$movie_edit->genre ?> " />
     <br/><input type="submit" value="SAVE" class="btn btn-success btn-sm" />
   </form>
 </center></body></html>
    