<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.material.min.css">
<main class="mdl-layout__content mdl-color--grey-100">
	<div class="mdl-grid demo-content">
		<div class="mdl-card demo-card-square mdl-shadow--2dp mdl-cell mdl-cell--6-col">
              <div class="mdl-card__title mdl-card--expand">
              <text class="mdl-card__title-text"><?= $data2 ?></text>
              </div>
              <div class="mdl-card__supporting-text">
                Total Entri
              </div>
		</div>
		<div class="mdl-cell mdl-cell--3-col mdl-shadow--2dp mdl-card">
			<div class="mdl-grid demo-content">
				<div id="circle"></div>
			</div>
		</div>
        <div class="mdl-card demo-card-square mdl-shadow--2dp mdl-color-text--white mdl-cell mdl-cell--3-col" style="<?= @$mutu_color ?>">
			  <div class="mdl-card__title mdl-card--expand no-bg">
                <text class="mdl-card__title-text"><?= $mutu ?></text>
              </div>
              <div class="mdl-card__supporting-text mutu_text">
                <?= $kinerja ?>
              </div>
		</div>

		<div class="mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">
			<table id="lihat" class="mdl-data-table mdl-js-data-table" width="100%">
				<thead>
					<tr>
						<th colspan="5" class="mdl-data-table__cell--non-numeric">
							<h4> Data Survey</h4>
						</th>
					</tr>
					<tr>
						<th width="10%" style="text-align:center;">NO</th>
						<th width="15%" class="mdl-data-table__cell--non-numeric">Umur</th>
						<th width="15%" class="mdl-data-table__cell--non-numeric">Pendidikan Terakhir</th>
						<th width="15%" class="mdl-data-table__cell--non-numeric">Pekerjaan Utama</th>
						<th width="15%" class="mdl-data-table__cell--non-numeric">Jenis Kelamin</th>
						<th width="10%" class="mdl-data-table__cell--non-numeric">Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php $i=1; foreach($data as $data) { ?>
					<tr>
						<td style="text-align:center;">
							<?php echo $i++ ?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['umur']?> tahun
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['pendidikan_terakhir']?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['pekerjaan_utama']?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['jenis_kelamin']?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<a class="mdl-color-text--blue-grey-500" href="<?php echo base_url().'detail/'.$data['no_responden']?>">
								<i class="material-icons">launch</i>
							</a>
							<a class="mdl-color-text--blue-grey-500" href="<?php echo base_url().'delete/'.$data['no_responden']?>">
								<i class="material-icons">delete</i>
							</a>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>

</main>
