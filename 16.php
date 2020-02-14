<html>
  <head>
    <title>Questão 16</title>
  </head>
  <body>
  <h3>Questão 16</h3>
  <p>
    <font size="3" color="aa0050" face="Verdana">
    Informe o numero que deseja na URL<br>com o nome da variavel numero
    </font>
  </p>
    <?php
        for($i = 1; $i <= 10; $i++){
            $number = $_GET["numero"];
            $define = $number;
            $number = $number * $i;
            echo "$define x $i = $number<br>";
        }

    ?>
  </body>
</html>