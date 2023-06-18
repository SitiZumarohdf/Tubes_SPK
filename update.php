<?php
include "koneksi.php";

session_start();

if (isset($_POST['submitupdate'])) {
    $jumlah = $_SESSION['jumlahsiswa'];

    for ($a = 1; $a <= $jumlah; $a++) {
        $id = $_POST['id' . $a];
        $nama = $_POST['namasiswa' . $a];
        $nilaiipk = $_POST['ipk' . $a];
        $nilaips = $_POST['pblspeak' . $a];
        $nilaibing = $_POST['big' . $a];
        $nilaidk = $_POST['kehadiran' . $a];
        $nilaipres = $_POST['prestasi' . $a];
        $nilaitk = $_POST['tingkahlaku' . $a];
        $nilaiukm = $_POST['aktiforganisasi' . $a];
        $nilaidisiplin = $_POST['disiplin' . $a];
        $nilaiki = $_POST['kir' . $a];
        $nilaismt = $_POST['smt' . $a];

        $sql = "UPDATE mahasiswa SET
                nama = '$nama',
                ipk = '$nilaiipk',
                `public speaking` = '$nilaips',
                `bahasa inggris` = '$nilaibing',
                `daftar kehadiran` = '$nilaidk',
                prestasi = '$nilaipres',
                `tingkah laku` = '$nilaitk',
                ukm = '$nilaiukm',
                disiplin = '$nilaidisiplin',
                `karya ilmiah` = '$nilaiki',
                semester = '$nilaismt'
            WHERE nama = '$nama'";

        $result = mysqli_query($koneksi, $sql);

        if (!$result) {
            die("Query error: " . mysqli_error($koneksi));
        }
    }

    echo "Data berhasil diupdate!";
}
?>