<?php

class Calculadora {

	public static function somar($n1,$n2){
		return $n1+$n2;
	}

	public static function subtrair($n1,$n2){
		return $n1-$n2;
	}	

	public static function multiplicar($n1,$n2){
		return $n1*$n2;
	}	

	public static function dividir($n1,$n2){
		return $n1/$n2;
	}		

    public static function bhaskara($a, $b, $c){
        $delta = $b * $b - 4 * $a * $c;

        if ($delta < 0) {
            return "Não há raízes reais para esta equação.";
        } else if ($delta == 0) {
            $x = (-$b + sqrt($delta)) / (2 * $a);
            return "Há uma raiz real para esta equação: x = $x";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "Há duas raízes reais para esta equação: x1 = $x1 e x2 = $x2";
        }
    }	
}

?>