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

    <title>distro CRUD</title>
    <link rel="stylesheet" href="distro.css">
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>distro Details
                            <a href="create.php" class="btn btn-primary float-end">Add distro</a>
                            <a href="index1.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA BARANG</th>
                                    <th>UKURAN BARANG</th>
                                    <th>HARGA BARANG</th>
                                    <th>STOK BARANG</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM distro";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $distro)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $distro['id']; ?></td>
                                                <td><?= $distro['name']; ?></td>
                                                <td><?= $distro['ukuran']; ?></td>
                                                <td><?= $distro['harga']; ?></td>
                                                <td><?= $distro['stok']; ?></td>
                                                <td>
                                                    <a href="distro-view.php?id=<?= $distro['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="distro-edit.php?id=<?= $distro['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_distro" value="<?=$distro['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>