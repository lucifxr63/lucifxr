<?php
if ($_POST) {
    header('Location: https://www.google.com');
      }
        else {

            print_r($_POST);
            $nombre = $_POST['nombre'];
            $sexo = $_POST['sexo'];
            $year = $_POST['year'];
            $terminos = $_POST['terminos'];
    
            echo 'hola, ' . $nombre . ' eres ' . $sexo; 
        }
?>