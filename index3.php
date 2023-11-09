<?php

class ArrayNum{

    private $numeros;

    public function __construct($numeros){
        $this->numeros = $numeros;

    }

    public function pares(){
        $suma = 0;
        foreach ($this->numeros as $numero) {
            if ($numero % 2== 0) {
                $suma += $numero;
            }
           
        }
       return $suma;
    }

     public function impares(){
        $suma = 0;
        foreach ($this->numeros as $numero) {
            if ($numero % 2!= 0) {
                $suma += $numero;
            }
           
        }
       return $suma;
    }

}
         $numeros = array(1,2,3,4,5,6,7);
         $resultado = new ArrayNum($numeros);
         echo "lA SUMA DE LOS PARES ES: ".$resultado->pares().PHP_EOL;
         echo "lA SUMA DE LOS IMPARES ES: ". $resultado->impares();

?>   