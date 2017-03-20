<?php snippet('header') ?>
<?php snippet('ponchoHeader') ?>
<title>PonchoBot</title>

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
      <section id="<?= $section->identificador()->text() ?>" class="<?= $section->class()->text() ?>">
        <div class="container">
          <h2><?= $section->text() ?></h2>
          <?php if ($section->intendedTemplate()=='section-boton'):?>
            <div class="row panels-row">
              <?php foreach($section->children() as $boton): ?>
                <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                  <a class="panel panel-default <?= $boton->class() ?>" href="<?= $boton->linkurl()->text() ?>">
                    <div class="panel-body text-left">
                      <h3 class="text-gray"><?= $boton->title()->text() ?></h3>
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
                    <div class="panel-heading bg-primary <?= $panel->class() ?>">
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
                    <div class="panel-heading bg-primary <?= $panelFoto->class() ?>" style="background-image: url('<?= $panelFoto->urlimagen()->text() ?>');">
                    </div>
                    <div class="panel-body text-left">
                      <h3><?= $panelFoto->bajada()->html() ?></h3>
                      <p class="text-muted"><?= $panelFoto->description()->html() ?></p>
                    </div>
                  </a>
                </div>
              <?php endforeach ?>
            </div>

          <?php elseif ($section->intendedTemplate()=='section-infografia'): ?>
            <div class="row panels-row">
              <div class="container">
                <div class="col-md-12">
                  <img src="<?= $section->imgdesktop()->text() ?>" alt="" class="img-responsive hidden-md-down">
                  <img src="<?= $section->imgtablet()->text() ?>" alt="" class="img-responsive hidden-lg-up hidden-sm-down">
                  <img src="<?= $section->imgmobile()->text() ?>" alt="" class="img-responsive hidden-md-up">
                </div>
              </div>
            </div>

          <?php elseif ($section->intendedTemplate()=='section-panel-icono'): ?>
            <div class="row panels-row">
              <?php foreach($section->children() as $panelIcono): ?>
                <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                  <a class="panel panel-default panel-icon panel-secondary" href="<?= $panelIcono->linkurl()->text() ?>">
                    <div class="panel-heading bg-primary <?= $panelIcono->class() ?>" style="display: flex; align-items: center; justify-content: center">
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
            <div class="row">
              <div class="col-md-12 text-left <?= $section->class() ?>">
                <?= $section->texthtml()->html() ?>
              </div>
            </div>

          <?php elseif ($section->intendedTemplate()=='section-texto-imagen'): ?>
            <div class="row">
              <?php if ($section->align()->text()=='i'): ?>
                <div class="col-sm-4">
                  <img class="img-circle" src="<?= $section->urlimagen()->text() ?>" style="max-width: 100%;">
                </div>
                <div class="col-sm-8 text-left">
                  <?= $section->texthtml()->html() ?>
                </div>
              <?php elseif ($section->align()->text()=='d'): ?>
                <div class="col-sm-8 text-left">
                  <?= $section->texthtml()->html() ?>
                </div>
                <div class="col-sm-4">
                  <img class="img-circle" src="<?= $section->urlimagen()->text() ?>" style="max-width: 100%;">
                </div>
              <?php endif ?>
              </div>

          <?php elseif ($section->intendedTemplate()=='section-numero'): ?>
            <div class="row numbers text-left">
              <?php foreach($section->children() as $numero): ?>
                <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                  <div class="h2 <?= $numero->color()->text() ?>"> <?= $numero->number()->text() ?> <small class="<?= $numero->color()->text() ?>"> <?= $numero->small()->text() ?></small> </div>
                  <p><?= $numero->description()->text() ?></p>
                </div>
              <?php endforeach ?>
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

  <!-- <a style="position:fixed; bottom:10px; right:10px" class="btn bg-uva btn-primary"href="#" id="copiarCodigo"><i class="fa fa-copy"></i>&nbsp; Codigo</a> -->
  <div id="footer" style="position: fixed; bottom: 0; width: 100%;" class="align-center text-right">
    <button id="copy" onclick="copy(htmlCode)" class="btn bg-warning btn-primary box-shadow" ><i class="fa fa-copy"></i>&nbsp; Codigo</button>
    <a href="<?= $site->url() ?>/panel" class="btn bg-uva btn-primary"><i class="fa fa-sign-in"></i></a>
    <a href="<?= $site->url() ?>" class="btn bg-cielo btn-primary"><i class="fa fa-home"></i></a>
    &nbsp;&nbsp;
  </div>

  <pre id="htmlCode"><?php snippet('htmlCode') ?></pre>
  <?php snippet('footer') ?>
