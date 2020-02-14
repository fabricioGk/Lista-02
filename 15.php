<html>
  <head>
    <title>Questão 15</title>
  </head>
  <body>
  <h1>Questão 15</h1>
  <table class="table" border="2px solid #000">
        <tbody>
        <?php
            $lin = $_GET["linhas"];
            $Col = $_GET["colunas"];
            for($i = 0; $i < $lin; $i++){
                echo"<tr>";
                for($c = 1; $c <= $Col; $c++){
                    echo"<td>";
                    echo "column";
                    echo"</td>";
                }
                echo"<tr>";
            }
        ?>
        </tbody>       
      </table>
  </body>
</html>