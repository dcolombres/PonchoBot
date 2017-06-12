<?php snippet('header') ?>
<?php snippet('ponchoHeader') ?>
<title>PonchoBot</title>

<span id="main">
  <main class="main" role="main">

    <section class="jumbotron <?= $page->class() ?>" style="background-image: url('<?= $page->background() ?>');">
      <div class="jumbotron_body">
        <div class="container">
          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 text-center p-t-4 p-b-4 table-row">

                <div class="col-xs-12 col-md-6 text-right table-cell borde-der">

                  <h4 class="text-uppercase"><?= $page->titulo() ?></h4>
                </div>
                <div class="col-xs-12 col-md-5 text-left table-cell borde-izq">
                  <h4 class="text-uppercase"><?= $page->fecha() ?></h4>
                  <h6 class="text-uppercase"><?= $page->horario() ?></h6>
                  <h5 class="text-uppercase"><?= $page->location() ?></h5>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <?php foreach($page->children() as $section): ?>
      <section id="<?= $section->identificador() ?>" class="<?= str_replace(",","",$section->class()) ?>">
        <div class="container">
          <h2><?= $section->titulo() ?></h2>

          <?php if ($section->intendedTemplate()=='section-boton'):?>
            <div class="row panels-row">
              <?php foreach($section->children() as $boton): ?>
                <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                  <a class="panel panel-default text-gray text-left <?= str_replace(",","",$boton->class()) ?>" <?php if ($boton->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> href="<?= $boton->linkurl() ?>">
                    <div class="panel-body">
                      <h3 class=""><?= $boton->title() ?></h3>
                      <p class="text-muted"><?= $boton->text() ?></p>
                    </div>
                  </a>
                </div>
              <?php endforeach ?>
            </div>

          <?php elseif ($section->intendedTemplate()=='section-tabla'): ?>
            <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
            <?php
            $tableHead = array( $section->encabezado1(), $section->encabezado2(), $section->encabezado3(), $section->encabezado4(), $section->encabezado5() );
            ?>
            <table class="table <?= str_replace(",","",$section->class()) ?>">
              <thead>
                <tr>
                  <?php for ($i=0; $i < $section->columns()->int() ; $i++) { ?>
                    <th><?= $tableHead[$i] ?></th>
                    <?php } ?>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($section->children() as $tableRow) { ?>
                    <?php $tableRow = array ($tableRow->campo1(), $tableRow->campo2(), $tableRow->campo3(), $tableRow->campo4(),$tableRow->campo5() ); ?>
                    <tr>
                      <?php  for ($i=0; $i < $section->columns()->int() ; $i++) { ?>
                        <td>
                          <?= $tableRow[$i] ?>
                        </td>
                        <?php } ?>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>

          <?php elseif ($section->intendedTemplate()=='section-panel'): ?>
            <p> <?= $section->description() ?> </p>
            <div class="row panels-row">
              <?php foreach($section->children() as $panel): ?>
                <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                  <a <?php if ($panel->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> class="panel panel-default panel-icon panel-secondary" href="<?= $panel->linkurl() ?>">
                    <div class="panel-heading bg-primary <?= str_replace(",","",$panel->class()) ?>">
                      <h1 class="text-left" style="font-size:175%"><?= $panel->header() ?></h1>
                    </div>
                    <div class="panel-body text-left">
                      <h3><?= $panel->bajada() ?></h3>
                      <p class="text-muted"><?= $panel->description() ?></p>
                    </div>
                  </a>
                </div>
              <?php endforeach ?>
            </div>

          <?php elseif ($section->intendedTemplate()=='section-panel-foto'): ?>
            <p> <?= $section->description() ?> </p>
            <div class="row panels-row">
              <?php foreach($section->children() as $panelFoto): ?>
                <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                  <a <?php if ($panelFoto->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> class="panel panel-default panel-icon panel-secondary" href="<?= $panelFoto->linkurl() ?>">
                    <div class="panel-heading bg-primary <?= str_replace(",","",$panelFoto->class()) ?>" style="background-image: url('<?= $panelFoto->urlimagen() ?>');">
                    </div>
                    <div class="panel-body text-left">
                      <h3><?= $panelFoto->bajada() ?></h3>
                      <p class="text-muted"><?= $panelFoto->description() ?></p>
                    </div>
                  </a>
                </div>
              <?php endforeach ?>
            </div>

          <?php elseif ($section->intendedTemplate()=='section-panel-icono'): ?>
            <p> <?= $section->description() ?> </p>
            <div class="row panels-row">
              <?php foreach($section->children() as $panelIcono): ?>
                <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                  <a <?php if ($panelIcono->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> class="panel panel-default panel-icon panel-secondary" href="<?= $panelIcono->linkurl() ?>">
                    <div class="panel-heading bg-primary <?= str_replace(",","",$panelIcono->class()) ?>" style="display: flex; align-items: center; justify-content: center">
                      <?php if ($panelIcono->fontawesome()==""): ?>
                        <img src="<?= $panelIcono->urlicono() ?>" alt="" style="height:80px; max-width:50%; "></img>
                      <?php else: ?>
                        <i class="fa fa-2x <?= $panelIcono->fontawesome() ?>"></i>
                      <?php endif ?>
                    </div>
                    <div class="panel-body text-left">
                      <h3><?= $panelIcono->bajada() ?></h3>
                      <p class="text-muted"><?= $panelIcono->description() ?></p>
                    </div>
                  </a>
                </div>
              <?php endforeach ?>
            </div>


          <?php elseif ($section->intendedTemplate()=='section-icono-texto'): ?>
            <p> <?= $section->description() ?> </p>
            <div class="row panels-row">
              <?php foreach($section->children() as $iconoTexto): ?>
                <div class="<?= str_replace(",","",$iconoTexto->class()) ?> p-t-3 p-b-3 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>" style="display: flex; align-items: center; justify-content: flex-start; flex-flow: column; ">
                  <?php if ($iconoTexto->fontawesome()==""): ?>
                    <img src="<?= $iconoTexto->urlicono() ?>" alt="" style="height:80px; max-width:50%; "></img>
                  <?php else: ?>
                    <i class="fa fa-5x <?= $iconoTexto->fontawesome() ?>"></i>
                  <?php endif ?>
                </br>
                <p><?= $iconoTexto->description() ?></p>
              </div>
            <?php endforeach ?>
          </div>

        <?php elseif ($section->intendedTemplate()=='section-infografia'): ?>
          <div class="row panels-row">
            <div class="container">
              <div class="col-md-12">
                <img src="<?= $section->imgdesktop() ?>" alt="" class="img-responsive hidden-md-down">
                <img src="<?= $section->imgtablet() ?>" alt="" class="img-responsive hidden-lg-up hidden-sm-down">
                <img src="<?= $section->imgmobile() ?>" alt="" class="img-responsive hidden-md-up">
              </div>
            </div>
          </div>

        <?php elseif ($section->intendedTemplate()=='section-quote'): ?>
          <div class="row">
            <div class="container">

              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 <?= str_replace(",","",$section->class()) ?>">
                <blockquote>
                  <p>" <?= $section->cita() ?> "</p>
                  <small><?= $section->autor() ?></small>
                </blockquote>

              </div>
            </div>
          </div>

        <?php elseif ($section->intendedTemplate()=='section-mapa'): ?>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="maps">
              <iframe
              class="map"
              width="100%"
              height="100%"
              frameborder="0"
              style="position:relative;top:-47px; border:none;"
              src="https://www.google.com/maps/d/embed?mid=<?= $section->mapkey()?>">
            </iframe>
          </div>
        </div>
      </div>
      <div class="container">

      <?php elseif ($section->intendedTemplate()=='section-texto'): ?>

        <div class="row">
          <div class="col-md-12 text-left <?= str_replace(",","",$section->class()) ?>">
            <?= $section->texthtml() ?>

          </div>
        </div>

      <?php elseif ($section->intendedTemplate()=='section-texto-imagen'): ?>
        <div class="row">
          <?php if ($section->align()=='i'): ?>
            <div class="col-sm-4">
              <img class="" src="<?= $section->urlimagen() ?>" style="max-width: 100%;">
            </div>
            <div class="col-sm-8 text-left">
              <?= $section->texthtml() ?>
            </div>
          <?php elseif ($section->align()=='d'): ?>
            <div class="col-sm-8 text-left">
              <?= $section->texthtml() ?>
            </div>
            <div class="col-sm-4">
              <img class="<?= $section->imgClass() ?>" src="<?= $section->urlimagen() ?>" style="max-width: 100%;">
            </div>
          <?php endif ?>
        </div>

      <?php elseif ($section->intendedTemplate()=='section-numero'): ?>
        <div class="row numbers text-left">
          <?php foreach($section->children() as $numero): ?>
            <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?> <?= str_replace(",","",$numero->class()) ?>">
              <div class="h2 <?= $numero->textcolor() ?>"> <?= $numero->number() ?> <small class="<?= $numero->textcolor() ?>"> <?= $numero->small() ?></small> </div>
              <p><?= $numero->description() ?></p>
            </div>
          <?php endforeach ?>
        </div>

      <?php elseif ($section->intendedTemplate()=='section-video'): ?>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?= $section->videourl() ?>?rel=0&amp;controls=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen></iframe>
        </div>

      <?php endif ?>
    </div>
  </section>
<?php endforeach ?>

<?php if ($page->footer()->isNotEmpty()): ?>
  <section style="background: #fff" class="m-b-3">
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
<div id="footer" style="position: fixed; bottom: 0; width: 100%; z-index:2" class="align-center text-right">
  <button id="copy" onclick="copy(htmlCode)" class="btn bg-warning btn-primary box-shadow" ><i class="fa fa-copy"></i>&nbsp; Codigo</button>
  <a href="<?= $site->url() ?>/panel" class="btn bg-uva btn-primary"><i class="fa fa-sign-in"></i></a>
  <a href="<?= $site->url() ?>" class="btn bg-cielo btn-primary"><i class="fa fa-home"></i></a>
  &nbsp;&nbsp;
</div>

<pre id="htmlCode"><?php snippet('htmlCodeEvento') ?></pre>
<?php snippet('footer') ?>
