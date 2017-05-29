<?php snippet('mediakit-header') ?>

<section id="section-0" class="jumbotron intro fixed full-height" style="background-image: url('<?php if( $page->fileimage()->isNotEmpty() ) { echo $page->fileimage()->toFile()->url(); } else { echo $page->background(); } ?>');">

  <div class="jumbotron_body text-center">
    <div class="container">
      <div class="row">
        <div class="animated-fade-in col-xs-12 col-md-8 col-md-offset-2 text-center">
          <h1><?= $page->titulo() ?></h1>
          <?= $page->texthtml() ?>
        </div>
      </div>
    </div>
  </div>
  <?php $i = 1 ?>
  <div class="next-section white text-center">
    <a class="" href="#section-<?= $i ?>"><i class="fa-arrow-down fa"></i></a>
  </div>
</section>
<?php foreach ($page->children() as $section): ?>
  <?php if ($section->intendedTemplate() == 'mediakit-img-txt'): ?>
    <section id="section-<?= $i ?>" class="animated-item-container img-and-text full-height" tabindex="-1">
      <?php if($section->align() == 'i'): ?>
      <div class="animated ">
        <div class="col-sm-4 background-img bring-from-left" style="background-image:url('<?php if( $section->fileimage()->isNotEmpty() ) { echo $section->fileimage()->toFile()->url(); } else { echo $section->urlimagen(); } ?>')"></div>
        <div class="col-sm-8 col-xs-12 text-left text-container bring-from-right">
          <h2 class="text-primary"><?= $section->titulo() ?></h2>
          <?= $section->texthtml() ?>
        </div>
      </div>
    <?php else: ?>
      <div class="animated ">
        <div class="col-sm-8 col-xs-12 text-left text-container bring-from-left">
          <h2 class="text-primary"><?= $section->titulo() ?></h2>
          <?= $section->texthtml() ?>
        </div>
        <div class="col-sm-4 background-img bring-from-right" style="background-image:url('<?php if( $section->fileimage()->isNotEmpty() ) { echo $section->fileimage()->toFile()->url(); } else { echo $section->urlimagen(); } ?>')"></div>
      </div>
    <?php endif ?>
    <?php elseif($section->intendedTemplate() == 'mediakit-img'): ?>
      <section id="section-<?= $i ?>" class="infografia" tabindex="-1">
        <div class="container-fluid mediakit-img">
          <img src="<?php if( $section->filedesktop()->isNotEmpty() ) { echo $section->filedesktop()->toFile()->url(); } else { echo $section->imgdesktop(); } ?>" alt="" class="img-responsive hidden-md hidden-sm hidden-xs">
          <img src="<?php if( $section->filetablet()->isNotEmpty() ) { echo $section->filetablet()->toFile()->url(); } else { echo $section->imgtablet(); } ?>" alt="" class="img-responsive hidden-lg hidden-xs">
          <img src="<?php if( $section->filemobile()->isNotEmpty() ) { echo $section->filemobile()->toFile()->url(); } else { echo $section->imgmobile(); } ?>" alt="" class="img-responsive hidden-lg hidden-md hidden-sm">
        </div>
      <?php elseif($section->intendedTemplate() == 'mediakit-txt'): ?>
        <section id="section-<?= $i ?>" class="jumbotron fixed full-height" style="background-image: url('<?php if( $section->fileimage()->isNotEmpty() ) { echo $section->fileimage()->toFile()->url(); } else { echo $section->background(); } ?>');">
          <div class="jumbotron_body text-center">
            <div class="container">
              <div class="row">
                <div class="animated-fade-in col-xs-12 col-md-8 col-md-offset-2 text-center">
                  <h2><?= $section->titulo() ?></h2>
                  <?= $section->texthtml() ?>
                </div>
              </div>
            </div>
          </div>
        <?php elseif($section->intendedTemplate() == 'mediakit-tarjetas'): ?>
          <section id="section-<?= $i ?>" class="animated-item-container numeros-destacados full-height" tabindex="-1">
            <div class="container">
              <h2><?= $section->titulo() ?></h2>
              <?= $section->texthtml() ?>
              <div class="row numbers animated-many-to-left text-left">
                <?php $j = 0 ?>
                <?php foreach ($section->children() as $tarjeta): ?>
                  <?php if( $j%2 == 0 ): ?>
                    <div class="bg-primary numbers-panel animated-item col-xs-12 col-sm-6 col-md-3">
                      <?= $tarjeta->texthtml() ?>
                    </div>
                  <?php else:?>
                    <div class="bg-gray numbers-panel animated-item col-xs-12 col-sm-6 col-md-3">
                      <?= $tarjeta->texthtml() ?>
                    </div>
                  <?php endif ?>
                  <?php $j += 1 ?>
                <?php endforeach ?>
              </div>
            </div>

        <?php endif ?>
        <?php $i += 1 ?>
        <div class="text-center next-section">
          <a class="" href="#section-<?= $i ?>"><i class="fa-arrow-down fa"></i></a>
        </div>
      </section>
    <?php endforeach ?>

    <section id="section-<?= $i ?>" class="contact-us full-height">
      <div class="container">
        <div class="text-center">
          <h2>Tu opinión importa!</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <form class="m-t-4">
          <div class="row">
            <div class="col-md-6">
              <input class="form-control input-lg" type="text" placeholder="Nombre"></input>
            </div>
            <div class="col-md-6">
              <input class="form-control input-lg" type="text" placeholder="Email"></input>
            </div>
            <div class="col-xs-12">
              <textarea class="form-control" rows="8" placeholder="Mensaje..."></textarea>
            </div>
            <div class="text-center">
              <input type="submit" class="btn btn-primary submit-form">
            </div>
          </div>
        </form>
      </div>
      <div class="next-section text-center">
        <a class="" href="#header"><i class="fa-arrow-up fa"></i></a>
      </div>

    </section>
    <?php snippet('mediakit-footer') ?>
