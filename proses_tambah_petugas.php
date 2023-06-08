<?php
if($_POST) {
    $nama_petugas=$_POST('nama_petugas');
    $username=$_POST('username');
    $password=$_POST('password');
    $level=$_POST('level');
    if (empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');
        locaion.href='tambah_petugas.php';</script>";
    } else if (empty($username)){
        echo "<script>alertusername tidak boleh kosong');
        locaion.href='tambah_petugas.php';</script>";
    } else if (empty($password)){
        echo "<script>alert(password tidak boleh kosong');
        locaion.href='tambah_petugas.php';</script>";
    } else if (empty($level)){
        echo "<script>alert(level tidak boleh kosong');
        locaion.href='tambah_petugas.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn, "insert into petugas (nama_petugas, username, password, level) value('".$nama_petugas."' '".$username."' '".$password."' '".$level."')");
    if ($insert){
        echo "<script>alert('sukses menambahkan petugas');
        locaion.href='tambah_petugas.php';</script>";
    } else ($insert){
        echo "<script>alert('gagal menambahkan petugas');
        locaion.href='tambah_petugas.php';</script>";
    }
 }
}
?>