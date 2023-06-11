<?php
    include "koneksi.php";

    if (isset($_POST['submitdelete'])) {

    $sql=mysqli_query($koneksi,"DELETE FROM mahasiswa;") or die($conn);
    $sql1=mysqli_query($koneksi,"DELETE FROM keteranganmhs;") or die($conn);
    $sql2=mysqli_query($koneksi,"DELETE FROM gapmhs;") or die($conn);
    $sql3=mysqli_query($koneksi,"DELETE FROM hasilmhs;") or die($conn);
    if ($sql && $sql1) {

		echo "<script>window.location='proses.php'</script>";
    }
	}
?>
