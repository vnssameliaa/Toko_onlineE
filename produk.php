<?php
    include "header.php";
?>
<h2 class="text-danger">Daftar Produk</h2>
<div class="row">
    <?php
    include "koneksi.php";
    $qry_produk = mysqli_query($conn, "select * from produk");
    while ($dt_produk = mysqli_fetch_array($qry_produk)) {
     ?>
        <div class="col-md-3">
            <div class="card" >
                <img src="assets/<?= $dt_produk['foto_produk'] ?>"class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $dt_produk['nama_produk'] ?></h5>
                    <h6 class="card-number"><?= $dt_produk['harga'] ?></h6>
                    <a
        href="beli_produk.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="btn btn-danger">Beli</a>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>
</div>
<?php
    include "footer.php";
?>