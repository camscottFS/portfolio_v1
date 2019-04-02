<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CamDesigns - <?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/custom/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="icon" href="<?php echo base_url(); ?>assets/custom/images/favicon.png" type="image/x-icon" />
  </head>
  <body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header"><a class="navbar-brand navbar-link" href="<?php echo site_url(''); ?>"><img class="logo" src="<?php echo base_url('assets/custom/images/logo.png') ?>"></a>
        <i class="fa fa-bars navbar-toggle collapsed" aria-hidden="true" data-toggle="collapse" data-target="#navcol-1"></i>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav">
          <li role="presentation"><a href="<?php echo site_url(''); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li role="presentation"><a href="<?php echo site_url('about'); ?>"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
          <li role="presentation"><a href="<?php echo site_url('portfolio'); ?>"><i class="fa fa-book" aria-hidden="true"></i> Portfolio</a></li>
          <li role="presentation"><a href="<?php echo site_url('contact'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <a href="https://www.linkedin.com/in/cameron-scott-b3b304149/" target="_blank"><i class="social fa fa-linkedin-square" aria-hidden="true"></i></a>
          <a href="#"><i class="social fa fa-twitter-square" aria-hidden="true"></i></a>
        </ul>
        </div>
      </div>
    </div>
  </nav>
