<?php

return array(
  'title' => 'Links útiles',
  'html' => function() {
    return '
    <ul class="dashboard-items">
    <li class="dashboard-item">
    <a title="PonchoBot" href="http://ponchobot.produccion.gob.ar">
    <figure>
    <span class="dashboard-item-icon dashboard-item-icon-with-border"><i class="icon fa fa-home"></i></span>
    <figcaption class="dashboard-item-text">Home PonchoBot</figcaption>
    </figure>
    </a>
    </li>
    <li class="dashboard-item">
    <a title="Manual de Marca" href="http://manual.produccion.gob.ar">
    <figure>
    <span class="dashboard-item-icon dashboard-item-icon-with-border"><i class="icon fa fa-book"></i></span>
    <figcaption class="dashboard-item-text">Manual de Marca</figcaption>
    </figure>
    </a>
    </li>
    <li class="dashboard-item">
    <a title="Web Producción" href="http://produccion.gob.ar">
    <figure>
    <span class="dashboard-item-icon dashboard-item-icon-with-border"><i class="icon fa fa-globe"></i></span>
    <figcaption class="dashboard-item-text">Web Producción</figcaption>
    </figure>
    </a>
    </li>
    </ul>
    <!--h2><a target="_blank" class="btn btn-rounded " href="http://ponchobot.produccion.gob.ar">Home PonchoBot</a></h2><br>
    <h2><a target="_blank" class="btn btn-rounded " href="http://manual.produccion.gob.ar">Manual de Marca</a></h2><br>
    <h2><a target="_blank" class="btn btn-rounded " href="http://produccion.gob.ar">Web Producción</a></h2-->
    ';
    }
  );
