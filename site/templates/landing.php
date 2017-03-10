<?php snippet('header') ?>
<?php snippet('ponchoHeader') ?>

<span id="main">
  <main class="main" role="main">

    <section class="jumbotron" style="background-image: url('<?= $page->background()->text() ?>');">
      <div class="jumbotron_body">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
              <h1><?= $page->titulo()->html() ?></h1>
              <p><?= $page->subtitle()->text() ?></p>
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
              <h2 class="activities-sidbar"><?= $section->text() ?></h2>
            </div>
          </div>
          <?php if ($section->intendedTemplate()=='section-boton'):?>
            <div class="row panels-row">
              <?php foreach($section->children() as $boton): ?>
                <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                  <a class="panel panel-default" href="<?= $boton->linkurl()->text() ?>">
                    <div class="panel-body text-left">
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
                      <h1 class="text-left" style="font-size:175%"><?= $panel->header()->html() ?></h1>
                    </div>
                    <div class="panel-body text-left">
                      <h3><?= $panel->bajada()->html() ?></h3>
                      <p class="text-muted"><?= $panel->description()->html() ?></p>
                    </div>
                  </a>
                </div>
              <?php endforeach ?>
            </div>

          <?php elseif ($section->intendedTemplate()=='section-panel-foto'): ?>
            <div class="row panels-row">
              <?php foreach($section->children() as $panelFoto): ?>
                <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                  <a class="panel panel-default panel-icon panel-secondary" href="<?= $panelFoto->linkurl()->text() ?>">
                    <div class="panel-heading bg-primary" style="background-image: url('<?= $panelFoto->urlimagen()->text() ?>');">
                    </div>
                    <div class="panel-body text-left">
                      <h3><?= $panelFoto->bajada()->html() ?></h3>
                      <p class="text-muted"><?= $panelFoto->description()->html() ?></p>
                    </div>
                  </a>
                </div>
              <?php endforeach ?>
            </div>

          <?php elseif ($section->intendedTemplate()=='section-panel-icono'): ?>
            <div class="row panels-row">
              <?php foreach($section->children() as $panelIcono): ?>
                <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                  <a class="panel panel-default panel-icon panel-secondary" href="<?= $panelIcono->linkurl()->text() ?>">
                    <div class="panel-heading bg-primary" style="display: flex; align-items: center; justify-content: center">
                      <img src="<?= $panelIcono->urlicono()->text() ?>" alt="" style="height:80px; max-width:50%; "></img>
                    </div>
                    <div class="panel-body text-left">
                      <h3><?= $panelIcono->bajada()->html() ?></h3>
                      <p class="text-muted"><?= $panelIcono->description()->html() ?></p>
                    </div>
                  </a>
                </div>
              <?php endforeach ?>
            </div>

          <?php elseif ($section->intendedTemplate()=='section-texto'): ?>
            <div class="row panels-row">
              <div class="col-md-12 text-left">
                <?= $section->texthtml()->html() ?>
              </div>
            </div>

          <?php endif ?>
        </div>
      </section>
    <?php endforeach ?>

    <?php if ($page->footer()!=''): ?>
      <section style="background: #fff">
        <div class="container">
          <div class="text-left">
            <h2>También te puede interesar...</h2>
          </div>
          <?php
          $footerTags = explode(",", $page->footer());
          ?>
          <div class="row">
            <?php for ($i=0; $i < count($footerTags) ; $i++): ?>
              <div class="col-md-4 interesar">
                <a href="<?php echo $site->page('footers/' . $footerTags[$i])->linkurl() ?>">
                  <h5><?php echo $site->page('footers/' . $footerTags[$i])->title() ?></h5>
                  <p class="text-muted"><?php echo $site->page('footers/' . $footerTags[$i])->text() ?></p>
                </a>
              </div>
            <?php endfor ?>
          </div>
        </div>
      </section>
    <?php endif ?>


  </main>
</span>

<a style="position:fixed; bottom:10px; right:10px" class="btn bg-uva btn-primary"href="#" id="copiarCodigo"><i class="fa fa-copy"></i>&nbsp; Codigo</a>

<?php snippet('footer') ?>
