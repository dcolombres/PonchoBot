<?php snippet('header') ?>

<header>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" style="overflow: visible;" href="#"><img src="http://www.produccion.gob.ar/wp-content/uploads/2016/10/Logo_MinProd.png" height="50" alt=""></a>
          <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Burger</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EL MINISTERIO <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.produccion.gob.ar/institucional/mision/">MISIÓN</a></li>
                <li><a href="http://www.produccion.gob.ar/institucional/el-ministro/">EL MINISTRO</a></li>
                <li><a href="http://www.produccion.gob.ar/institucional/organigrama/">ORGANIGRAMA</a></li>
                <li><a href="http://www.produccion.gob.ar/institucional/secretarias/secretaria-de-industria-2/">SECRETARIAS</a></li>
                <li><a href="http://www.produccion.gob.ar/institucional/subsecretarias/secretaria-de-industria/">SUBSECRETARIAS</a></li>
                <li><a href="http://www.produccion.gob.ar/casasdelaproduccion/">CASAS DE LA PRODUCCIÓN</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRÁMITES <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.produccion.gob.ar/guia-de-tramites/">TODOS</a></li>
                <li><a href="http://www.produccion.gob.ar/tramites-de-pymes/">PYME</a></li>
                <li><a href="http://www.produccion.gob.ar/tramites-de-emprendedores/">EMPRENDEDOR</a></li>
                <li><a href="http://www.produccion.gob.ar/tramites-de-consumidor/">CONSUMIDOR</a></li>
                <li><a href="http://www.produccion.gob.ar/tramites-comercio/">COMERCIO</a></li>
                <li><a href="http://www.produccion.gob.ar/tramites-de-industria/">INDUSTRIA</a></li>
                <li><a href="http://www.produccion.gob.ar/instituciones-productivas/">INSTITUCIONES</a></li>
              </ul>
            </li>
            <li><a href="http://www.produccion.gob.ar/sala-de-prensa/comunicados/">SALA DE PRENSA</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </div>
  </nav>

</header>
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
          <div class="panel-pane pane-titulo">
            <div class="pane-content text-left">
              <h2 class="activities-sidbar">También te puede interesar...</h2>
            </div>
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
