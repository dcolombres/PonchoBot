&lt;section class="jumbotron" style="background-image: url('<?= $page->background()->text() ?>');"&gt;
&lt;div class="jumbotron_body"&gt;
&lt;div class="container"&gt;
&lt;div class="row"&gt;
&lt;div class="col-xs-12 col-md-8 col-md-offset-2 text-center"&gt;
&lt;h1&gt;<?= $page->titulo()->html() ?>&lt;/h1&gt;
&lt;p&gt;<?= html($page->subtitle(), false) ?>&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="overlay"&gt;&lt;/div&gt;
&lt;/section&gt;

<?php foreach($page->children() as $section): ?>
&lt;section id="<?= $section->identificador()->text() ?>" class="<?= $section->class()->text() ?>"&gt;
&lt;div class="container"&gt;
&lt;h2&gt;<?= $section->text() ?>&lt;/h2&gt;
<?php if ($section->intendedTemplate()=='section-boton'):?>
&lt;div class="row panels-row"&gt;
<?php foreach($section->children() as $boton): ?>
&lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
&lt;a class="panel panel-default <?= $boton->class() ?>" href="<?= $boton->linkurl()->text() ?>"&gt;
&lt;div class="panel-body text-left"&gt;
&lt;h3 class="text-gray"&gt;<?= $boton->title()->text() ?>&lt;/h3&gt;
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
&lt;div class="panel-heading bg-primary <?= $panel->class() ?>"&gt;
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
&lt;div class="panel-heading bg-primary <?= $panelFoto->class() ?>" style="background-image: url('<?= $panelFoto->urlimagen()->text() ?>');"&gt;
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
&lt;div class="panel-heading bg-primary <?= $panelIcono->class() ?>" style="display: flex; align-items: center; justify-content: center"&gt;
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

<?php elseif ($section->intendedTemplate()=='section-infografia'): ?>
&lt;div class="row panels-row"&gt;
&lt;div class="container"&gt;
&lt;div class="col-md-12"&gt;
&lt;img src="<?= $section->imgdesktop()->text() ?>" alt="" class="img-responsive hidden-md-down"&gt;
&lt;img src="<?= $section->imgtablet()->text() ?>" alt="" class="img-responsive hidden-lg-up hidden-sm-down"&gt;
&lt;img src="<?= $section->imgmobile()->text() ?>" alt="" class="img-responsive hidden-md-up"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-texto'): ?>
&lt;div class="row"&gt;
&lt;div class="col-md-12 text-left <?= $section->class() ?>"&gt;
<?= html($section->texthtml(), false) ?>
&lt;/div&gt;
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-texto-imagen'): ?>
&lt;div class="row"&gt;
<?php if ($section->align()->text()=='i'): ?>
&lt;div class="col-sm-4"&gt;
&lt;img class="img-circle" src="<?= $section->urlimagen()->text() ?>" style="max-width: 100%;"&gt;
&lt;/div&gt;
&lt;div class="col-sm-8 text-left"&gt;
<?= html($section->texthtml(), false) ?>
&lt;/div&gt;
<?php elseif ($section->align()->text()=='d'): ?>
&lt;div class="col-sm-8 text-left"&gt;
<?= html($section->texthtml(), false) ?>
&lt;/div&gt;
&lt;div class="col-sm-4"&gt;
&lt;img class="img-circle" src="<?= $section->urlimagen()->text() ?>" style="max-width: 100%;"&gt;
&lt;/div&gt;
<?php endif ?>
&lt;/div&gt;

<?php elseif ($section->intendedTemplate()=='section-numero'): ?>
&lt;div class="row numbers text-left"&gt;
<?php foreach($section->children() as $numero): ?>
&lt;div class="col-xs-12 col-sm-6 col-md-<?= 12 / $section->columns()->int()  ?>"&gt;
&lt;div class="h2 <?= $numero->color()->text() ?>"&gt; <?= $numero->number()->text() ?> &lt;small class="<?= $numero->color()->text() ?>"&gt; <?= $numero->small()->text() ?>&lt;/small&gt; &lt;/div&gt;
&lt;p&gt;<?= $numero->description()->text() ?>&lt;/p&gt;
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;

<?php endif ?>
&lt;/div&gt;
&lt;/section&gt;
<?php endforeach ?>

<?php if ($page->footer()!=''): ?>
&lt;section style="background: #fff"&gt;
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
&lt;p class="text-muted"&gt;<?=  $site->page('footers/' . $footerTags[$i])->text() ?>&lt;/p&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endfor ?>
&lt;/div&gt;
&lt;/div&gt;
&lt;/section&gt;
<?php endif ?>
