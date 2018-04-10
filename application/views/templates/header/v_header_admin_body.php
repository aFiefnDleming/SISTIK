<?php
defined('BASEPATH') OR exit("No direct access!");
?>

<body>
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">SURVEY TINGKAT KEPUASAN KECAMATAN CINAMBO</span>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
			<header class="demo-drawer-header">
				<div class="demo-avatar-dropdown">
					<h1>SISTIK</h1>
				</div>
			</header>
			<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
				<a class="mdl-navigation__link <?= current_url()==base_url("lihat_data")?"yes":"" ?>" href="<?php echo base_url();?>lihat_data">
					<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>Dashboard
                </a>

				<a class="mdl-navigation__link <?= current_url()==base_url("input_data")?"yes":"" ?>" href="<?php echo base_url();?>input_data/">
					<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">input</i>Input Data
                </a>

                <a class="mdl-navigation__link <?= current_url()==base_url("print_data")?"yes":"" ?>" href="<?php echo base_url();?>print_data">
					<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">print</i>Cetak Data
                </a>

				<a class="mdl-navigation__link <?= current_url()==base_url("export_data")?"yes":"" ?>" href="<?php echo base_url();?>index.php/C_crud/export_data">
					<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">cloud_download</i>Export Data
                </a>

				<a class="mdl-navigation__link" href="<?php echo base_url();?>logout">
					<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">exit_to_app</i>Sign Out (<?= $ses_uname ?>)
                </a>

				<div class="mdl-layout-spacer"></div>
				<p class="mdl-navigation__link">
					2018 &copy; Sera5
				</p>
			</nav>
		</div>
