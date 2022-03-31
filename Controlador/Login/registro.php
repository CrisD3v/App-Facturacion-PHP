<?php

require '../Conexion/conection.php';

$sentencia = $bd -> query('select * from users');
$sesion = $sentencia -> fetchAll(PDO::FETCH_OBJ);

if ($_POST['pass'] != $_POST['passR']) {
  header('location: ../../vista/php/register.php?mensaje=equal');
}else{
  foreach ($sesion as $user){
    if ($_POST['email'] == $user -> Email || $_POST['user'] == $user -> User) {
      header('location: ../../vista/php/register.php?mensaje=exist');
    }else{
        if (!empty($_POST['email']) && !empty($_POST['pass'])) {
          $sql = "INSERT INTO users (Email, User, Pass) VALUES (:Email, :User, :Pass)";
          $stmt = $bd->prepare($sql);
          $stmt->bindParam(':Email', $_POST['email']);
          $stmt->bindParam(':User', $_POST['user']);
          $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
          $stmt->bindParam(':Pass', $password);
        
          
            if ($stmt->execute()) {
              header('location: ../../vista/php/register.php?mensaje=Registrado');
            } else {
              header('location: ../../vista/php/register.php?mensaje=error');
            }
    }
  }
  }
}



  


?>