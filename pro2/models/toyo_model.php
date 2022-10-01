<?php

Class toyo_model {
    private $id;
    private $auto;
    private $cant;
    private $color;
   
      public function __construct($id,$auto,$cant,$color){
        $this->id=$id;
        $this->auto = $auto;
        $this->cant = $cant;
        $this->color = $color;
      
    }
    public function setid($id){
        $this->id= $id;
    }
    public function setauto($auto){
        $this->auto= $auto;
    }

    public function setcant($cant){
        $this->cant = $cant;
    }

    public function setcolor($color){
        $this->color = $color;
    }

   
    public function getid(){
        return $this->id;
    }


    public function getauto(){
        return $this->auto;
    }

    public function getcant(){
        return $this->cant;
    }

    public function getcolor(){
        return $this->color;
    }
}

?>