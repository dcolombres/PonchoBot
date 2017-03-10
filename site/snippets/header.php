<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <?= css('assets/css/bootstrap.min.css') ?>
  <?= css('assets/css/poncho.css') ?>
  <?= css('assets/css/font-awesome.css') ?>

  <style media="screen">
  .col-md-6:nth-child(2n + 1) {
    clear: both;
  }
  .col-md-4:nth-child(3n + 1) {
    clear: both;
  }
  .col-md-3:nth-child(4n + 1) {
    clear: both;
  }
  #htmlCode{
    user-select: all;
    background: #202020;
    color: #fff;
    font-family: monospace;
    padding: 5em 5em;
  }
  </style>

</head>
<body>
