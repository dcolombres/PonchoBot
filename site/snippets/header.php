<?php if(!$site->user()) go('/panel') ?>

<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <?= css('assets/css/bootstrap.min.css') ?>
  <?= css('assets/css/poncho.css') ?>
  <?= css('assets/css/palta.css') ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?= css('assets/css/font-awesome.css') ?>
  <?= css('assets/css/icono-arg.css') ?>

  <?= js('assets/js/listjs.js') ?>

<!-- bootstrap tables -->
<?= css('https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css') ?>

  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

</head>
<body>
