<?php
require_once("models/toyo_model.php");

class toyo_controller{
    public static function Mostrar(){
   
      $autos[] = new toyo_model(1,"Land Cruiser Prado",rand(0,20),"Negro, Blanco, Azul");

      
     $autos[] = new toyo_model(2,"Tacoma",rand(0,20),"Negro, Blanco");

       
      $autos[] = new toyo_model(3,"4Runner",rand(0,20),"Gris, Azul");

     
      $autos[] = new toyo_model(4,"Squoia",rand(0,20),"Azul, Negro");

        return $autos;
    }
}
?>



