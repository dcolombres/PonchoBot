<?php snippet('header') ?>

  <main class="main" role="main">

    <section class="jumbotron jumbocentrado focusable" style="background-image: url('<?= $page->background()->text() ?>');" tabindex="-1">
        <div class="gradient">
        <div class="jumbotron_body">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 text-center">

                <h1 class="m-b-2" id="titulo-jumbo" style="letter-spacing:0.02em; color:#fff; "><?= $page->title()->html() ?></h1>
                <h3 style="color:#fff;text-shadow: 2px 2px 20px #000;"><?= $page->subtitle()->kirbytext() ?></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="overlay"></div>
      </section>
      <div class="container">



  <?php foreach($page->children() as $section): ?>

    <?php if ($section->intendedTemplate()=='section-boton'):?>
    <!-- BOTONERA -->
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h2><strong><?= $section->text() ?></strong></h2>

        <?php foreach($section->children() as $boton): ?>

          <div class="col-md-<?= 12 / $section->columns()->int()  ?>">
            <a href="<?= $boton->linkurl()->text() ?>" class="back-blanco">
              <h4><?= $boton->title()->html() ?></h4>
            </a>
          </div>

        <?php endforeach ?>
        </div>
      </div>
      <!-- END BOTONERA -->
    <?php endif ?>

    <?php if ($section->intendedTemplate()=='section-panel'):?>
    <!-- PANELERA -->
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h2><strong><?= $section->text() ?><strong></h2>

        <?php foreach($section->children() as $panel): ?>

          <a href="<?= $panel->linkurl()->text() ?>">
          <div class="col-md-<?= 12 / $section->columns()->int()  ?>">
          <div class="panel panel-default">
              <div class="panel-heading valign-wrapper" style="background-color:#0092cf;">
                  <h3 class="text-white valign"><strong><?= $panel->header()->html() ?></strong></h3>
              </div>
              <div class="panel-body">
                  <h4 class="bold"><strong><?= $panel->bajada()->html() ?></strong></h4>
                  <p class="panelText"><?= $panel->description()->html() ?></p>
                </div>
          </div>
        </div>
        </a>

        <?php endforeach ?>
        </div>
      </div>
      <!-- END PANELERA -->
    <?php endif ?>

    <?php if ($section->intendedTemplate()=='section-tarjeta'):?>
    <!-- TARJETERA -->
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h2><?= $section->text() ?></h2>
        <?php foreach($section->children() as $tarjeta): ?>



          <div class="col-sm-3">
              <a href="<?= $tarjeta->linkurl()->text() ?>">
                  <div class="panel panel-default tarjeta">
                      <div class="panel-heading text-center tarjeta-titulo" style="background-color:#0092cf;">
                        <img class="tarjeta-item"src="<?= $tarjeta->icon()->text() ?>"></img>
                      </div>
                      <div class="panel-body-chico valign-wrapper">
                          <h4 class="bold valign-text tarjeta-texto"><strong><?= $tarjeta->title()->html() ?></strong></h4>
                      </div>
                  </div>
              </a>
          </div>




        <?php endforeach ?>
        </div>
      </div>
      <!-- END TARJETERA -->
    <?php endif ?>

  <?php endforeach ?>

  </div>
  </main>
<?php snippet('footer') ?>
