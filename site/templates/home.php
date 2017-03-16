<?php snippet('header') ?>
<?php snippet('ponchoHeader') ?>
<title>PonchoBot</title>

<main class="main" role="main">

  <section class="jumbotron" style="background-image: url('<?= $site->image('background.jpg')->url() ?>');">
    <div class="jumbotron_body">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
            <h1><?= $page->titulo()->html() ?></h1>
            <p><?= $page->intro()->text() ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>
  <section>
    <div class="container">
      <?php foreach ($site->children()->visible() as $template): ?>
        <h2><?= $template->title()->text() ?></h2>
        <div class="row panels-row">
          <?php foreach($template->children() as $landing): ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <a class="panel panel-default" href="<?= $landing->url() ?>">
                <div class="panel-body text-left">
                  <h3><?= $landing->title()->text() ?></h3>
                </div>
              </a>
            </div>
          <?php endforeach ?>
        </div>
      <?php endforeach?>
    </div>
  </section>
</main>


<?php snippet('footer') ?>
