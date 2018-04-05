<style>
	.demo-card-wide>.mdl-card__title {
		color: #fff;
		height: 176px;
	}

	.demo-card-wide>.mdl-card__menu {
		color: #fff;
	}

</style>

<?php foreach($data as $data){ ?>
<main class="mdl-layout__content mdl-color--grey-100">
	<div class="mdl-grid demo-content">
		<div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--3-col">
			<div class="mdl-card__title mdl-color--blue-grey-900 ">
				<h2 class="mdl-card__title-text">
					<?php echo $data['no_responden']; ?>
				</h2>
			</div>
			<div class="mdl-card__supporting-text">
				<table>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<?php echo $data['jenis_kelamin'];?>
						</td>
					</tr>
					<tr>
						<td>Usia</td>
						<td>:</td>
						<td>
							<?php echo $data['umur'];?>
						</td>
					</tr>
					<tr>
						<td>Pendidikan</td>
						<td>:</td>
						<td>
							<?php echo $data['pendidikan_terakhir'];?>
						</td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td>:</td>
						<td>
							<?php echo $data['pekerjaan_utama'];?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="mdl-card mdl-shadow--2dp mdl-color--blue-grey-600 mdl-color-text--white mdl-cell mdl-cell--3-col">
			<div class="mdl-grid demo-content">
				<div style="text-align:center;">
					<table>
						<tr>
							<td>
								<br>
							</td>
						</tr>
						<tr>
							<td>
								<h5>INDEKS NILAI</h5>
							</td>
						</tr>
						<tr>
							<td>
								<h1>
									<?php 
                                            foreach($nilai as $nilais){
                                                $nil=round($nilais['jumlahdata']/9,2); 
                                                echo $nil;  
                                            }
                                    ?>
								</h1>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="mdl-card mdl-shadow--2dp mdl-color--blue-grey-600 mdl-color-text--white mdl-cell mdl-cell--3-col">
			<div class="mdl-grid demo-content">
				<div style="text-align:center;">
					<table>
						<tr>
							<td>
								<br>
							</td>
						</tr>
						<tr>
							<td>
								<h5>INDEKS NILAI</h5>
							</td>
						</tr>
						<tr>
							<td>
								<h1>
									<?php
                                if($nil > 1.00 && $nil <= 2.5996){
                                    $mutu = "D";
                                    $kinerja = "Tidak Baik";
                                }
                                else if($nil > 2.6 && $nil <= 3.064){
                                    $mutu = "C";
                                    $kinerja = "Kurang Baik";
                                }
                                else if($nil > 3.0644 && $nil <= 3.532){
                                    $mutu = "B";
                                    $kinerja = "Baik";
                                }
                                else if($nil > 3.5324 && $nil <= 4.00){
                                    $mutu = "A";
                                    $kinerja = "Sangat Baik";
                                }
                                echo $mutu;
                            ?>
								</h1>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="mdl-card mdl-shadow--2dp mdl-color--blue-grey-600 mdl-color-text--white mdl-cell mdl-cell--3-col">
			<div class="mdl-grid demo-content">
				<div style="text-align:center;">
					<table>
						<tr>
							<td>
								<br>
							</td>
						</tr>
						<tr>
							<td>
								<h5>INDEKS NILAI</h5>
							</td>
						</tr>
						<tr>
							<td>
								<h1>
									<?php
                                echo $kinerja;
                            ?>
								</h1>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
			<div class="mdl-card__title mdl-color--blue-grey-900">
				<h2 class="mdl-card__title-text">Hasil Survey</h2>
			</div>
			<div class="mdl-card__supporting-text">
				<ul class="demo-list-icon mdl-list">
					<li class="mdl-list__item">
						<table>
							<tr>
								<td>
									<h4>Kesesuaian persyaratan dengan jenis pelayanannya di Kecamatan Cinambo</h4>
								</td>
							</tr>
							<tr>
								<td>
									<?php 
                                                                        if($data['sesuai'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Sesuai</span></span>';
                                                                        else if($data['sesuai'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Sesuai</span></span>';
                                                                        else if($data['sesuai'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Sesuai</span></span>';
                                                                        else if($data['sesuai'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Sesuai</span></span>';
                                                                    ?>
								</td>
							</tr>
						</table>
					</li>
					<br>
					<hr>
					<li class="mdl-list__item">
						<table>
							<tr>
								<td>
									<h4>Kemudahan prosedur pelayanan</h4>
								</td>
							</tr>
							<tr>
								<td>
									<?php 
                                                                        if($data['mudah'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Mudah</span></span>';
                                                                        else if($data['mudah'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Mudah</span></span>';
                                                                        else if($data['mudah'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Mudah</span></span>';
                                                                        else if($data['mudah'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Mudah</span></span>';
                                                                    ?>
								</td>
							</tr>
						</table>
					</li>
					<br>
					<hr>
					<li class="mdl-list__item">
						<table>
							<tr>
								<td>
									<h4>Kecepatan waktu dalam memberikan pelayanan</h4>
								</td>
							</tr>
							<tr>
								<td>

									<?php 
                                                                        if($data['cepat'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Cepat</span></span>';
                                                                        else if($data['cepat'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Cepat</span></span>';
                                                                        else if($data['cepat'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Cepat</span></span>';
                                                                        else if($data['cepat'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Cepat</span></span>';
                                                                    ?>
								</td>
							</tr>
						</table>
					</li>
					<br>
					<hr>
					<li class="mdl-list__item">
						<table>
							<tr>
								<td>
									<h4>Kewajaran biaya/tarif dalam pelayanan di Kecamatan Cinambo</h4>
								</td>
							</tr>
							<tr>
								<td>
									<?php 
                                                                        if($data['wajar'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Sangat Mahal</span></span>';
                                                                        else if($data['wajar'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Cukup Mahal</span></span>';
                                                                        else if($data['wajar'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Murah</span></span>';
                                                                        else if($data['wajar'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Gratis</span></span>';
                                                                    ?>
								</td>
							</tr>
						</table>
					</li>
					<br>
					<hr>
					<li class="mdl-list__item">
						<table>
							<tr>
								<td>
									<h4>Kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan</h4>
									<?php 
                                                                        if($data['sesuai2'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Sesuai</span></span>';
                                                                        else if($data['sesuai2'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Sesuai</span></span>';
                                                                        else if($data['sesuai2'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Sesuai</span></span>';
                                                                        else if($data['sesuai2'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Sesuai</span></span>';
                                                                    ?>
								</td>
							</tr>
							<tr>
								<td>
								</td>
							</tr>
						</table>
					</li>
					<br>
					<hr>
					<li class="mdl-list__item">
						<table>
							<tr>
								<td>
									<h4>Kompetensi/kemampuan petugas dalam pelayanan</h4>
								</td>
							</tr>
							<tr>
								<td>
									<?php 
                                                                        if($data['kompetensi'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Kompeten</span></span>';
                                                                        else if($data['kompetensi'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Kompeten</span></span>';
                                                                        else if($data['kompetensi'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Kompeten</span></span>';
                                                                        else if($data['kompetensi'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Kompeten</span></span>';
                                                                    ?>
								</td>
							</tr>
						</table>
					</li>
					<br>
					<hr>
					<li class="mdl-list__item">
						<table>
							<tr>
								<td>
									<h4>Perilaku petugas dalam pelayanan terkait kesopanan dan keramahan pelayanan di Kecamatan Cinambo</h4>
								</td>
							</tr>
							<tr>
								<td>
									<?php 
                                                                        if($data['sopan'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Sopan dan Ramah</span></span>';
                                                                        else if($data['sopan'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Kurang Sopan dan Ramah</span></span>';
                                                                        else if($data['sopan'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Sopan dan Ramah</span></span>';
                                                                        else if($data['sopan'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Sopan dan Ramah</span></span>';
                                                                    ?>
								</td>
							</tr>
						</table>
					</li>
					<br>
					<hr>
					<li class="mdl-list__item">
						<table>
							<tr>
								<td>
									<h4>Kualitas sarana dan prasarana di Kecamatan Cinambo</h4>
								</td>
							</tr>
							<tr>
								<td>
									<?php 
                                                                        if($data['kualitas'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Buruk</span></span>';
                                                                        else if($data['kualitas'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Cukup</span></span>';
                                                                        else if($data['kualitas'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Baik</span></span>';
                                                                        else if($data['kualitas'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Sangat Baik</span></span>';
                                                                    ?>
								</td>
							</tr>
						</table>
					</li>
					<br>
					<hr>
					<li class="mdl-list__item">
						<table>
							<tr>
								<td>
									<h4>Penanganan pengaduan layanan</h4>
								</td>
							</tr>
							<tr>
								<td>
									<?php 
                                                                        if($data['pengaduan'] == 1) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">1</span>
                                    <span class="mdl-chip__text">Tidak Ada</span></span>';
                                                                        else if($data['pengaduan'] == 2) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--orange mdl-color-text--white">2</span>
                                    <span class="mdl-chip__text">Ada, tetapi tidak berfungsi</span></span>';
                                                                        else if($data['pengaduan'] == 3) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--lime mdl-color-text--white">3</span>
                                    <span class="mdl-chip__text">Berfungsi kurang maksimal</span></span>';
                                                                        else if($data['pengaduan'] == 4) echo '<span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">4</span>
                                    <span class="mdl-chip__text">Dikelola dengan baik</span></span>';
                                                                    ?>
								</td>
							</tr>
						</table>
					</li>
				</ul>
			</div>
		</div>
	</div>
</main>
<?php } ?>
