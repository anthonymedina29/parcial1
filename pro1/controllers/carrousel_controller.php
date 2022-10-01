<?php
require_once("models/carrousel_model.php");


    class carrousel_controller{
        public static function Mostrar(){
            
          $carousel[]= new carrousel_model(1,"Imagen 1","TOYOTA PRADO","Imagenes//lcprado.jpg",
          "Toyota Land Cruiser Prado, Hermosa camioneta 4x4, 7 pasajeros, disponible en gasolina o diesel.");
          $carousel[]= new carrousel_model(2,"Imagen 2","TOYOTA TACOMA","Imagenes//tacoma.jpg",
          " Toyota Tacoma, si lo suyo es el off road esta es la mejor opción.");
          $carousel[]= new carrousel_model(3,"Imagen 3","TOYOTA SQUOIA","Imagenes//squoia.jpg",
          "Toyota Squoia, camioneta diseñada para todo tipo de situación.");
          $carousel[]= new carrousel_model(4,"Imagen 4","TOYOTA 4RUNNER","Imagenes//runner.jpg",
          "Toyota 4Runner, el camino off road corre por sus llantas.");
      
            return $carousel;
        }


    }

?>

