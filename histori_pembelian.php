<?php
include "header.php";
?>
<h2 class="text-danger">Histori Pembelian Produk</h2>
<table class="table table-hover table-striped table-danger">
    <thead>
        <th>NO</th>
        <th>Tanggal Pembelian</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total</th>
        <th></th>
        </thead>
<tbody>
<?php
include "koneksi.php";
$qry_histori=mysqli_query($conn,"select * from beli_produk order by id_beli_produk desc");
$no=0;
while($dt_histori=mysqli_fetch_array($qry_histori)){
$no++;

//menampilkan buku yang dipinjam

$produk_dibeli="";
$jumlah_dibeli="";
$harga_dibeli="";
$total_dibeli="";
$qry_produk=mysqli_query($conn,"select * from detail_beli_produk join produk on produk.id_produk=detail_beli_produk.id_produk where id_beli_produk ='".$dt_histori['id_beli_produk']."'");
while($dt_produk=mysqli_fetch_array($qry_produk)){
    $produk_dibeli.="".$dt_produk['nama_produk']."";
    $jumlah_dibeli.= $dt_produk['qty'];
    $harga_dibeli.= $dt_produk['harga'];
    $total_dibeli.= $dt_produk['harga'] * $dt_produk['qty'];
}
$produk_dibeli.="";
$jumlah_dibeli.="";
$harga_dibeli.="";
$total_dibeli.="";

// //menampilkan status sudah kembali atau belum

$qry_cek_kembali=mysqli_query($conn,"select * from beli_produk where id_beli_produk ='".$dt_histori['id_beli_produk']."'");
if(mysqli_num_rows($qry_cek_kembali)>0){
$dt_kembali=mysqli_fetch_array($qry_cek_kembali);
// $denda="denda Rp. ".$dt_kembali['denda'];
// $status_kembali="<label class='alert alert-success'>Sudah kembali <br>".$denda."</label>";
$button_kembali="";
} else {

$status_kembali="<label class='alert alert-danger'>Belum kembali</label>";

$button_kembali="<a href='kembali.php?id=".$dt_histori['id_beli_produk']."' class='btnbtn-warning' onclick='return confirm(\"hello\")'>Kembalikan</a>";
}
?>
<tr>
    <td><?=$no?></td>
    <td><?=$dt_histori['tanggal_beli']?></td>
    <td><?=$produk_dibeli?></td>
    <td><?=$jumlah_dibeli?></td>
    <td><?=$harga_dibeli?></td>
    <td><?=$total_dibeli?></td>

    <td><?=$button_kembali?></td>
</tr>
<?php
}
?>
</tbody>
  </table>
<?php
    include "footer.php";
?>