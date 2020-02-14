<html>
  <head>
    <title>Questão 13</title>
  </head>
  <body>
  <h3>Questão 13</h3>
  <?php

  $soma=0;
    for($i = 0; $i < 10000; $i++){
        if($i%7== 0){
            $soma= $i + $soma ;
            
        }

    }
    echo $soma;

  ?>
  </body>
</html>