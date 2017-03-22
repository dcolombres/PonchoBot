<?php snippet('header') ?>
<?php snippet('ponchoHeader') ?>
<title>PonchoBot</title>

<main class="main" role="main">
  <div class="container">

    <div class="row">

      <div id="content" class="col-md-push-4 col-md-8">
        <?php foreach($page->children() as $section): ?>
          <section id="<?= $section->identificador()?>"class="p-b-1">
            <h2><?= $section->titulo() ?></h2>
            <?= $section->texthtml() ?>
          </section>
        <?php endforeach ?>
      </div>

      <div id="sidebar" class="col-md-4 col-md-pull-8">
        <div id="nav-anchor"></div>
        <nav id="side-nav">
          <ul class="nav nav-pills nav-stacked">
            <?php foreach($page->children() as $section): ?>
              <?php if ($section->identificador() != ''): ?>
                <li class="index-item"><a href="#<?= $section->identificador() ?>"><strong><?= $section->titulo() ?> </strong></a></li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </nav>
      </div>

    </div>
  </div>
</main>

<?php snippet('footer') ?>

</body>
</html>
