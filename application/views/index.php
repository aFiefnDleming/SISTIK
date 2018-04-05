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
		body {
			background-color: #ddd;
		}

		.container {
			position: absolute;
			left: 50%;
			top: 40px;
			transform: translate(-50%, 0);
			perspective: 1000px;
			width: 330px;
			height: 375px;
		}

		#cube {
			width: 100%;
			height: 100%;
			position: absolute;
			transform-style: preserve-3d;
		}

		#cube figure {
			backface-visibility: hidden;
			margin: 0;
			width: 330px;
			height: 375px;
			display: block;
			position: absolute;
		}

		#cube .front {
			transform: rotateY(0deg) translateZ(187.5px);
		}

		#cube .left {
			transform: rotateY(-90deg) translateZ(165px) translateX(22.5px);
		}

		#cube .bottom {
			transform: rotateX(-90deg) translateZ(187.5px);
		}

		#cube {
			transform: translateZ(-165px);
		}

		#cube {
			transition: transform .4s;
		}

		.mdl-card {
			width: 330px;
			height: 375px;
		}

		.mdl-card__title .mdl-button--icon {
			height: 28px;
			width: 28px;
			min-width: 28px;
		}

		.mdl-textfield__label {
			color: rgba(0, 0, 0, 0.5);
		}

		a:hover {
			cursor: pointer;
		}

	</style>
	<script src="<?php echo base_url();?>assets/js/material.min.js"></script>
</head>

<body>
	<div class="mdl-layout mdl-js-layout">
		<section class="container">
			<div id="cube" class="show-front">
				<figure class="front">
					<div class="mdl-card mdl-shadow--6dp">
						<div class="mdl-card__title mdl-color--primary mdl-color-text--white relative">
							<br><br><br><br><br><br>
							<h2 class="mdl-card__title-text">LOGIN SISTIK</h2>
						</div>

						<div class="mdl-card__supporting-text">
							<form action="<?php echo base_url();?>index.php/c_login/auth" method="post">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" id="login" name="username"/>
								<label class="mdl-textfield__label" for="login">Username</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="password" id="password" name="password"/>
								<label class="mdl-textfield__label" for="password">Password</label>
							</div><br><br>
							<button type="submit" name="submit" class="mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white">
								Login
							</button>
						</div>
					</div>
				</figure>
			</div>
		</section>
	</div>
</body>

</html>
