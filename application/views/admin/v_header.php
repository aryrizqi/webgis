<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?></title>

    <link href="<?php echo base_url("assets/inspinia/css/bootstrap.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/font-awesome/css/font-awesome.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/plugins/iCheck/custom.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/plugins/datapicker/datepicker3.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/plugins/daterangepicker/daterangepicker-bs3.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/plugins/select2/select2.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/plugins/chosen/bootstrap-chosen.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/animate.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/style.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet">

        <link href="<?php echo base_url("assets/inspinia/css/plugins/dataTables/dataTables.bootstrap.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/plugins/dataTables/dataTables.responsive.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/inspinia/css/plugins/dataTables/dataTables.tableTools.min.css"); ?>" rel="stylesheet">

        <link href="<?php echo base_url("assets/inspinia/css/plugins/blueimp/css/blueimp-gallery.min.css"); ?>" rel="stylesheet">



</head>

<body class="skin-1">

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" style="width:48px; height:48px;" src="<?php echo base_url('assets/inspinia/img/userlogo.jpg')?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin</strong>
                             </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?php echo site_url('admin/logout') ?>">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        GIS
                    </div>
                </li>

                <li class="<?php if(isset($tinggimeter_manager)){echo $tinggimeter_manager ;}?>">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Tinggi Meter Manager</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="<?php if(isset($active_tinggimeter)){echo $active_tinggimeter ;}?>">
                    <a href="<?php echo site_url('admin') ?>">View Tinggi Meter</a></li>
                        <li class="<?php if(isset($tinggimeter_form)){echo $active_tinggimeter_form ;}?>">
                    <a href="<?php echo site_url('admin/form_tinggimeter') ?>">Form Tinggi Meter</a></li>
                    </ul>
                </li>
      

                <li class="<?php if(isset($active_kota)){echo $active_kota ;}?>">
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Kota Manager</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="<?php if(isset($kota_manager)){echo $kota_manager ;}?>"><a href="<?php echo site_url('admin/kota_manager') ?>">View Kota</a></li>
                        <li class="<?php if(isset($kota_form)){echo $kota_form ;}?>"><a href="<?php echo site_url('admin/form_kota') ?>">Form Kota</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Admin GIS </span>
                </li>


                <li>
                    <a href="<?php echo site_url('admin/logout') ?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
