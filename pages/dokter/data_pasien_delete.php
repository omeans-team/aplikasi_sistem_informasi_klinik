<?php 

include('../../assets/config/config.php');

$id=$_GET['id'];


// Attempt delete query execution
//$sql = "DELETE FROM dokter WHERE id='$id'"; khusus satu tabel

$sql = "DELETE pasien, pengguna
FROM pasien
JOIN pengguna
ON pasien.id = pengguna.id
AND pasien.id = '$id'";

if(mysqli_query($db, $sql)){
    echo "<script>alert('Records were deleted successfully.');</script>";
} else{
    echo "<script>alert('ERROR: Could not able to execute $sql.');</script>" . mysqli_error($db);
}


// mengalihkan halaman kembali ke .php
header("Location: data_pasien_read.php");
?>