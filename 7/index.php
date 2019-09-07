<?php 

require("functions.php");

$product = tampil("SELECT * FROM products");


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Bootcamp DW 12 </title>
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
        <a class="nav-item nav-link active" href="index.php"> Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="form-tambah.php"> Tambah Data </a>
        </div>
    </div>
    </nav>

    <!-- navbar -->
    <!-- tittle -->
      <section class="title">
      <div class="container mt-3">
          <h1> Daftar Produk Gudang Dumbways  </h1>
           <a href="form-tambah.php"> <button class="btn btn-dark mt-2"> Tambah Data + </button> </a>
      </div>
      </section>
    <!-- endtitle -->

    <!-- daftar list -->
      <section class="daftar mt-4">
          <div class="container">
            <table class="table table-bordered table-striped">
                <thead class="text-center">
                    <tr>
                        <th> No </th>
                        <th> Aksi </th>
                        <th> Kategori Barang </th>
                         <th> Daftar Produk </th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($product as $produk) : ?>
                    <tr>
                        <th class="text-center"> <?php echo $i ?> </th>
                        <th class="text-center">
                            <a href="hapus.php?id=<?php echo $produk['id'] ?>" onclick="return confirm('Kamu Yakin ?')"> Hapus </a>
                        </th>
                        <th> <?php echo $produk['category_name']; ?> </th>
                        <th> <?php echo $produk['products']; ?> </th>

                    </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>

                </tbody>
                </table>
          </div>
      </section>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>