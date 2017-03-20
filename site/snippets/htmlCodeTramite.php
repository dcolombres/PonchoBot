&lt;section&gt;
&lt;div class="container"&gt;
&lt;div class="row"&gt;
&lt;div class="col-md-push-4 col-md-8"&gt;
&lt;h3 class="text-uppercase"&gt;<?= $page->titular()->html() ?>&lt;/h3&gt;
&lt;p class="text-muted"&gt;<?= $page->titulo()->html() ?>&lt;/p&gt;
&lt;hr&gt;
<?php foreach($page->children() as $section): ?>
&lt;div id="<?= $section->identificador()?>"class="p-b-1"&gt;
&lt;h2&gt;<?= $section->titulo() ?>&lt;/h2&gt;
<?= html($section->texthtml(), false) ?>
&lt;/div&gt;
<?php endforeach ?>
&lt;/div&gt;
&lt;aside class="col-md-4 col-md-pull-8"&gt;
&lt;section&gt;
&lt;nav class="page-sidebar"&gt;
&lt;ul class="nav nav-pills nav-stacked"&gt;
&lt;li class="btn-title"&gt;&lt;a href="#"&gt;Índice&lt;/a&gt;&lt;/li&gt;
<?php $i = 0 ?>
<?php foreach($page->children() as $section): ?>
<?php $i = $i + 1 ?>
<?php if ($section->identificador() != ''): ?>
&lt;li class="index-item <?php if ($i < 2) { echo 'active';} ?>"&gt;&lt;a href="#<?= $section->identificador() ?>"&gt;&lt;strong&gt;&lt;!--?= $i . '- ' ?--><?= $section->titulo() ?> &lt;/strong&gt;&lt;/a&gt;&lt;/li&gt;
<?php endif ?>
<?php endforeach ?>
&lt;/ul&gt;
&lt;/nav&gt;
&lt;/section&gt;
&lt;/aside&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/section&gt;

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
&lt;p class="text-muted"&gt;<?php echo $site->page('footers/' . $footerTags[$i])->text() ?>&lt;/p&gt;
&lt;/a&gt;
&lt;/div&gt;
<?php endfor ?>
&lt;/div&gt;
&lt;/div&gt;
&lt;/section&gt;
<?php endif ?>
