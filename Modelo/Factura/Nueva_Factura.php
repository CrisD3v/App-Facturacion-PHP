<?php
	/*-------------------------
	Autor: Avanza Software
	---------------------------*/
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: ../../vista/php/login.php");
		exit;
        }
	$active_facturas="active";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";	
	$title="Nueva Factura | Simple Invoice";
	
	/* Connect To Database*/
	require_once ("../../Controlador/Conexion/conection.php");//Contiene las variables de configuracion para conectar a la base de datos
?>

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
                <h4><i class='glyphicon glyphicon-edit'></i> Nueva Factura</h4>
            </div>
            <div class="panel-body">
            <?php 
                include("./modal/registro_productos.php");
                include("./modal/registro_clientes.php");
                include("./modal/registro_productos.php");
            ?>
                <form class="form-horizontal" role="form" id="datos_factura">
                    <div class="form-group row">
                      <label for="nombre_cliente" class="col-md-1 control-label">Cliente</label>
                      <div class="col-md-3">
                          <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Selecciona un cliente" required>
                          <input id="id_cliente" type='hidden'>	
                      </div>
                      <label for="tel1" class="col-md-1 control-label">Teléfono</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control input-sm" id="tel1" placeholder="Teléfono" readonly>
                                </div>
                        <label for="mail" class="col-md-1 control-label">Email</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Email" readonly>
                                </div>
                     </div>
                            <div class="form-group row">
                                <label for="empresa" class="col-md-1 control-label">Vendedor</label>
                                <div class="col-md-3">
                                    <select class="form-control input-sm" id="id_vendedor">
                                        <?php
                                            $sql_vendedor=mysqli_query($con,"select * from users");
                                            while ($rw=mysqli_fetch_array($sql_vendedor)){
                                                $id_vendedor=$rw["user_id"];
                                                $nombre_vendedor=$rw["User"];
                                                if ($id_vendedor==$_SESSION['user_id']){
                                                    $selected="selected";
                                                } else {
                                                    $selected="";
                                                }
                                                ?>
                                                <option value="<?php echo $id_vendedor?>" <?php echo $selected;?>><?php echo $nombre_vendedor?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <label for="tel2" class="col-md-1 control-label">Fecha</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
                                </div>
                                <label for="email" class="col-md-1 control-label">Pago</label>
                                <div class="col-md-3">
                                    <select class='form-control input-sm' id="condiciones">
                                        <option value="1">Efectivo</option>
                                        <option value="2">Cheque</option>
                                        <option value="3">Transferencia bancaria</option>
                                        <option value="4">Crédito</option>
                                    </select>
                                </div>
                            </div>
                    
                    
                    <div class="col-md-12">
                        <div class="pull-right">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
                             <span class="glyphicon glyphicon-plus"></span> Nuevo producto
                            </button>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoCliente">
                             <span class="glyphicon glyphicon-user"></span> Nuevo cliente
                            </button>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                             <span class="glyphicon glyphicon-search"></span> Agregar productos
                            </button>
                            <button type="submit" class="btn btn-default">
                              <span class="glyphicon glyphicon-print"></span> Imprimir
                            </button>
                        </div>	
                    </div>
                </form>	
                
            <div id="resultados" class='col-md-12' style="margin-top:10px"></div><!-- Carga los datos ajax -->			
            </div>
        </div>		
              <div class="row-fluid">
                <div class="col-md-12">
                
        
    
                
                </div>	
             </div>
        </div>
       
    
        <script type="text/javascript" src="../../vista/js/VentanaCentrada.js"></script>
        <script type="text/javascript" src="../../vista/js/nueva_factura.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
            $(function() {
                            $("#nombre_cliente").autocomplete({
                                source: "./ajax/autocomplete/clientes.php",
                                minLength: 2,
                                select: function(event, ui) {
                                    event.preventDefault();
                                    $('#id_cliente').val(ui.item.id_cliente);
                                    $('#nombre_cliente').val(ui.item.nombre_cliente);
                                    $('#tel1').val(ui.item.telefono_cliente);
                                    $('#mail').val(ui.item.email_cliente);
                                                                    
                                    
                                 }
                            });
                             
                            
                        });
                        
        $("#nombre_cliente" ).on( "keydown", function( event ) {
                            if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
                            {
                                $("#id_cliente" ).val("");
                                $("#tel1" ).val("");
                                $("#mail" ).val("");
                                                
                            }
                            if (event.keyCode==$.ui.keyCode.DELETE){
                                $("#nombre_cliente" ).val("");
                                $("#id_cliente" ).val("");
                                $("#tel1" ).val("");
                                $("#mail" ).val("");
                            }
                });	
        </script>
    
    
</body>
</html>