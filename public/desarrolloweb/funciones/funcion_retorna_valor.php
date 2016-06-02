<html>

<head>
  <title>Ejemplo de calculo</title>
</head>
<body>
  <?php
  function iva($base){
    return $base * 1.19;
  }

  echo iva(1000). "<br />";
  echo iva(2300). "<br />";
   ?>
</body>

</html>
