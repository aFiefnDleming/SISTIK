<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>  -->
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
												$nil=round($nilais['jumlahdata']/(14*$data2),2); 
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
									echo $kinerja;x
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
						<th width="30%" class="mdl-data-table__cell--non-numeric">Nama</th>
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
							<?php echo $data['nama']?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['umur']?> tahun
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<?php echo $data['jk']?>
						</td>
						<td class="mdl-data-table__cell--non-numeric">
							<a class="mdl-color-text--blue-grey-500" href="<?php echo base_url().'index.php/crud/detail_data/'.$data['id']?>">
								<i class="material-icons">launch</i>
							</a>
							<a class="mdl-color-text--blue-grey-500" href="<?php echo base_url().'index.php/crud/delete_data/'.$data['id']?>">
								<i class="material-icons">delete</i>
							</a>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
		<script>
			function myFunction(){
				document.getElementById()
			}
		</script>
		<!-- <div class="mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">
			<canvas id="myChart" width="400" height="400"></canvas>
			<script>
				var ctx = document.getElementById("myChart").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: ["Kemudahan Prosedur", "Kesesuaian Persyaratan", "Kejelasan dan Kepastian Petugas", "Kedisiplinan Petugas", "Tanggung Jawab Petugas", "Kemampuan Petugas"],
						datasets: [{
							label: '# of Votes',
							data: [12, 19, 3, 5, 2, 3],
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
							],
							borderColor: [
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						}
					}
				});
			</script>
		</div>	 -->
	</div>

</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#lihat').DataTable();
    });
</script>