<?php session_start();

if (isset($_SESSION['usuario'])) {
  require './views/inicio.view.php';
} else {
  header('Location: ./views/login.view.php');
}
