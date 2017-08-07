<html>

<head>
  <?= css('assets/css/bootstrap.min.css') ?>
  <?= css('assets/css/poncho.css') ?>
  <?= css('assets/css/palta.css') ?>
  <?= css('assets/css/font-awesome.css') ?>
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <title>MailPreview</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

</head>

<body style="background-color: #0D47A1">
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;">
    <tbody>
      <tr>
        <td align="center">
          <table border="0" cellpadding="0" cellspacing="0" width="580">
            <tbody>
              <!-- Iteracion de secciones para armado de cada una -->
              <?php foreach($page->children() as $section): ?>

                <?php if ($section->intendedTemplate()=='mail-columnas'):?>
                  <tr bgcolor="<?= $section->bgcolor()?>">
                    <td border="0" cellpadding="0" cellspacing="0" style="padding: 0px; border-collapse: collapse;">
                      <table width="100%" style="border-collapse: collapse; padding: 0px !important">
                        <tr>
                          <?php foreach($section->children() as $columna): ?>

                            <?php if ($columna->intendedTemplate()=='mcolumna-icono-texto'):?>
                              <td align="center" width="145px" height="<?= $section->alto()?>">
                                <img src="<?= $columna->icono() ?>" border="0" alt="" style="border:none; outline:none; margin: 0px; height: auto;" />
                                <p style="text-align: center !important;">
                                  <strong style="font-size:14px; color: #666666; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif !important;"> <?= $columna->bajada() ?> </strong>
                                </p>
                              </td>

                            <?php elseif ($columna->intendedTemplate()=='mcolumna-imagen'):?>
                              <td align="center" width="<?= $columna->ancho() ?>" height="<?= $section->alto()?>">
                                <img src="<?= $columna->imagen() ?>" border="0" alt="" style="border:none; outline:none; margin: 0px; height: auto;" />
                              </td>

                            <?php elseif ($columna->intendedTemplate()=='mcolumna-texto'):?>

                              <?php if($columna->alineacion() =='i'):?>
                                <?php $alineacion = "left" ?>
                              <?php elseif($columna->alineacion()=='d'):?>
                                <?php $alineacion = "right" ?>
                              <?php else:?>
                                <?php $alineacion = "center" ?>
                              <?php endif ?>

                              <td align="center" width="<?= $columna->ancho() ?>" height="<?= $section->alto()?>">
                                <?php if($columna->estilotexto()=='si'): ?>
                                  <?php if($columna->negrita() == '1'): ?>
                                    <p style="text-align: <?= $alineacion ?>; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $columna->tamano()?>px;">
                                      <strong style="text-align: <?= $alineacion ?>; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $columna->tamano()?>px;; color: #<?= $columna->colortxt() ?>;">
                                        <?= $columna->linea1() ?>
                                      </strong>
                                    </p>
                                  <?php else: ?>
                                    <p style="text-align: <?= $alineacion ?>; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $columna->tamano()?>px; color: #<?= $columna->colortxt() ?>;">
                                      <?= $columna->linea1() ?>
                                    </p>
                                  <?php endif; ?>
                                <?php else: ?>
                                  <p style="text-align: <?= $alineacion ?>; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $columna->tamano()?>px; color: #<?= $columna->colortxt() ?>;">
                                    <?= $columna->linea1() ?>
                                  </p>
                                <?php endif; ?>
                              </td>
                            <?php endif?>
                          <?php endforeach ?>
                        </tr>
                      </table>
                    </td>
                  </tr>
                <?php elseif ($section->intendedTemplate()=='mail-lista'): ?>
                  <!-- Lista -->
                  <tr bgcolor="<?= $section->bgcolor() ?>">
                    <td width="100%">
                      <p style="margin: 40px 70px 40px 70px; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; text-align: center !important; font-size:14; color: #666666 !important;">

                        <?php foreach($section->children() as $item): ?>

                          <?php if($item->estilotexto()=='si'): ?>
                            <?php if($item->negrita() == '1'): ?>
                              <strong style="line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px; color: #<?= $item->colortxt() ?>;">
                                <strong style="color: #<?= $section->coloritem() ?>; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px;">»</strong>
                                <?= $item->linea1() ?>
                              </strong>
                            </br>
                            <?php else: ?>
                              <strong style="font-weight: normal; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px; color: #<?= $item->colortxt() ?>;">
                                <strong style="color: #<?= $section->coloritem() ?>; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px;">»</strong>
                                <?= $item->linea1() ?>
                              </strong>
                            </br>
                            <?php endif; ?>
                          <?php else: ?>
                            <strong style="font-weight: normal; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px; color: #666666;">
                              <strong style="color: #<?= $section->coloritem() ?>; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px;">»</strong>
                              <?= $item->linea1() ?>
                            </strong>
                          </br>
                          <?php endif; ?>


                      <?php endforeach ?>

                    </p>
                  </td>
                </tr>
              <?php elseif ($section->intendedTemplate()=='mail-texto'): ?>
                <tr bgcolor="<?= $section->bgColor() ?>">
                  <td width="100%">

                    <!-- Texto -->
                    <?php if($section->estilotexto()=='si'): ?>
                      <?php if($section->negrita() == '1'): ?>
                        <p style="margin: 40px 70px 0px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center;">
                          <strong style="line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $section->tamano()?>px; color: #<?= $section->colortxt() ?>; text-align: center !important;">
                            <?= $section->linea1() ?>
                          </strong>
                        </p>
                      <?php else: ?>
                        <p style="margin: 40px 70px 0px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $section->tamano()?>px; color: #<?= $section->colortxt() ?>; text-align: center !important;">
                          <?= $section->linea1() ?>
                        </p>
                      <?php endif; ?>
                    <?php else: ?>
                      <p style="margin: 40px 70px 0px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano()?>px; color: #ffffff !important;">
                        <?= $section->linea1() ?>
                      </p>
                    <?php endif; ?>

                    <!-- Linea de texto 2 -->
                    <?php if($section->mastexto()=='si'):?>
                      <?php if($section->estilo2()=='si'): ?>
                        <?php if($section->negrita2() == '1'): ?>
                          <p style="margin: 0px 70px 40px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano2()?>px; color: #ffffff !important;">
                            <strong style="line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; <?= $section->tamano2()?>px; color: #<?= $section->colortxt2() ?>; text-align: center !important;">
                              <?= $section->linea2() ?>
                            </strong>
                          </p>
                        <?php else: ?>
                          <p style="margin: 0px 70px 40px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $section->tamano2()?>px; color: #<?= $section->colortxt2() ?>; text-align: center !important;">
                            <?= $section->linea2() ?>
                          </p>
                        <?php endif; ?>
                      <?php else: ?>
                        <p style="margin: 0px 70px 40px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano2()?>px; color: #ffffff !important;">
                          <?= $section->linea2() ?>
                        </p>
                      <?php endif; ?>
                    <?php else: ?>
                    </br>
                    <?php endif; ?>

                </td>
              </tr>

            <?php elseif ($section->intendedTemplate()=='mail-boton'): ?>
              <!-- boton  -->
              <tr border="0" cellpadding="0" cellspacing="0" style="width:100%; min-width:100%;">
                <td style="padding: 40px 30px 40px 30px; margin:0;" bgcolor="#fff">
                  <table border="0" cellpadding="0" cellspacing="0" style="width:100%; min-width:100%;">
                    <tbody align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align: center;">
                      <tr align="center" border="0" cellspacing="0" cellpadding="0">
                        <td>
                          <table>
                            <tr>
                              <td align="center" style="border-radius: 25px;" bgcolor="#ffffff">

                                <?php if($section->borde() == '0'): ?>
                                  <a href="#" target="_blank" style="font-size: 20px; font-family: 'roboto-bold', Helvetica, Arial, sans-serif;text-decoration: none; text-transform: uppercase; border-radius: 12px; padding: 10px 25px; display: inline-block; overflow: hidden; background-color: #<?= $section->color() ?>">
                                    <strong style="font-size: 20px; font-family: 'roboto-bold', Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; text-transform: uppercase;"><?= strtoupper($section->texto()) ?><strong>
                                    </a>
                                  <?php else: ?>
                                    <a href="#" target="_blank" style="font-size: 20px; font-family: 'roboto-bold', Helvetica, Arial, sans-serif;text-decoration: none; text-transform: uppercase; border-radius: 12px; padding: 10px 25px; display: inline-block; overflow: hidden; border: 2px solid #<?= $section->color() ?>">
                                      <strong style="font-size: 20px; font-family: 'roboto-bold', Helvetica, Arial, sans-serif; color: #<?= $section->color() ?>; text-decoration: none; text-transform: uppercase;"><?= strtoupper($section->texto()) ?><strong>
                                      </a>
                                    <?php endif; ?>

                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <!-- /boton  -->

                <?php elseif ($section->intendedTemplate()=='mail-imagen'): ?>
                  <!--  img -->
                  <tr>
                    <td align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; border-collapse: collapse;">
                      <img src="<?= $section->imagen() ?>" width="100%" border="0" height="auto" alt="Portada" style="display:block; border:none; outline:none; margin: 0px; height: auto;" />
                    </td>
                  </tr>
                  <!-- /img -->

                <?php elseif ($section->intendedTemplate()=='mail-linea'): ?>
                  <!-- linea -->
                  <tr bgcolor="#<?= $section->color() ?>" style="width:100%">
                    <td align="center" style="line-height: <?= $section->altura()?>px;">
                    </br>
                  </td>
                </tr>
                <!-- /linea -->
              <?php endif; ?>

            <?php endforeach ?>

          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

<?php snippet('footer-buttons')?>

<?= js('assets/js/jquery.min.js') ?>
<?= js('assets/js/copiarCodigo.js') ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<pre id="htmlCode" class="hidden m-t-4"><?php snippet('htmlMail') ?></pre>

</body>
</html>
