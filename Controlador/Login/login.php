<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /Vista/php/login.php');
  }
  require '../Conexion/conection.php';

  if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    $records = $bd->prepare('SELECT Id, Email, Pass FROM users WHERE Email = :Email');
    $records->bindParam(':Email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    // print_r($records);
    // print_r($results);
    // $message = '';

    if (!empty($results) && count($results) > 0 && password_verify($_POST['pass'], $results['Pass'])) {
      $_SESSION['user_id'] = $results['Id'];
      header("Location: ../../index.php");
    } else {
      header('location: ../../Vista/php/login.php?mensaje=error');
    }
  }
  
?>