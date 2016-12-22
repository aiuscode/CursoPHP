<!DOCTYPE html>
<html lang="pt-br">
         <head>
                  <meta charset="UTF-8">
                  <title></title>
         </head>
         <body>
                  <?php
                  if (phpversion() >= 5.4):
                      echo phpversion() . 'Olá Mundo, podemos programar';
                  else:
                      echo phpversion() . 'Olá mundo, preciso atualizar o PHP';
                  endif;
                  echo "<hr>"; //comnado para pular linha
//                  echo phpinfo();
                  date_default_timezone_set("UTC");
                  echo date_default_timezone_get();
                  echo date('d/m/Y H:i:s');
                  ?>
         </body>
</html>