<?php snippet('header') ?>

<main class="main" role="main">

  <section class="jumbotron" style="background-image: url('<?= $page->background()->text() ?>');">
    <div class="jumbotron_body">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
            <h1><?= $page->title()->html() ?></h1>
            <p><?= $page->subtitle()->kirbytext() ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>

  <?php foreach($page->children() as $section): ?>
    <section>
      <div class="container">
        <div class="panel-pane pane-titulo">
          <div class="pane-content">
            <h1 class="activities-sidbar"><?= $section->text() ?></h1>
          </div>
        </div>
        <?php if ($section->intendedTemplate()=='section-boton'):?>
          <div class="row panels-row">
            <?php foreach($section->children() as $boton): ?>
              <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                <a class="panel panel-default" href="<?= $boton->linkurl()->text() ?>">
                  <div class="panel-body">
                    <h3><?= $boton->title()->text() ?></h3>
                    <p class="text-muted"><?= $boton->text()->html() ?></p>
                  </div>
                </a>
              </div>
            <?php endforeach ?>
          </div>
        <?php elseif ($section->intendedTemplate()=='section-panel'): ?>
          <div class="row panels-row">
            <?php foreach($section->children() as $panel): ?>
              <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                <a class="panel panel-default panel-icon panel-secondary" href="<?= $panel->linkurl()->text() ?>">
                  <div class="panel-heading bg-primary">
                    <h1 style="font-size:175%"><?= $panel->header()->html() ?></h1>
                  </div>
                  <div class="panel-body">
                    <h3><?= $panel->bajada()->html() ?></h3>
                    <p class="text-muted"><?= $panel->description()->html() ?></p>
                  </div>
                </a>
              </div>
            <?php endforeach ?>
          </div>

        <?php elseif ($section->intendedTemplate()=='section-texto'): ?>
          <div class="row panels-row">
            <?= $section->texthtml()->html() ?>
          </div>

        <?php endif ?>
      </div>
    </div>
  </section>
<?php endforeach ?>


</main>
<?php snippet('footer') ?>
