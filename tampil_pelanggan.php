<!DOCTYPE html>
<html lang="en">
<head>
    <link href="" rel="stylesheet" integrity="">
    <title>Document</title>
</head>
<body>
    <br>
    <h3>tampil pelanggan</h3>
    <br>
    <td><a href="tambah_pelanggan.php" class="btn btn-primary">tambah pelanggan</a></td>
    <br>
    <br>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA PELANGGAN</th>
                <th>ALAMAT</th>
                <th>TELEPON</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_pelanggan = mysqli_query($conn, "select* from pelanggan");
            $no = 0;
            while ($data_pelanggan = mysqli_fetch_array($qry_pelanggan)) {
            $no++; ?>
            <tr>
                <td><?= $no ?></td>
                <td>
                    <?= $data_pelanggan['nama'] ?>
                </td>
                <td>
                    <?= $data_pelanggan['alamat'] ?>
                </td>
                <td>
                    <?= $data_pelanggan['telp'] ?>
                </td>
                <td><a href="ubah_pelanggan.php?id_pelanggan=<?= $data_pelanggan['id_pelanggan'] ?>" class="btn btn-succes">ubah</a> 
                <a href="hapus_pelanggan.php?id_pelanggan=<?= $data_pelanggan['id_peelanggan'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                class="btn btn-danger">Hapus</a></td>
            </tr>
              <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min/js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//EIJ19smozuHV6z3Iehds+3U1b9Bn9P1x0x4"
        crossorigin="anonymous"> </script>
</body>
</html>