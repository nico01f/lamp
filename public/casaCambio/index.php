<!doctype html>
<html>
<head>
  <title>Casa de cambio</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- load MUI -->
  <link href="//cdn.muicss.com/mui-0.6.0/css/mui.min.css" rel="stylesheet" type="text/css" />
  <script src="//cdn.muicss.com/mui-0.6.0/js/mui.min.js"></script>
</head>
<body>
  <div class="mui-container">
    <div class="mui-row">
      <div class="mui-col-md-6 mui-col-md-offset-3">

        <form action="controller.php" method="POST">
          <legend>Cambio de moneda</legend>
          <div class="mui-textfield">
            <input type="text" required name="cantidad" placeholder="Cantidad">
          </div>
          <div class="mui-select">
            <select name="monedas">
              <option value="peso">Peso chileno</option>
              <option value="dolar">Dolar</option>
              <option value="euro">Euro</option>
            </select>
          </div>
          <div class="mui-select">
            <select name="operaciones">
              <option value="compra">Comprar</option>
              <option value="venta">Vender</option>
            </select>
          </div>
          <button type="submit" class="mui-btn mui-btn--raised mui-btn--primary">Calcular</button>
        </form>


      </div>

    </div>
  </div>
</body>
</html>
