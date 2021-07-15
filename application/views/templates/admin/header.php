<!DOCTYPE html>
<html>

<head>
    <title>Halaman Utama Data Rumah Sakit</title>

    <meta charset="UTF-8">
    <meta name="description" content="Clean and responsive administration panel">
    <meta name="keywords" content="Admin,Panel,HTML,CSS,XML,JavaScript">
    <meta name="author" content="Erik Campobadal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('public/') ?>images/logo_unila.png">
    <link rel="stylesheet" href="<?= base_url('public/') ?>css/uikit.min.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('public/') ?>css/style.css" />
    <link rel="stylesheet" href="<?= base_url('public/') ?>css/notyf.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/') ?>css/administrator.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="<?= base_url('public/') ?>js/uikit.min.js"></script>
    <script src="<?= base_url('public/') ?>js/uikit-icons.min.js"></script>
    <script src="<?php echo base_url('public/js/sweetalert.min.js') ?>"></script>
    <!-- leaflet koneksi -->
    <link rel="stylesheet" href="<?= base_url('public/') ?>leaflet/leaflet.css" />
    <script src="<?= base_url('public/') ?>leaflet/leaflet.js"></script>
    <!-- leaflet koneksi -->
    <!-- Pencarian GIS -->

    <link rel="stylesheet" href="<?= base_url('public/') ?>leaflet-cari/src/leaflet-search.css" />
    <script src="<?= base_url('public/') ?>leaflet-cari/src/leaflet-search.js"></script>
    <!-- Pencarian GIS -->
    <script>
        var base_url = "<?= base_url() ?>";
    </script>
    <style typle="text/css">
        #mapid {
            height: 600px;
        }
    </style>
</head>

<body>
    <div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
        <div class="uk-container uk-container-expand">
            <nav uk-navbar>
                <div class="uk-navbar-left">
                    <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon></a>
                    <a href="#" class="uk-navbar-item uk-logo">
                        <?= $this->session->userdata('nama') ?>
                    </a>
                </div>
                <div class="uk-navbar-right uk-light">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active">
                            <a href="#">Admin &nbsp;<span class="ion-ios-arrow-down"></span></a>
                            <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-nav-header">Actions</li>
                                    <li><a href="#" id="logout">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div id="sidebar" class="tm-sidebar-left uk-background-default">
        <center>
            <div class="user">
                <img id="avatar" width="100" class="uk-border-circle" src="<?= base_url('public/') ?>images/login.png" />
                <div class="uk-margin-top"></div>
                <div id="name" class="uk-text-truncate">Administrator</div>
                <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success"></span>
            </div>
            <br />
        </center>
        <ul class="uk-nav uk-nav-default">

            <li class="uk-nav-header">
                MENU
            </li>

            <li <?php if ($menu == "beranda") {
                ?> class="uk-active" <?php
                                    } ?>><a href="<?= base_url('administrator') ?>"><span data-uk-icon="icon: home" class="uk-margin-small-right"></span>BERANDA</a></li>
            <li <?php if ($menu == "RS") {
                ?> class="uk-active" <?php
                                    } ?>><a href="<?= base_url('administrator/rumah_sakit') ?>"><span data-uk-icon="icon:  world" class="uk-margin-small-right"></span>PETA RUMAH SAKIT</a></li>
            <li <?php if ($menu == "biodata") {
                ?> class="uk-active" <?php
                                    } ?>><a href="<?= base_url('administrator/biodata') ?>"> <span data-uk-icon="icon: file-text" class="uk-margin-small-right"></span>BIODATA</a></li>
            <?php
            if ($this->session->userdata('status') == "admin") {
            ?>
                <li <?php if ($menu == "users") {
                    ?> class="uk-active" <?php
                                        } ?>><a href="<?= base_url('administrator/users') ?>"><span data-uk-icon="icon: users" class="uk-margin-small-right"></span>USERS</a></li>
            <?php
            }

            ?>


        </ul>
    </div>

    <script src="<?= base_url('public/') ?>js/header.js"></script>