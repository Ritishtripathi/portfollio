<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Myweb</title>
    <!-- font icons -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/themify-icons/css/themify-icons.css')?>">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="<?=base_url('assets/css/meyawo.css')?>">
    <link href="https://img.freepik.com/premium-photo/letter-r-logo-with-gold-red-details_7023-232971.jpg" rel="icon" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar container-fluid" data-spy="affix" data-offset-top="20">
    <div class="container">
            <a class="logo" href="<?= base_url()?>">RITISH</a>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="<?= base_url('Web')?>">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="<?= base_url('Web/about')?>">About</a>
                </li>
                <li class="item">
                    <a class="link" href="<?= base_url('Web/portfillio')?>">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="<?= base_url('Web/skills')?>">Skills</a>
                </li>
                <!-- <li class="item">
                    <a class="link" href="<?= base_url('Web/blog')?>">Blog</a>
                </li> -->
                <li class="item">
                    <a class="link" href="<?= base_url('Web/contact')?>">Contact</a>
                </li>
                <li class="item ml-md-3">
                    <a href="<?= base_url('assets/pdf/Ritish.pdf')?>" target="_blank" class="btn btn-primary">Resume</a>
                </li>
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

    <header class="header">
    <div class="overlay"></div>
    <div class="header-content container">
        <h1 class="header-title">
            <span class="up" style="color: orange;">!!_जय श्री राम_!!</span>
            <span class="down">I Am Ritish Tri.</span>
        </h1>
        <p class="header-subtitle">Web Developer</p>

        <a href="https://www.itacademics.co.in/" target="_blank"><button class="btn btn-primary">Visit My Works</button></a>
    </div>
</header>