<html>
<head>
  <title>funcion practica</title>
</head>

<body>
  <?php
  function escribe_separado($cadena){
    for ($i=0;$i<strlen($cadena);$i++){
      echo $cadena[$i];
      if ($i<strlen($cadena)-1)
        echo "-";
    }
  }
  escribe_separado("hola");
  echo "<p>";
  escribe_separado("una cadena mas larga");
   ?>
</body>
</html>
