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
  .hidden-xs-up {
    display: none !important;
  }

  @media (max-width: 575px) {
    .hidden-xs-down {
      display: none !important;
    }
  }

  @media (min-width: 576px) {
    .hidden-sm-up {
      display: none !important;
    }
  }

  @media (max-width: 767px) {
    .hidden-sm-down {
      display: none !important;
    }
  }

  @media (min-width: 768px) {
    .hidden-md-up {
      display: none !important;
    }
  }

  @media (max-width: 991px) {
    .hidden-md-down {
      display: none !important;
    }
  }

  @media (min-width: 992px) {
    .hidden-lg-up {
      display: none !important;
    }
  }

  @media (max-width: 1199px) {
    .hidden-lg-down {
      display: none !important;
    }
  }

  @media (min-width: 1200px) {
    .hidden-xl-up {
      display: none !important;
    }
  }

  .hidden-xl-down {
    display: none !important;
  }

  .visible-print-block {
    display: none !important;
  }

  @media print {
    .visible-print-block {
      display: block !important;
    }
  }

  .visible-print-inline {
    display: none !important;
  }

  @media print {
    .visible-print-inline {
      display: inline !important;
    }
  }

  .visible-print-inline-block {
    display: none !important;
  }

  @media print {
    .visible-print-inline-block {
      display: inline-block !important;
    }
  }

  @media print {
    .hidden-print {
      display: none !important;
    }
  }

</style>

</head>
<body>
