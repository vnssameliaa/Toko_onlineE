<?php
if($_POST) {
    $nama_produk=$_POST('nama_produk');
    $deskripsi=$_POST('deskripsi');
    $harga=$_POST('harga');
    if (empty($nama_produk)){
        echo "<script>alert('nama produk tidak boleh kosong');
        locaion.href='tambah_produk.php';</script>";
    } else if (empty($deskripsi)){
        echo "<script>alert(deskripsi tidak boleh kosong');
        locaion.href='tambah_produk.php';</script>";
    } else if (empty($harga)){
        echo "<script>alert(harga tidak boleh kosong');
        locaion.href='tambah_produk.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn, "insert into produk (nama_produk, deskripsi, harga) value('".$nama_produk."' '".$deskripsi."' '".$harga."')");
    if ($insert){
        echo "<script>alert('sukses menambahkan produk');
        locaion.href='tambah_produk.php';</script>";
    } else ($insert){
        echo "<script>alert('gagal menambahkan produk');
        locaion.href='tambah_produk.php';</script>";
    }
 }
}
?>