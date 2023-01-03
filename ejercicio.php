<?php

//Ejercicio para ver el numero, descomponerlo y realizar operaciones con sus digitos

function descomponer(int $num){
    $largo = strlen($num);
    $posx = str_split($num);
    $impares = 0;
    $pares = 0;

    for ($i=0; $i<=($largo-1); $i++){
        if ($i%2){
            $pares = $pares + $posx[$i];
        } else {
            $impares = $impares + $posx[$i];
        }
    }
    echo "El digito introducido fue: ".$num."<br>";
    echo "La suma de los digitos en las posiciones pares es de: ".$pares."<br>";
    echo "La suma de los digitos en las posiciones impares es de: ".$impares."<br>";
}

descomponer(33215); 
echo "<br>";
descomponer(8566321542535); 

?>