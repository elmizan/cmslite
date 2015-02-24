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
    <title>{blog_title}</title>

    <!-- Bootstrap core CSS -->
    <?= link_tag('assets/css/bootstrap.min.css');?>

    <!-- Custom styles for this template -->
    <?= link_tag('assets/css/justified-nav.css');?>
    <?= link_tag('assets/css/style.css');?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <div class="masthead">
        <?= heading('CMS Lite!', 3, 'class="text-muted"');?>
        <nav>
          <ul class="nav nav-justified">
          {menuitems}
            <li><?= anchor('{link}', '{title}');?></li>
          {/menuitems}
          </ul>
        </nav>
      </div>