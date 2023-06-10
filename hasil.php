<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Hasil | Profile Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="inputdata.php">Input Data</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="proses.php">Record</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rangking.php">Ranking</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>
        </div>
    </nav>
    <!-- /Navbar -->

    <div class="container"><br><br>


    <!-- Table -->
    <form  role="form" method="post" class="form-inline">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">IPK</th>
                  <th scope="col">Public Speaking</th>
                  <th scope="col">Bahasa Inggris</th>
                  <th scope="col">Daftar Kehadiran</th>
                  <th scope="col">Prestasi</th>
                  <th scope="col">Tingkah Laku</th>
                  <th scope="col">Aktif UKM atau Organisasi</th>
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
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">2</th>
                  <th scope="col">0</th>
                  <th scope="col">0</th>
                  <th scope="col">0</th>
                  <th scope="col">0</th>
                  <th scope="col">0</th>
                  <th scope="col">0</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM gapmhs");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th scope="row"><?php echo $a; ?></th>
                  <td><?php echo $data["nama"];?></td>
                  <td><?php echo $data["gapipk"];?></td>
                  <td><?php echo $data["gapps"];?></td>
                  <td><?php echo $data["gapbing"];?></td>
                  <td><?php echo $data["gapdk"];?></td>
                  <td><?php echo $data["gappres"];?></td>
                  <td><?php echo $data["gaptk"];?></td>
                  <td><?php echo $data["gapukm"];?></td>
                  <td><?php echo $data["gapdisiplin"];?></td>
                  <td><?php echo $data["gapki"];?></td>
                  <td><?php echo $data["gapsmt"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
        </table>
    </form>
    <!-- /Tabel -->

    <!-- Tabel -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Bobot IPK</th>
                <th scope="col">Bobot Public Speaking</th>
                <th scope="col">Bobot Bahasa Inggris</th>
                <th scope="col">Bobot Daftar Kehadiran</th>
                <th scope="col">Bobot Prestasi</th>
                <th scope="col">Bobot Tingkah Laku</th>
                <th scope="col">Bobot Aktif UKM atau Organisasi</th>
                <th scope="col">Bobot Kedisiplinan</th>
                <th scope="col">Bobot Karya Ilmiah</th>
                <th scope="col">Bobot Semester</th>
                <th scope="col">NCF (60%)</th>
                <th scope="col">NSF (40%)</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM hasilmhs");
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
                <td><?php echo $data["ncf"];?></td>
                <td><?php echo $data["nsf"];?></td>
                <td><?php echo $data["hasil"];?></td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Tabel -->

    <br><br>

    <!-- Hapus Record -->
    <form  role="form" method="post" action="rangking.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Perankingan">
        </div>
        <button type="submit" name="submitranking" class="btn btn-info">Ranking!</button>
    </form>
    <!-- /Hapus Record -->

    </div>

</body>
</html>