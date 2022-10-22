<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>distro Create</title>
    <link rel="stylesheet" href="distro.css">
</head>
<body>
  
    <div class="container mt-5">    

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>distro Add 
                            <a href="index6.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>NAMA BARANG</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>UKURAN BARANG</label>
                                <input type="text" name="ukuran" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>HARGA BARANG </label>
                                <input type="number" name="harga" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>STOK</label>
                                <input type="text" name="stok" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_distro" class="btn btn-primary">Save </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>