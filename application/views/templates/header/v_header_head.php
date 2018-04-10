<?php
defined('BASEPATH') OR exit("No direct access!");
?>

<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>SISTIK<?= !empty(@$page_title)?": ".@$page_title:"" ?></title>
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
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/mdl-date-textfield.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/circle_pb.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/card.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap_widgets/alert.css">
