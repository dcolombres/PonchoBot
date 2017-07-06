&lt;html&gt;

&lt;head&gt;

  &lt;meta charset="utf-8"&gt;
  &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
  &lt;meta http-equiv="X-UA-Compatible" content="IE=edge" /&gt;

&lt;/head&gt;

&lt;body style="background-color: #f5f5f5;" bgcolor="#f5f5f5"&gt;
  &lt;table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;"&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;td align="center"&gt;
          &lt;table border="0" cellpadding="0" cellspacing="0" width="580"&gt;
            &lt;tbody&gt;

              &lt;!--  logoMin -->
              &lt;tr&gt;
                &lt;td align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding: 0px !important;"&gt;
                  &lt;img src="http://img.mailingproduccion.gob.ar/headermail.png" width="100%" border="0" height="auto" alt="Ministerio de produccion" style="display:block; border:none; outline:none; margin: 0px; height: auto;" /&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;!-- /logoMin -->

              &lt;!--  img -->
              &lt;tr&gt;
                &lt;td align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; border-collapse: collapse;"&gt;
                  &lt;img src="<?= $page->background() ?>" width="100%" border="0" height="auto" alt="Portada" style="display:block; border:none; outline:none; margin: 0px; height: auto;" /&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;!-- /img -->

              <?php foreach($page->children() as $section): ?>

                <?php if ($section->intendedTemplate()=='mail-columnas'):?>
                  &lt;tr bgcolor="<?= $section->bgcolor()?>"&gt;
                    &lt;td border="0" cellpadding="0" cellspacing="0" style="padding: 0px; border-collapse: collapse;"&gt;
                      &lt;table width="100%" style="border-collapse: collapse; padding: 0px !important"&gt;
                        &lt;tr&gt;
                          <?php foreach($section->children() as $columna): ?>
                            &lt;td align="center" width="145px" height="120px"&gt;
                              &lt;img src="<?= $columna->icono() ?>" border="0" alt="" style="border:none; outline:none; margin: 0px; height: auto;" /&gt;
                              &lt;p style="text-align: center !important;"&gt;
                                &lt;strong style="font-size:14px; color: #666666; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif !important;"&gt; <?= $columna->bajada() ?> &lt;/strong&gt;
                              &lt;/p&gt;
                            &lt;/td&gt;
                          <?php endforeach ?>
                        &lt;/tr&gt;
                      &lt;/table&gt;
                    &lt;/td&gt;
                  &lt;/tr&gt;

                <?php elseif ($section->intendedTemplate()=='mail-bajada'): ?>
                  &lt;tr bgcolor="<?= $section->bgColor() ?>"&gt;
                    &lt;td width="100%" height="140px"&gt;

                      &lt;!-- Bajada -->
                      <?php if($section->estilotexto()=='si'): ?>
                        <?php if($section->negrita() == '1'): ?>
                          &lt;p style="margin-bottom: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano()?>px; color: #ffffff !important;"&gt;
                            &lt;strong style="line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; <?= $section->tamano()?>px; color: <?= $section->colortxt() ?>; text-align: center !important;"&gt;
                              <?= $section->bajada() ?>
                            &lt;/strong&gt;
                          &lt;/p&gt;
                        <?php else: ?>
                          &lt;p style="margin-bottom: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $section->tamano()?>px; color: <?= $section->colortxt() ?>; text-align: center !important;"&gt;
                            <?= $section->bajada() ?>
                          &lt;/p&gt;
                        <?php endif; ?>
                      <?php else: ?>
                        &lt;p style="margin-bottom: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano()?>px; color: #ffffff !important;"&gt;
                          <?= $section->bajada() ?>
                        &lt;/p&gt;
                      <?php endif; ?>

                      &lt;!-- Linea de texto 2 -->
                      <?php if($section->mastexto()=='si'):?>
                        <?php if($section->estilo2()=='si'): ?>
                          <?php if($section->negrita2() == '1'): ?>
                            &lt;p style="margin-top: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano2()?>px; color: #ffffff !important;"&gt;
                              &lt;strong style="line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; <?= $section->tamano2()?>px; color: <?= $section->colortxt2() ?>; text-align: center !important;"&gt;
                                <?= $section->linea2() ?>
                              &lt;/strong&gt;
                            &lt;/p&gt;
                          <?php else: ?>
                            &lt;p style="margin-top: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $section->tamano2()?>px; color: <?= $section->colortxt2() ?>; text-align: center !important;"&gt;
                              <?= $section->linea2() ?>
                            &lt;/p&gt;
                          <?php endif; ?>
                        <?php else: ?>
                          &lt;p style="margin-top: 0px; margin-left: 70px; margin-right:70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano2()?>px; color: #ffffff !important;"&gt;
                            <?= $section->linea2() ?>
                          &lt;/p&gt;
                        <?php endif; ?>
                      <?php endif; ?>

                    &lt;/br&gt;
                  &lt;/td&gt;
                &lt;/tr&gt;

                &lt;!-- boton  -->
              <?php elseif ($section->intendedTemplate()=='mail-boton'): ?>

                &lt;tr border="0" cellpadding="0" cellspacing="0" style="width:100%; min-width:100%;"&gt;
                  &lt;td style="padding: 40px 30px 40px 30px; margin:0;" bgcolor="#fff"&gt;
                    &lt;table border="0" cellpadding="0" cellspacing="0" style="width:100%; min-width:100%;"&gt;
                      &lt;tbody align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align: center;"&gt;
                        &lt;tr align="center" border="0" cellspacing="0" cellpadding="0"&gt;
                          &lt;td&gt;
                            &lt;table&gt;
                              &lt;tr&gt;
                                &lt;td align="center"&gt;

                                  <?php if($section->borde() == '0'): ?>
                                  &lt;a href="#" target="_blank" style="font-size: 20px; font-family: 'roboto-bold', Helvetica, Arial, sans-serif;text-decoration: none; text-transform: uppercase; border-radius: 12px; padding: 10px 25px; display: inline-block; overflow: hidden; background-color: #<?= $section->color() ?>"&gt;
                                    &lt;strong style="font-size: 20px; font-family: 'roboto-bold', Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; text-transform: uppercase;"&gt;<?= strtoupper($section->texto()) ?>&lt;strong&gt;
                                  &lt;/a&gt;
                                  <?php else: ?>
                                  &lt;a href="#" target="_blank" style="font-size: 20px; font-family: 'roboto-bold', Helvetica, Arial, sans-serif;text-decoration: none; text-transform: uppercase; border-radius: 12px; padding: 10px 25px; display: inline-block; overflow: hidden; border: 2px solid #<?= $section->color() ?>"&gt;
                                    &lt;strong style="font-size: 20px; font-family: 'roboto-bold', Helvetica, Arial, sans-serif; color: #<?= $section->color() ?>; text-decoration: none; text-transform: uppercase;"&gt;<?= strtoupper($section->texto()) ?>&lt;strong&gt;
                                  &lt;/a&gt;
                                  <?php endif; ?>

                                  &lt;/td&gt;
                                &lt;/tr&gt;
                              &lt;/table&gt;
                            &lt;/td&gt;
                          &lt;/tr&gt;
                        &lt;/tbody&gt;
                      &lt;/table&gt;
                    &lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;!-- /boton  -->

                <?php elseif ($section->intendedTemplate()=='mail-linea'): ?>
                  &lt;!-- lineaCeleste -->
                  &lt;tr bgcolor="#<?= $section->color() ?>" style="width:100%"&gt;
                    &lt;td align="center" style="line-height: <?= $section->altura()?>px;"&gt;
                      &lt;/br&gt;
                    &lt;/td&gt;
                  &lt;/tr&gt;
                  &lt;!-- /lineaCeleste -->
                <?php endif; ?>

              <?php endforeach ?>

            &lt;/tbody&gt;
          &lt;/table&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/body&gt;

&lt;/html&gt;
