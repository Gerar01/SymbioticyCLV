<?php
//Se implementa cod de pag
session_start();
$varsession= $_SESSION['email'];
if($varsession== null || $varsession=''){
  echo "Sin privilegio";
  die();
}
?> 