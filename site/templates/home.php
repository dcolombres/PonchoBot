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
        <div class="text-center">
          <h2><?= $template->title()->text() ?></h2>
        </div>
        <div class="row panels-row">
          <?php foreach($template->children()->visible() as $landing): ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <a class="panel panel-default" href="<?= $landing->url() ?>">
                <div class="panel-body text-left">
                  <h4><?php if($landing->intendedTemplate() == 'landings'):?><i class="fa fa-folder-o fa-lg"></i><?php endif?> <?= $landing->title()->text() ?></h4>
                </div>
              </a>
            </div>
          <?php endforeach ?>
        </div>
        <p class="text-right"><a class="btn btn-primary text-center btn-sm" href="<?= $template->url() ?>">Ver todas</a>
      <?php endforeach?>
    </div>
  </section>
</main>


<?php snippet('footer') ?>
