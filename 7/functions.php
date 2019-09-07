<?php 

$conn = mysqli_connect('localhost', 'root', '', 'dumbways12');

// fungsi untuk menampilkan data
function tampil ($query) {
    // mengambil data dari database
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    // memasukkan data ke dalam array 
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}

// fungsi tambah nilai ke database
function tambah ($data) {
    // koneksi ke database
    global $conn;
    // tangkap nilai dari pada form
    $kategori_produk = $data['category'];
    $nama_produk = $data['product'];

    $query = "INSERT INTO products 
                VALUE 
                ('', '$kategori_produk', '$nama_produk')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi hapus
function hapus ($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM products WHERE id=$id");

    return mysqli_affected_rows($conn);
}

?>