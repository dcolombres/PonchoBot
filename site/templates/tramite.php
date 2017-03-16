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
              <?= $page->texthtml()->html() ?>
            </div>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <?php foreach($page->children() as $section): ?>
      
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

  <?php snippet('footer') ?>
