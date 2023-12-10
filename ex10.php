<?php
/**
 * Exercicio número 9
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

//Escreva uma função que receba uma data no formato "dd/mm/aaaa"
//e retorne ela no formato "aaaa-mm-dd".


echo "<h3>10 - Retornar o a mediana de um vetor de numeros </h3>";
echo "Nome da função chamada:  mediano | Parâmetro: vetor para calcular a mediana";

//Exemplo:
// a media de um vetor é o número que está no meio dos elementos do vetor.
// $v = [ 10,9,8,7,3,5,3,8];

$v = [120,45,56,32,1500,150,220,4];
       
echo "<h4>Vetor enviado</h4>";
       
echo "\$v = [ ";
for($i=0;$i<=count($v) -1;$i++){
   echo "$v[$i]";
   if($i != count($v) -1){
     echo ', ';
   }
}
echo " ]"; 

$x = medianaVetor($v);

echo "<hr>";
echo "Resultado: a mediana do veitor informado é $x";
echo "<hr>";
