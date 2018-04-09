<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.material.min.css">
<main class="mdl-layout__content mdl-color--grey-100">
	<div class="mdl-grid demo-content">
		<div class="mdl-card demo-card-square mdl-shadow--2dp mdl-cell mdl-cell--4-col">
              <div class="mdl-card__title mdl-card--expand">
              <text class="mdl-card__title-text"><?= $data2 ?></text>
              </div>
              <div class="mdl-card__supporting-text">
                Total Entri
              </div>
		</div>
        <div class="mdl-card demo-card-square mdl-shadow--2dp mdl-cell mdl-cell--2-col">
              <div class="mdl-card__title mdl-card--expand">
              <text class="mdl-card__title-text"><i class="material-icons" role="presentation">arrow_forward</i></text>
              </div>
		</div>
		<div class="mdl-cell mdl-cell--3-col mdl-shadow--2dp mdl-card">
			<div class="mdl-grid demo-content">
				<div style="text-align:center;">
                    <div class="flex-wrapper">
                          <div class="single-chart">
                            <svg viewbox="0 0 36 36" class="circular-chart">
                              <path class="circle-bg"
                                d="M18 2.0845
                                  a 15.9155 15.9155 0 0 1 0 31.831
                                  a 15.9155 15.9155 0 0 1 0 -31.831"
                              />
                              <path class="circle" style="stroke:<?= @$color ?>"
                                stroke-dasharray="<?= $final_nil ?>, 100"
                                d="M18 2.0845
                                  a 15.9155 15.9155 0 0 1 0 31.831
                                  a 15.9155 15.9155 0 0 1 0 -31.831"
                              />
                              <text x="18" y="19" class="percentage"><?= $nil ?></text>
                              <text x="18" y="23" class="percentage_label">Tingkat Kepuasan</text>
                            </svg>
                          </div>
                    </div>
				</div>
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
							<?php echo $i++?>
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
							<a class="mdl-color-text--blue-grey-500" href="<?php echo base_url().'index.php/c_crud/detail_data/'.$data['no_responden']?>">
								<i class="material-icons">launch</i>
							</a>
							<a class="mdl-color-text--blue-grey-500" href="<?php echo base_url().'index.php/c_crud/delete_data/'.$data['no_responden']?>">
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
