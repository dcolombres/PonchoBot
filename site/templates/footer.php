<?php if ($page->footer()!=''): ?>
  <section style="background: #fff">
    <div class="container">
      <div class="panel-pane pane-titulo">
        <div class="pane-content">
          <h1 class="activities-sidbar">También te puede interesar...</h1>
        </div>
      </div>
      <?php
      $footerTags = explode(",", $page->footer());
      ?>
      <?= $footerTags[1] ?>
    </div>
  </section>
<?php endif ?>
