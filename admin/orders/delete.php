<?php
// include config connection file
include_once("../../config.php");
include('session.php');

//ambil id dari url
$id = $_GET['id'];

//hapus data dari database
$hapus = mysqli_query($mysqli, "DELETE FROM orders WHERE id =
'$id'");
//cek apakah proses hapus data berhasil
if ($hapus) {
    //jika berhasil tampilkan pesan berhasil hapus data
    echo "<script>
 alert('Data Berhasil Dihapus');
 </script>";
 header("Location:../dashboard.php?page=orders");
} else {
    //jika gagal tampilkan pesan gagal hapus data
    echo "<script>
 alert('Data Gagal Dihapus');
 </script>";
 header("Location:../dashboard.php?page=orders");
}

?>
