<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<main class="mdl-layout__content mdl-color--grey-100">
	<div class="mdl-grid demo-content">
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
								<h5>TOTAL ENTRY</h5>
							</td>
						</tr>
						<tr>
							<td>
								<h1>
									<?php 
										if($data2 != 0){
											echo $data2;
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
							<td><br></td>
						</tr>
						<tr>
							<td><h5>INDEKS NILAI</h5></td>
						</tr>
						<tr>
							<td><h1><?php 
										if($data2 != 0){
											foreach($nilai as $nilais){
												$nil=round($nilais['jumlahdata']/(9*$data2),2); 
												echo $nil;  
											}
										}
                                    ?>
                                </h1></td>
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
							<td><br></td>
						</tr>
						<tr>
							<td><h5>INDEKS NILAI</h5></td>
						</tr>
						<tr>
							<td><h1><?php
								if($data2 != 0){
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
								}
                            ?></h1></td>
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
							<td><br></td>
						</tr>
						<tr>
							<td><h5>INDEKS NILAI</h5></td>
						</tr>
						<tr>
							<td><h1><?php
								if($data2 != 0){
									echo $kinerja;}
                            ?></h1></td>
						</tr>
					</table>
				</div>
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
						<th width="30%" class="mdl-data-table__cell--non-numeric">No. Responden</th>
						<th width="15%" class="mdl-data-table__cell--non-numeric">Umur</th>
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
							<?php echo $data['no_responden']?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['umur']?> tahun
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['jenis_kelamin']?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<a class="mdl-color-text--blue-grey-500" href="<?php echo base_url().'index.php/c_crud/detail_data/'.$data['id']?>">
								<i class="material-icons">launch</i>
							</a>
							<a class="mdl-color-text--blue-grey-500" href="<?php echo base_url().'index.php/c_crud/delete_data/'.$data['id']?>">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#lihat').DataTable();
    });
</script>