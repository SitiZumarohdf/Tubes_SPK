<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Ranking | Profile Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success font-weight-bold">
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
    <h5 class="font-weight-bold">Ranking</h5>
    <!-- Tabel Ranking -->
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">Nama</th>
                <th scope="col">Bobot IPK</th>
                <th scope="col">Bobot Public Speaking</th>
                <th scope="col">Bobot Bahasa Inggris</th>
                <th scope="col">Bobot Daftar Kehadiran</th>
                <th scope="col">Bobot Prestasi</th>
                <th scope="col">Bobot Tingkah Laku</th>
                <th scope="col">Bobot UKM</th>
                <th scope="col">Bobot Kedisiplinan</th>
                <th scope="col">Bobot Karya Ilmiah</th>
                <th scope="col">Bobot Semester</th>
                <th scope="col">NA (35%)</th>
                <th scope="col">NKK (25%)</th>
                <th scope="col">NP (20%)</th>
                <th scope="col">NPP (20%)</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM hasilmhs ORDER BY hasil DESC");
                if(mysqli_num_rows($query)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["bobotipk"];?></td>
                <td><?php echo $data["bobotps"];?></td>
                <td><?php echo $data["bobotbing"];?></td>
                <td><?php echo $data["bobotdk"];?></td>
                <td><?php echo $data["bobotpres"];?></td>
                <td><?php echo $data["bobottk"];?></td>
                <td><?php echo $data["bobotukm"];?></td>
                <td><?php echo $data["bobotdisiplin"];?></td>
                <td><?php echo $data["bobotki"];?></td>
                <td><?php echo $data["bobotsmt"];?></td>
                <td><?php echo $data["na"];?></td>
                <td><?php echo $data["nkk"];?></td>
                <td><?php echo $data["np"];?></td>
                <td><?php echo $data["npp"];?></td>
                <td><?php echo $data["hasil"];?></td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Tabel Ranking --><br>

    <?php 
        $query = mysqli_query($koneksi,"SELECT * FROM hasilmhs ORDER BY hasil DESC LIMIT 1");
        if(mysqli_num_rows($query)>0){ 
    ?>
    <?php
        $a = 1;
        while($data = mysqli_fetch_array($query)){
    ?>

    <div class="alert alert-primary" role="alert">
        Mahasiswa dengan Nama <b style="font-size: 15pt;"><?php echo $data["nama"];?></b> Menjadi Urutan Pertama dalam Pemilihan Mahasiswa Terbaik dengan Nilai Akhir <b style="font-size: 15pt;"><?php echo $data["hasil"];?></b>.
    </div>
    <!-- <h4>Mahasiswa dengan nama <mark><?php echo $data["nama"];?></mark> menjadi urutan pertama Mahasiswa Terbaik.</h4> -->

    <?php $a++; } ?>
    <?php } ?>

    </div>

</body>
</html>