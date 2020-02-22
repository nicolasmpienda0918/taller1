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
$imc=($altura*$altura)/2;

if($imc<= 18.4)
{
echo("<br> IMC =$imc.Insuficiencia de peso");
}


?>