<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//cdn.muicss.com/mui-0.6.0/css/mui.min.css" rel="stylesheet" type="text/css" />
  <script src="//cdn.muicss.com/mui-0.6.0/js/mui.min.js"></script>
  <style>
  body {
    background-color: #191919;
  }
  </style>

</head>
<body>
  <div class="mui-container">
    <div class="mui-panel">
      <?php
      $resultado = $_GET['resul'];
      echo "<h2>Total cambio: $ $resultado</h2>";
      ?>
      <a href="index.php">Inicio</a>
    </div>
  </div>
</body>
</html>
