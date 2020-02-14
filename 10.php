<html>
  <head>
    <title>Questão 10</title>
  </head>
  <body>
  <h1>Questão 10</h1>
  <?php
  $soma = 0;
    do{
        $numero = rand(0,100);
        $soma += $numero;
        echo "$soma</br>";
    }while($soma < 1000);
    
  ?>
  </body>
</html>