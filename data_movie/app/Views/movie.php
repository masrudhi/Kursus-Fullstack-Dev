<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body><center>
  
  <h3> Top 10 Movie Populer Dunia</h3>
  <br/>
  <a href="<?= base_url('Movie/add') ?>"> Add Data</a> 
  <form method="post" action="<?= base_url('movie') ?>">
   <input name="pencarian" value="<?=esc($pencarian ?? '') ?>" placeholder="keyword..."/>
   <input type="submit" value="Search" class="btn btn-primary btn-sm">
   <br/><br/>

   <select name="urutan">
    <option>--Sort By--
    <option value="rank_asc">Rank(Up)
    <option value="rank_desc">Rank (Down)

    <option value="movie_title_asc">movie title (A->Z)
    <option value="movie_title_desc">movie title (Z->A)

    <option value="release_year_asc">release year (Up)
    <option value="release_year_desc">release year (Down)

    <option value="worldwide_gross_asc">worldwide gross Billion (Up)
    <option value="worldwide_gross_desc">worldwide gross Billion (Down)

    <option value="director_asc">director (A->Z)
    <option value="director_desc">director (Z->A)

    <option value="genre_asc">genre (A->Z)
    <option value="genre_desc">genre (Z->A) 

  </select>
  <input type="submit" value="Sort!" class="btn btn-primary btn-sm" />
  </form>  
  <table class="table table-hover">
    <tr>
       <td>RANK
       <td>MOVIE TITLE
       <td>RELEASE
       <td>WORLDWIDE GROSS (BILLION USD)
       <td>DIRECTOR
       <td>GENRE
       <td>ACTION
      </tr>
      <tbody>
      <?php foreach($movie as $kolom): ?>
      <tr>
        <td><?=esc($kolom['rank']) ?>
        <td><?=esc($kolom['movie_title']) ?>
        <td><?=esc($kolom['release_year']) ?>
        <td><?=esc($kolom['worldwide_gross']) ?>
        <td><?=esc($kolom['director']) ?>
        <td><?=esc($kolom['genre']) ?>
        <td><a href="<?=base_url('Movie/update/' .$kolom['rank']) ?>">Update</a>
            <a href="<?=base_url('Movie/delete/' .$kolom['rank']) ?>">Delete</a>
      </tr>
       <?php endforeach; ?>
       </tbody>
  </table>  

</center>
</body>
</html>
