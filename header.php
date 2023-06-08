<?php
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/disct/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384- + OnOxVW2e5R5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCx"> 
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar -expand-lg navbar-light bg-light" style="box-shadow : 4px 4px 5px -4px;">
     <div class="container-fluid">
        <a class="navbar -brand text-primary" href="#">TOKO ONLINE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="colapse" data-bs-target="#navbarNav" 
        aria-controls="narbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-colapse" id="navbarNav">
            <ul class="navbar -nav">
                <li class="nav-item">
                    <a class="nav-link active text-danger" aria-current="page"
                    href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a clas="nav-link text-danger" aria-current="page"
                     href="produk.php">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" aria-current="page"
                    href="histori_pembelian.php">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" aria-current="page"
                    href="login.php">Login</a>
                </li>
            </ul>
        </div>
     </div>
</nav>
<div class="container bg-light rounded" style="margin: top 10px"></div>
</body>
</html>