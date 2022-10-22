<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <titledistro Edit</title>
    <link rel="stylesheet" href="distro.css">
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4distro Edit 
                            <a href="index6.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $distro_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM distro WHERE id='$distro_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $distro = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="distro_id" value="<?= $distro['id']; ?>">

                                    <div class="mb-3">
                                        <label>NAMA BARANG</label>
                                        <input type="text" name="name" value="<?=$distro['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>UKURAN BARANG</label>
                                        <input type="text" name="ukuran" value="<?=$distro['ukuran'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>HARGA BARANG</label>
                                        <input type="number" name="harga" value="<?=$distro['harga'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STOK BARANG</label>
                                        <input type="text" name="stok" value="<?=$distro['stok'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_distro" class="btn btn-primary">
                                            Update                                         </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>