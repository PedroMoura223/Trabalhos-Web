<?php 

session_start();
unset($_SESSION['usuario']);
unset($_SESSION['conta']);

header('location:../index.php');

 ?>