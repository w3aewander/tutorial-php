<?php
/**
 * Exercicio número 1
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

       echo "<h3>3 - Soma dos valores dos elementos de um vetor</h3>";
       echo "Nome da função chamada: somarValoresVetor | Parâmetro: vetor com os números";

       $v = [1,2,3,4,5,6,7,8,9,10];
       echo "<h4>Vetor enviado</h4>";
       
       echo "\$v = [ ";
       for($i=0;$i<=count($v) -1;$i++){
          echo "$v[$i]";
          if($i != count($v) -1){
            echo ',';
          }
       }
       echo " ]";

       $x = somarValoresVetor($v);

       echo "<hr>";
       echo "Resultado: $x";
       echo "<hr>";
       echo "Dica: você também pode fazer com a função array_sum() do PHP &#128521;";
?>