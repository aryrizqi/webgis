<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title; ?></title>

    <link href="<?php echo base_url('assets/inspinia/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/inspinia/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/inspinia/css/animate.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/inspinia/css/style.css') ?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">GIS</h1>

            </div>
            <h3>LOGIN | ADMIN - WEBGIS</h3>

             <?php 
    $message = $this->session->flashdata('notif');
    if($message){ // user tdk terdaftar
echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error! </strong>'. $message. '</div>';
} else {
   $info = $this->session->flashdata('danger');
    if($info){// pass salah
echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error! </strong>'. $info.'</div>';
 } }
$register = $this->session->flashdata('signup');
    if($register){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error! </strong>'. $register.'</div>';
 }
 $blacklist = $this->session->flashdata('blacklist');
    if($blacklist){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error! </strong>'. $blacklist.'</div>';
 }
 $email = $this->session->flashdata('email');
    if($email){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error! </strong>'. $email.'</div>';
 }
  $alert = $this->session->flashdata('error');
    if($alert){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error! </strong>'. $alert.'</div>';
 }
 $alert = $this->session->flashdata('alert');
    if($alert){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success! </strong>'. $alert.'</div>';
 }

 $alert = $this->session->flashdata('success');
    if($alert){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success! </strong>'. $alert.'</div>';
 }
  $waiting = $this->session->flashdata('waiting');
    if($waiting){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Failed! </strong>'. $waiting.'</div>';
 }
  $alert = $this->session->flashdata('berhasil');
    if($alert){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success! </strong>'. $alert.'</div>';
 }
 $alert = $this->session->flashdata('failed');
    if($alert){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Failed! </strong>'. $alert.'</div>';
 }
 $sucver = $this->session->flashdata('sucver');
    if($sucver){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success! </strong>'. $sucver.'</div>';
 }
 $sucpass = $this->session->flashdata('sucpass');
    if($sucpass){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success! </strong>'. $sucpass.'</div>';
 }
 $gglnotifpassword = $this->session->flashdata('gglnotifpassword');
    if($gglnotifpassword){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>failed! </strong>'. $gglnotifpassword.'</div>';
 }

 $bukanadmin = $this->session->flashdata('bukanadmin');
    if($bukanadmin){ 
        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>failed! </strong>'. $bukanadmin.'</div>';
 }

?>
            <form class="m-t" role="form" method="post" action="<?php echo site_url('account/cek_login'); ?>">
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            </form>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/inspinia/js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/bootstrap.min.js') ?>"></script>

</body>

</html>
