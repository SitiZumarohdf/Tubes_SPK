<?php
include "koneksi.php";
?>

<html>

<head>
	<title>Input | Profile Matching</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-success font-weight-bold">
		<a class="navbar-brand text-white" href="index.php">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link text-white" href="inputdata.php">Input Data</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="inputdata.php">Update Data</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="proses.php">Record</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="ranking.php">Ranking</a>
				</li>
				<li class="nav-item text-white">
					<a class="nav-link text-white" href="about.php">About</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- /Navbar -->

	<div class="container"><br><br>


		<!-- Form awal -->
		<form role="form" method="post" class="form-inline" class="animated infinite zoomIn delay-2s">
			<div class="form-group mb-2">
				<label class="sr-only"></label>
				<input type="text" readonly class="form-control-plaintext font-weight-bold" value="Jumlah Mahasiswa">
			</div>
			<div class="form-group mx-sm-3 mb-2">
				<select name="jmlsiswa" class="form-control" id="exampleFormControlSelect1">
					<option>Choose</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</div>
			<button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
		</form>
		<!-- /Form -->


		<!-- Form -->
		<?php
		if (isset($_POST['submit'])) {
			?>
			<form role="form" method="post" action="proses.php"><br>
				<?php
				session_start();
				$jumlah = $_POST['jmlsiswa'];
				$_SESSION['jumlahsiswa'] = $jumlah;
				for ($a = 1; $a <= $jumlah; $a++) {
					?>
					<div class="col-sm-6 offset-sm-3">
						<div class="form-group ">
							<label><b>Mahasiswa ke
									<?php echo $a; ?>
								</b></label><br>
							<label class="font-weight-bold" for="exampleFormControlInput1">Nama Mahasiswa</label>
							<input class="form-control" placeholder="Nama Mahasiswa" name="namasiswa<?php echo $a; ?>"
								autocomplete="off">
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="exampleFormControlSelect1">IPK</label>
							<select name="ipk<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect1">
								<option>----Select an option----</option>
								<option value="1">
									<=2,5 </option>
								<option value="2">>2,5 - <=3< /option>
								<option value="3">>3 - <=3,5< /option>
								<option value="4">>3,5</option>
							</select>
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="exampleFormControlSelect2">Public Speaking</label>
							<select name="pblspeak<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
								<option>----Select an option----</option>
								<option value="4">Sangat Baik</option>
								<option value="3">Baik</option>
								<option value="2">Cukup</option>
								<option value="1">Kurang</option>
							</select>
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="exampleFormControlSelect2">Bahasa Inggris</label>
							<select name="big<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
								<option>----Select an option----</option>
								<option value="4">Sangat Baik</option>
								<option value="3">Baik</option>
								<option value="2">Cukup</option>
								<option value="1">Kurang</option>
							</select>
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="exampleFormControlSelect2">Semester</label>
							<select name="smt<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
								<option>----Select an option----</option>
								<option value="1">1 - 2</option>
								<option value="2">3 - 4</option>
								<option value="3">5 - 6</option>
								<option value="4">7 - 8</option>
							</select>
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="exampleFormControlSelect2">Daftar Kehadiran</label>
							<select name="kehadiran<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
								<option>----Select an option----</option>
								<option value="4">Sangat Baik</option>
								<option value="3">Baik</option>
								<option value="2">Cukup</option>
								<option value="1">Kurang</option>
							</select>
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="exampleFormControlSelect2">Prestasi Akademin &
								Nonakademik</label>
							<select name="prestasi<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
								<option>----Select an option----</option>
								<option value="4">>=8</option>
								<option value="3">5-7</option>
								<option value="2">2-4</option>
								<option value="1">
									<=1< /option>
							</select>
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="exampleFormControlSelect2">Tingkah Laku</label>
							<select name="tingkahlaku<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
								<option>----Select an option----</option>
								<option value="4">Sangat Baik</option>
								<option value="3">Baik</option>
								<option value="2">Cukup</option>
								<option value="1">Kurang</option>
							</select>
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="exampleFormControlSelect2">Keaktifan Organisasi</label>
							<select name="aktiforganisasi<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
								<option>----Select an option----</option>
								<option value="4">Sangat Baik</option>
								<option value="3">Baik</option>
								<option value="2">Cukup</option>
								<option value="1">Kurang</option>
							</select>
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="exampleFormControlSelect2">Kedisiplinan</label>
							<select name="disiplin<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
								<option>----Select an option----</option>
								<option value="4">Sangat Baik</option>
								<option value="3">Baik</option>
								<option value="2">Cukup</option>
								<option value="1">Kurang</option>
							</select>
						</div>
						<div class="form-group">
							<label class="font-weight-bold" for="exampleFormControlSelect2">Karya Ilmiah</label>
							<select name="kir<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
								<option>----Select an option----</option>
								<option value="4">Sangat Baik</option>
								<option value="3">Baik</option>
								<option value="2">Cukup</option>
								<option value="1">Kurang</option>
							</select>
						</div>
						<br>
					<?php } ?>
					<button type="submit" name="submitform" class="btn btn-primary"
						style="display: block; margin:0 auto">Submit</button><br>
			</form>
		<?php } ?>
		<!-- /Form -->
	</div>
	</div>

</body>

</html>