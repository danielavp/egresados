<?php
require_once('controllers/db/connection.php');
if (isset($_GET['controller']) && isset($_GET['action'])) {

  $controller = $_GET['controller'];
  $action = $_GET['action'];
} else {

  $controller = 'usuario';
  $action = 'index';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!--        -->
  <!--  META  -->
  <!--        -->
  <meta charset="utf-8">
  <meta name="Login" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <!--         -->
  <!--  TITLE  -->
  <!--         -->
  <title>Login</title>

  <!--       -->
  <!--  CSS  -->
  <!--       -->
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>

<?php
require_once('views/inicio-sesion.php');
?>