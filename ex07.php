<?php
/**
 * Exercicio número 7
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */


//Escreva uma função que receba uma string 
//como parâmetro e retorne a mesma string 
//com todas as letras maiúsculas. 

echo "<h3>7 - Retornar o texto em letras maiúsculas. </h3>";
echo "Nome da função chamada: converterTextoEmLetrasMaiusculas | Parâmetro: texto";

$texto ="Eu amo programar em php";
       
echo "<h4>Texto enviado</h4>";

echo "\$texto = $texto";

$res = converterTextoEmLetrasMaiusculas($texto);

echo "<hr>";
echo "Resultado: o texto convertido para letras maiúsculas é $res";
echo "<hr>";