&lt;section class="jumbotron" style="background-image: url('<?= $page->background() ?>');"&gt;
  &lt;div class="jumbotron_body"&gt;
    &lt;div class="container"&gt;
      &lt;div class="row"&gt;
        &lt;div class="col-xs-12 col-md-8 col-md-offset-2 text-center"&gt;
          &lt;h1&gt;<?= $page->titulo() ?>&lt;/h1&gt;
          &lt;p&gt;<?= $page->subtitle()->html() ?>&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="overlay"&gt;&lt;/div&gt;
&lt;/section&gt;

<?php foreach($page->children() as $section): ?>
  &lt;section id="<?= $section->identificador() ?>" class="<?= str_replace(",","",$section->class()) ?>"&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;<?= $section->titulo() ?>&lt;/h2&gt;

      <?php if ($section->intendedTemplate()=='section-boton'):?>
        &lt;div class="row panels-row"&gt;
          <?php foreach($section->children() as $boton): ?>
            &lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
              &lt;a class="panel panel-default text-gray <?= str_replace(",","",$boton->class()) ?>" href="<?= $boton->linkurl() ?>"&gt;
                &lt;div class="panel-body text-left"&gt;
                  &lt;h3 class=""&gt;<?= $boton->title() ?>&lt;/h3&gt;
                  &lt;p class="text-muted"&gt;<?= $boton->text()->html() ?>&lt;/p&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          <?php endforeach ?>
        &lt;/div&gt;

      <?php elseif ($section->intendedTemplate()=='section-panel'): ?>
        &lt;div class="row panels-row"&gt;
          <?php foreach($section->children() as $panel): ?>
            &lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
              &lt;a class="panel panel-default panel-icon panel-secondary" href="<?= $panel->linkurl() ?>"&gt;
                &lt;div class="panel-heading bg-primary <?= str_replace(",","",$panel->class()) ?>"&gt;
                  &lt;h1 class="text-left" style="font-size:175%"&gt;<?= $panel->header() ?>&lt;/h1&gt;
                &lt;/div&gt;
                &lt;div class="panel-body text-left"&gt;
                  &lt;h3&gt;<?= $panel->bajada() ?>&lt;/h3&gt;
                  &lt;p class="text-muted"&gt;<?= $panel->description() ?>&lt;/p&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          <?php endforeach ?>
        &lt;/div&gt;

      <?php elseif ($section->intendedTemplate()=='section-panel-foto'): ?>
        &lt;div class="row panels-row"&gt;
          <?php foreach($section->children() as $panelFoto): ?>
            &lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
              &lt;a class="panel panel-default panel-icon panel-secondary" href="<?= $panelFoto->linkurl() ?>"&gt;
                &lt;div class="panel-heading bg-primary <?= str_replace(",","",$panelFoto->class()) ?>" style="background-image: url('<?= $panelFoto->urlimagen() ?>');"&gt;
                &lt;/div&gt;
                &lt;div class="panel-body text-left"&gt;
                  &lt;h3&gt;<?= $panelFoto->bajada() ?>&lt;/h3&gt;
                  &lt;p class="text-muted"&gt;<?= $panelFoto->description() ?>&lt;/p&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          <?php endforeach ?>
        &lt;/div&gt;

      <?php elseif ($section->intendedTemplate()=='section-panel-icono'): ?>
        &lt;div class="row panels-row"&gt;
          <?php foreach($section->children() as $panelIcono): ?>
            &lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
              &lt;a class="panel panel-default panel-icon panel-secondary" href="<?= $panelIcono->linkurl() ?>"&gt;
                &lt;div class="panel-heading bg-primary <?= str_replace(",","",$panelIcono->class()) ?>" style="display: flex; align-items: center; justify-content: center"&gt;
                  &lt;img src="<?= $panelIcono->urlicono() ?>" alt="" style="height:80px; max-width:50%; "&gt;&lt;/img&gt;
                &lt;/div&gt;
                &lt;div class="panel-body text-left"&gt;
                  &lt;h3&gt;<?= $panelIcono->bajada() ?>&lt;/h3&gt;
                  &lt;p class="text-muted"&gt;<?= $panelIcono->description() ?>&lt;/p&gt;
                &lt;/div&gt;
              &lt;/a&gt;
            &lt;/div&gt;
          <?php endforeach ?>
        &lt;/div&gt;


      <?php elseif ($section->intendedTemplate()=='section-panel-color'): ?>
        &lt;div class="row equal"&gt;
          <?php foreach($section->children() as $panelColor): ?>
              &lt;div class="text-center <?= str_replace(",","",$panelColor->class()) ?> p-t-3 p-b-3 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>" style="display: flex; align-items: center; justify-content: center; flex-flow: column; "&gt;
                &lt;img src="<?= $panelColor->urlicono() ?>" alt="" style="height:80px; max-width:50%; "&gt;&lt;/img&gt;
                &lt;!-- &lt;i class="fa fa-camera fa-5x"&gt; &lt;/i&gt; -->
              &lt;/br&gt;
                &lt;p&gt;<?= $panelColor->description() ?>&lt;/p&gt;
              &lt;/div&gt;
            <?php endforeach ?>
          &lt;/div&gt;

        <?php elseif ($section->intendedTemplate()=='section-infografia'): ?>
          &lt;div class="row panels-row"&gt;
            &lt;div class="container"&gt;
              &lt;div class="col-md-12"&gt;
                &lt;img src="<?= $section->imgdesktop() ?>" alt="" class="img-responsive hidden-md-down"&gt;
                &lt;img src="<?= $section->imgtablet() ?>" alt="" class="img-responsive hidden-lg-up hidden-sm-down"&gt;
                &lt;img src="<?= $section->imgmobile() ?>" alt="" class="img-responsive hidden-md-up"&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;

        <?php elseif ($section->intendedTemplate()=='section-texto'): ?>
          &lt;div class="row"&gt;
            &lt;div class="col-md-12 text-left <?= str_replace(",","",$section->class()) ?>"&gt;
              <?= $section->texthtml()->html() ?>

            &lt;/div&gt;
          &lt;/div&gt;

        <?php elseif ($section->intendedTemplate()=='section-texto-imagen'): ?>
          &lt;div class="row"&gt;
            <?php if ($section->align()=='i'): ?>
              &lt;div class="col-sm-4"&gt;
                &lt;img class="img-circle" src="<?= $section->urlimagen() ?>" style="max-width: 100%;"&gt;
              &lt;/div&gt;
              &lt;div class="col-sm-8 text-left"&gt;
                <?= $section->texthtml()->html() ?>
              &lt;/div&gt;
            <?php elseif ($section->align()=='d'): ?>
              &lt;div class="col-sm-8 text-left"&gt;
                <?= $section->texthtml()->html() ?>
              &lt;/div&gt;
              &lt;div class="col-sm-4"&gt;
                &lt;img class="<?= $section->imgClass() ?>" src="<?= $section->urlimagen() ?>" style="max-width: 100%;"&gt;
              &lt;/div&gt;
            <?php endif ?>
          &lt;/div&gt;

        <?php elseif ($section->intendedTemplate()=='section-numero'): ?>
          &lt;div class="row numbers text-left"&gt;
            <?php foreach($section->children() as $numero): ?>
              &lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
                &lt;div class="h2 <?= $numero->color() ?>"&gt; <?= $numero->number() ?> &lt;small class="<?= $numero->color() ?>"&gt; <?= $numero->small() ?>&lt;/small&gt; &lt;/div&gt;
                &lt;p&gt;<?= $numero->description() ?>&lt;/p&gt;
              &lt;/div&gt;
            <?php endforeach ?>
          &lt;/div&gt;

        <?php elseif ($section->intendedTemplate()=='section-map'): ?>
          &lt;div class="map-container"&gt;&lt;/div&gt;

        <?php elseif ($section->intendedTemplate()=='section-video'): ?>
          &lt;div class="embed-responsive embed-responsive-16by9"&gt;
            &lt;iframe width="1280" height="720" src="https://www.youtube.com/embed/<?= $section->videourl() ?>?rel=0&amp;controls=0&amp;showinfo=0?ecver=1" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
          &lt;/div&gt;

          <?php endif ?>
        &lt;/div&gt;
      &lt;/section&gt;
    <?php endforeach ?>

    <?php if ($page->footer()->isNotEmpty()): ?>
      &lt;section style="background: #fff" class="m-b-3"&gt;
        &lt;div class="container"&gt;
          &lt;div class="text-left"&gt;
            &lt;h2&gt;También te puede interesar...&lt;/h2&gt;
          &lt;/div&gt;
          <?php
          $footerTags = explode(",", $page->footer());
          ?>
          &lt;div class="row"&gt;
            <?php for ($i=0; $i < count($footerTags) ; $i++): ?>
              &lt;div class="col-md-4 interesar"&gt;
                &lt;a href="<?php echo $site->page('footers/' . $footerTags[$i])->linkurl() ?>"&gt;
                  &lt;h5&gt;<?php echo $site->page('footers/' . $footerTags[$i])->title() ?>&lt;/h5&gt;
                  &lt;p class="text-muted"&gt;<?php echo $site->page('footers/' . $footerTags[$i])->text()->html() ?>&lt;/p&gt;
                &lt;/a&gt;
              &lt;/div&gt;
            <?php endfor ?>
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/section&gt;
    <?php endif ?>
