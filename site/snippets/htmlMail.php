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
            &lt;!-- Iteracion de secciones para armado de cada una --&gt;
            <?php foreach($page->children() as $section): ?>

              <?php if ($section->intendedTemplate()=='mail-columnas'):?>
                &lt;tr bgcolor="<?= $section->bgcolor()?>"&gt;
                  &lt;td border="0" cellpadding="0" cellspacing="0" style="padding: 0px; border-collapse: collapse;"&gt;
                    &lt;table width="100%" style="border-collapse: collapse; padding: 0px !important"&gt;
                      &lt;tr&gt;
                        <?php foreach($section->children() as $columna): ?>

                          <?php if ($columna->intendedTemplate()=='mcolumna-icono-texto'):?>
                            &lt;td align="center" width="145px" height="<?= $section->alto()?>"&gt;
                              &lt;img src="<?= $columna->icono() ?>" border="0" alt="" style="border:none; outline:none; margin: 0px; height: auto;" /&gt;
                              &lt;p style="text-align: center !important;"&gt;
                                &lt;strong style="font-size:14px; color: #666666; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif !important;"&gt; <?= $columna->bajada() ?> &lt;/strong&gt;
                              &lt;/p&gt;
                            &lt;/td&gt;

                          <?php elseif ($columna->intendedTemplate()=='mcolumna-imagen'):?>
                            &lt;td align="center" width="<?= $columna->ancho() ?>" height="<?= $section->alto()?>"&gt;
                              &lt;img src="<?= $columna->imagen() ?>" border="0" alt="" style="border:none; outline:none; margin: 0px; height: auto;" /&gt;
                            &lt;/td&gt;

                          <?php elseif ($columna->intendedTemplate()=='mcolumna-texto'):?>

                            <?php if($columna->alineacion() =='i'):?>
                              <?php $alineacion = "left" ?>
                            <?php elseif($columna->alineacion()=='d'):?>
                              <?php $alineacion = "right" ?>
                            <?php else:?>
                              <?php $alineacion = "center" ?>
                            <?php endif ?>

                            &lt;td align="center" width="<?= $columna->ancho() ?>" height="<?= $section->alto()?>"&gt;
                              <?php if($columna->estilotexto()=='si'): ?>
                                <?php if($columna->negrita() == '1'): ?>
                                  &lt;p style="text-align: <?= $alineacion ?>; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $columna->tamano()?>px;"&gt;
                                    &lt;strong style="text-align: <?= $alineacion ?>; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $columna->tamano()?>px;; color: #<?= $columna->colortxt() ?>;"&gt;
                                      <?= $columna->linea1() ?>
                                    &lt;/strong&gt;
                                  &lt;/p&gt;
                                <?php else: ?>
                                  &lt;p style="text-align: <?= $alineacion ?>; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $columna->tamano()?>px; color: #<?= $columna->colortxt() ?>;"&gt;
                                    <?= $columna->linea1() ?>
                                  &lt;/p&gt;
                                <?php endif; ?>
                              <?php else: ?>
                                &lt;p style="text-align: <?= $alineacion ?>; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $columna->tamano()?>px; color: #<?= $columna->colortxt() ?>;"&gt;
                                  <?= $columna->linea1() ?>
                                &lt;/p&gt;
                              <?php endif; ?>
                            &lt;/td&gt;
                          <?php endif?>
                        <?php endforeach ?>
                      &lt;/tr&gt;
                    &lt;/table&gt;
                  &lt;/td&gt;
                &lt;/tr&gt;
              <?php elseif ($section->intendedTemplate()=='mail-lista'): ?>
                &lt;!-- Lista --&gt;
                &lt;tr bgcolor="<?= $section->bgcolor() ?>"&gt;
                  &lt;td width="100%"&gt;
                    &lt;p style="margin: 40px 70px 40px 70px; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; text-align: center !important; font-size:14; color: #666666 !important;"&gt;

                      <?php foreach($section->children() as $item): ?>

                        <?php if($item->estilotexto()=='si'): ?>
                          <?php if($item->negrita() == '1'): ?>
                            &lt;strong style="line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px; color: #<?= $item->colortxt() ?>;"&gt;
                              &lt;strong style="color: #<?= $section->coloritem() ?>; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px;"&gt;»&lt;/strong&gt;
                              <?= $item->linea1() ?>
                            &lt;/strong&gt;
                          &lt;/br&gt;
                          <?php else: ?>
                            &lt;strong style="font-weight: normal; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px; color: #<?= $item->colortxt() ?>;"&gt;
                              &lt;strong style="color: #<?= $section->coloritem() ?>; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px;"&gt;»&lt;/strong&gt;
                              <?= $item->linea1() ?>
                            &lt;/strong&gt;
                          &lt;/br&gt;
                          <?php endif; ?>
                        <?php else: ?>
                          &lt;strong style="font-weight: normal; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px; color: #666666;"&gt;
                            &lt;strong style="color: #<?= $section->coloritem() ?>; line-height: 1.8 !important; font-family: 'roboto', Helvetica, Arial, sans-serif !important; font-size:<?= $item->tamano()?>px;"&gt;»&lt;/strong&gt;
                            <?= $item->linea1() ?>
                          &lt;/strong&gt;
                        &lt;/br&gt;
                        <?php endif; ?>


                    <?php endforeach ?>

                  &lt;/p&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
            <?php elseif ($section->intendedTemplate()=='mail-texto'): ?>
              &lt;tr bgcolor="<?= $section->bgColor() ?>"&gt;
                &lt;td width="100%"&gt;

                  &lt;!-- Texto --&gt;
                  <?php if($section->estilotexto()=='si'): ?>
                    <?php if($section->negrita() == '1'): ?>
                      &lt;p style="margin: 40px 70px 0px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center;"&gt;
                        &lt;strong style="line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $section->tamano()?>px; color: #<?= $section->colortxt() ?>; text-align: center !important;"&gt;
                          <?= $section->linea1() ?>
                        &lt;/strong&gt;
                      &lt;/p&gt;
                    <?php else: ?>
                      &lt;p style="margin: 40px 70px 0px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $section->tamano()?>px; color: #<?= $section->colortxt() ?>; text-align: center !important;"&gt;
                        <?= $section->linea1() ?>
                      &lt;/p&gt;
                    <?php endif; ?>
                  <?php else: ?>
                    &lt;p style="margin: 40px 70px 0px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano()?>px; color: #ffffff !important;"&gt;
                      <?= $section->linea1() ?>
                    &lt;/p&gt;
                  <?php endif; ?>

                  &lt;!-- Linea de texto 2 --&gt;
                  <?php if($section->mastexto()=='si'):?>
                    <?php if($section->estilo2()=='si'): ?>
                      <?php if($section->negrita2() == '1'): ?>
                        &lt;p style="margin: 0px 70px 40px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano2()?>px; color: #ffffff !important;"&gt;
                          &lt;strong style="line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; <?= $section->tamano2()?>px; color: #<?= $section->colortxt2() ?>; text-align: center !important;"&gt;
                            <?= $section->linea2() ?>
                          &lt;/strong&gt;
                        &lt;/p&gt;
                      <?php else: ?>
                        &lt;p style="margin: 0px 70px 40px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; font-size:<?= $section->tamano2()?>px; color: #<?= $section->colortxt2() ?>; text-align: center !important;"&gt;
                          <?= $section->linea2() ?>
                        &lt;/p&gt;
                      <?php endif; ?>
                    <?php else: ?>
                      &lt;p style="margin: 0px 70px 40px 70px; line-height: 1.4; font-family: 'roboto', Helvetica, Arial, sans-serif; text-align: center; font-size:<?= $section->tamano2()?>px; color: #ffffff !important;"&gt;
                        <?= $section->linea2() ?>
                      &lt;/p&gt;
                    <?php endif; ?>
                  <?php else: ?>
                  &lt;/br&gt;
                  <?php endif; ?>

              &lt;/td&gt;
            &lt;/tr&gt;

          <?php elseif ($section->intendedTemplate()=='mail-boton'): ?>
            &lt;!-- boton  --&gt;
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
                &lt;!-- /boton  --&gt;

              <?php elseif ($section->intendedTemplate()=='mail-imagen'): ?>
                &lt;!--  img --&gt;
                &lt;tr&gt;
                  &lt;td align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0px; border-collapse: collapse;"&gt;
                    &lt;img src="<?= $section->imagen() ?>" width="100%" border="0" height="auto" alt="Portada" style="display:block; border:none; outline:none; margin: 0px; height: auto;" /&gt;
                  &lt;/td&gt;
                &lt;/tr&gt;
                &lt;!-- /img --&gt;

              <?php elseif ($section->intendedTemplate()=='mail-linea'): ?>
                &lt;!-- linea --&gt;
                &lt;tr bgcolor="#<?= $section->color() ?>" style="width:100%"&gt;
                  &lt;td align="center" style="line-height: <?= $section->altura()?>px;"&gt;
                  &lt;/br&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;!-- /linea --&gt;
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
