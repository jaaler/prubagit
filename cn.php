<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "12345";
   
  
          $pdo = new PDO("mysql:host=$servidor;dbname=examen", $usuario, $password);      
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
