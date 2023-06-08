<?php
if($_POST) {
    $nama=$_POST('nama');
    $alamat=$_POST('alamat');
    $telp=$_POST('telp');
    if (empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');
        locaion.href='tambah_pelanggan.php';</script>";
    } else if (empty($alamat)){
        echo "<script>alert(dalamat tidak boleh kosong');
        locaion.href='tambah_pelanggan.php';</script>";
    } else if (empty($telp)){
        echo "<script>alert(nomor telp tidak boleh kosong');
        locaion.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn, "insert into pelanggan (nama, alamat, telp) value('".$nama."' '".$alamat."' '".$telp."')");
    if ($insert){
        echo "<script>alert('sukses menambahkan pelanggan');
        locaion.href='tambah_pelanggan.php';</script>";
    } else ($insert){
        echo "<script>alert('gagal menambahkan pelanggan');
        locaion.href='tambah_pelanggan.php';</script>";
    }
 }
}
?>