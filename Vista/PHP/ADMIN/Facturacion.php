<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOSTRAP & CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/Vista/CSS/mod.css">
    <link rel="stylesheet" href="/Vista/CSS/custom2.css">
    <title>Document</title>
</head>
<body>
        <!--NAVBAR-->
        <ul class="nav nav-tabs">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#">Facturación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-info" href="#">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-info" href="#">Proveedores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-info" href="#">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-info" href="#">Registro de Ventas</a>
              </li>
            <li class="nav-item">
                <a class="nav-link link-info" href="#">Ganancias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-info" href="#">Configuracion</a>
            </li>
          </ul>
        <!--END NAVBAR-->
        <br>

        <div class="container">
          <div class="panel panel-info">
          <div class="panel-heading">
              <div class="btn-group pull-right">
              <a  href="../../../Modelo/Factura/Nueva_Factura.php" class="btn btn-info"><span class="glyphicon glyphicon-plus" ></span> Nueva Factura</a>
            </div>
            <h4><i class='glyphicon glyphicon-search'></i> Buscar Facturas</h4>
          </div>
            <div class="panel-body">
              <form class="form-horizontal" role="form" id="datos_cotizacion">
              
                  <div class="form-group row">
                    <label for="q" class="col-md-2 control-label">Cliente o # de factura</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control" id="q" placeholder="Nombre del cliente o # de factura" onkeyup='load(1);'>
                    </div>
                    
                    
                    
                    <div class="col-md-3">
                      <button type="button" class="btn btn-default" onclick='load(1);'>
                        <span class="glyphicon glyphicon-search" ></span> Buscar</button>
                      <span id="loader"></span>
                    </div>
                    
                  </div>
              
              
              
            </form>
              <div id="resultados"></div><!-- Carga los datos ajax -->
              <div class='outer_div'></div><!-- Carga los datos ajax -->
            </div>
          </div>	
          
        </div>
        
        <script type="text/javascript" src="js/VentanaCentrada.js"></script>
        <script type="text/javascript" src="js/facturas.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>