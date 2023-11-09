
<?php
class Factorial {
  private $numero;

  public function __construct($numero) {
    $this->numero = $numero;
  }

  public function cFactorial() {
    $factorial = 1;
    
    for ($i = 1; $i <= $this->numero; $i++) {
      $factorial *= $i;
    }
    return $factorial;
  }
}

$numero = 4;
$factorial = new Factorial($numero);
echo $numero . "! = " . $factorial->cFactorial();




