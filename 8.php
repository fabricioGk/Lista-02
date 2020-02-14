<html>
  <head>
    <title>Questão 8</title>
  </head>
  <body>
  <h1>Questão 8</h1>
  <?php
    $cont = 0;
    $soma = 0;
    $valor = $_GET['numero'];

    do{
        $soma += $cont;
        $cont ++;
    }while($cont <= $valor);
    echo $soma;
    
  ?>
  </body>
</html>