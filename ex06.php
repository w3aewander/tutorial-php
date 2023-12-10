<?php
/**
 * Exercicio número 6
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

 //Crie uma função que receba um array de números e retorne a média aritméca deles. 


echo "<h3>6 - Retornar a média aritimética de array de números. </h3>";
echo "Nome da função chamada: retornaMediaAritimetica | Parâmetro: vetor contendo os números";

$v = [10,10,10,10,5];
       
echo "<h4>Vetor enviado</h4>";

echo "\$v = [ ";
for($i=0;$i<=count($v) -1;$i++){
   echo "$v[$i]";
   if($i != count($v) -1){
     echo ',';
   }
}
echo " ]";

$res = retornarMediaAritmetica($v);

echo "<hr>";
echo "Resultado: a média aritmética é $res";
echo "<hr>";


