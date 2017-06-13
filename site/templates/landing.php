<?php snippet('header') ?>
<?php snippet('ponchoHeader') ?>
<title>PonchoBot</title>

<span id="main">
  <main class="main" role="main">
    <?php if ($page->fileimage()->isNotEmpty()): ?>
      <section class="jumbotron <?= $page->class() ?>" style="background-image: url('<?= $page->fileimage()->toFile()->url() ?>');">
      <?php else: ?>
        <section class="jumbotron <?= $page->class() ?>" style="background-image: url('<?= $page->background() ?>');">
        <?php endif ?>
        <div class="jumbotron_body">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                <h1><?= $page->titulo() ?></h1>
                <?= $page->texthtml() ?>
              </div>
            </div>
          </div>
        </div>
        <div class="overlay"></div>
      </section>


      <?php foreach($page->children() as $section): ?>
        <section id="<?= $section->identificador() ?>" class="<?= str_replace(",","",$section->class()) ?>">
          <div class="container">

            <?php if ($section->intendedTemplate()=='section-boton'):?>
              <?php if($section->titulo()->isNotEmpty() ) : ?><h2 class="text-center"> <?= $section->titulo() ?> </h2><?php endif; ?>
              <?= $section->texthtml() ?>
              <div class="row panels-row">
                <?php foreach($section->children() as $boton): ?>
                  <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                    <a class="panel panel-default text-gray text-left <?= str_replace(",","",$boton->class()) ?>" <?php if ($boton->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> href="<?= $boton->linkurl() ?>">
                      <div class="panel-body">
                        <h3><?= $boton->title() ?></h3>
                        <p class="text-muted"><?= $boton->text() ?></p>
                      </div>
                    </a>
                  </div>
                <?php endforeach ?>
              </div>

            <?php elseif ($section->intendedTemplate()=='section-tabla'): ?>
              <?php if($section->titulo()->isNotEmpty() ) : ?><h2 class="text-center"> <?= $section->titulo() ?> </h2><?php endif; ?>
              <?php
              $tableHead = array( $section->encabezado1(), $section->encabezado2(), $section->encabezado3(), $section->encabezado4(), $section->encabezado5(), $section->encabezado6() );
              ?>
              <table class="table <?= str_replace(",","",$section->class()) ?> <?= $section->classtxt() ?>">
                <thead>
                  <tr>
                    <?php for ($i=0; $i < $section->columns()->int() ; $i++) { ?>
                      <th><?= $tableHead[$i] ?></th>
                      <?php } ?>
                    </tr>
                  </thead>

                  <tbody>
                    <?php foreach ($section->children() as $tableRow) { ?>
                      <?php $tableRow = array ($tableRow->campo1(), $tableRow->campo2(), $tableRow->campo3(), $tableRow->campo4(),$tableRow->campo5(),$tableRow->campo6() ); ?>
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
                    <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
                    <?= $section->texthtml() ?>
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
                    <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
                    <?= $section->texthtml() ?>
                    <div class="row panels-row">
                      <?php foreach($section->children() as $panelFoto): ?>
                        <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                          <a <?php if ($panelFoto->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> class="panel panel-default panel-icon panel-secondary" href="<?= $panelFoto->linkurl() ?>">
                            <?php if ($panelFoto->fileimage()->isNotEmpty()): ?>
                              <div class="panel-heading bg-primary <?= str_replace(",","",$panelFoto->class()) ?>" style="background-image: url('<?= $panelFoto->fileimage()->toFile()->url() ?>');">
                              </div>
                            <?php else: ?>
                              <div class="panel-heading bg-primary <?= str_replace(",","",$panelFoto->class()) ?>" style="background-image: url('<?= $panelFoto->urlimagen() ?>');">
                              </div>
                            <?php endif ?>
                            <div class="panel-body text-left">
                              <h3><?= $panelFoto->bajada() ?></h3>
                              <p class="text-muted"><?= $panelFoto->description() ?></p>
                            </div>
                          </a>
                        </div>
                      <?php endforeach ?>
                    </div>

                  <?php elseif ($section->intendedTemplate()=='section-panel-icono'): ?>
                    <?php if($section->titulo()->isNotEmpty() ) : ?><h2 class="text-center"> <?= $section->titulo() ?> </h2><?php endif; ?>
                    <?= $section->texthtml() ?>
                    <div class="row panels-row">
                      <?php foreach($section->children() as $panelIcono): ?>
                        <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>">
                          <a <?php if ($panelIcono->linkurl()=="") {echo 'style="pointer-events:none;"';} ?> class="panel panel-default panel-icon panel-secondary" href="<?= $panelIcono->linkurl() ?>">
                            <div class="panel-heading bg-primary panelIcono <?= str_replace(",","",$panelIcono->class()) ?>">
                              <?php if ($panelIcono->urlicono()->isNotEmpty()): ?>
                                <img src="<?= $panelIcono->urlicono() ?>" alt="" ></img>
                              <?php elseif($panelIcono->fontawesome()->isNotEmpty()): ?>
                                <i class="fa fa-2x <?= $panelIcono->fontawesome() ?>"></i>
                              <?php else: ?>
                                <i class="material-icons fa-2x"><?= $panelIcono->materialicon() ?></i>
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

                  <?php elseif ($section->intendedTemplate()=='section-columnas'): ?>
                    <?php if($section->titulo()->isNotEmpty() ) : ?><h2 class="text-center"> <?= $section->titulo() ?> </h2><?php endif; ?>
                    <?= $section->texthtml() ?>
                    <div class="row panels-row">
                      <?php foreach($section->children() as $columna): ?>
                        <div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->value()  ?>">
                          <div class="panel-body text-left">
                            <h3><?= $columna->bajada() ?></h3>
                            <?= $columna->texthtml() ?>
                          </div>
                        </div>
                      <?php endforeach ?>
                    </div>

                  <?php elseif ($section->intendedTemplate()=='section-icono-texto'): ?>
                    <?php if($section->titulo()->isNotEmpty() ) : ?><h2 class="text-center"> <?= $section->titulo() ?> </h2><?php endif; ?>
                    <?= $section->texthtml() ?>
                    <div class="row panels-row">
                      <?php foreach($section->children() as $iconoTexto): ?>
                        <div class="p-t-3 p-b-3 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?> iconoTexto <?= str_replace(",","",$iconoTexto->class()) ?>">
                          <?php if ($iconoTexto->urlicono()->isNotEmpty()): ?>
                            <img src="<?= $iconoTexto->urlicono() ?>" alt=""></img>
                          <?php elseif($iconoTexto->fontawesome()->isNotEmpty()): ?>
                            <i class="fa fa-5x <?= $iconoTexto->fontawesome() ?>"></i>
                          <?php else: ?>
                            <i class="material-icons fa-5x"><?= $iconoTexto->materialicon() ?></i>
                          <?php endif ?>
                        </br>
                        <p><?= $iconoTexto->description() ?></p>
                      </div>
                    <?php endforeach ?>
                  </div>

                <?php elseif ($section->intendedTemplate()=='section-infografia'): ?>
                  <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
                  <?= $section->texthtml() ?>
                  <div class="row panels-row">
                    <div class="container">
                      <div class="col-md-12">
                        <?php if($section->filedesktop()->isNotEmpty()): ?>
                          <img src="<?= $section->filedesktop()->toFile()->url() ?>" alt="" class="img-responsive hidden-md-down">
                        <?php else: ?>
                          <img src="<?= $section->imgdesktop() ?>" alt="" class="img-responsive hidden-md-down">
                        <?php endif ?>
                        <?php if($section->filetablet()->isNotEmpty()): ?>
                          <img src="<?= $section->filetablet()->toFile()->url() ?>" alt="" class="img-responsive hidden-lg-up hidden-sm-down">
                        <?php else: ?>
                          <img src="<?= $section->imgtablet() ?>" alt="" class="img-responsive hidden-lg-up hidden-sm-down">
                        <?php endif ?>
                        <?php if($section->filemobile()->isNotEmpty()): ?>
                          <img src="<?= $section->filemobile()->toFile()->url() ?>" alt="" class="img-responsive hidden-md-up">
                        <?php else: ?>
                          <img src="<?= $section->imgmobile() ?>" alt="" class="img-responsive hidden-md-up">
                        <?php endif ?>
                      </div>
                    </div>
                  </div>

                <?php elseif ($section->intendedTemplate()=='section-quote'): ?>
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 <?= str_replace(",","",$section->class()) ?>">
                      <blockquote>
                        <p>" <?= $section->cita() ?> "</p>
                        <small><?= $section->autor() ?></small>
                      </blockquote>
                    </div>
                  </div>

                <?php elseif ($section->intendedTemplate()=='section-mapa'): ?>
                </div>
                <div class="container-fluid">
                  <div class="container">
                  <?php if($section->titulo()->isNotEmpty() ) : ?><h2 class="text-center"> <?= $section->titulo() ?> </h2><?php endif; ?>
                  <?= $section->texthtml() ?>
                </div>
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

                <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
                <?= $section->texthtml() ?>

              <?php elseif ($section->intendedTemplate()=='section-texto-imagen'): ?>

                <div class="row">
                  <?php if ($section->align()=='i'): ?>
                    <div class="col-sm-4">
                      <?php if ($section->fileimage()->isNotEmpty()): ?>
                        <img class="<?= $section->imgClass() ?>" src="<?= $section->fileimage()->toFile()->url() ?>" style="width: 100%;">
                      <?php else: ?>
                        <img class="<?= $section->imgClass() ?>" src="<?= $section->urlimagen() ?>" style="width: 100%;">
                      <?php endif ?>
                    </div>
                    <div class="col-sm-8 text-left">
                      <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
                      <?= $section->texthtml() ?>
                    </div>
                  <?php elseif ($section->align()=='d'): ?>
                    <div class="col-sm-8 text-left">
                      <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
                      <?= $section->texthtml() ?>
                    </div>
                    <div class="col-sm-4">
                      <?php if ($section->fileimage()->isNotEmpty()): ?>
                        <img class="<?= $section->imgClass() ?>" src="<?= $section->fileimage()->toFile()->url() ?>" style="width: 100%;">
                      <?php else: ?>
                        <img class="<?= $section->imgClass() ?>" src="<?= $section->urlimagen() ?>" style="width: 100%;">
                      <?php endif ?>
                    </div>
                  <?php endif ?>
                </div>

              <?php elseif ($section->intendedTemplate()=='section-numero'): ?>
                <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
                <?= $section->texthtml() ?>
                <div class="row numbers panels-row text-left">
                  <?php foreach($section->children() as $numero): ?>
                    <div class="numberdiv col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?> <?= str_replace(",","",$numero->class()) ?>">
                      <div class="h2 <?= $numero->textcolor() ?>"> <?= $numero->number() ?> <small class="<?= $numero->textcolor() ?>"> <?= $numero->small() ?></small> </div>
                      <p><?= $numero->description() ?></p>
                    </div>
                  <?php endforeach ?>
                </div>

              <?php elseif ($section->intendedTemplate()=='section-slider'): ?>
                <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
                <?= $section->texthtml() ?>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div id="my<?= $section->identificador() ?>" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <?php for ($i=0; $i < $section->cantidadSlider()->value() ; $i++) { ?>
                        <li data-target="#my<?= $section->identificador() ?>" data-slide-to="<?= $i ?>"></li>
                        <?php } ?>
                      </ol>
                      <div class="carousel-inner">
                        <?php $i=0; ?>
                        <?php foreach ($section->children() as $slider):
                          if ($i < $section->cantidadSlider()->value()) { ?>
                            <div class="item <?php if($i == '0') echo "active"; ?>">
                              <img src="<?= $slider->linkurl() ?>" alt="<?= $slider->identificador() ?> Slide">
                              <div class="container">
                                <div class="carousel-caption">
                                  <p><?= $slider->description() ?></p>
                                </div>
                              </div>
                            </div>
                            <?php $i++; } ?>
                          <?php endforeach ?>
                        </div>
                        <a class="carousel-control left" href="#my<?= $section->identificador() ?>" data-slide="prev">
                          <i class="fa fa-angle-left fa-3x carouselBotons"></i>
                        </a>
                        <a class="carousel-control right" href="#my<?= $section->identificador() ?>" data-slide="next">
                          <i class="fa fa-angle-right fa-3x carouselBotons"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="container">

                  <?php elseif ($section->intendedTemplate()=='section-video'): ?>
                    <?php if ($section->texthtml()->isNotEmpty()): ?>
                      <div class="row video-row">
                        <div class="col-md-5  col-xs-12 video-text">
                          <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
                          <?= $section->texthtml() ?>
                        </div>
                        <div class="col-md-6 col-md-offset-1 col-xs-12">
                          <div class="embed-responsive embed-responsive-16by9 video-flex">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?= $section->videourl() ?>?rel=0&amp;controls=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                    <?php else: ?>
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/<?= $section->videourl() ?>?rel=0&amp;controls=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen></iframe>
                      </div>
                    <?php endif ?>

                  <?php elseif ($section->intendedTemplate()=='section-modal'): ?>
                    <?php if ($section->texthtml()->isNotEmpty()): ?>
                      <div class="row video-row">
                        <div class="col-md-5  col-xs-12 video-text">
                          <?= $section->texthtml() ?>
                        </div>
                        <div class="col-md-6 col-md-offset-1 col-xs-12">
                          <div class="bg-modal">
                              <?php if($section->titulo()->isNotEmpty() ) : ?><h2> <?= $section->titulo() ?> </h2><?php endif; ?>
                            <?= $section->modaltexthtml() ?>
                          </div>
                        </div>
                      </div>
                    <?php else: ?>
                      <div class="bg-modal">
                        <?= $section->modalhtml() ?>
                      </div>
                    <?php endif ?>

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
        <div id="footer" style="position: fixed; bottom: 0; width: 100%;" class="align-center text-right">
          <button id="copy" onclick="copy(htmlCode)" class="btn bg-warning btn-primary box-shadow" ><i class="fa fa-copy"></i>&nbsp; Codigo</button>
          <a href="<?= $site->url() ?>/panel" class="btn bg-uva btn-primary"><i class="fa fa-sign-in"></i></a>
          <a href="<?= $site->url() ?>" class="btn bg-cielo btn-primary"><i class="fa fa-home"></i></a>
          &nbsp;&nbsp;
        </div>

        <pre id="htmlCode"><?php snippet('htmlCode') ?></pre>
        <?php snippet('footer') ?>
