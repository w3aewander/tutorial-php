<?php
/**
 * Exercicio número 9
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

//Escreva uma função que receba uma data no formato "dd/mm/aaaa"
//e retorne ela no formato "aaaa-mm-dd".


echo "<h3>9 - Retornar o fatorial do número informado </h3>";
echo "Nome da função chamada:  fatorial | Parâmetro: número para calcular o fatorial";

//Fatorial de um número:
//Ex.:  5! =  5*4*3*2*1 = 120
//Ex.: 10! = 10*9*8*7*6*5*4*3*2*1 = 5040   

$numero = 10;
       
echo "<h4>Vetor enviado</h4>";

echo "\$numero = $numero"; 

$x = fatorial($numero);

echo "<hr>";
echo "Resultado: o fatorial do número informado é $x";
echo "<hr>";
