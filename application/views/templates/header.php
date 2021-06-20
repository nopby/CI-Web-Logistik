<!DOCTYPE html>
<html>
<?php if($login == true): ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $title ?></title>

        <!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?= base_url('assets/') ?>vendor/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
<?php endif; ?>

<?php if($login == false): ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title><?= $title?></title>
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i')?>">
        <link rel="stylesheet" href="<?= base_url('assets/fonts/simple-line-icons.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/smoothproducts.css')?>">
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container"><a class="navbar-brand logo" href="<?php echo site_url('home')?>#">Send Exprezz</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?= base_url('home')?>">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('service')?>">Services</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('resi')?>">Cek Resi</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('ongkir')?>">Ongkir</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('news')?>">News</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('contact')?>">Contact Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('auth')?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<?php endif; ?>
