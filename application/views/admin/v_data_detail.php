<style>
	.demo-card-wide>.mdl-card__title {
		color: #fff;
		height: 176px;
	}

	.demo-card-wide>.mdl-card__menu {
		color: #fff;
	}

</style>

<main class="mdl-layout__content mdl-color--grey-100">
	<div class="mdl-grid">
		<div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
			<div class="mdl-card__title mdl-color--blue-grey-900 ">
				<h2 class="mdl-card__title-text">
					Profil Responden
				</h2>
			</div>
			<div class="mdl-card__supporting-text">
				<div class="mdl-cell mdl-cell--12-col">
					Jenis Kelamin: <?= $jenis_kelamin ?>
				</div>
				<div class="mdl-cell mdl-cell--12-col">
					Usia: <?= $umur ?>
				</div>
				<div class="mdl-cell mdl-cell--12-col">
					Pendidikan: <?=$pendidikan_terakhir?>
				</div>
				<div class="mdl-cell mdl-cell--12-col">
					Pekerjaan: <?=$pekerjaan_utama?>
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
                                    <?=$mean?>
								</h1>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
        <div class="mdl-card demo-card-square mdl-shadow--2dp mdl-color-text--white mdl-cell mdl-cell--3-col" style="<?=$mutu_color?>">
			  <div class="mdl-card__title mdl-card--expand no-bg">
                <text class="mdl-card__title-text"><?= @$mutu ?></text>
              </div>
              <div class="mdl-card__supporting-text mutu_text">
                <?= @$kinerja ?>
              </div>
		</div>
		<div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
			<div class="mdl-card__title mdl-color--blue-grey-900">
				<h2 class="mdl-card__title-text">Hasil Survey</h2>
			</div>
			<div class="mdl-card__supporting-text">
				<ul class="demo-list-icon mdl-list">
					<?= $pelayanan ?>
				</ul>
			</div>
		</div>
	</div>
</main>
