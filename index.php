<html>

<head>
	<title>Home | Profile Matching</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

	<!-- Container -->
	<div class="container"><br><br>

		<h2>
			<b>Sistem Pendukung Keputusan Pemilihan Mahasiswa Terbaik</b>
		</h2>

		<p style="text-align: justify;">
		</p>

		<p>
		</p>

		<ul class="list-unstyled">
			<li><b>Core factor (60%) :</b>
				<ul>
					<li>IPK</li>
					<li>Public Speaking</li>
					<li>Prestasi</li>
					<li>Karya Ilmiah</li>
					<li>Bahasa Inggris</li>
					<li>Daftar Kehadiran</li>
				</ul>
			</li>
			<li><b>Secondar factor (40%) :</b>
				<ul>
					<li>Tingkah Laku</li>
					<li>Aktif UKM atau HMJ</li>
					<li>Kedisiplinan</li>
					<li>Semester</li>
				</ul>
			</li>
		</ul>

		<!-- IPK -->
		<dl class="row">
			<dt class="col-sm-1">1.</dt>
			<dd class="col-sm-11"><b>IPK</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan, berdasarkan jumlah nilai
				IPK yang diperoleh oleh mahasiswa selama studi berlangsung.
			</dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">IPK</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								< 2,5</td>
							<th scope="row">1</th>
						</tr>
						<tr>
							<td>>2,5 dan <= 3 </td>
							<th scope="row">2</th>
						</tr>
						<tr>
							<td>>3 dan <= 3,5 </td>
							<th scope="row">3</th>
						</tr>
						<tr>
							<td>> 3,5</td>
							<th scope="row">4</th>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
		<!-- /IPK -->

		<!-- Public Speaking -->
		<dl class="row">
			<dt class="col-sm-1">2.</dt>
			<dd class="col-sm-11"><b>Public Speaking</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Kriteria Public Speaking untuk mengukur kemampuan mahasiswa dalam berbicara di depan umum
			</dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Public Speaking</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Jumlah 1</td>
							<th scope="row">1</th>
						</tr>
						<tr>
							<td>Jumlah 2</td>
							<th scope="row">2</th>
						</tr>
						<tr>
							<td>Jumlah 3</td>
							<th scope="row">3</th>
						</tr>
						<tr>
							<td>Jumlah >3 </td>
							<th scope="row">4</th>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
		<!-- /Public Speaking -->

		<!-- Prestasi -->
		<dl class="row">
			<dt class="col-sm-1">3.</dt>
			<dd class="col-sm-11"><b>Prestasi</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Kriteria Prestasi untuk mengukur jumlah prestasi yang telah diraih oleh mahasiswa.
			</dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Prestasi</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Jumlah 1</td>
							<th scope="row">1</th>
						</tr>
						<tr>
							<td>Jumlah 2</td>
							<th scope="row">2</th>
						</tr>
						<tr>
							<td>Jumlah 3</td>
							<th scope="row">3</th>
						</tr>
						<tr>
							<td>Jumlah >3 </td>
							<th scope="row">4</th>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
		<!-- /Prestasi -->

		<!-- Karya Ilmiah-->
		<dl class="row">
			<dt class="col-sm-1">4.</dt>
			<dd class="col-sm-11"><b>Karya Ilmiah</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Kriteria Karya Ilmiah untuk mengukur jumlah karya ilmiah yang telah dihasilkan oleh mahasiswa
			</dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Karya Ilmiah</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Jumlah 1</td>
							<th scope="row">1</th>
						</tr>
						<tr>
							<td>Jumlah 2</td>
							<th scope="row">2</th>
						</tr>
						<tr>
							<td>Jumlah 3</td>
							<th scope="row">3</th>
						</tr>
						<tr>
							<td>Jumlah >3 </td>
							<th scope="row">4</th>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
		<!-- /Karya Ilmiah -->

		<!-- Bahasa Inggris -->
		<dl class="row">
			<dt class="col-sm-1">5.</dt>
			<dd class="col-sm-11"><b>Bahasa Inggris</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Kriteria Bahasa Inggris untuk mengukur kemampuan mahasiswa dalam berbahasa Inggris.
			</dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Bahasa Inggris</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Jumlah 1</td>
							<th scope="row">1</th>
						</tr>
						<tr>
							<td>Jumlah 2</td>
							<th scope="row">2</th>
						</tr>
						<tr>
							<td>Jumlah 3</td>
							<th scope="row">3</th>
						</tr>
						<tr>
							<td>Jumlah >3 </td>
							<th scope="row">4</th>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
		<!-- /Bahasa Inggris -->

		<!-- Daftar Kehadiran -->
		<dl class="row">
			<dt class="col-sm-1">6.</dt>
			<dd class="col-sm-11"><b>Daftar Kehadiran</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Kriteria Daftar Kehadiran untuk mengukur jumlah kehadiran mahasiswa.
			</dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Daftar Kehadiran</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Jumlah 1</td>
							<th scope="row">1</th>
						</tr>
						<tr>
							<td>Jumlah 2</td>
							<th scope="row">2</th>
						</tr>
						<tr>
							<td>Jumlah 3</td>
							<th scope="row">3</th>
						</tr>
						<tr>
							<td>Jumlah >3 </td>
							<th scope="row">4</th>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
		<!-- /Daftar Kehadiran -->

		<!--Tingkah Laku -->
		<dl class="row">
			<dt class="col-sm-1">7.</dt>
			<dd class="col-sm-11"><b>Tingkah Laku</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Kriteria Tingkah Laku untuk mengukur tingkah laku mahasiswa
			</dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Tingkah Laku</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Jumlah 1</td>
							<th scope="row">1</th>
						</tr>
						<tr>
							<td>Jumlah 2</td>
							<th scope="row">2</th>
						</tr>
						<tr>
							<td>Jumlah 3</td>
							<th scope="row">3</th>
						</tr>
						<tr>
							<td>Jumlah >3 </td>
							<th scope="row">4</th>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
		<!-- /Tingkah Laku -->

		<!-- Keaktifan Mengkuti UKM atau HMJ -->
		<dl class="row">
			<dt class="col-sm-1">8.</dt>
			<dd class="col-sm-11"><b>Keaktifan Mengkuti UKM atau HMJ</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Kriteria Keaktifan Mengkuti UKM atau HMJ untuk mengukur tingkat keaktifan mahasiswa dalam mengikuti
				kegiatan organisasi seperti Unit Kegiatan Mahasiswa (UKM) atau Himpunan Mahasiswa Jurusan (HMJ)
			</dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Keaktifan Mengkuti UKM atau HMJ</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Jumlah 1</td>
							<th scope="row">1</th>
						</tr>
						<tr>
							<td>Jumlah 2</td>
							<th scope="row">2</th>
						</tr>
						<tr>
							<td>Jumlah 3</td>
							<th scope="row">3</th>
						</tr>
						<tr>
							<td>Jumlah >3 </td>
							<th scope="row">4</th>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
		<!-- /Keaktifan Mengkuti UKM atau HMJ -->

		<!--Kedisiplinan -->
		<dl class="row">
			<dt class="col-sm-1">9.</dt>
			<dd class="col-sm-11"><b>Kedisiplinan</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Kriteria Kedisiplinan mengacu pada tingkat keteraturan, ketertiban, dan kepatuhan mahasiswa terhadap
				aturan dan tata tertib yang berlaku di lingkungan kampus. Kedisiplinan merupakan salah satu aspek
				penting yang dinilai karena menunjukkan sikap dan perilaku mahasiswa dalam menjalankan tanggung jawabnya
				sebagai mahasiswa.
			</dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Kedisiplinan</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Jumlah 1</td>
							<th scope="row">1</th>
						</tr>
						<tr>
							<td>Jumlah 2</td>
							<th scope="row">2</th>
						</tr>
						<tr>
							<td>Jumlah 3</td>
							<th scope="row">3</th>
						</tr>
						<tr>
							<td>Jumlah >3 </td>
							<th scope="row">4</th>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
		<!-- /Kedisiplinan -->

		<!-- Semester -->
		<dl class="row">
			<dt class="col-sm-1">10.</dt>
			<dd class="col-sm-11"><b>Semester</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Kriteria semester merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan,
				berdasarkan semester yang telah ditempuh. Berikut penjabaran interval semester yang telah
				dikonversikan dengan bilangan
			</dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Semester</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1 - 2</td>
							<th scope="row">1</th>
						</tr>
						<tr>
							<td>3 - 4</td>
							<th scope="row">2</th>
						</tr>
						<tr>
							<td>5 - 6</td>
							<th scope="row">3</th>
						</tr>
						<tr>
							<td>7 - 8</td>
							<th scope="row">4</th>
						</tr>
					</tbody>
				</table>
			</dd>
		</dl>
		<!-- /Semester --><br>

		<!-- GAP -->
		<h4>GAP</h4>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Kriteria</th>
					<th scope="col">GAP</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>IPK</td>
					<td>3</td>
				<tr>
					<th scope="row">2</th>
					<td>Penghasilan Orang Tua</td>
					<td>3</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Tanggungan Orang Tua</td>
					<td>3</td>
				</tr>
				<tr>
					<th scope="row">4</th>
					<td>Semester</td>
					<td>2</td>
				</tr>
			</tbody>
		</table><br><br>
		<!-- /GAP -->

		<!-- BOBOT -->
		<h4>Bobot</h4>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Selisih</th>
					<th scope="col">Bobot Nilai</th>
					<th scope="col">Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>0</td>
					<td>5</td>
					<td>Tidak ada selisih(kompetensi sesuai dengan yang dibutuhkan)</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>1</td>
					<td>4,5</td>
					<td>Kompetensi individu kelebihan 1 tingkat/level</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>-1</td>
					<td>4</td>
					<td>Kompetensi individu kekurangan 1 tingkat/level</td>
				</tr>
				<tr>
					<th scope="row">4</th>
					<td>2</td>
					<td>3,5</td>
					<td>Kompetensi individu kelebihan 2 tingkat/level</td>
				</tr>
				<tr>
					<th scope="row">5</th>
					<td>-2</td>
					<td>3</td>
					<td>Kompetensi individu kekurangan 2 tingkat/level</td>
				</tr>
				<tr>
					<th scope="row">6</th>
					<td>3</td>
					<td>2,5</td>
					<td>Kompetensi individu kelebihan 3 tingkat/level</td>
				</tr>
				<tr>
					<th scope="row">7</th>
					<td>-3</td>
					<td>2</td>
					<td>Kompetensi individu kekurangan 3 tingkat/level</td>
				</tr>
				<tr>
					<th scope="row">8</th>
					<td>4</td>
					<td>1,5</td>
					<td>Kompetensi individu kelebihan 4 tingkat/level</td>
				</tr>
				<tr>
					<th scope="row">9</th>
					<td>-4</td>
					<td>1</td>
					<td>Kompetensi individu kekurangan 4 tingkat/level</td>
				</tr>
			</tbody>
		</table>
		<!-- /BOBOT -->

	</div>
	<!-- /Container -->

</body>

</html>