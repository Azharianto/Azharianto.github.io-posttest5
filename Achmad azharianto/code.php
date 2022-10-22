<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_distro']))
{
    $distro_id = mysqli_real_escape_string($con, $_POST['delete_distro']);

    $query = "DELETE FROM distro WHERE id='$distro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "distro Deleted Successfully";
        header("Location: index6.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "distro Not Deleted";
        header("Location: index6.php");
        exit(0);
    }
}

if(isset($_POST['update_distro']))
{
    $distro_id = mysqli_real_escape_string($con, $_POST['distro_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $ukuran = mysqli_real_escape_string($con, $_POST['ukuran']);
    $harga = mysqli_real_escape_string($con, $_POST['harga']);
    $stok = mysqli_real_escape_string($con, $_POST['stok']);

    $query = "UPDATE distro SET name='$name', ukuran='$ukuran', harga='$harga', stok='$stok' WHERE id='$distro_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "distro Updated Successfully";
        header("Location: index6.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "distro Not Updated";
        header("Location: index6.php");
        exit(0);
    }

}


if(isset($_POST['save_distro']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $ukuran = mysqli_real_escape_string($con, $_POST['ukuran']);
    $harga = mysqli_real_escape_string($con, $_POST['harga']);
    $stok = mysqli_real_escape_string($con, $_POST['stok']);

    $query = "INSERT INTO distro (name,ukuran,harga,stok) VALUES ('$name','$ukuran','$harga','$stok')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "distro Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "distro Not Created";
        header("Location: create.php");
        exit(0);
    }
}

?>