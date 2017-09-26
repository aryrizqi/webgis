<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/resources/css/bootstrap.min.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/resources/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/resources/css/animate.css')?>">
	<link href="<?php echo base_url('assets/resources/css/prettyPhoto.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/resources/css/style.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url("assets/inspinia/css/plugins/dataTables/dataTables.bootstrap.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/plugins/dataTables/dataTables.responsive.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/plugins/dataTables/dataTables.tableTools.min.css"); ?>" rel="stylesheet">	

  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="<?php echo base_url('home') ?>"><h1><span>Web</span>Gis</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="<?php echo site_url('home') ?>" class="<?php if(isset($active_home)){echo $active_home ;}?>">Home</a></li>
								<li role="presentation"><a href="<?php echo site_url('about') ?>" class="<?php if(isset($active_about)){echo $active_about ;}?>">About Us</a></li>
								<li role="presentation"><a href="<?php echo site_url('data') ?>" class="<?php if(isset($active_data)){echo $active_data ;}?>">Data</a></li>
								<li role="presentation"><a href="<?php echo site_url('contact') ?>" class="<?php if(isset($active_contact)){echo $active_contact ;}?>">Contact</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>