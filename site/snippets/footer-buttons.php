<div id="footer" style="position: fixed; bottom: 0; width: 100%;" class="align-center text-right">
  <button id="copy" onclick="copy(htmlCode); $('#htmlCode').toggleClass('hidden')" class="btn bg-warning btn-primary box-shadow" ><i class="fa fa-code"></i></button>
  <a target='_blank' href="<?= $site->url() ?>/panel/pages/<?= $page->uri() ?>/edit" class="btn bg-uva btn-primary"><i class="fa fa-sign-in"></i></a>
  <a href="<?= $site->url() ?>" class="btn bg-cielo btn-primary"><i class="fa fa-home"></i></a>
  &nbsp;&nbsp;
</div>
