<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body><center>
  <h3>Top 5 Books In the World</h3><hr/>
  <form method="post" action="<?=base_url('book') ?>">  
  <select name="urutan">
  <option>---Sort By---
  <option value="book_id_asc">Book ID (Up)
  <option value="book_id_desc">Book ID (Down)

  <option value="title_asc">Title (A->Z)
  <option value="title_desc">Title (Z->A)

  <option value="genre_asc">Genre (A->Z)
  <option value="genre_desc">Genre (Z->A)

  <option value="published_year_asc">Published Year (Up)
  <option value="published_year_desc">Published Year (Down)

  <option value="first_name_asc">First Name (A->Z)
  <option value="first_name_desc">First Name (Z->A)

  <option value="last_name_asc">Last Name (A->Z)
  <option value="last_name_desc">Last Name (Z->A) 

  <option value="nationality_asc">Nationality (A->Z)
  <option value="nationality_desc">Nationality (Z->A)

  <option value="birth_year_asc">Birth Year (Up)
  <option value="birth_year_desc">Birth Year (Down)

  <option value="sold_million_asc">Sold Million (Up)
  <option value="sold_million_desc">Sold Million (Down)
  </select>
  <input type="submit" value="Sort!" class="btn btn-primary btn-sm" />

</form>

<table class="table table-hover">
  <tr>
    <td>BOOK ID
    <td>TITLE
    <td>GENRE
    <td>PUBLISHED YEAR
    <td>FIRST NAME
    <td>LAST NAME
    <td>BIRTH YEAR
    <td>NATIONALITY
    <td>SOLD MILLION
    </tr>
    <tbody>
    <?php foreach ($book as $kolom): ?>
    <tr>
       <td><?=esc($kolom['book_id']) ?>
       <td><?=esc($kolom['title']) ?>
       <td><?=esc($kolom['genre']) ?>
       <td><?=esc($kolom['published_year']) ?>
       <td><?=esc($kolom['first_name']) ?>
       <td><?=esc($kolom['last_name']) ?>
       <td><?=esc($kolom['nationality']) ?>
       <td><?=esc($kolom['birth_year']) ?>
       <td><?=esc($kolom['sold_million']) ?>
       </tr>
       <?php endforeach; ?>
       </tbody>
       </table> 

</center></body></html> 