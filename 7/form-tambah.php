<?php 

require("functions.php");
if ( isset($_POST['submit']) ) {
    if (tambah($_POST) > 0 ) {
        echo "
        <script> 
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
    ";
    } else {
        echo "
        <script> 
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
    ";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Form Tambah Data </title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand" href="#"> Bootcamp DW | </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#"> Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="index.php"> List Data </a>
        </div>
    </div>
    </nav>
    <!-- navbar -->
    <!-- tittle -->
    <section class="title">
      <div class="container mt-3">
          <h1> Form Tambah Data </h1>
         <a href="index.php"><button class="btn btn-dark mt-2"> Ke >> List Data </button></a> 
      </div>
    </section>
    <!-- endtitle -->
    <!-- form pemasukkan data -->
    <section class="tambah mt-4">
        <div class="container">
        <div class="row">
        <div class="col-md-7">
        <form method="post">
            <div class="form-group">
                <label for="category"> Nama Kategori </label>
                <input type="text" name="category" class="form-control" id="category" placeholder="Masukkan kategori produk">
            </div>
            <div class="form-group">
                <label for="product"> Detail Produk </label>
                <textarea name="product" id="product" cols="3" rows="5" class="form-control" placeholder="Tulis detail produk"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
        </form>
        </div>
        </div>
        </div>
    </section>
    <!-- endform -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>