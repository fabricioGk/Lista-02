<html>
  <head>
    <title>Questão 1</title>
  </head>
  <body>
  <h3>Questão 1</h3>
  
  <?php
    $valor = $_GET['numero'];

    for($i = 1; $i <= $valor; $i++){
        echo "É possível repetir várias linhas no PHP. Esta linha foi repetida $i vezes</br>";
    }
  ?>
  </body>
</html>