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

<!-- <a style="position:fixed; bottom:10px; right:10px" class="btn bg-uva btn-primary"href="#" id="copiarCodigo"><i class="fa fa-copy"></i>&nbsp; Codigo</a> -->
<div id="footer" style="position: fixed; bottom: 0; width: 100%;" class="align-center text-right">
<button id="copy" onclick="copy(htmlCode)" class="btn bg-warning btn-primary box-shadow" ><i class="fa fa-copy"></i>&nbsp; Codigo</button>
<a href="<?= $site->url() ?>/panel" class="btn bg-uva btn-primary"><i class="fa fa-sign-in"></i></a>
<a href="<?= $site->url() ?>" class="btn bg-cielo btn-primary"><i class="fa fa-home"></i></a>
&nbsp;&nbsp;
</div>

<pre id="htmlCode" style="margin: 0; border-style: none; border-radius: 0px;">
&lt;section class="jumbotron" style="background-image: url('<?= $page->background()->text() ?>');"&gt;
&lt;div class="jumbotron_body"&gt;
&lt;div class="container"&gt;
&lt;div class="row"&gt;
&lt;div class="col-xs-12 col-md-8 col-md-offset-2 text-center"&gt;
&lt;h1&gt;<?= $page->title()->html() ?>&lt;/h1&gt;
&lt;p&gt;<?php echo html($page->subtitle(), false) ?>&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="overlay"&gt;&lt;/div&gt;
&lt;/section&gt;
<?php foreach($page->children() as $section): ?>

&lt;section&gt;
&lt;div class="container"&gt;
&lt;div class="panel-pane pane-titulo"&gt;
&lt;div class="pane-content"&gt;
&lt;h2  &gt;<?= $section->text() ?>&lt;/h2&gt;
&lt;/div&gt;
&lt;/div&gt;
<?php if ($section->intendedTemplate()=='section-boton'):?>
&lt;div class="row panels-row"&gt;
<?php foreach($section->children() as $boton): ?>
&lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
&lt;a class="panel panel-default" href="<?= $boton->linkurl()->text() ?>"&gt;
&lt;div class="panel-body text-left"&gt;
&lt;h3&gt;<?= $boton->title()->text() ?>&lt;/h3&gt;
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
&lt;a class="panel panel-default panel-icon panel-secondary" href="<?= $panel->linkurl()->text() ?>"&gt;
&lt;div class="panel-heading bg-primary"&gt;
&lt;h1 class="text-left" style="font-size:175%"&gt;<?= $panel->header()->html() ?>&lt;/h1&gt;
&lt;/div&gt;
&lt;div class="panel-body text-left"&gt;
&lt;h3&gt;<?= $panel->bajada()->html() ?>&lt;/h3&gt;
&lt;p class="text-muted"&gt;<?= $panel->description()->html() ?>&lt;/p&gt;
&lt;/div&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;
<?php elseif ($section->intendedTemplate()=='section-panel-foto'): ?>
&lt;div class="row panels-row"&gt;
<?php foreach($section->children() as $panelFoto): ?>
&lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
&lt;a class="panel panel-default panel-icon panel-secondary" href="<?= $panelFoto->linkurl()->text() ?>"&gt;
&lt;div class="panel-heading bg-primary" style="background-image: url('<?= $panelFoto->urlimagen()->text() ?>');"&gt;
&lt;/div&gt;
&lt;div class="panel-body text-left"&gt;
&lt;h3&gt;<?= $panelFoto->bajada()->html() ?>&lt;/h3&gt;
&lt;p class="text-muted"&gt;<?= $panelFoto->description()->html() ?>&lt;/p&gt;
&lt;/div&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;
<?php elseif ($section->intendedTemplate()=='section-panel-icono'): ?>
&lt;div class="row panels-row"&gt;
<?php foreach($section->children() as $panelIcono): ?>
&lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
&lt;a class="panel panel-default panel-icon panel-secondary" href="<?= $panelIcono->linkurl()->text() ?>"&gt;
&lt;div class="panel-heading bg-primary" style="display: flex; align-items: center; justify-content: center"&gt;
&lt;img src="<?= $panelIcono->urlicono()->text() ?>" alt="" style="height:80px; max-width:50%; "&gt;&lt;/img&gt;
&lt;/div&gt;
&lt;div class="panel-body text-left"&gt;
&lt;h3&gt;<?= $panelIcono->bajada()->html() ?>&lt;/h3&gt;
&lt;p class="text-muted"&gt;<?= $panelIcono->description()->html() ?>&lt;/p&gt;
&lt;/div&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;
<?php elseif ($section->intendedTemplate()=='section-texto'): ?>
&lt;div class="row panels-row"&gt;
&lt;div class="col-md-12 text-left"&gt;
<?php echo html($section->texthtml(), false) ?>
&lt;/div&gt;
&lt;/div&gt;
<?php endif ?>
&lt;/div&gt;
&lt;/section&gt;
<?php endforeach ?>
<?php if ($page->footer()!=''): ?>

&lt;section style="background: #fff"&gt;
&lt;div class="container"&gt;
&lt;div class="pane-content text-left"&gt;
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
&lt;p class="text-muted"&gt;<?php echo html($site->page('footers/' . $footerTags[$i])->text(), false) ?>&lt;/p&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endfor ?>
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/section&gt;
<?php endif ?>

</pre>


<?php snippet('footer') ?>

<script type="text/javascript">
function copy (node) {
let range = document.createRange();
range.selectNode(node);
window.getSelection().addRange(range);

let support = document.execCommand('copy');
if (support) {
  console.info('Código copiado al portapeles');
} else {
  console.error('Tu navegador no soporta execCommand');
}
}
</script>
