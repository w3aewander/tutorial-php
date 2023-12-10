<?php
/**
 * Exercicio número 5
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

//Escreva uma função que receba uma data no formato "dd/mm/aaaa"
//e retorne ela no formato "aaaa-mm-dd".


echo "<h3>8 - Retornar o maior número em um vetor </h3>";
echo "Nome da função chamada:  retornaOMaiorNumeroNoVetor | Parâmetro: vetor contendo os números";

$v = [150, 340,3800, 225,32,0];
       
echo "<h4>Vetor enviado</h4>";

echo "\$v = [ ";
for($i=0;$i<=count($v) -1;$i++){
   echo "$v[$i]";
   if($i != count($v) -1){
     echo ', ';
   }
}
echo " ]";

$x = retornaOMaiorNumeroNoVetor($v);

echo "<hr>";
echo "Resultado: o maior número no vetor é $x";
echo "<hr>";
