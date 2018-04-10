<h3>
	Form Pengisian Survey</h3>
<br>

<?php if(!empty($this->session->flashdata('success'))) { ?>
<div class="alert alert-success mdl-shadow--2dp">
    <?= $this->session->flashdata('success') ?>
</div>
<?php } ?>

<form action="<?php echo base_url();?>tambah_data" method="post">
	<h4>Umur</h4>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
        <input class="mdl-textfield__input" type="number" id="umur" name="umur" min="17">
        <label class="mdl-textfield__label" for="umur">Umur</label>
        <span class="mdl-textfield__error">Angka tidak valid!</span>
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
			<input class="mdl-radio__button" type="radio" name="pt" id="d" value="D1/D2/D3" required>
			<span class="mdl-radio__label">D1/D2/D3</span>
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
	
	<h4>Tanggal Pengisian</h4>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
		<input class="mdl-date-textfield__input" type="date" name="tanggal" id="tanggal" required>
	</div>

	<h4>Jenis Pelayanan</h4>
    <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ktp">
			<input class="mdl-radio__button" type="radio" name="jenis" id="ktp" value="KTP" required>
			<span class="mdl-radio__label">KTP</span>
		</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sktm">
			<input class="mdl-radio__button" type="radio" name="jenis" id="sktm" value="SKTM" required>
			<span class="mdl-radio__label">SKTM</span>
		</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="domisili_perusahaan">
			<input class="mdl-radio__button" type="radio" name="jenis" id="domisili_perusahaan" value="Domisili Perusahaan" required>
			<span class="mdl-radio__label">Domisili Perusahaan</span>
		</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pindang">
			<input class="mdl-radio__button" type="radio" name="jenis" id="pindang" value="Pindah Datang" required>
			<span class="mdl-radio__label">Pindah Datang</span>
		</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="jamsostek">
			<input class="mdl-radio__button" type="radio" name="jenis" id="jamsostek" value="Jamsostek" required>
			<span class="mdl-radio__label">Jamsostek</span>
		</label>
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
			<span class="mdl_radio__label">Tidak Cepat</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_kurang_cepat">
			<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_kurang_cepat" value="2" required>
			<span class="mdl_radio__label">Kurang Cepat</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_cepat">
			<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_cepat" value="3" required>
			<span class="mdl_radio__label">Cepat</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_sangat_cepat">
			<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_sangat_cepat" value="4" required>
			<span class="mdl_radio__label">Sangat Cepat</span>
		</label>
	</div>

	<h4>Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan di Kecamatan Cinambo?</h4>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_sangat_mahal">
			<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_sangat_mahal" value="1" required>
			<span class="mdl_radio__label">Sangat Mahal</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_cukup_mahal">
			<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_cukup_mahal" value="2" required>
			<span class="mdl_radio__label">Cukup Mahal</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_murah">
			<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_murah" value="3" required>
			<span class="mdl_radio__label">Murah</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_gratis">
			<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_gratis" value="4" required>
			<span class="mdl_radio__label">Gratis</span>
		</label>
	</div>

	<h4>Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil
		yang diberikan?</h4>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian2_tidak_sesuai">
			<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian2_tidak_sesuai" value="1" required>
			<span class="mdl_radio__label">Tidak Sesuai</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian2_kurang_sesuai">
			<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian2_kurang_sesuai" value="2" required>
			<span class="mdl_radio__label">Kurang Sesuai</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian2_sesuai">
			<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian2_sesuai" value="3" required>
			<span class="mdl_radio__label">Sesuai</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian2_sangat_kesesuaian">
			<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian2_sangat_kesesuaian" value="4" required>
			<span class="mdl_radio__label">Sangat Sesuai</span>
		</label>
	</div>

	<h4>Bagaimana pendapat saudara tentang kompetensi/kemampuan petugas dalam pelayanan?</h4>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kompetensi_tidak_kompeten">
			<input class="mdl-radio__button" type="radio" name="kompeten" id="kompetensi_tidak_kompeten" value="1" required>
			<span class="mdl_radio__label">Tidak Kompeten</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kompetensi_kurang_kompeten">
			<input class="mdl-radio__button" type="radio" name="kompeten" id="kompetensi_kurang_kompeten" value="2" required>
			<span class="mdl_radio__label">Kurang Kompeten</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kompetensi_kompeten">
			<input class="mdl-radio__button" type="radio" name="kompeten" id="kompetensi_kompeten" value="3" required>
			<span class="mdl_radio__label">Kompeten</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kompetensi_sangat_kompeten">
			<input class="mdl-radio__button" type="radio" name="kompeten" id="kompetensi_sangat_kompeten" value="4" required>
			<span class="mdl_radio__label">Sangat Kompeten</span>
		</label>
	</div>

	<h4>Bagaimana pendapat Saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan pelayanan di Kecamatan
		Cinambo ini?</h4>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_tidak_sopan">
			<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_tidak_sopan" value="1" required>
			<span class="mdl_radio__label">Tidak Sopan dan Ramah</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_kurang_sopan">
			<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_kurang_sopan" value="2" required>
			<span class="mdl_radio__label">Kurang Sopan dan Ramah</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_sopan">
			<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_sopan" value="3" required>
			<span class="mdl_radio__label">Sopan dan Ramah</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_sangat_sopan">
			<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_sangat_sopan" value="4" required>
			<span class="mdl_radio__label">Sangat Sopan dan Ramah</span>
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
			<span class="mdl_radio__label">Tidak Ada</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="penanganan_tidak_berfungsi">
			<input class="mdl-radio__button" type="radio" name="pengaduan" id="penanganan_tidak_berfungsi" value="2" required>
			<span class="mdl_radio__label">Ada, tetapi tidak berfungsi</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="penanganan_kurang_maksimal">
			<input class="mdl-radio__button" type="radio" name="pengaduan" id="penanganan_kurang_maksimal" value="3" required>
			<span class="mdl_radio__label">Berfungsi kurang maksimal</span>
		</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
		<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="penanganan_baik">
			<input class="mdl-radio__button" type="radio" name="pengaduan" id="penanganan_baik" value="4" required>
			<span class="mdl_radio__label">Dikelola dengan baik</span>
		</label>
	</div>

	<br>
	<br>
	<br>
	<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="submit"
	value="Save">
</form>
