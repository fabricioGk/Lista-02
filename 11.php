<html>
  <head>
    <title>Questão 11</title>
  </head>
  <body>
  <h1>Questão 11</h1>
  <table class="table" border="1px solid #ff0000">
        <tbody>
        <?php
            for($i = 0; $i < 10; $i++){
                echo"<tr>";
                for($c = 1; $c <= 5; $c++){
                    echo"<td>";
                    echo "Coluna".$c;
                    echo"</td>";
                }
                echo"<tr>";
            }
        ?>
        </tbody>       
      </table>
  </body>
</html>