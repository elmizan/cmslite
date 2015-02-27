<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?= doctype();?>

<html lang="en">
<?= meta('Content-type', 'text/html; charset=utf-8', 'equiv');?>
<head>
    <?= meta('charset', 'utf-8');?>
    <?= meta('X-UA-Compatible', 'IE=edge', 'equive');?>
    <?= meta('viewport', 'width=device-width, initial-scale=1');?>
    <?= meta('description', '');?>
    <?= meta('author', '');?>
    <?= link_tag('favicon.ico', 'shortcut icon', 'image/ico');?>
    <title>CMS Lite</title>

    <!-- Bootstrap core CSS -->
    <?= link_tag('assets/css/bootstrap.min.css');?>

    <!-- Custom styles for this template -->
    <?= link_tag('assets/css/dashboard.css');?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CMS Lite</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?= anchor(site_url('admin/'), 'Dashboard');?></li>
            <li><?= anchor(site_url('admin/logout'), 'Sign Out');?></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class=""><?= anchor(site_url('admin/'), 'List');?></li>
            <li><?= anchor(site_url('admin/create'), 'Add New');?></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          <div class="row">
          <div class="col-lg-6">
          </div>

          <div class="col-lg-2 col-lg-offset-4">
                     <?= anchor(''.site_url().'index.php/admin/create', 'Create', ['class' => 'btn btn-primary', 'role' => 'button']);?>
          </div>
            
          </div>

