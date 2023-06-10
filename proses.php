<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Proses | Profile Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="inputdata.php">Input Data</a>
            </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="proses.php">Record</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="ranking.php">Ranking</a>
          </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="about.php">About</a>
            </li>
        </ul>
        </div>
    </nav>
    <!-- /Navbar -->

    <div class="container"><br><br>

    <!-- Tambah Data -->
    <form  role="form" method="post" action="inputdata.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Tambah Mahasiswa">
        </div>
        <button type="submit" name="submittambah" class="btn btn-success">Tambah</button>
    </form>
    <!-- /Tambah Data -->

    <!-- Hapus Record -->
    <form  role="form" method="post" action="recorddelete.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Hapus Semua Record">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-danger">Hapus</button>
    </form>
    <!-- /Hapus Record -->

    <?php
        session_start();
        if (isset($_POST['submitform'])) {

            if(isset($_SESSION['jumlahsiswa'])){

                $jumlah = $_SESSION['jumlahsiswa'];
                $nama = array();

                $nilaiipk = array();
                $textipk = array();
                $gapipk = array();
                $bobotipk = array();

                $nilaips = array();
                $textps = array();
                $gapps = array();
                $bobotps = array();

                $nilaibing = array();
                $textbing = array();
                $gapbing = array();
                $bobotbing = array();

                $nilaidk = array();
                $textdk = array();
                $gapdk = array();
                $bobotdk = array();

                $nilaipres = array();
                $textpres = array();
                $gappres = array();
                $bobotpres = array();

                $nilaitk = array();
                $texttk = array();
                $gaptk = array();
                $bobottk = array();

                $nilaiukm = array();
                $textukm = array();
                $gapukm = array();
                $bobotukm = array();

                $nilaidisiplin = array();
                $textdisiplin = array();
                $gapdisiplin = array();
                $bobotdisiplin = array();

                $nilaiki = array();
                $textki = array();
                $gapki = array();
                $bobotki = array();

                $nilaismt = array();
                $textsmt = array();
                $gapsmt = array();
                $bobotsmt = array();

                $ncfsiswa = array();
                $nsfsiswa = array();
                $hasilsiswa = array();

                for($a=1;$a<=$jumlah;$a++) {

        	       $nama[$a] = $_POST['namasiswa'.$a];
                   $nilaiipk[$a] = $_POST['ipk'.$a];
                   $nilaips[$a] = $_POST['pblspeak'.$a];
                   $nilaibing[$a] = $_POST['big'.$a];
                   $nilaidk[$a] = $_POST['kehadiran'.$a];
                   $nilaipres[$a] = $_POST['prestasi'.$a];
                   $nilaitk[$a] = $_POST['tingkahlaku'.$a];
                   $nilaiukm[$a] = $_POST['aktiforganisasi'.$a];
                   $nilaidisiplin[$a] = $_POST['disiplin'.$a];
                   $nilaiki[$a] = $_POST['kir'.$a];
                   $nilaismt[$a] = $_POST['smt'.$a];

                   $sql = mysqli_query($koneksi,"INSERT INTO mahasiswa (`nama`, `ipk`, `public speaking`, `bahasa inggris`,`daftar kehadiran`,`prestasi`,`tingkah laku`,`ukm`,`disiplin`, `karya ilmiah`,`semester`) 
                   VALUES('$nama[$a]','$nilaiipk[$a]','$nilaips[$a]','$nilaibing[$a]', '$nilaidk[$a]', '$nilaipres[$a]', '$nilaitk[$a]', '$nilaiukm[$a]', '$nilaidisiplin[$a]', '$nilaiki[$a]', '$nilaismt[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($nilaiipk[$a] == "1"){
                        $textipk[$a] = "< 2,5 ";
                    } elseif ($nilaiipk[$a] == "2") {
                        $textipk[$a] = ">2,5 dan <= 3";
                    } elseif ($nilaiipk[$a] == "3") {
                        $textipk[$a] = ">3 dan <= 3,5";
                    } else {
                        $textipk[$a] = "> 3,5";
                    }

                    if ($nilaips[$a] == "4"){
                        $textps[$a] = "Sangat Baik";
                    } elseif ($nilaips[$a] == "3") {
                        $textps[$a] = "Baik";
                    } elseif ($nilaips[$a] == "2") {
                        $textps[$a] = "Cukup";
                    } else {
                        $textps[$a] = "Kurang";
                    }

                    if ($nilaibing[$a] == "4"){
                        $textbing[$a] = "Sangat Baik";
                    } elseif ($nilaibing[$a] == "3") {
                        $textbing[$a] = "Baik";
                    } elseif ($nilaibing[$a] == "2") {
                        $textbing[$a] = "Cukup";
                    } else {
                        $textbing[$a] = "Kurang";
                    }

                    if ($nilaidk[$a] == "4"){
                        $textdk[$a] = "Sangat Baik";
                    } elseif ($nilaidk[$a] == "3") {
                        $textdk[$a] = "Baik";
                    } elseif ($nilaidk[$a] == "2") {
                        $textdk[$a] = "Cukup";
                    } else {
                        $textdk[$a] = "Kurang";
                    }

                    if ($nilaipres[$a] == "4"){
                        $textpres[$a] = ">=8";
                    } elseif ($nilaipres[$a] == "3") {
                        $textpres[$a] = "5-7";
                    } elseif ($nilaipres[$a] == "2") {
                        $textpres[$a] = "2-4";
                    } else {
                        $textpres[$a] = "<=1";
                    }

                    if ($nilaitk[$a] == "4"){
                        $texttk[$a] = "Sangat Baik";
                    } elseif ($nilaitk[$a] == "3") {
                        $texttk[$a] = "Baik";
                    } elseif ($nilaitk[$a] == "2") {
                        $texttk[$a] = "Cukup";
                    } else {
                        $texttk[$a] = "Kurang";
                    }

                    if ($nilaiukm[$a] == "4"){
                        $textukm[$a] = "Sangat Baik";
                    } elseif ($nilaiukm[$a] == "3") {
                        $textukm[$a] = "Baik";
                    } elseif ($nilaiukm[$a] == "2") {
                        $textukm[$a] = "Cukup";
                    } else {
                        $textukm[$a] = "Kurang";
                    }

                    if ($nilaidisiplin[$a] == "4"){
                        $textdisiplin[$a] = "Sangat Baik";
                    } elseif ($nilaidisiplin[$a] == "3") {
                        $textdisiplin[$a] = "Baik";
                    } elseif ($nilaidisiplin[$a] == "2") {
                        $textdisiplin[$a] = "Cukup";
                    } else {
                        $textdisiplin[$a] = "Kurang";
                    }

                    if ($nilaiki[$a] == "4"){
                        $textki[$a] = "Sangat Baik";
                    } elseif ($nilaiki[$a] == "3") {
                        $textki[$a] = "Baik";
                    } elseif ($nilaiki[$a] == "2") {
                        $textki[$a] = "Cukup";
                    } else {
                        $textki[$a] = "Kurang";
                    }

                    if ($nilaismt[$a] == "0"){
                        $textsmt[$a] = "<=2 / >8";
                    } elseif ($nilaismt[$a] == "1") {
                        $textsmt[$a] = "3";
                    } elseif ($nilaismt[$a] == "2") {
                        $textsmt[$a] = "4";
                    } elseif ($nilaismt[$a] == "3") {
                        $textsmt[$a] = "5, 6";
                    } else {
                        $textsmt[$a] = "7, 8";
                    }

                    $sql = mysqli_query($koneksi,"INSERT INTO keteranganmhs (nama, ket_ipk, ket_ps, ket_bing, ket_dk, ket_pres, ket_tk, ket_ukm, ket_disiplin, ket_ki, ket_smt) 
                    VALUES('$nama[$a]','$textipk[$a]','$textps[$a]','$textbing[$a]','$textdk[$a]', '$textpres[$a]', '$texttk[$a]', '$textukm[$a]', '$textdisiplin[$a]', '$textki[$a]', '$textsmt[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {
                    
                    $nama[$a] = $_POST['namasiswa'.$a];
                    $gapipk[$a] = $nilaiipk[$a] - 4;
                    $gapps[$a] = $nilaips[$a] - 4;
                    $gapbing[$a] = $nilaibing[$a] - 4;
                    $gapdk[$a] = $nilaidk[$a] - 3;
                    $gappres[$a] = $nilaipres[$a] - 3;
                    $gaptk[$a] = $nilaitk[$a] - 4;
                    $gapukm[$a] = $nilaiukm[$a] - 5;
                    $gapdisiplin[$a] = $nilaidisiplin[$a] - 4;
                    $gapki[$a] = $nilaiki[$a] - 4;
                    $gapsmt[$a] = $nilaismt[$a] - 3;

                    $sql = mysqli_query($koneksi,"INSERT INTO gapmhs (nama, gapipk, gapps, gapbing, gapdk, gappres, gaptk, gapukm, gapdisiplin, gapki, gapsmt) 
                    VALUES('$nama[$a]','$gapipk[$a]','$gapps[$a]','$gapbing[$a]', '$gapdk[$a]', '$gappres[$a]', '$gaptk[$a]', '$gapukm[$a]', '$gapdisiplin[$a]', '$gapki[$a]', '$gapsmt[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($gapipk[$a] == "0"){
                        $bobotipk[$a] = "5";
                    } elseif ($gapipk[$a] == "1") {
                        $bobotipk[$a] = "4.5";
                    } elseif ($gapipk[$a] == "-1") {
                        $bobotipk[$a] = "4";
                    } elseif ($gapipk[$a] == "2") {
                        $bobotipk[$a] = "3.5";
                    } elseif ($gapipk[$a] == "-2") {
                        $bobotipk[$a] = "3";
                    } elseif ($gapipk[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapipk[$a] == "-3") {
                        $bobotipk[$a] = "2";
                    } elseif ($gapipk[$a] == "4") {
                        $bobotipk[$a] = "1.5";
                    } else {
                        $bobotipk[$a] = "1";
                    }

                    if ($gapps[$a] == "0"){
                        $bobotps[$a] = "5";
                    } elseif ($gapps[$a] == "1") {
                        $bobotps[$a] = "4.5";
                    } elseif ($gapps[$a] == "-1") {
                        $bobotps[$a] = "4";
                    } elseif ($gapps[$a] == "2") {
                        $bobotps[$a] = "3.5";
                    } elseif ($gapps[$a] == "-2") {
                        $bobotps[$a] = "3";
                    } elseif ($gapps[$a] == "3") {
                        $bobotps[$a] = "2.5";
                    } elseif ($gapps[$a] == "-3") {
                        $bobotps[$a] = "2";
                    } elseif ($gapps[$a] == "4") {
                        $bobotps[$a] = "1.5";
                    } else {
                        $bobotps[$a] = "1";
                    }

                    if ($gapbing[$a] == "0"){
                        $bobotbing[$a] = "5";
                    } elseif ($gapbing[$a] == "1") {
                        $bobotbing[$a] = "4.5";
                    } elseif ($gapbing[$a] == "-1") {
                        $bobotbing[$a] = "4";
                    } elseif ($gapbing[$a] == "2") {
                        $bobotbing[$a] = "3.5";
                    } elseif ($gapbing[$a] == "-2") {
                        $bobotbing[$a] = "3";
                    } elseif ($gapbing[$a] == "3") {
                        $bobotbing[$a] = "2.5";
                    } elseif ($gapbing[$a] == "-3") {
                        $bobotbing[$a] = "2";
                    } elseif ($gapbing[$a] == "4") {
                        $bobotbing[$a] = "1.5";
                    } else {
                        $bobotbing[$a] = "1";
                    }

                    if ($gapdk[$a] == "0"){
                        $bobotdk[$a] = "5";
                    } elseif ($gapdk[$a] == "1") {
                        $bobotdk[$a] = "4.5";
                    } elseif ($gapdk[$a] == "-1") {
                        $bobotdk[$a] = "4";
                    } elseif ($gapdk[$a] == "2") {
                        $bobotdk[$a] = "3.5";
                    } elseif ($gapdk[$a] == "-2") {
                        $bobotdk[$a] = "3";
                    } elseif ($gapdk[$a] == "3") {
                        $bobotdk[$a] = "2.5";
                    } elseif ($gapdk[$a] == "-3") {
                        $bobotdk[$a] = "2";
                    } elseif ($gapdk[$a] == "4") {
                        $bobotdk[$a] = "1.5";
                    } else {
                        $bobotdk[$a] = "1";
                    }

                    if ($gappres[$a] == "0"){
                        $bobotpres[$a] = "5";
                    } elseif ($gappres[$a] == "1") {
                        $bobotpres[$a] = "4.5";
                    } elseif ($gappres[$a] == "-1") {
                        $bobotpres[$a] = "4";
                    } elseif ($gappres[$a] == "2") {
                        $bobotpres[$a] = "3.5";
                    } elseif ($gappres[$a] == "-2") {
                        $bobotpres[$a] = "3";
                    } elseif ($gappres[$a] == "3") {
                        $bobotpres[$a] = "2.5";
                    } elseif ($gappres[$a] == "-3") {
                        $bobotpres[$a] = "2";
                    } elseif ($gappres[$a] == "4") {
                        $bobotpres[$a] = "1.5";
                    } else {
                        $bobotpres[$a] = "1";
                    }

                    if ($gaptk[$a] == "0"){
                        $bobottk[$a] = "5";
                    } elseif ($gaptk[$a] == "1") {
                        $bobottk[$a] = "4.5";
                    } elseif ($gaptk[$a] == "-1") {
                        $bobottk[$a] = "4";
                    } elseif ($gaptk[$a] == "2") {
                        $bobottk[$a] = "3.5";
                    } elseif ($gaptk[$a] == "-2") {
                        $bobottk[$a] = "3";
                    } elseif ($gaptk[$a] == "3") {
                        $bobottk[$a] = "2.5";
                    } elseif ($gaptk[$a] == "-3") {
                        $bobottk[$a] = "2";
                    } elseif ($gaptk[$a] == "4") {
                        $bobottk[$a] = "1.5";
                    } else {
                        $bobottk[$a] = "1";
                    }

                    if ($gapukm[$a] == "0"){
                        $bobotukm[$a] = "5";
                    } elseif ($gapukm[$a] == "1") {
                        $bobotukm[$a] = "4.5";
                    } elseif ($gapukm[$a] == "-1") {
                        $bobotukm[$a] = "4";
                    } elseif ($gapukm[$a] == "2") {
                        $bobotukm[$a] = "3.5";
                    } elseif ($gapukm[$a] == "-2") {
                        $bobotukm[$a] = "3";
                    } elseif ($gapukm[$a] == "3") {
                        $bobotukm[$a] = "2.5";
                    } elseif ($gapukm[$a] == "-3") {
                        $bobotukm[$a] = "2";
                    } elseif ($gapukm[$a] == "4") {
                        $bobotukm[$a] = "1.5";
                    } else {
                        $bobotukm[$a] = "1";
                    }

                    if ($gapdisiplin[$a] == "0"){
                        $bobotdisiplin[$a] = "5";
                    } elseif ($gapdisiplin[$a] == "1") {
                        $bobotdisiplin[$a] = "4.5";
                    } elseif ($gapdisiplin[$a] == "-1") {
                        $bobotdisiplin[$a] = "4";
                    } elseif ($gapdisiplin[$a] == "2") {
                        $bobotdisiplin[$a] = "3.5";
                    } elseif ($gapdisiplin[$a] == "-2") {
                        $bobotdisiplin[$a] = "3";
                    } elseif ($gapdisiplin[$a] == "3") {
                        $bobotdisiplin[$a] = "2.5";
                    } elseif ($gapdisiplin[$a] == "-3") {
                        $bobotdisiplin[$a] = "2";
                    } elseif ($gapdisiplin[$a] == "4") {
                        $bobotdisiplin[$a] = "1.5";
                    } else {
                        $bobotdisiplin[$a] = "1";
                    }

                    if ($gapki[$a] == "0"){
                        $bobotki[$a] = "5";
                    } elseif ($gapki[$a] == "1") {
                        $bobotki[$a] = "4.5";
                    } elseif ($gapki[$a] == "-1") {
                        $bobotki[$a] = "4";
                    } elseif ($gapki[$a] == "2") {
                        $bobotki[$a] = "3.5";
                    } elseif ($gapki[$a] == "-2") {
                        $bobotki[$a] = "3";
                    } elseif ($gapki[$a] == "3") {
                        $bobotki[$a] = "2.5";
                    } elseif ($gapki[$a] == "-3") {
                        $bobotki[$a] = "2";
                    } elseif ($gapki[$a] == "4") {
                        $bobotki[$a] = "1.5";
                    } else {
                        $bobotki[$a] = "1";
                    }

                    if ($gapsmt[$a] == "0"){
                        $bobotsmt[$a] = "5";
                    } elseif ($gapsmt[$a] == "1") {
                        $bobotsmt[$a] = "4.5";
                    } elseif ($gapsmt[$a] == "-1") {
                        $bobotsmt[$a] = "4";
                    } elseif ($gapsmt[$a] == "2") {
                        $bobotsmt[$a] = "3.5";
                    } elseif ($gapsmt[$a] == "-2") {
                        $bobotsmt[$a] = "3";
                    } elseif ($gapsmt[$a] == "3") {
                        $bobotipk[$a] = "2.5";
                    } elseif ($gapsmt[$a] == "-3") {
                        $bobotsmt[$a] = "2";
                    } elseif ($gapsmt[$a] == "4") {
                        $bobotsmt[$a] = "1.5";
                    } else {
                        $bobotsmt[$a] = "1";
                    }

                    $ncfsiswa[$a] = (($bobotipk[$a]) + ($bobotps[$a]) + ($bobotpres[$a]) + ($bobotki[$a]) + ($bobotbing[$a]) + ($bobotdk[$a]))/6;
                    $nsfsiswa[$a] = (($bobotsmt[$a]) + ($bobottk[$a]) + ($bobotukm[$a]) + ($bobotdisiplin[$a]))/4;
                    $hasilsiswa[$a] = (0.6 * $ncfsiswa[$a]) + (0.4 * $nsfsiswa[$a]);

                    $sql = mysqli_query($koneksi,"INSERT INTO hasilmhs (nama, bobotipk, bobotps, bobotbing, bobotdk, bobotpres, bobottk, bobotukm, bobotdisiplin, bobotki, bobotsmt, ncf, nsf, hasil) 
                    VALUES('$nama[$a]','$bobotipk[$a]','$bobotps[$a]','$bobotbing[$a]', '$bobotdk[$a]', '$bobotpres[$a]', '$bobottk[$a]', '$bobotukm[$a]', '$bobotdisiplin[$a]', '$bobotki[$a]', '$bobotsmt[$a]','$ncfsiswa[$a]','$nsfsiswa[$a]','$hasilsiswa[$a]')") or die (mysqli_error($koneksi));

                }

    ?>

    <!-- TUTUP -->
    <?php
            }
        }
    ?>
    <!-- /TUTUP -->
    <br><br>
    <!-- Table -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">IPK</th>
              <th scope="col">Public Speaking</th>
              <th scope="col">Bahasa Inggris</th>
              <th scope="col">Daftar Kehadiran</th>
              <th scope="col">Prestasi</th>
              <th scope="col">Tingkah Laku</th>
              <th scope="col">UKM</th>
              <th scope="col">Kedisiplinan</th>
              <th scope="col">Karya Ilmiah</th>
              <th scope="col">Semester</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query1 = mysqli_query($koneksi,"SELECT * FROM keteranganmhs");
                if(mysqli_num_rows($query1)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query1)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["ket_ipk"];?></td>
                <td><?php echo $data["ket_ps"];?></td>
                <td><?php echo $data["ket_bing"];?></td>
                <td><?php echo $data["ket_dk"];?></td>
                <td><?php echo $data["ket_pres"];?></td>
                <td><?php echo $data["ket_tk"];?></td>
                <td><?php echo $data["ket_ukm"];?></td>
                <td><?php echo $data["ket_disiplin"];?></td>
                <td><?php echo $data["ket_ki"];?></td>
                <td><?php echo $data["ket_smt"];?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                       <!-- <button type="button" class="btn btn-danger" onclick="window.location.href='delete.php?id=<?php echo $data['nama']; ?>'">Hapus</button>-->
                       <button class="btn btn-danger" onclick="window.location.href='delete.php?id=<?php echo $data['nama']; ?>'"><i class="fa fa-trash"></i></button>
                    </div>
                </td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
            </tbody>
    </table>
    <!-- /Tabel -->


    <br><br>


    <!-- Table -->
    <form  role="form" method="post" action="hasil.php" class="form-inline">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">IPK</th>
                  <th scope="col">Public Speaking</th>
                  <th scope="col">Bahasa Inggris</th>
                  <th scope="col">Daftar Kehadiran</th>
                  <th scope="col">Prestasi</th>
                  <th scope="col">Tingkah Laku</th>
                  <th scope="col">UKM</th>
                  <th scope="col">Kedisiplinan</th>
                  <th scope="col">Karya Ilmiah</th>
                  <th scope="col">Semester</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th scope="row"><?php echo $a; ?></th>
                  <td><?php echo $data["nama"];?></td>
                  <td><?php echo $data["ipk"];?></td>
                  <td><?php echo $data["public speaking"];?></td>
                  <td><?php echo $data["bahasa inggris"];?></td>
                  <td><?php echo $data["daftar kehadiran"];?></td>
                  <td><?php echo $data["prestasi"];?></td>
                  <td><?php echo $data["tingkah laku"];?></td>
                  <td><?php echo $data["ukm"];?></td>
                  <td><?php echo $data["disiplin"];?></td>
                  <td><?php echo $data["karya ilmiah"];?></td>
                  <td><?php echo $data["semester"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <thead class="thead-dark">
                <tr>
                  <th scope="col">GAP</th>
                  <th scope="col"></th>
                  <th scope="col">4</th>
                  <th scope="col">4</th>
                  <th scope="col">4</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">4</th>
                  <th scope="col">5</th>
                  <th scope="col">4</th>
                  <th scope="col">4</th>
                  <th scope="col">3</th>
                </tr>
            </thead>
        </table>
        <button type="submit" name="hitunggap" class="btn btn-primary mb-2">Hitung</button>
    </form>
    <!-- /Tabel -->

    </div>

</body>
</html>