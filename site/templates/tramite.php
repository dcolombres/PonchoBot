<?php snippet('header') ?>
<?php snippet('ponchoHeader') ?>
<title>PonchoBot</title>

<main class="main" role="main">
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-push-4 col-md-8">
          <h3 class="text-uppercase"><?= $page->titular()->html() ?></h3>
          <p class="text-muted"><?= $page->titulo()->html() ?></p>
          <hr>
          <?php foreach($page->children() as $section): ?>
            <div id="<?= $section->identificador()?>"class="p-b-1">
              <h2><?= $section->titulo() ?></h2>
              <?= $section->texthtml()->html() ?>
            </div>
          <?php endforeach ?>
        </div>
        <aside class="col-md-4 col-md-pull-8">
          <section>
            <nav class="page-sidebar">
              <ul class="nav nav-pills nav-stacked">
                <li class="btn-title"><a href="#">Índice</a></li>
                <?php $i = 0 ?>
                <?php foreach($page->children() as $section): ?>
                  <?php $i = $i + 1 ?>
                  <?php if ($section->identificador() != ''): ?>
                    <li class="index-item <?php if ($i < 2) { echo 'active';} ?>"><a href="#<?= $section->identificador() ?>"><strong><!--?= $i . '- ' ?--><?= $section->titulo() ?> </strong></a></li>
                  <?php endif ?>
                <?php endforeach ?>
              </ul>
            </nav>
          </section>
        </aside>
      </div>
    </div>
  </section>

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

<!-- <a style="position:fixed; bottom:10px; right:10px" class="btn bg-uva btn-primary"href="#" id="copiarCodigo"><i class="fa fa-copy"></i>&nbsp; Codigo</a> -->
<div id="footer" style="position: fixed; bottom: 0; width: 100%;" class="align-center text-right">
  <button id="copy" onclick="copy(htmlCode)" class="btn bg-warning btn-primary box-shadow" ><i class="fa fa-copy"></i>&nbsp; Codigo</button>
  <a href="<?= $site->url() ?>/panel" class="btn bg-uva btn-primary"><i class="fa fa-sign-in"></i></a>
  <a href="<?= $site->url() ?>" class="btn bg-cielo btn-primary"><i class="fa fa-home"></i></a>
  &nbsp;&nbsp;
</div>

<?php snippet('footer') ?>
