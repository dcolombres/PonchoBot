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
  <?php if ($section->intendedTemplate()=='section-panel'):?>
    <section>
      <div class="container">
        <div class="panel-pane pane-titulo">
          <div class="pane-content">
            <h1 class="activities-sidbar"><?= $section->text() ?></h1>
          </div>
        </div>
<?php foreach($section->children() as $panel): ?>
        <div class="panel-separator"></div>
        <div class="panel-pane pane-shortcut panel-secondary">
          <div class="pane-content">
            <div class="col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
              <a href="<?= $panel->linkurl()->text() ?>" class="panel panel-default panel-icon">
                <div class="panel-heading"><i class="fa <?= $panel->fontawesome()->text() ?>"></i></div>
                <div class="panel-body">
                  <h3><?= $panel->bajada()->html() ?></h3>
                  <p class="text-muted"><?= $panel->description()->html() ?></p>
                </div>
              </a>
            </div>
          </div>
        </div>
<?php endforeach ?>


        <div class="panel-separator"></div><div class="panel-pane pane-shortcut panel-secondary">


          <div class="pane-content">
            <div class="col-sm-6 col-md-3">

              <a href="https://www.argentina.gob.ar/programa-de-acceso-al-credito-y-la-competitividad-instituciones-planes-de-fortalecimiento-pacc  " class="panel panel-default panel-icon">	<div class="panel-heading"><i class="fa fa-credit-card-alt"></i></div>
                <div class="panel-body">
                  <h3>Acceder al programa de acceso al crédito y la competitividad </h3>
                  <p class="text-muted">Brindamos apoyo a incubadoras de Empresas o Instituciones Especializadas en apoyo emprendedor que ayuden a los nuevos emprendimientos acelerando la evolución y asegurando el éxito de los proyectos. proporcionando asistencia técnica continua y monitoreo a través de una amplia gama de recursos y conocimientos específicos. </p>
                </div>


              </a>
            </div>














      </div>


      </div>
    <div class="panel-separator"></div><div class="panel-pane pane-shortcut panel-secondary">


      <div class="pane-content">
        <div class="col-sm-6 col-md-3">

    	<a href="https://www.argentina.gob.ar/solicitud-de-arbitraje-de-consumo  " class="panel panel-default panel-icon">	<div class="panel-heading"><i class="fa fa-users"></i></div>
        <div class="panel-body">
    	    <h3>Solicitar un  arbitraje de consumo </h3>
    	    <p class="text-muted">Se convoca la intervención de un tercero neutral (tribunal arbitral) para resolver un conflicto de consumo entre un consumidor  y un proveedor de bienes y servicios. </p>
        </div>


    </a>
    </div>


      </div>


      </div>
    <div class="panel-separator"></div><div class="panel-pane pane-shortcut panel-secondary">


      <div class="pane-content">
        <div class="col-sm-6 col-md-3">

    	<a href="https://www.argentina.gob.ar/inscripcion-en-el-registro-industrial-de-la-nacion-rin    " class="panel panel-default panel-icon">	<div class="panel-heading"><i class="fa fa-industry"></i></div>
        <div class="panel-body">
    	    <h3>Pedir la inscripción en el Registro Industrial de la Nación  (RIN)</h3>
    	    <p class="text-muted">El objetivo de este registro es el de poseer el conocimiento específico de toda la producción (manufacturera) de la Argentina. </p>
        </div>


    </a>
    </div>


      </div>


      </div>
    <div class="panel-separator"></div><div class="panel-pane pane-shortcut">


      <div class="pane-content">
        <div class="col-md-12">
      <p class="text-center margin-60">
        <a href="http://www.produccion.gob.ar/guia-de-tramites/" class="btn btn-primary btn-lg">
    Ver más servicios </a>  </p>
    </div>  </div>


      </div>
    <div class="panel-separator"></div><div class="panel-pane pane-shortcut">


      <div class="pane-content">
        <div class="col-md-12">
      <p class="text-center margin-60">
        <a href="http://www.produccion.gob.ar/" class="btn btn-primary btn-lg">
    Ir al sitio web </a>  </p>
    </div>  </div>


      </div>
      </div>
    </section>



  <?php foreach($page->children() as $section): ?>

    <?php if ($section->intendedTemplate()=='section-boton'):?>
    <!-- BOTONERA -->
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h2><strong><?= $section->text() ?></strong></h2>

        <?php foreach($section->children() as $boton): ?>

          <div class="col-xs-12 col-sm-6 col-md-3">
            <a class="panel panel-default" >
              <div class="panel-body">
                <h3>Ministerio de Economía</h3>
              </div>
            </a>
          </div>

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

  </main>
<?php snippet('footer') ?>
