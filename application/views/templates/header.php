<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Informasi Umum -->
    <title>Daeng Mappile Institute | Official Website</title>
    <meta name="description" content="Sistem Informasi Sekolah SMKN 1 Berau" />
    <meta name="author" content="Noviyanto Rachmady ['me@novay.web.id']" />

    <!-- Koleksi CSS -->
    <link href="<?= base_url(); ?>assets/src/paket/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/src/paket/css/sticky-footer.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/src/paket/css/icons.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/src/paket/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/src/paket/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/src/paket/css/onebyone.css" media="all" />
    <link href="<?= base_url(); ?>assets/src/css/utama.css" rel="stylesheet" />
    <link href="<?= base_url('assets/src/'); ?>vendors/pace-progress/css/pace.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/src/img/favicon.ico" />
</head>

<body>
    <div class="kerangka-website">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 kiri">
                        <strong class="logo"><a href="index.html"><img class="logo-dmi" src="<?= base_url(); ?>assets/src/img/logo-dmi.png" alt="Logo"></a></strong>
                    </div>
                    <div class="col-sm-8 kanan">

                        <section class="user-navigation">
                            <div class="container">
                                <div class="frame pull-right">
                                    <div class="form-search pull-right">
                                        <form action="404.html">
                                            <fieldset>
                                                <div class="field-search">
                                                    <input type="text" class="form-control input-sm" placeholder="Cari" />
                                                    <button class="btn-search" type="submit"><span class="fa-icon-search"></span></button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="profiles-box pull-right active">
                                        <a href="#" class="link-profiles pull-left">Akun Resmi</a>
                                        <ul class="tools tools-middle pull-left">
                                            <li><a href="http://fb.me/mhmmdhasanz" target="_blank"><span class="fa-icon-facebook-sign"></span></a></li>
                                            <li><a href="http://instagram.com/nasah_17" target="_blank"><span class="fa-icon-instagram"></span></a></li>
                                            <li><a href="http://google.com/+mhmmdhasanz@gmail.com" target="_blank"><span class="fa-icon-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="header-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!--  navbar start -->
                                        <nav class="navbar navbar-default navbar-business" role="navigation">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                    <span class="sr-only">Toggle Navigasi</span>
                                                    Menu Navigasi
                                                    <span class="wrap-icon pull-left">
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="collapse navbar-collapse">
                                                <span class="nook">&nbsp;</span>
                                                <ul class="nav navbar-nav">
                                                    <li><a href="<?= base_url('home') ?>">Beranda</a></li>
                                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Profil</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="<?= base_url('home/identitas') ?>">Identitas</a></li>
                                                            <li><a href="<?= base_url('home/visimisi') ?>">Visi &amp; Misi</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="<?= base_url('home/kegiatan') ?>">Kegiatan</a></li>
                                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Pembicara</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="<?= base_url('home/seminar') ?>">Pembicara Seminar</a></li>
                                                            <li><a href="<?= base_url('home/workshop') ?>">Pembicara Workshop</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="<?= base_url('home/galeri') ?>">Galeri</a></li>
                                                    <li><a href="<?= base_url('home/bukutamu') ?>">Buku Tamu</a></li>
                                                    <li class="last">&nbsp;</li>
                                                </ul>
                                                <!--  frame pull-right start -->
                                                <div class="frame">
                                                    <div class="form-search pull-right">
                                                        <form action="404.html">
                                                            <fieldset>
                                                                <div class="field-search">
                                                                    <input type="text" class="form-control input-sm" placeholder="Cari" />
                                                                    <button class="btn-search" type="submit"><span class="fa-icon-search"></span></button>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                    <div class="profiles-box pull-left active">
                                                        <ul class="tools tools-middle pull-right">
                                                            <li><a href="#"><span class="fa-icon-facebook-sign"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </header>