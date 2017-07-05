<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

</head>

<body style="background-color: #f5f5f5;" bgcolor="#f5f5f5">
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;">
    <tbody>
      <tr>
        <td align="center">
          <table border="0" cellpadding="0" cellspacing="0" width="580">
            <tbody>

              <!--  logoMin -->
              <tr>
                <td align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding: 0px !important;">
                  <img src="http://img.mailingproduccion.gob.ar/headermail.png" width="100%" border="0" height="auto" alt="Ministerio de produccion" style="display:block; border:none; outline:none; margin: 0px; height: auto;" />
                </td>
              </tr>
              <!-- /logoMin -->

              <!--  img -->
              <tr>
                <td align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; border-collapse: collapse;">
                  <img src="<?= $page->background() ?>" width="100%" border="0" height="auto" alt="Portada" style="display:block; border:none; outline:none; margin: 0px; height: auto;" />
                </td>
              </tr>
              <!-- /img -->

              <?php foreach($page->children() as $section): ?>

                <?php if ($section->intendedTemplate()=='mail-columnas'):?>
                  <tr bgcolor="<?= $section->bgcolor()?>">
                    <td border="0" cellpadding="0" cellspacing="0" style="padding: 0px; border-collapse: collapse;">
                      <table width="100%" style="border-collapse: collapse; padding: 0px !important">
                        <tr>
                          <?php foreach($section->children() as $columna): ?>
                            <td align="center" width="145px" height="120px">
                              <img src="<?= $columna->icono() ?>" border="0" alt="" style="border:none; outline:none; margin: 0px; height: auto;" />
                              <p style="text-align: center !important;">
                                <strong style="font-size:14px; color: #666666; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif !important;"> <?= $columna->bajada() ?> </strong>
                              </p>
                            </td>
                          <?php endforeach ?>
                        </tr>
                      </table>
                    </td>
                  </tr>

                <?php elseif ($section->intendedTemplate()=='mail-bajada'): ?>
                  <tr bgcolor="<?= $section->bgColor() ?>">
                    <td width="100%" height="140px">

                      <!-- Bajada -->
                      <?php if($section->estilotexto()=='si'): ?>
                        <?php if($section->negrita() == '1'): ?>
                          <p style="margin-bottom: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano()?>px; color: #ffffff !important;">
                            <strong style="line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; <?= $section->tamano()?>px; color: <?= $section->colortxt() ?>; text-align: center !important;">
                              <?= $section->bajada() ?>
                            </strong>
                          </p>
                        <?php else: ?>
                          <p style="margin-bottom: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $section->tamano()?>px; color: <?= $section->colortxt() ?>; text-align: center !important;">
                            <?= $section->bajada() ?>
                          </p>
                        <?php endif; ?>
                      <?php else: ?>
                        <p style="margin-bottom: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano()?>px; color: #ffffff !important;">
                          <?= $section->bajada() ?>
                        </p>
                      <?php endif; ?>

                      <!-- Linea de texto 2 -->
                      <?php if($section->mastexto()=='si'):?>
                        <?php if($section->estilo2()=='si'): ?>
                          <?php if($section->negrita2() == '1'): ?>
                            <p style="margin-top: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano2()?>px; color: #ffffff !important;">
                              <strong style="line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; <?= $section->tamano2()?>px; color: <?= $section->colortxt2() ?>; text-align: center !important;">
                                <?= $section->linea2() ?>
                              </strong>
                            </p>
                          <?php else: ?>
                            <p style="margin-top: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $section->tamano2()?>px; color: <?= $section->colortxt2() ?>; text-align: center !important;">
                              <?= $section->linea2() ?>
                            </p>
                          <?php endif; ?>
                        <?php else: ?>
                          <p style="margin-top: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano2()?>px; color: #ffffff !important;">
                            <?= $section->linea2() ?>
                          </p>
                        <?php endif; ?>
                      <?php endif; ?>

                    </br>
                    </td>
                  </tr>
                <?php endif; ?>
              <?php endforeach ?>


            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>
