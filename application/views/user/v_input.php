<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>SISTIK</title>
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Material Design Lite">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">
	<link rel="shortcut icon" href="images/favicon.png">
	<link href="<?php echo base_url();?>assets/css/icon.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
	<style>
		.demo-ribbon {
			width: 100%;
			height: 40vh;
			background-color: #3F51B5;
			-webkit-flex-shrink: 0;
			-ms-flex-negative: 0;
			flex-shrink: 0;
		}

		.demo-main {
			margin-top: -35vh;
			-webkit-flex-shrink: 0;
			-ms-flex-negative: 0;
			flex-shrink: 0;
		}

		.demo-header .mdl-layout__header-row {
			padding-left: 40px;
		}

		.demo-container {
			max-width: 1600px;
			width: calc(100% - 16px);
			margin: 0 auto;
		}

		.demo-content {
			border-radius: 2px;
			padding: 80px 56px;
			margin-bottom: 80px;
		}

		.demo-layout.is-small-screen .demo-content {
			padding: 40px 28px;
		}

		.demo-content h3 {
			margin-top: 48px;
		}

		.demo-footer {
			padding-left: 40px;
		}

		.demo-footer .mdl-mini-footer--link-list a {
			font-size: 13px;
		}

	</style>
</head>

<body>
	<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
		<header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">SURVEY TINGKAT KEPUASAN KECAMATAN CINAMBO</span>
			</div>
		</header>
		<div class="demo-ribbon"></div>
		<main class="demo-main mdl-layout__content">
			<div class="demo-container mdl-grid">
				<div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
				<div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
					<h3>Form Pengisian Survey</h3>
					<br>
					<form action="<?php echo base_url();?>index.php/c_crud/tambah_data" method="post">
						<h4>Nomor Responden</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
							<input class="mdl-textfield__input" name="nomor" id="nomor" type="text" pattern="-?[0-9]*(\.[0-9]+)?">
							<label class="mdl-textfield__label" for="nomor">Masukan No Responden</label>
							<span class="mdl-textfield__error">Masukan nomor yang benar</span>
						</div>

						<h4>Umur</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
							<input class="mdl-textfield__input" name="umur" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="umur" maxlength="3">
							<label class="mdl-textfield__label" for="umur">Masukan Umur</label>
							<span class="mdl-textfield__error">Masukan umur yang benar</span>
						</div>
						<h4>Jenis Kelamin</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="laki">
								<input type="radio" name="jk" id="laki" class="mdl-radio__button" value="Laki Laki" required>
								<span class="mdl-radio__label">Laki Laki</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pr">
								<input type="radio" name="jk" id="pr" class="mdl-radio__button" value="Perempuan" required>
								<span class="mdl-radio__label">Perempuan</span>
							</label>
						</div>

						<h4>Pendidikan Terakhir</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sd">
								<input class="mdl-radio__button" type="radio" name="pt" id="sd" value="SD Kebawah" required>
								<span class="mdl-radio__label">SD Kebawah</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="smp">
								<input class="mdl-radio__button" type="radio" name="pt" id="smp" value="SLTP Sederajat" required>
								<span class="mdl-radio__label">SLTP Sederajat</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sma">
								<input class="mdl-radio__button" type="radio" name="pt" id="sma" value="SLTA Sederajat" required>
								<span class="mdl-radio__label">SLTA Sederajat</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="d">
								<input class="mdl-radio__button" type="radio" name="pt" id="d" value="Diploma" required>
								<span class="mdl-radio__label">Diploma</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="S1">
								<input class="mdl-radio__button" type="radio" name="pt" id="S1" value="S1" required>
								<span class="mdl-radio__label">S1</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="S2">
								<input class="mdl-radio__button" type="radio" name="pt" id="S2" value="S2" required>
								<span class="mdl-radio__label">S2 Keatas</span>
							</label>
						</div>

						<h4>Pekerjaan Utama</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pns">
								<input class="mdl-radio__button" type="radio" name="pu" id="pns" value="PNS/TNI/POLRI" required>
								<span for="pns">PNS/TNI/POLRI</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ps">
								<input class="mdl-radio__button" type="radio" name="pu" id="ps" value="Pegawai Swasta" required>
								<span for="ps">Pegawai Swasta</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="wu">
								<input class="mdl-radio__button" type="radio" name="pu" id="wu" value="Wiraswasta/Usahawan" required>
								<span for="wu">Wiraswasta/Usahawan</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="mhs">
								<input class="mdl-radio__button" type="radio" name="pu" id="mhs" value="Pelajar/Mahasiswa" required>
								<span for="mhs">Pelajar/Mahasiswa</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="lainnya">
								<input class="mdl-radio__button" type="radio" name="pu" id="lainnya" value="Lainnya" required>
								<span for="lainnya">Lainnya</span>
							</label>
						</div>

						<input type="hidden" name="tanggal" value="<?php echo date(" Y-m-d ");?>">

						<h4>Jenis Pelayanan</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
							<input class="mdl-textfield__input" name="jenis" id="jenis" type="text">
							<label class="mdl-textfield__label" for="jenis">Masukan Jenis Pelayanan</label>
						</div>

						<h4>Bagaimana pendapat Saudara tentang kesesuaian persyaratan dengan jenis pelayanannya di Kecamatan Cinambo?</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_tidak_sesuai">
								<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_tidak_sesuai" value="1" required>
								<span class="mdl_radio__label">Tidak Sesuai</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_kurang_sesuai">
								<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_kurang_sesuai" value="2" required>
								<span class="mdl_radio__label">Kurang Sesuai</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_sesuai">
								<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_sesuai" value="3" required>
								<span class="mdl_radio__label">Sesuai</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_sangat_sesuai">
								<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_sangat_sesuai" value="4" required>
								<span class="mdl_radio__label">Sangat Sesuai</span>
							</label>
						</div>

						<h4>Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="tm">
								<input class="mdl-radio__button" type="radio" name="kemudahan" id="tm" value="1" required>
								<span class="mdl_radio__label">Tidak Mudah</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="km">
								<input class="mdl-radio__button" type="radio" name="kemudahan" id="km" value="2" required>
								<span class="mdl_radio__label">Kurang Mudah</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="m">
								<input class="mdl-radio__button" type="radio" name="kemudahan" id="m" value="3" required>
								<span class="mdl_radio__label">Mudah</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sm">
								<input class="mdl-radio__button" type="radio" name="kemudahan" id="sm" value="4" required>
								<span class="mdl_radio__label">Sangat Mudah</span>
							</label>
						</div>

						<h4>Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_tidak_cepat">
								<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_tidak_cepat" value="1" required>
								<span class="mdl_radio__label"="kecepatan_tidak_cepat">Tidak Cepat</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_kurang_cepat">
								<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_kurang_cepat" value="2" required>
								<span class="mdl_radio__label"="kecepatan_kurang_cepat">Kurang Cepat</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_cepat">
								<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_cepat" value="3" required>
								<span class="mdl_radio__label"="kecepatan_cepat">Cepat</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_sangat_cepat">
								<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_sangat_cepat" value="4" required>
								<span class="mdl_radio__label"="kecepatan_sangat_cepat">Sangat Cepat</span>
							</label>
						</div>

						<h4>Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan di Kecamatan Cinambo?</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_sangat_mahal">
								<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_sangat_mahal" value="1" required>
								<span class="mdl_radio__label"="kewajaran_sangat_mahal">Sangat Mahal</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_cukup_mahal">
								<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_cukup_mahal" value="2" required>
								<span class="mdl_radio__label"="kewajaran_cukup_mahal">Cukup Mahal</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_murah">
								<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_murah" value="3" required>
								<span class="mdl_radio__label"="kewajaran_murah">Murah</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_gratis">
								<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_gratis" value="4" required>
								<span class="mdl_radio__label"="kewajaran_gratis">Gratis</span>
							</label>
						</div>

						<h4>Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan
							hasil yang diberikan?</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian2_tidak_sesuai">
								<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian2_tidak_sesuai" value="1" required>
								<span class="mdl_radio__label"="kesesuaian2_tidak_sesuai">Tidak Sesuai</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian2_kurang_sesuai">
								<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian2_kurang_sesuai" value="2" required>
								<span class="mdl_radio__label"="kesesuaian2_kurang_sesuai">Kurang Sesuai</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian2_sesuai">
								<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian2_sesuai" value="3" required>
								<span class="mdl_radio__label"="kesesuaian2_sesuai">Sesuai</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian2_sangat_kesesuaian">
								<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian2_sangat_kesesuaian" value="4" required>
								<span class="mdl_radio__label"="kesesuaian2_sangat_kesesuaian">Sangat Sesuai</span>
							</label>
						</div>

						<h4>Bagaimana pendapat saudara tentang kompetensi/kemampuan petugas dalam pelayanan?</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kompetensi_tidak_kompeten">
								<input class="mdl-radio__button" type="radio" name="kompeten" id="kompetensi_tidak_kompeten" value="1" required>
								<span class="mdl_radio__label"="kompetensi_tidak_kompeten">Tidak Kompeten</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kompetensi_kurang_kompeten">
								<input class="mdl-radio__button" type="radio" name="kompeten" id="kompetensi_kurang_kompeten" value="2" required>
								<span class="mdl_radio__label"="kompetensi_kurang_kompeten">Kurang Kompeten</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kompetensi_kompeten">
								<input class="mdl-radio__button" type="radio" name="kompeten" id="kompetensi_kompeten" value="3" required>
								<span class="mdl_radio__label"="kompetensi_kompeten">Kompeten</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kompetensi_sangat_kompeten">
								<input class="mdl-radio__button" type="radio" name="kompeten" id="kompetensi_sangat_kompeten" value="4" required>
								<span class="mdl_radio__label"="kompetensi_sangat_kompeten">Sangat Kompeten</span>
							</label>
						</div>

						<h4>Bagaimana pendapat Saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan pelayanan di Kecamatan
							Cinambo ini?</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_tidak_sopan">
								<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_tidak_sopan" value="1" required>
								<span class="mdl_radio__label"="kesopanan_tidak_sopan">Tidak Sopan dan Ramah</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_kurang_sopan">
								<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_kurang_sopan" value="2" required>
								<span class="mdl_radio__label"="kesopanan_kurang_sopan">Kurang Sopan dan Ramah</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_sopan">
								<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_sopan" value="3" required>
								<span class="mdl_radio__label"="kesopanan_sopan">Sopan dan Ramah</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_sangat_sopan">
								<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_sangat_sopan" value="4" required>
								<span class="mdl_radio__label"="kesopanan_sangat_sopan">Sangat Sopan dan Ramah</span>
							</label>
						</div>

						<h4>Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana di Kecamatan Cinambo ini?</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kualitas_buruk">
								<input class="mdl-radio__button" type="radio" name="kualitas" id="kualitas_buruk" value="1" required>
								<span class="mdl_radio__label">Buruk</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kualitas_cukup">
								<input class="mdl-radio__button" type="radio" name="kualitas" id="kualitas_cukup" value="2" required>
								<span class="mdl_radio__label">Cukup</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kualitas_baik">
								<input class="mdl-radio__button" type="radio" name="kualitas" id="kualitas_baik" value="3" required>
								<span class="mdl_radio__label">Baik</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kualitas_sangat_baik">
								<input class="mdl-radio__button" type="radio" name="kualitas" id="kualitas_sangat_baik" value="4" required>
								<span class="mdl_radio__label">Sangat Baik</span>
							</label>
						</div>

						<h4>Bagaimana pendapat Saudara tentang penanganan pengaduan layanan?</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="penanganan_tidak_ada">
								<input class="mdl-radio__button" type="radio" name="pengaduan" id="penanganan_tidak_ada" value="1" required>
								<span class="mdl_radio__label"="penanganan_tidak_ada">Tidak Ada</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="penanganan_tidak_berfungsi">
								<input class="mdl-radio__button" type="radio" name="pengaduan" id="penanganan_tidak_berfungsi" value="2" required>
								<span class="mdl_radio__label"="penanganan_tidak_berfungsi">Ada, tetapi tidak berfungsi</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="penanganan_kurang_maksimal">
								<input class="mdl-radio__button" type="radio" name="pengaduan" id="penanganan_kurang_maksimal" value="3" required>
								<span class="mdl_radio__label"="penanganan_kurang_maksimal">Berfungsi kurang maksimal</span>
							</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
							<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="penanganan_baik">
								<input class="mdl-radio__button" type="radio" name="pengaduan" id="penanganan_baik" value="4" required>
								<span class="mdl_radio__label"="penanganan_baik">Dikelola dengan baik</span>
							</label>
						</div>

						<br>
						<br>
						<br>
						<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="submit"
						value="Save">
						<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="reset" name="reset" value="RESET">
					</form>
				</div>
			</div>
			<footer class="demo-footer mdl-mini-footer">
				<div class="mdl-mini-footer--left-section">
					<ul class="mdl-mini-footer--link-list">
						<li>
							<a href="#">Help</a>
						</li>
						<li>
							<a href="#">Privacy and Terms</a>
						</li>
						<li>
							<a href="#">User Agreement</a>
						</li>
					</ul>
				</div>
			</footer>
		</main>
	</div>

	<script src="<?php echo base_url();?>assets/js/material.min.js"></script>
</body>

</html>
