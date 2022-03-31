<?php  
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
?>
    <div class="alert alert-danger" role="alert">
     <strong>Error!</strong> Usuario Y/o Contraseña Incorrectos.
    </div>
<?php
    }
?>