<?php
include "header.php";
include "koneksi.php";

$qry_detail_produk=mysqli_query($conn, "select * from produk where id_produk = '". $_GET['id_produk']."'");
$dt_produk=mysqli_fetch_array($qry_detail_produk);
?>

<h2>beli produk</h2>
<div class="row">
    <div class="col-md-4">
        <img src="assets/<?=$dt_produk['foto_produk']?>" class="card-img-top">
    </div>
    <div class="colmd-8">
        <form action="masukkankeranjang.php?id_produk=<?$dt_produk['id_produk']?>" method="post">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td>Nama Produk</td>
                    <td><?=$dt_produk['nama_produk']?></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><?=$dt_produk['deskripsi']?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><?=$dt_produk['harga']?></td>
                </tr>
                <tr>
                    <td>Jumlah Pembelian</td>
                    <td><input type="number" name="jumlah_pembelian" value="0"></td>
                </tr>
                <tr>
                    <td cosplan="2"><input class="btn btn-danger" type="submit" value="Beli"></td>
                </tr>
            </thead>
        </table>
    </form>
    </div>
</div>
<?php
include "footer.php";
?>