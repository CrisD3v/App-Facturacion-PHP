<?php  
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'equal') {
?>
    <div class="alert alert-warning" role="alert">
     <strong>Error!</strong> Las dos contraseñas no son iguales.
    </div>
<?php
    }
?>

<?php  
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'Registrado') {
?>
    <div class="alert alert-success" role="alert">
     <strong>Regitrado!</strong> Se ha registrado exitrosamente.
    </div>
<?php
    }
?>

<?php  
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
?>
    <div class="alert alert-danger" role="alert">
     <strong>Error!</strong> Hubo un error, Por favor intentelo de nuevo.
    </div>
<?php
    }
?>

<?php  
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'exist') {
?>
    <div class="alert alert-info" role="alert">
     <strong>Error!</strong> Usuario Y/o Email Existente, Intentelo de nuevo.
    </div>
<?php
    }
?>