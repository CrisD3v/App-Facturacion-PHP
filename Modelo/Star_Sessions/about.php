<?php
  session_start();
  require '../../Controlador/Conexion/conection.php';

  if (isset($_SESSION['user_id'])) {
    $records = $bd->prepare('SELECT Id, User, Pass FROM users WHERE Id = :IdUser');
    $records->bindParam(':IdUser', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>