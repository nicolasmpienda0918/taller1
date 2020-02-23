<?php

//Ejercicio1 

echo ("TALLER 1 GENERALIDADES PHP Elaboraado por Nicolas Meola <br><br>");
echo ("Ejercicio 1 <br>");
$numero1=25;
$numero2=18;

$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$divicion=$numero1/$numero2;

echo("<br>La suma de:".$numero1."+".$numero2."=".$suma);
echo("<br>La resta de:".$numero1."-".$numero2."=".$resta);
echo("<br>La multiplicacion de:".$numero1."*".$numero2."=".$multiplicacion);
echo("<br>La divicion de:".$numero1."/".$numero2."=".$divicion);

echo ("<br><br>Ejercicio 2 <br>");
$altura=1.78;
$peso=85;
$imc=$peso/($altura*$altura);

echo("Señor Usuario su Estatura es de :".$altura."m y su peso es de:".$peso."kg");



if($imc<= 18.4)
{
echo("<br>  Su indice de masa corporal es de.$imc por lo tanto tienes insuficiencia de peso");
}

elseif(25<=$imc || 29.9 <= $imc ){
    echo("<br>  Su indice de masa corporal es de $imc por lo tanto tienes sobrepeso");  
}
elseif(18.5<=$imc || 24.9 <= $imc ){
    echo("<br>  Su indice de masa corporal es de$imc por lo tanto su Peso Normal"); 
}
  
   
?>