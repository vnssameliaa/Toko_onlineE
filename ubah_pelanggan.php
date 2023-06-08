<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mengubah Data Pelanggan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php
    include "koneksi.php";
    $qry_get_pelanggan = mysqli_query($conn, "select * from pelanggan where id_pelanggan = '" . $_GET['id_pelanggan'] . "'");
    $dt_pelanggan = mysqli_fetch_array($qry_get_pelanggan);
    ?>
    <h3>Ubah Pelanggan</h3>
    <form action="proses_ubah_pelanggan.php" method="post">
        <input type="hidden" name="id_pelanggan" value="<?= $dt_pelanggan['id_pelanggan'] ?>">
        Nama Pelanggan :
        <input type="text" name="namapelanggan" value="<?= $dt_pelanggan['nama'] ?>" class="form-control">
        Alamat :
        <input type="text" name="alamat" value="<?= $dt_pelanggan['alamat'] ?>" class="form-control">
        telepon :
        <input type="number" name="telepon" value="<?= $dt_pelanggan['telp'] ?>" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Ubah Pelanggan" class="btn btn-primary">
    </form>

    <script>
        src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity = "sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin = "anonymous" >
    </script>
</body>

</html>